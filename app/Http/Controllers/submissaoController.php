<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatesubmissoesRequest;
use App\Http\Requests\UpdatesubmissoesRequest;
use App\Repositories\submissoesRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use App\User;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class submissaoController extends AppBaseController
{

  /** @var  submissoesRepository */
  private $submissoesRepository;

  public function __construct(submissoesRepository $submissoesRepo)
  {
      $this->submissoesRepository = $submissoesRepo;
  }


  public function submeter(Request $request)
  {
    $file = $request->file('artigo');
    $imagem = $request->Imagem;
    $result =  (object) $this->uploadImage($file);
    $newRequest = $request->all();
    $newRequest['url'] = $result->url;


    $user = array(
      'name' => $request['nome'],
      'email' => $request['email'],
      'password' => $request['senha'],

     );

     

      var_dump($user);

  }



}
