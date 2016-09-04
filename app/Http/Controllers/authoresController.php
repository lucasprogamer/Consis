<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateauthoresRequest;
use App\Http\Requests\UpdateauthoresRequest;
use App\Repositories\authoresRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class authoresController extends InfyOmBaseController
{
    /** @var  authoresRepository */
    private $authoresRepository;

    public function __construct(authoresRepository $authoresRepo)
    {
        $this->authoresRepository = $authoresRepo;
    }

    /**
     * Display a listing of the authores.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->authoresRepository->pushCriteria(new RequestCriteria($request));
        $authores = $this->authoresRepository->all();

        return view('authores.index')
            ->with('authores', $authores);
    }

    /**
     * Show the form for creating a new authores.
     *
     * @return Response
     */
    public function create()
    {
        return view('authores.create');
    }

    /**
     * Store a newly created authores in storage.
     *
     * @param CreateauthoresRequest $request
     *
     * @return Response
     */
    public function store(CreateauthoresRequest $request)
    {
        $input = $request->all();

        $authores = $this->authoresRepository->create($input);

        Flash::success('authores saved successfully.');

        return redirect(route('authores.index'));
    }

    /**
     * Display the specified authores.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $authores = $this->authoresRepository->findWithoutFail($id);

        if (empty($authores)) {
            Flash::error('authores not found');

            return redirect(route('authores.index'));
        }

        return view('authores.show')->with('authores', $authores);
    }

    /**
     * Show the form for editing the specified authores.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $authores = $this->authoresRepository->findWithoutFail($id);

        if (empty($authores)) {
            Flash::error('authores not found');

            return redirect(route('authores.index'));
        }

        return view('authores.edit')->with('authores', $authores);
    }

    /**
     * Update the specified authores in storage.
     *
     * @param  int              $id
     * @param UpdateauthoresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateauthoresRequest $request)
    {
        $authores = $this->authoresRepository->findWithoutFail($id);

        if (empty($authores)) {
            Flash::error('authores not found');

            return redirect(route('authores.index'));
        }

        $authores = $this->authoresRepository->update($request->all(), $id);

        Flash::success('authores updated successfully.');

        return redirect(route('authores.index'));
    }

    /**
     * Remove the specified authores from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $authores = $this->authoresRepository->findWithoutFail($id);

        if (empty($authores)) {
            Flash::error('authores not found');

            return redirect(route('authores.index'));
        }

        $this->authoresRepository->delete($id);

        Flash::success('authores deleted successfully.');

        return redirect(route('authores.index'));
    }
}
