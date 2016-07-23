<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatesubmissoesAPIRequest;
use App\Http\Requests\API\UpdatesubmissoesAPIRequest;
use App\Models\submissoes;
use App\Repositories\submissoesRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class submissoesController
 * @package App\Http\Controllers\API
 */

class submissoesAPIController extends InfyOmBaseController
{
    /** @var  submissoesRepository */
    private $submissoesRepository;

    public function __construct(submissoesRepository $submissoesRepo)
    {
        $this->submissoesRepository = $submissoesRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/submissoes",
     *      summary="Get a listing of the submissoes.",
     *      tags={"submissoes"},
     *      description="Get all submissoes",
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
     *                  @SWG\Items(ref="#/definitions/submissoes")
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
        $this->submissoesRepository->pushCriteria(new RequestCriteria($request));
        $this->submissoesRepository->pushCriteria(new LimitOffsetCriteria($request));
        $submissoes = $this->submissoesRepository->all();

        return $this->sendResponse($submissoes->toArray(), 'submissoes retrieved successfully');
    }

    /**
     * @param CreatesubmissoesAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/submissoes",
     *      summary="Store a newly created submissoes in storage",
     *      tags={"submissoes"},
     *      description="Store submissoes",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="submissoes that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/submissoes")
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
     *                  ref="#/definitions/submissoes"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreatesubmissoesAPIRequest $request)
    {
        $input = $request->all();

        $submissoes = $this->submissoesRepository->create($input);

        return $this->sendResponse($submissoes->toArray(), 'submissoes saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/submissoes/{id}",
     *      summary="Display the specified submissoes",
     *      tags={"submissoes"},
     *      description="Get submissoes",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of submissoes",
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
     *                  ref="#/definitions/submissoes"
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
        /** @var submissoes $submissoes */
        $submissoes = $this->submissoesRepository->find($id);

        if (empty($submissoes)) {
            return Response::json(ResponseUtil::makeError('submissoes not found'), 404);
        }

        return $this->sendResponse($submissoes->toArray(), 'submissoes retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdatesubmissoesAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/submissoes/{id}",
     *      summary="Update the specified submissoes in storage",
     *      tags={"submissoes"},
     *      description="Update submissoes",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of submissoes",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="submissoes that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/submissoes")
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
     *                  ref="#/definitions/submissoes"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdatesubmissoesAPIRequest $request)
    {
        $input = $request->all();

        /** @var submissoes $submissoes */
        $submissoes = $this->submissoesRepository->find($id);

        if (empty($submissoes)) {
            return Response::json(ResponseUtil::makeError('submissoes not found'), 404);
        }

        $submissoes = $this->submissoesRepository->update($input, $id);

        return $this->sendResponse($submissoes->toArray(), 'submissoes updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/submissoes/{id}",
     *      summary="Remove the specified submissoes from storage",
     *      tags={"submissoes"},
     *      description="Delete submissoes",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of submissoes",
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
        /** @var submissoes $submissoes */
        $submissoes = $this->submissoesRepository->find($id);

        if (empty($submissoes)) {
            return Response::json(ResponseUtil::makeError('submissoes not found'), 404);
        }

        $submissoes->delete();

        return $this->sendResponse($id, 'submissoes deleted successfully');
    }
}
