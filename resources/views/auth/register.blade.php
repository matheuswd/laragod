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

        @form([ 'method' => 'post', 'url' => '/register', 'class' => 'sign-box' ])

            <div class="sign-avatar">

                <img src="{{ asset('img/avatar-sign.png') }}" alt="">

            </div>

            <header class="sign-title">@lang('New User')</header>

            @FormGroup([
                'left' => true,
                'error' => $errors->has('name') ? $errors->first('name') : '',
            ])

                @input([
                    'name' => 'name',
                    'title' => 'Full Name',
                    'error' => $errors->has('name'),
                ]) @endinput

                @icon([
                    'icon' => 'font',
                    'error' => $errors->has('name'),
                ]) @endicon

            @endFormGroup

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
                'left' => true,
            ])

                @input([
                    'name' => 'password_confirmation',
                    'title' => 'Confirm Password',
                    'type' => 'password',
                ]) @endinput

                @icon([
                    'icon' => 'asterisk',
                ]) @endicon

            @endFormGroup

            <button type="submit" class="btn btn-rounded btn-primary">@lang('Save')</button>

            <p class="sign-note">

                <small>@lang('Already have an account?') <a href="{{ url('/login') }}">@lang('Enter here!')</a></small>

            </p>

        @endform

    </section>
    
</div>

@endsection