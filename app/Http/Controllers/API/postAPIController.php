<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatepostAPIRequest;
use App\Http\Requests\API\UpdatepostAPIRequest;
use App\Models\post;
use App\Repositories\postRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class postController
 * @package App\Http\Controllers\API
 */

class postAPIController extends AppBaseController
{
    /** @var  postRepository */
    private $postRepository;

    public function __construct(postRepository $postRepo)
    {
        $this->postRepository = $postRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/posts",
     *      summary="Get a listing of the posts.",
     *      tags={"post"},
     *      description="Get all posts",
     *      produces={"application/json"},
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(ref="#/definitions/post")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request)
    {
        $this->postRepository->pushCriteria(new RequestCriteria($request));
        $this->postRepository->pushCriteria(new LimitOffsetCriteria($request));
        $posts = $this->postRepository->all();

        return $this->sendResponse($posts->toArray(), 'posts retrieved successfully');
    }

    /**
     * @param CreatepostAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/posts",
     *      summary="Store a newly created post in storage",
     *      tags={"post"},
     *      description="Store post",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="post that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/post")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/post"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreatepostAPIRequest $request)
    {
        $input = $request->all();

        $posts = $this->postRepository->create($input);

        return $this->sendResponse($posts->toArray(), 'post saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/posts/{id}",
     *      summary="Display the specified post",
     *      tags={"post"},
     *      description="Get post",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of post",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/post"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id)
    {
        /** @var post $post */
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            return Response::json(ResponseUtil::makeError('post not found'), 400);
        }

        return $this->sendResponse($post->toArray(), 'post retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdatepostAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/posts/{id}",
     *      summary="Update the specified post in storage",
     *      tags={"post"},
     *      description="Update post",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of post",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="post that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/post")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/post"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdatepostAPIRequest $request)
    {
        $input = $request->all();

        /** @var post $post */
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            return Response::json(ResponseUtil::makeError('post not found'), 400);
        }

        $post = $this->postRepository->update($input, $id);

        return $this->sendResponse($post->toArray(), 'post updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/posts/{id}",
     *      summary="Remove the specified post from storage",
     *      tags={"post"},
     *      description="Delete post",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of post",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy($id)
    {
        /** @var post $post */
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            return Response::json(ResponseUtil::makeError('post not found'), 400);
        }

        $post->delete();

        return $this->sendResponse($id, 'post deleted successfully');
    }
}
