@extends('shared.theme')

@section('stylesheets')

@endsection

@section('scripts')

@endsection

@section('content-header')

    @Header([ 'icon' => 'user-plus', 'url' => '/users' ]) @lang('Add User') @endHeader

@endsection

@section('content')

    <div class="container-fluid">

        @Alerts([
            'status' => false,
            'errors' => $errors->any(),
        ]) @endAlerts

        <section>

            @form([ 'method' => 'post', 'url' => '/users' ])

                @box([])

                    <article>

                        <h5 class="with-border">
                            @icon([ 'icon' => 'asterisk', 'color' => 'blue' ]) @endicon
                            @lang('Required Fields')
                        </h5>

                        <div class="row">

                            <label class="col-sm-2 form-control-label">@lang('Full Name')</label>
                            <div class="col-md-10">

                                @FormGroup([
                                    'error' => $errors->first('name'),
                                ])

                                    @input([
                                        'name' => 'name',
                                        'error' => $errors->has('name'),
                                    ]) @endinput

                                    @icon([
                                        'icon' => 'font',
                                        'color' => 'blue',
                                        'error' => $errors->has('name'),
                                    ]) @endicon

                                @endFormGroup

                            </div>
                        
                        </div>

                        <div class="row">

                            <label class="col-sm-2 form-control-label">@lang('Email')</label>
                            <div class="col-md-4">

                                @FormGroup([
                                    'error' => $errors->first('email'),
                                ])

                                    @input([
                                        'name' => 'email',
                                        'error' => $errors->has('email'),
                                    ]) @endinput

                                    @icon([
                                        'icon' => 'envelope',
                                        'color' => 'blue',
                                        'error' => $errors->has('email'),
                                    ]) @endicon

                                @endFormGroup

                            </div>

                            <label class="col-sm-2 form-control-label">@lang('Password')</label>
                            <div class="col-md-4">

                                @FormGroup([
                                    'error' => $errors->first('password'),
                                ])

                                    @input([
                                        'name' => 'password',
                                        'error' => $errors->has('password'),
                                    ]) @endinput

                                    @icon([
                                        'icon' => 'asterisk',
                                        'color' => 'blue',
                                        'error' => $errors->has('password'),
                                    ]) @endicon

                                @endFormGroup

                            </div>

                        </div>

                        <h5 class="with-border m-t">

                            @icon([ 'icon' => 'thumb-tack', 'color' => 'blue' ]) @endicon
                            @lang('Additional Properties')

                        </h5>

                        <div class="row">
                    
                            <div class="col-md-4">

                                @FormGroup([
                                    'clean' => true,
                                    'error' => $errors->first('mark_as_admin'),
                                ])

                                    @checkbox([
                                        'name' => 'mark_as_admin',
                                        'title' => 'Mark As Admin',
                                    ]) @endcheckbox

                                @endFormGroup

                            </div>

                            @if (Route::has('verification.notice'))

                                <div class="col-md-4">

                                    @FormGroup([
                                        'clean' => true,
                                        'error' => $errors->first('mark_as_verified'),
                                    ])

                                        @checkbox([
                                            'name' => 'mark_as_verified',
                                            'title' => 'Mark As Verified',
                                        ]) @endcheckbox

                                    @endFormGroup

                                </div>

                            @endif

                        </div>

                        <div class="m-t">

                            <button type="submit" class="btn btn-primary">

                                @icon([ 'icon' => 'check' ]) @endicon @lang('Save')

                            </button>

                        </div>

                    </article>

                @endbox

            @endform

        </section>

    </div>

@endsection