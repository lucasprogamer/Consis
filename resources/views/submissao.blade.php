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
                        <form id="default" class="form-horizontal">
                            <fieldset title="Cadastro">
                                <legend>Informações Pessoais</legend>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-2 control-label">Nome Completo</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" placeholder="Jhon Snow" required class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-2 control-label">Email</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="email" placeholder="email@examplo.com" class="form-control" required="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-2 control-label">Senha</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="password" required placeholder="******" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-2 control-label">Comfirme Senha</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="password" required placeholder="******" class="form-control">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset title="Contato">
                                <legend>Informações para contato</legend>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-2 control-label">Telefone</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" placeholder="(99)  9 9999-9999" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-2 control-label">Endereço</label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea rows="5" cols="60" class="form-control"></textarea>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset title="Artigo">
                                <legend>Informações sobre o Artgo</legend>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-2 control-label">Titulo do Artigo</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" placeholder="Titulo do Artigo" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-2 control-label">Resumo</label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea rows="5" cols="60" class="form-control"></textarea>
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
                                                <input type="file" class="default" />
                                                </span>
                                            <span class="fileupload-preview" style="margin-left:5px;"></span>
                                            <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                                        </div>
                                    </div>
                                </div>

                            </fieldset>
                            <fieldset title="Final Step">
                                <legend>Final Step Information</legend>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <p>Congratulations This is the Final Step</p>
                                    </div>
                                </div>
                            </fieldset>
                            <button class="btn btn-info finish">
                                Finish </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <!--body wrapper end-->
  </div>
</div>



</div>


@endsection
