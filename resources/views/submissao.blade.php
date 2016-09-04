@extends('layouts.login')

@section('content')


<div class="container" style="margin-top:50px;">

  <div class="panel panel-default">
  <div class="panel-body">
    <!-- page heading start-->
    <div class="page-heading">
        <h3>
            Submissão de Artigos
        </h3>
        <ul class="breadcrumb">
            <li>
                <a href="#">Consis</a>
            </li>
            <li class="active">Submissões</li>
        </ul>
    </div>
    <!-- page heading end-->
    <hr/>
    <!--body wrapper start-->
    <div class="wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="square-widget">
                    <div class="widget-container">
                        <div class="stepy-tab">
                        </div>


                          {!! Form::open(['url' => 'submissao\submeter', 'files' => true, 'class'=> 'form-horizontal', 'id'=>'default' ]) !!}
                            {{ csrf_field() }}
                            <fieldset title="Cadastro">
                                <legend>Informações Pessoais</legend>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-2 control-label">Nome Completo</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input name="nome" type="text" placeholder="Jhon Snow" required class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-2 control-label">Email</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input name="email" type="email" placeholder="email@exemplo.com" class="form-control" required="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-2 control-label">Senha</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input name="senha" type="password" required placeholder="******" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-2 control-label">Comfirme Senha</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input name="confirmSenha" type="password" required placeholder="******" class="form-control">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset title="Contato">
                                <legend>Informações para contato</legend>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-2 control-label">Telefone</label>
                                    <div class="col-md-6 col-sm-6">
                                      <input name="telefone" type="text" placeholder="555-2368" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-2 control-label">Cidade</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input name="cidade" type="text" placeholder="Ghotam" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-2 control-label">CEP</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input name="CEP" type="text" placeholder="77 777-777" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-2 control-label">Endereço</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input name="endereco" type="text" placeholder=" Rua Ingram, Nº 20, Bairro do Queens" class="form-control">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset title="Artigo">
                                <legend>Informações sobre o Artgo</legend>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-2 control-label">Titulo do Artigo</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input name="titulo" type="text" placeholder="Titulo do Artigo" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-2 control-label">Area de Atuação</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input name="atuacao" type="text" placeholder="Area de Atuação" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-2 control-label">Resumo</label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea name="resumo" rows="5" cols="60" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <div class="alert alert-info fade in">
                                      <strong>Atenção!</strong> O Arquivo enviado deve estar em PDF
                                  </div>
                                    <label class="control-label col-md-3">Artigo</label>
                                    <div class="controls col-md-9">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <span class="btn btn-default btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paper-clip"></i>Artigo.pdf</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Mudar</span>
                                                <input name="artigo" type="file" class="default" />
                                                </span>
                                            <span class="fileupload-preview" style="margin-left:5px;"></span>
                                            <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                                        </div>
                                    </div>
                                </div>

                            </fieldset>
                            <fieldset title="Autores">
                                <legend>Demais envolvidos no artigo</legend>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-2 control-label">Nome do Autor</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input name="name1" type="text" placeholder="Nome do Autor" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-2 control-label">Email</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input name="email1" type="text" placeholder="Email@exemplo.com" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-2 control-label">Nome do Autor</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input name="name2" type="text" placeholder="Nome do Autor" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-2 control-label">Email</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input name="email2" type="text" placeholder="Email@exemplo.com" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-2 control-label">Nome do Autor</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input name="name3" type="text" placeholder="Nome do Autor" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-2 control-label">Email</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input name="email3" type="text" placeholder="Email@exemplo.com" class="form-control">
                                    </div>
                                </div>
                            </fieldset>
                            <button class="btn btn-info finish">
                                Submeter </button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

    <!--body wrapper end-->
  </div>
</div>



</div>


@endsection
