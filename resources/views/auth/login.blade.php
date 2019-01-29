@extends('shared.theme')

@section('stylesheets')

<link rel="stylesheet" href="{{ asset('css/pages/login.min.css') }}">

@endsection

@section('scripts')

<script src="{{ asset('js/lib/match-height/jquery.matchHeight.min.js') }}"></script>
<script>

    $(function() {

        $('.page-center').matchHeight({
            target: $('html')
        });

        $(window).resize(function(){
            setTimeout(function(){
                $('.page-center').matchHeight({ remove: true });
                $('.page-center').matchHeight({
                    target: $('html')
                });
            }, 100);
        });

    });

</script>

@endsection

@section('content')

<div class="container-fluid">

    <section>

        @form([ 'method' => 'post', 'url' => '/login', 'class' => 'sign-box' ])

            <div class="sign-avatar">

                <img src="{{ asset('img/logo-2-mob.png') }}" alt="">
                
            </div>

            <header class="sign-title">{{ config('app.name') }}</header>

            @FormGroup([
                'left' => true,
                'error' => $errors->has('email') ? $errors->first('email') : '',
            ])

                @input([
                    'name' => 'email',
                    'title' => 'Email',
                    'error' => $errors->has('email'),
                ]) @endinput

                @icon([
                    'icon' => 'envelope',
                    'error' => $errors->has('email'),
                ]) @endicon

            @endFormGroup

            @FormGroup([
                'left' => true,
                'error' => $errors->has('password') ? $errors->first('password') : '',
            ])

                @input([
                    'name' => 'password',
                    'title' => 'Password',
                    'type' => 'password',
                    'error' => $errors->has('password'),
                ]) @endinput

                @icon([
                    'icon' => 'asterisk',
                    'error' => $errors->has('password'),
                ]) @endicon

            @endFormGroup

            @FormGroup([
                'clean' => true,
            ])

                <div class="float-left reset">

                    @checkbox([
                        'name' => 'remember',
                        'title' => 'Remember Me',
                    ]) @endcheckbox

                </div>

                <div class="float-right reset">

                    <a href="{{ url('/password/reset') }}">@lang('Recover Password')</a>

                </div>

            @endFormGroup

            <button type="submit" class="btn btn-rounded btn-primary">@lang('Sign In')</button>

            @if (Route::has('register'))

                <p class="sign-note">

                    <small>@lang('Do not have an account?') <a href="{{ url('/register') }}">@lang("Register here!")</a></small>

                </p>

            @endif

        @endform

    </section>

</div>

@endsection