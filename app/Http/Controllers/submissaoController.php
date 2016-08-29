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

  /** @var  profileRepository */
  private $profileRepository;

    public function __construct(submissoesRepository $submissoesRepo, profileRepository $profileRepo)
    {
        $this->submissoesRepository = $submissoesRepo;
        $this->profileRepository = $profileRepo;
    }

  public function submeter(Request $request,submissoesRepository $submissoesRepo, profileRepository $profileRepo)
  {



    $file = $request->file('artigo');
    $imagem = $request->Imagem;
    $result = $this->uploadImage($file);



    // $user = array(
    //   'name' => $request['nome'],
    //   'email' => $request['email'],
    //   'password' => bcrypt($request['senha']),
    //
    //  );
    //
    //
    //  User::create($user);
    

    
    
    // $artigo = array(
    //     'Titulo' => $request['titulo'],
    //     'Resumo' => $request['resumo'],
    //     'atuacao' => $request['atuacao'],
    //     'Artigo' => $request['artigo'],
    //     'situacao' => $request['situacao'],
    //     'situacao' => $request['situacao'],
    //     'url' => $result['url'],
    //       );

  
    // $submissoes = $this->submissoesRepository->create($artigo);



    $perfil = array(
        'telefone' => $request['telefone'],
        'cidade'   => $request['cidade'], 
        'CEP'      => $request['cep'],
        'endereco'      => $request['endereco'],
         );
  }

var_dump($perfil);
    // $profile = $this->profileRepository->create($perfil);

}
