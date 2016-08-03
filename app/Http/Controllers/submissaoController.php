<?php

namespace App\Http\Controllers;

use App\Http\Requests;
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


  public function submeter(Request $request)
  {



    // $file = $request->file('artigo');
    // $imagem = $request->Imagem;
    // $result =  (object) $this->uploadImage($file);
    // $newRequest = $request->all();
    // $newRequest['url'] = $result->url;


    // $user = array(
    //   'name' => $request['nome'],
    //   'email' => $request['email'],
    //   'password' => bcrypt($request['senha']),
    //
    //  );
    //
    //
    //  User::create($user);
    



  }



}
