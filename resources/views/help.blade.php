@extends('shared.theme')

@section('stylesheets')

@endsection

@section('scripts')

@endsection

@section('content-header')

    @Header([ 'icon' => 'question-circle' ]) @lang('Help') @endHeader

@endsection

@section('content')

    <div class="container-fluid">

        @Alerts([
            'status' => session('status'),
            'errors' => false,
        ]) @endAlerts

        <section>

            @box([])

                <div class="row">

                    <div class="col-md-4 text-center">

                        <div class="m-b m-t-lg">
                            <a href="{{ url('/docs') }}">
                                <img src="{{ asset('img/faq-1.png') }}" alt="@lang('Documentation')">
                            </a>
                        </div>
                        <div>
                            <a href="{{ url('/docs') }}">
                                <strong class="with-border">@lang('Documentation')</strong>
                            </a>
                        </div>
                        <div class="color-blue-grey">@lang('Understand the system')</div>

                    </div>

                    <div class="col-md-4 text-center">

                        <div class="m-b m-t-lg">
                            <a href="{{ url('/faq') }}">
                                <img src="{{ asset('img/faq-2.png') }}" alt="@lang('Frequently Asked Questions')">
                            </a>
                        </div>
                        <div>
                            <a href="{{ url('/faq') }}">
                                <strong>@lang('Frequently Asked Questions')</strong>
                            </a>
                        </div>
                        <div class="color-blue-grey">@lang('Most common questions')</div>

                    </div>

                    <div class="col-md-4 text-center">

                        <div class="m-b m-t-lg">
                            <a href="{{ url('/feedback') }}">
                                <img src="{{ asset('img/faq-3.png') }}" alt="@lang('Feedback')">
                            </a>
                        </div>
                        <div>
                            <a href="{{ url('/feedback') }}">
                                <strong>@lang('Feedback')</strong>
                            </a>
                        </div>
                        <div class="color-blue-grey">@lang('Support, evaluate or bug')</div>

                    </div>

                </div>

                @auth

                    <hr>

                    <div class="row">

                        <div class="col-md-4 text-center m-t">
    
                            <h5>@lang('Social Networks')</h5>
                            <div>
                                
                                <a class="btn btn-primary-outline" target="_blank" href="#">
                                    <i class="font-icon fa fa-facebook"></i>
                                </a>
    
                                <a class="btn btn-primary-outline" target="_blank" href="#">
                                    <i class="font-icon fa fa-instagram"></i>
                                </a>
    
                                <a class="btn btn-primary-outline" target="_blank" href="#">
                                    <i class="font-icon fa fa-linkedin"></i>
                                </a>
    
                            </div>
    
                        </div>
    
                        <div class="col-md-4 offset-md-4 text-center m-t">
    
                            <h5>@lang('Contact')</h5>
                            <div>
                                
                                <a class="btn btn-primary-outline" target="_blank" href="#">
                                    <i class="font-icon fa fa-envelope"></i>
                                </a>
    
                                <a class="btn btn-primary-outline" target="_blank" href="#">
                                    <i class="font-icon fa fa-phone"></i>
                                </a>
    
                                <a class="btn btn-primary-outline" target="_blank" href="#">
                                    <i class="font-icon fa fa-whatsapp"></i>
                                </a>
    
                            </div>
    
                        </div>
    
                    </div>

                @endauth

            @endbox

        </section>
        
    </div>

@endsection