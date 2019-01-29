@extends('shared.theme')

@section('stylesheets')

@endsection

@section('scripts')

@endsection

@section('content-header')

    @Header([ 'icon' => 'file-text-o', 'url' => '/help' ]) @lang('Documentation') @endHeader

@endsection

@section('content')

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-3">

                @box([])

                    <section class="text-block">

                        <strong><i class="fa fa-arrow-right"></i> Início</strong>
                        <ol>
                            <li><a href="#getting-started">Começando</a></li>
                            <li><a href="#installation">Instalação</a></li>
                            <li><a href="#settings">Configurações</a></li>
                            <li><a href="#support">Suporte</a></li>
                        </ol>

                        <strong><i class="fa fa-arrow-right"></i> Avançado</strong>
                        <ol>
                            <li><a href="#resources">Recursos</a></li>
                            <li><a href="#performance">Desempenho</a></li>
                        </ol>

                        <strong><i class="fa fa-arrow-right"></i> Pagamentos</strong>
                        <ol>
                            <li><a href="#methods">Métodos</a></li>
                            <li><a href="#history">Histórico</a></li>
                        </ol>

                    </section>

                @endbox

            </div>
            <div class="col-md-9">

                @box([])

                    <section>

                        <h4 class="with-border">
                            <i class="fa fa-quote-left"></i> Início
                        </h4>

                        <div id="getting-started">

                            <h4 class="color-blue-grey">Começando
                                <a href="#" class="float-right">
                                    <i class="fa fa-caret-up color-blue-grey"></i>
                                </a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                        </div>

                        <div id="installation">

                            <h4 class="color-blue-grey">Instalação
                                <a href="#" class="float-right">
                                    <i class="fa fa-caret-up color-blue-grey"></i>
                                </a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                        </div>

                        <div id="settings">

                            <h4 class="color-blue-grey">Configurações
                                <a href="#" class="float-right">
                                    <i class="fa fa-caret-up color-blue-grey"></i>
                                </a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <img class="img-fluid m-b" src="{{ asset('img/img-task.jpg') }}" />

                        </div>

                        <div id="support">

                            <h4 class="color-blue-grey">Suporte
                                <a href="#" class="float-right">
                                    <i class="fa fa-caret-up color-blue-grey"></i>
                                </a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                        </div>

                        <h4 class="with-border m-t-lg">
                            <i class="fa fa-puzzle-piece"></i> Avançado
                        </h4>

                        <div id="resources">

                            <h4 class="color-blue-grey">Recursos
                                <a href="#" class="float-right">
                                    <i class="fa fa-caret-up color-blue-grey"></i>
                                </a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                        </div>

                        <div id="perfomance">

                            <h4 class="color-blue-grey">Desempenho
                                <a href="#" class="float-right">
                                    <i class="fa fa-caret-up color-blue-grey"></i>
                                </a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                        </div>

                        <h4 class="with-border m-t-lg">
                            <i class="fa fa-dollar"></i> Pagamentos
                        </h4>

                        <div id="methods">

                            <h4 class="color-blue-grey">Métodos
                                <a href="#" class="float-right">
                                    <i class="fa fa-caret-up color-blue-grey"></i>
                                </a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                        </div>

                        <div id="history">

                            <h4 class="color-blue-grey">Histórico
                                <a href="#" class="float-right">
                                    <i class="fa fa-caret-up color-blue-grey"></i>
                                </a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                        </div>

                    </section>

                @endbox
                
            </div>
        </div>

    </div>

@endsection