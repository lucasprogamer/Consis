<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatepostRequest;
use App\Http\Requests\UpdatepostRequest;
use App\Repositories\postRepository;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class postController extends AppBaseController
{
    /** @var  postRepository */
    private $postRepository;

    public function __construct(postRepository $postRepo)
    {
        $this->postRepository = $postRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the post.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->postRepository->pushCriteria(new RequestCriteria($request));
        $posts = $this->postRepository->all();

        return view('posts.index')
            ->with('posts', $posts);
    }

    /**
     * Show the form for creating a new post.
     *
     * @return Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created post in storage.
     *
     * @param CreatepostRequest $request
     *
     * @return Response
     */
    public function store(CreatepostRequest $request)
    {
        $input = $request->all();

        $post = $this->postRepository->create($input);

        Flash::success('post saved successfully.');

        return redirect(route('posts.index'));
    }

    /**
     * Display the specified post.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $post = $this->postRepository->findWithoutFail($id);

        if (empty($post)) {
            Flash::error('post not found');

            return redirect(route('posts.index'));
        }

        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified post.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $post = $this->postRepository->findWithoutFail($id);

        if (empty($post)) {
            Flash::error('post not found');

            return redirect(route('posts.index'));
        }

        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified post in storage.
     *
     * @param  int              $id
     * @param UpdatepostRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepostRequest $request)
    {
        $post = $this->postRepository->findWithoutFail($id);

        if (empty($post)) {
            Flash::error('post not found');

            return redirect(route('posts.index'));
        }

        $post = $this->postRepository->update($request->all(), $id);

        Flash::success('post updated successfully.');

        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified post from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $post = $this->postRepository->findWithoutFail($id);

        if (empty($post)) {
            Flash::error('post not found');

            return redirect(route('posts.index'));
        }

        $this->postRepository->delete($id);

        Flash::success('post deleted successfully.');

        return redirect(route('posts.index'));
    }
}
