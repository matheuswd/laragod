@extends('shared.theme')

@section('stylesheets')

@endsection

@section('scripts')

@endsection

@section('content-header')

@endsection

@section('content')

    <div class="container-fluid">

        @if (session('resent'))

            @alert([ 'type' => 'success' ]) @lang('passwords.sent') @endalert

        @endif

        <section class="card card-red">

            <header class="card-header">@lang('Email Not Verified')</header>

            <div class="card-block">

                <p class="card-text">
                    @lang('To have access of all features, you must verify your email.')
                </p>
                <p class="card-text">
                    @lang('Do not receive a email?') <a href="{{ route('verification.resend') }}">@lang('Resend Here!')</a>
                </p>

            </div>

        </section>
        
    </div>

@endsection