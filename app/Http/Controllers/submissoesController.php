<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatesubmissoesRequest;
use App\Http\Requests\UpdatesubmissoesRequest;
use App\Repositories\submissoesRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class submissoesController extends InfyOmBaseController
{
    /** @var  submissoesRepository */
    private $submissoesRepository;

    public function __construct(submissoesRepository $submissoesRepo)
    {
        $this->submissoesRepository = $submissoesRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the submissoes.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->submissoesRepository->pushCriteria(new RequestCriteria($request));
        $submissoes = $this->submissoesRepository->all();

        return view('submissoes.index')
            ->with('submissoes', $submissoes);
    }

    /**
     * Show the form for creating a new submissoes.
     *
     * @return Response
     */
    public function create()
    {
        return view('submissoes.create');
    }

    /**
     * Store a newly created submissoes in storage.
     *
     * @param CreatesubmissoesRequest $request
     *
     * @return Response
     */
    public function store(CreatesubmissoesRequest $request)
    {
        $input = $request->all();

        $submissoes = $this->submissoesRepository->create($input);

        Flash::success('submissoes saved successfully.');

        return redirect(route('submissoes.index'));
    }

    /**
     * Display the specified submissoes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $submissoes = $this->submissoesRepository->findWithoutFail($id);

        if (empty($submissoes)) {
            Flash::error('submissoes not found');

            return redirect(route('submissoes.index'));
        }

        return view('submissoes.show')->with('submissoes', $submissoes);
    }

    /**
     * Show the form for editing the specified submissoes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $submissoes = $this->submissoesRepository->findWithoutFail($id);

        if (empty($submissoes)) {
            Flash::error('submissoes not found');

            return redirect(route('submissoes.index'));
        }

        return view('submissoes.edit')->with('submissoes', $submissoes);
    }

    /**
     * Update the specified submissoes in storage.
     *
     * @param  int              $id
     * @param UpdatesubmissoesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesubmissoesRequest $request)
    {
        $submissoes = $this->submissoesRepository->findWithoutFail($id);

        if (empty($submissoes)) {
            Flash::error('submissoes not found');

            return redirect(route('submissoes.index'));
        }

        $submissoes = $this->submissoesRepository->update($request->all(), $id);

        Flash::success('submissoes updated successfully.');

        return redirect(route('submissoes.index'));
    }

    /**
     * Remove the specified submissoes from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $submissoes = $this->submissoesRepository->findWithoutFail($id);

        if (empty($submissoes)) {
            Flash::error('submissoes not found');

            return redirect(route('submissoes.index'));
        }

        $this->submissoesRepository->delete($id);

        Flash::success('submissoes deleted successfully.');

        return redirect(route('submissoes.index'));
    }
}
