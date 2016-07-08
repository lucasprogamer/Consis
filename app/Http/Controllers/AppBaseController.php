<?php

namespace App\Http\Controllers;

use InfyOm\Generator\Utils\ResponseUtil;
use Response;
use Image;

/**
 * @SWG\Swagger(
 *   basePath="/api/v1",
 *   @SWG\Info(
 *     title="Laravel Generator APIs",
 *     version="1.0.0",
 *   )
 * )
 * This class should be parent class for other API controllers
 * Class AppBaseController
 */
class AppBaseController extends Controller
{
    public function sendResponse($result, $message)
    {
        return Response::json(ResponseUtil::makeResponse($message, $result));
    }

    public function uploadImage($file)
    {


      $image_name = time()."-".$file->getClientOriginalName();
       $file->move('uploads', $image_name);
       $path = sprintf('uploads/%s', $image_name);
       $newImage = Image::make($path)->resize(200, 200)->save();
       return $newImage;
    }
}
