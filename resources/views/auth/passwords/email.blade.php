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

        @form([ 'method' => 'post', 'url' => '/password/email', 'class' => 'sign-box' ])

            <header class="sign-title">@lang('Recover Password')</header>

            @if (session('status'))

                @alert([ 'type' => 'success' ]) {{ session('status') }} @endalert

            @endif

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
                    'icon' => 'font',
                    'error' => $errors->has('email'),
                ]) @endicon

            @endFormGroup

            <button type="submit" class="btn btn-rounded btn-primary">@lang('Send Link')</button>

            <p class="sign-note">

                <small>@lang('Remember your password?') <a href="{{ url('/login') }}">@lang("Enter here!")</a></small>

            </p>

        @endform

    </section>

</div>

@endsection