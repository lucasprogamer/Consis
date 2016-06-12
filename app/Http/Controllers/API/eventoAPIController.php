<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateeventoAPIRequest;
use App\Http\Requests\API\UpdateeventoAPIRequest;
use App\Models\evento;
use App\Repositories\eventoRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class eventoController
 * @package App\Http\Controllers\API
 */

class eventoAPIController extends AppBaseController
{
    /** @var  eventoRepository */
    private $eventoRepository;

    public function __construct(eventoRepository $eventoRepo)
    {
        $this->eventoRepository = $eventoRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/eventos",
     *      summary="Get a listing of the eventos.",
     *      tags={"evento"},
     *      description="Get all eventos",
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
     *                  @SWG\Items(ref="#/definitions/evento")
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
        $this->eventoRepository->pushCriteria(new RequestCriteria($request));
        $this->eventoRepository->pushCriteria(new LimitOffsetCriteria($request));
        $eventos = $this->eventoRepository->all();

        return $this->sendResponse($eventos->toArray(), 'eventos retrieved successfully');
    }

    /**
     * @param CreateeventoAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/eventos",
     *      summary="Store a newly created evento in storage",
     *      tags={"evento"},
     *      description="Store evento",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="evento that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/evento")
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
     *                  ref="#/definitions/evento"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateeventoAPIRequest $request)
    {
        $input = $request->all();

        $eventos = $this->eventoRepository->create($input);

        return $this->sendResponse($eventos->toArray(), 'evento saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/eventos/{id}",
     *      summary="Display the specified evento",
     *      tags={"evento"},
     *      description="Get evento",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of evento",
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
     *                  ref="#/definitions/evento"
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
        /** @var evento $evento */
        $evento = $this->eventoRepository->find($id);

        if (empty($evento)) {
            return Response::json(ResponseUtil::makeError('evento not found'), 400);
        }

        return $this->sendResponse($evento->toArray(), 'evento retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateeventoAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/eventos/{id}",
     *      summary="Update the specified evento in storage",
     *      tags={"evento"},
     *      description="Update evento",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of evento",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="evento that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/evento")
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
     *                  ref="#/definitions/evento"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateeventoAPIRequest $request)
    {
        $input = $request->all();

        /** @var evento $evento */
        $evento = $this->eventoRepository->find($id);

        if (empty($evento)) {
            return Response::json(ResponseUtil::makeError('evento not found'), 400);
        }

        $evento = $this->eventoRepository->update($input, $id);

        return $this->sendResponse($evento->toArray(), 'evento updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/eventos/{id}",
     *      summary="Remove the specified evento from storage",
     *      tags={"evento"},
     *      description="Delete evento",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of evento",
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
        /** @var evento $evento */
        $evento = $this->eventoRepository->find($id);

        if (empty($evento)) {
            return Response::json(ResponseUtil::makeError('evento not found'), 400);
        }

        $evento->delete();

        return $this->sendResponse($id, 'evento deleted successfully');
    }
}
