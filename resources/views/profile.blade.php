@extends('shared.theme')

@section('stylesheets')

    <link rel="stylesheet" href="{{ asset('css/vendor/tags_editor.min.css') }}">

@endsection

@section('scripts')

    <script src="{{ asset('js/lib/jquery-tag-editor/jquery.caret.min.js') }}"></script>
    <script src="{{ asset('js/lib/jquery-tag-editor/jquery.tag-editor.min.js') }}"></script>
    <script>
        
        $(function() {
            $('.tag-editor').tagEditor();
        });

    </script>

@endsection

@section('content-header')

    @Header([ 'icon' => 'user' ]) @lang('My Profile') @endHeader

@endsection

@section('content')

    <div class="container-fluid">

        @Alerts([
            'status' => session('status'),
            'errors' => $errors->any(),
        ]) @endAlerts

        <section>

            @form([ 'method' => 'patch', 'url' => '/profile', 'fileUpload' => true ])

                @tab([])

                    @tabNav([])

                        @tabItem([
                            'idx' => 1,
                            'icon' => 'info',
                            'text' => '',
                        ]) @endtabItem

                        @tabItem([
                            'active' => true,
                            'idx' => 2,
                            'icon' => 'photo',
                            'text' => '',
                        ]) @endtabItem

                        @tabItem([
                            'idx' => 3,
                            'icon' => 'child',
                            'text' => '',
                        ]) @endtabItem

                        @tabItem([
                            'idx' => 4,
                            'icon' => 'suitcase',
                            'text' => '',
                        ]) @endtabItem

                        @tabItem([
                            'idx' => 5,
                            'icon' => 'feed',
                            'text' => '',
                        ]) @endtabItem

                    @endtabNav

                    @tabContent([])

                        @tabPanel([
                            'idx' => 1,
                        ])

                            <article>

                                <h5 class="with-border">
                                    @icon([ 'icon' => 'cogs', 'color' => 'blue' ]) @endicon
                                    @lang('Update Data')
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
                                                'value' => $user->name,
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
                                                'value' => $user->email,
                                                'disabled' => true,
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

                            </article>

                        @endtabPanel

                        @tabPanel([
                            'active' => true,
                            'idx' => 2,
                        ])

                            <article>

                                <h5 class="with-border">
                                    @icon([ 'icon' => 'photo', 'color' => 'blue' ]) @endicon
                                    @lang('Update Avatar')
                                </h5>

                                <div class="row">

                                    <div class="col-sm-2">
                                        @avatar([
                                            'class' => 'img-fluid img-thumbnail',
                                            'path' => $user->meta->avatar,
                                        ]) @endavatar
                                    </div>
                                    <div class="col-md-6 m-t-lg">

                                        @FormGroup([
                                            'error' => $errors->first('avatar'),
                                        ])

                                            @input([
                                                'name' => 'avatar',
                                                'type' => 'file',
                                                'error' => $errors->has('avatar'),
                                            ]) @endinput

                                            @icon([
                                                'icon' => 'file-photo-o',
                                                'color' => 'blue',
                                                'error' => $errors->has('avatar'),
                                            ]) @endicon

                                        @endFormGroup

                                    </div>

                                </div>

                            </article>

                        @endtabPanel

                        @tabPanel([
                            'idx' => 3,
                        ])

                            <article>

                                <h5 class="with-border">
                                    @icon([ 'icon' => 'suitcase', 'color' => 'blue' ]) @endicon
                                    @lang('Personal')
                                </h5>

                                <div class="row">
                
                                    <label class="col-sm-2 form-control-label">@lang('Birth')</label>
                                    <div class="col-md-4">
                
                                        @FormGroup([
                                            'error' => $errors->first('birth'),
                                        ])
                
                                            @date([
                                                'name' => 'birth',
                                                'error' => $errors->has('birth'),
                                                'value' => $user->meta->birth,
                                            ]) @enddate
                
                                            @icon([
                                                'icon' => 'heartbeat',
                                                'color' => 'blue',
                                                'error' => $errors->has('birth'),
                                            ]) @endicon
                
                                        @endFormGroup
                
                                    </div>
                
                                </div>

                                <div class="row">

                                    <label class="col-sm-2 form-control-label">@lang('Biography')</label>
                                    <div class="col-md-8">

                                        @FormGroup([
                                            // 'clean' => true,
                                            'error' => $errors->first('biography'),
                                        ])

                                            @textarea([
                                                'name' => 'biography',
                                                'rows' => 4,
                                                'title' => 'Make a well description about yourself.',
                                                'error' => $errors->has('biography'),
                                                'value' => $user->meta->biography,
                                            ]) @endtextarea

                                            @icon([
                                                'icon' => 'align-left',
                                                'color' => 'blue',
                                                'error' => $errors->has('biography'),
                                            ]) @endicon

                                        @endFormGroup

                                    </div>

                                </div>

                                <div class="row">

                                    <label class="col-sm-2 form-control-label">@lang('Interests')</label>
                                    <div class="col-md-8">

                                        @FormGroup([
                                            // 'clean' => true,
                                            'error' => $errors->first('interests'),
                                        ])

                                            @textarea([
                                                'name' => 'interests',
                                                'tags' => true,
                                                'title' => 'facebook,mentoring,technology',
                                                'error' => $errors->has('interests'),
                                                'value' => $user->meta->interests,
                                            ]) @endtextarea

                                            @icon([
                                                'icon' => 'tags',
                                                'color' => 'blue',
                                                'error' => $errors->has('interests'),
                                            ]) @endicon

                                            <small class="color-blue-grey">@lang('Type a word, then press ENTER to add more.')</small>

                                        @endFormGroup

                                    </div>

                                </div>

                            </article>

                        @endtabPanel

                        @tabPanel([
                            'idx' => 4,
                        ])

                            <article>

                                <h5 class="with-border">
                                    @icon([ 'icon' => 'suitcase', 'color' => 'blue' ]) @endicon
                                    @lang('Business')
                                </h5>

                                <div class="row">
                
                                    <label class="col-sm-2 form-control-label">@lang('Company')</label>
                                    <div class="col-md-4">
                
                                        @FormGroup([
                                            'error' => $errors->first('company'),
                                        ])
                
                                            @input([
                                                'name' => 'company',
                                                'error' => $errors->has('company'),
                                                'value' => $user->meta->company,
                                            ]) @endinput
                
                                            @icon([
                                                'icon' => 'building-o',
                                                'color' => 'blue',
                                                'error' => $errors->has('company'),
                                            ]) @endicon
                
                                        @endFormGroup
                
                                    </div>
                
                                    <label class="col-sm-2 form-control-label">@lang('Position')</label>
                                    <div class="col-md-4">
                
                                        @FormGroup([
                                            'error' => $errors->first('position'),
                                        ])
                
                                            @input([
                                                'name' => 'position',
                                                'error' => $errors->has('position'),
                                                'value' => $user->meta->position,
                                            ]) @endinput
                
                                            @icon([
                                                'icon' => 'briefcase',
                                                'color' => 'blue',
                                                'error' => $errors->has('position'),
                                            ]) @endicon
                
                                        @endFormGroup
                
                                    </div>
                
                                </div>

                                <div class="row">
                
                                    <label class="col-sm-2 form-control-label">@lang('City')</label>
                                    <div class="col-md-4">
                
                                        @FormGroup([
                                            'error' => $errors->first('city'),
                                        ])
                
                                            @input([
                                                'name' => 'city',
                                                'error' => $errors->has('city'),
                                                'value' => $user->meta->city,
                                            ]) @endinput
                
                                            @icon([
                                                'icon' => 'crosshairs',
                                                'color' => 'blue',
                                                'error' => $errors->has('city'),
                                            ]) @endicon
                
                                        @endFormGroup
                
                                    </div>
                
                                    <label class="col-sm-2 form-control-label">@lang('Country')</label>
                                    <div class="col-md-4">
                
                                        @FormGroup([
                                            'error' => $errors->first('country'),
                                        ])
                
                                            @input([
                                                'name' => 'country',
                                                'error' => $errors->has('country'),
                                                'value' => $user->meta->country,
                                            ]) @endinput
                
                                            @icon([
                                                'icon' => 'globe',
                                                'color' => 'blue',
                                                'error' => $errors->has('country'),
                                            ]) @endicon
                
                                        @endFormGroup
                
                                    </div>
                
                                </div>

                            </article>

                        @endtabPanel

                        @tabPanel([
                            'idx' => 5,
                        ])

                            <article>

                                <h5 class="with-border">
                                    @icon([ 'icon' => 'feed', 'color' => 'blue' ]) @endicon
                                    @lang('Social')
                                </h5>

                                <div class="row">
                
                                    <div class="col-md-4">
                
                                        @FormGroup([
                                            'error' => $errors->first('facebook'),
                                            'left' => true,
                                        ])
                
                                            @input([
                                                'name' => 'facebook',
                                                'error' => $errors->has('facebook'),
                                                'value' => $user->meta->facebook,
                                            ]) @endinput
                
                                            @icon([
                                                'icon' => 'facebook',
                                                'color' => 'blue',
                                                'error' => $errors->has('facebook'),
                                            ]) @endicon
                
                                        @endFormGroup
                
                                    </div>
                
                                    <div class="col-md-4">
                
                                        @FormGroup([
                                            'error' => $errors->first('whatsapp'),
                                            'left' => true,
                                        ])
                
                                            @input([
                                                'name' => 'whatsapp',
                                                'error' => $errors->has('whatsapp'),
                                                'value' => $user->meta->whatsapp,
                                            ]) @endinput
                
                                            @icon([
                                                'icon' => 'whatsapp',
                                                'color' => 'blue',
                                                'error' => $errors->has('whatsapp'),
                                            ]) @endicon
                
                                        @endFormGroup
                
                                    </div>

                                    <div class="col-md-4">
                
                                        @FormGroup([
                                            'error' => $errors->first('linkedin'),
                                            'left' => true,
                                        ])
                
                                            @input([
                                                'name' => 'linkedin',
                                                'error' => $errors->has('linkedin'),
                                                'value' => $user->meta->linkedin,
                                            ]) @endinput
                
                                            @icon([
                                                'icon' => 'linkedin',
                                                'color' => 'blue',
                                                'error' => $errors->has('linkedin'),
                                            ]) @endicon
                
                                        @endFormGroup
                
                                    </div>
                
                                </div>

                                <div class="row">
                
                                    <div class="col-md-4">
                
                                        @FormGroup([
                                            'error' => $errors->first('instagram'),
                                            'left' => true,
                                        ])
                
                                            @input([
                                                'name' => 'instagram',
                                                'error' => $errors->has('instagram'),
                                                'value' => $user->meta->instagram,
                                            ]) @endinput
                
                                            @icon([
                                                'icon' => 'instagram',
                                                'color' => 'blue',
                                                'error' => $errors->has('instagram'),
                                            ]) @endicon
                
                                        @endFormGroup
                
                                    </div>
                
                                    <div class="col-md-4">
                
                                        @FormGroup([
                                            'error' => $errors->first('twitter'),
                                            'left' => true,
                                        ])
                
                                            @input([
                                                'name' => 'twitter',
                                                'error' => $errors->has('twitter'),
                                                'value' => $user->meta->twitter,
                                            ]) @endinput
                
                                            @icon([
                                                'icon' => 'twitter',
                                                'color' => 'blue',
                                                'error' => $errors->has('twitter'),
                                            ]) @endicon
                
                                        @endFormGroup
                
                                    </div>

                                    <div class="col-md-4">
                
                                        @FormGroup([
                                            'error' => $errors->first('youtube'),
                                            'left' => true,
                                        ])
                
                                            @input([
                                                'name' => 'youtube',
                                                'error' => $errors->has('youtube'),
                                                'value' => $user->meta->youtube,
                                            ]) @endinput
                
                                            @icon([
                                                'icon' => 'youtube',
                                                'color' => 'blue',
                                                'error' => $errors->has('youtube'),
                                            ]) @endicon
                
                                        @endFormGroup
                
                                    </div>
                
                                </div>

                            </article>

                        @endtabPanel

                        <div class="m-t">
                        
                            <button type="submit" class="btn btn-primary">

                                @icon([ 'icon' => 'check' ]) @endicon @lang('Save')
            
                            </button>

                        </div>

                    @endtabContent

                @endtab
                
            @endform

        </section>

    </div>

@endsection