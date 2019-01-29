@extends('shared.theme')

@section('stylesheets')

    <link rel="stylesheet" href="{{ asset('css/pages/profile.min.css') }}">

@endsection

@section('scripts')

@endsection

@section('content-header')

    @Header([ 'icon' => 'user' ]) {{ $user->name }} @endHeader

@endsection

@section('content')

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-3">

                <section>

                    @box([ 'class' => 'profile-card', 'noPadding' => true ])

                        @avatar([
                            'class' => 'img-fluid img-thumbnail',
                            'path' => $user->meta->avatar,
                        ]) @endavatar

                        <div class="profile-card-name m-t">{{ $user->name }}</div>

                        @if (!empty($user->meta->company))
                        
                            <div class="profile-card-location m-b-0">{{ $user->meta->company }}</div>
                            
                        @endif

                        <a href="mailto:{{ $user->email }}" class="btn btn-rounded btn-primary">
                        
                            @icon([ 'icon' => 'envelope' ]) @endicon @lang('Send')

                        </a>

                    @endbox

                </section>

            </div>

            <div class="col-md-6">

                <section>
                    
                    @box([ 'noPadding' => true ])

                        <header class="box-typical-header-sm">@lang('Personal Data')</header>

                        @if (!empty($user->meta->biography) ||
                             !empty($user->meta->interests) ||
                             !empty($user->meta->birth))

                            @if (!empty($user->meta->biography))

                                <article class="profile-info-item">
                                    <header class="profile-info-item-header">

                                        @icon([ 'icon' => 'align-left' ]) @endicon
                                        @lang('Biography')

                                    </header>
                                    <div class="text-block text-block-typical">

                                        <p>{{ $user->meta->biography }}</p>

                                    </div>
                                </article>
                            
                            @endif

                            @if (!empty($user->meta->interests))

                                <article class="profile-info-item">
                                    <header class="profile-info-item-header">

                                        @icon([ 'icon' => 'tags' ]) @endicon
                                        @lang('Interests')

                                    </header>
                                    <div class="text-block text-block-typical m-b">

                                        @foreach (explode(',', $user->meta->interests) as $interest)

                                            <span class="label label-pill label-default">{{ $interest }}</span>

                                        @endforeach

                                    </div>
                                </article>
                            
                            @endif

                            @if (!empty($user->meta->birth))

                                <article class="profile-info-item">
                                    <header class="profile-info-item-header">

                                        @icon([ 'icon' => 'heartbeat' ]) @endicon
                                        {{ $user->meta->birth->format('d M Y') }}

                                    </header>
                                </article>

                            @endif

                        @else

                            <div class="m-l m-r">

                                @alert([ 'type' => 'purple' ]) @lang('No personal data registered.') @endalert

                            </div>

                        @endif

                        <header class="box-typical-header-sm">@lang('Professional Data')</header>

                        @if (!empty($user->meta->company) ||
                             !empty($user->meta->country))

                            @if (!empty($user->meta->company))

                                <article class="profile-info-item">
                                    <header class="profile-info-item-header">

                                        @icon([ 'icon' => 'suitcase' ]) @endicon

                                        @if (!empty($user->meta->position))

                                            {{ $user->meta->position }} @lang('at')

                                        @endif

                                        {{ $user->meta->company }}

                                    </header>
                                </article>

                            @endif

                            @if (!empty($user->meta->country))

                                <article class="profile-info-item">
                                    <header class="profile-info-item-header">

                                        @icon([ 'icon' => 'globe' ]) @endicon
                                        
                                        @if (!empty($user->meta->city))

                                            {{ $user->meta->city }}

                                        @endif
                                        
                                        @if ($user->meta->country == 'BR')
                                            
                                            <span class="flag-icon flag-icon-br"></span>

                                        @elseif ($user->meta->country == 'US')

                                            <span class="flag-icon flag-icon-us"></span>

                                        @elseif ($user->meta->country == 'CA')

                                            <span class="flag-icon flag-icon-ca"></span>

                                        @else

                                            @lang('at') {{ $user->meta->country }}

                                        @endif

                                    </header>
                                </article>

                            @endif

                        @else

                            <div class="m-l m-r">

                                @alert([ 'type' => 'purple' ]) @lang('No professional data registered.') @endalert

                            </div>

                        @endif

                    @endbox

                </section>

            </div>

            <div class="col-md-3">

                <section>

                    @box([ 'noPadding' => true ])

                        <header class="box-typical-header-sm">@lang('Social Data')</header>

                        @if (!empty($user->meta->facebook) ||
                            !empty($user->meta->whatsapp) ||
                            !empty($user->meta->linkedin) ||
                            !empty($user->meta->instagram) ||
                            !empty($user->meta->twitter) ||
                            !empty($user->meta->youtube))

                            <ul class="profile-links-list">
                                
                                @if (!empty($user->meta->facebook))

                                    <li class="nowrap">
                                        @icon([ 'font' => true, 'icon' => 'fb-fill' ]) @endicon
                                        <a target="_blank"
                                            href="https://facebook.com/{{ $user->meta->facebook }}"
                                        >facebook.com/{{ $user->meta->facebook }}</a>
                                    </li>

                                @endif
                                
                                @if (!empty($user->meta->whatsapp))

                                    <li class="nowrap">
                                        @icon([ 'font' => true, 'icon' => 'comments-2' ]) @endicon
                                        <a target="_blank"
                                            href="https://api.whatsapp.com/send?phone={{ str_replace(' ', '', $user->meta->whatsapp) }}"
                                        >{{ $user->meta->whatsapp }}</a>
                                    </li>

                                @endif

                                @if (!empty($user->meta->linkedin))

                                    <li class="nowrap">
                                        @icon([ 'font' => true, 'icon' => 'linkedin' ]) @endicon
                                        <a target="_blank"
                                            href="https://linkedin.com/in/{{ $user->meta->linkedin }}"
                                        >linkedin.com/in/{{ $user->meta->linkedin }}</a>
                                    </li>

                                @endif

                                @if (!empty($user->meta->instagram))

                                    <li class="nowrap">
                                        @icon([ 'font' => true, 'icon' => 'instagram' ]) @endicon
                                        <a target="_blank"
                                            href="https://instagram.com/{{ $user->meta->instagram }}"
                                        >instagram.com/{{ $user->meta->instagram }}</a>
                                    </li>

                                @endif

                                @if (!empty($user->meta->twitter))

                                    <li class="nowrap">
                                        @icon([ 'font' => true, 'icon' => 'twitter' ]) @endicon
                                        <a target="_blank"
                                            href="https://twitter.com/{{ $user->meta->twitter }}"
                                        >twitter.com/{{ $user->meta->twitter }}</a>
                                    </li>

                                @endif

                                @if (!empty($user->meta->youtube))

                                    <li class="nowrap">
                                        @icon([ 'font' => true, 'icon' => 'play' ]) @endicon
                                        <a target="_blank"
                                            href="https://youtube.com/channel/{{ $user->meta->youtube }}"
                                        >youtube.com</a>
                                    </li>

                                @endif
                                    
                            </ul>
                        
                        @else

                            <div class="m-l m-r">

                                @alert([ 'type' => 'purple' ]) @lang('No social networks registered.') @endalert

                            </div>

                        @endif
    
                    @endbox
                    
                </section>

                <section>

                    @box([ 'noPadding' => true ])

                        <header class="box-typical-header-sm">@lang('Informations')</header>

                        <ul class="profile-info-item exp-timeline">

                            <li class="exp-timeline-item">
                                <div class="dot"></div>
                                <div class="tbl">
                                    <div class="tbl-row">
                                        <div class="tbl-cell">
                                            <div class="exp-timeline-range">@lang('Created At')</div>
                                            <div class="exp-timeline-status">{{ $user->created_at->format('d M Y') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            @if (!empty($user->last_seen_at))

                                <li class="exp-timeline-item">
                                    <div class="dot"></div>
                                    <div class="tbl">
                                        <div class="tbl-row">
                                            <div class="tbl-cell">
                                                <div class="exp-timeline-range">@lang('Last Seen At')</div>
                                                <div class="exp-timeline-status">{{ $user->last_seen_at->format('d M Y') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            @endif

                            @if (!empty($user->deleted_at))

                                <li class="exp-timeline-item">
                                    <div class="dot"></div>
                                    <div class="tbl">
                                        <div class="tbl-row">
                                            <div class="tbl-cell">
                                                <div class="exp-timeline-range">@lang('Deleted At')</div>
                                                <div class="exp-timeline-status">{{ $user->deleted_at->format('d M Y') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            @endif

                        </ul>
    
                    @endbox
                    
                </section>

            </div>

        </div>

    </div>

@endsection