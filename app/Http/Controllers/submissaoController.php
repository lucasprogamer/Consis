<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatesubmissoesRequest;
use App\Http\Requests\UpdatesubmissoesRequest;
use App\Repositories\submissoesRepository;
use App\Http\Requests\CreateprofileRequest;
use App\Http\Requests\UpdateprofileRequest;
use App\Repositories\profileRepository;
use App\Http\Requests\CreateauthoresRequest;
use App\Http\Requests\UpdateauthoresRequest;
use App\Repositories\authoresRepository;
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

  /** @var  profileRepository */
  private $profileRepository;

    public function __construct(submissoesRepository $submissoesRepo, profileRepository $profileRepo, authoresRepository $authoresRepo)
    {
        $this->submissoesRepository = $submissoesRepo;
        $this->profileRepository = $profileRepo;
        $this->authoresRepository = $authoresRepo;
    }

  public function submeter(Request $request,submissoesRepository $submissoesRepo, profileRepository $profileRepo)
  {



    $file = $request->file('artigo');
    $imagem = $request->Imagem;
    $result = $this->uploadImage($file);



    $user = array(
      'name' => $request['nome'],
      'email' => $request['email'],
      'password' => bcrypt($request['senha']),
    
     );
    
    
    $lastId =  User::create($user)->id;


    

    
    
    $artigo = array(
        'Titulo' => $request['titulo'],
        'Resumo' => $request['resumo'],
        'atuacao' => $request['atuacao'],
        'Artigo' => $request['artigo'],
        'situacao' => $request['situacao'],
        'situacao' => $request['situacao'],
        'url' => $result['url'],
        'user_id'      => $lastId,
          );

  
    $submissoes = $this->submissoesRepository->create($artigo)->id;






    $perfil = array(
        'telefone' => $request['telefone'],
        'cidade'   => $request['cidade'], 
        'CEP'      => $request['cep'],
        'endereco'      => $request['endereco'],
        'user_id'      => $lastId,
         );


    $profile = $this->profileRepository->create($perfil);


    $authores1 = array(
        'name' => $request['name1'],
        'email'   => $request['email1'], 
        'user_id'      => $lastId,
        'submissoes_id'      => $submissoes,
         );


    $autores1 = $this->authoresRepository->create($authores1);

 
    $authores2 = array(
        'name' => $request['name2'],
        'email'   => $request['email2'], 
        'user_id'      => $lastId,
        'submissoes_id'      => $submissoes,

         );


    $autores2 = $this->authoresRepository->create($authores2);

    $authores3 = array(
        'name' => $request['name3'],
        'email'   => $request['email3'], 
        'user_id'      => $lastId,
        'submissoes_id'      => $submissoes,
        
         );


    $autores3 = $this->authoresRepository->create($authores3);




    

      return redirect('/login');
  }




}
