@extends('shared.theme')

@section('stylesheets')

@endsection

@section('scripts')

@endsection

@section('content-header')

    @Header([ 'icon' => 'group' ]) @lang('Users') @endHeader

@endsection

@section('content')

    <div class="container-fluid">

        @Alerts([
            'status' => session('status'),
            'errors' => false,
        ]) @endAlerts

        <section>

            @form([ 'url' => '/users/search' ])

                @FormGroup([ 'clean' => true ])

                    <div class="input-group">

                        <div class="input-group-prepend">

                            <a href="{{ url('/users/add') }}" class="btn btn-info">

                                @icon([ 'icon' => 'plus' ]) @endicon

                            </a>

                        </div>

                        @input([
                            'name' => 'search',
                            'title' => 'Search',
                            'value' => request('search'),
                        ]) @endinput

                        <div class="input-group-append">

                            <button type="submit" class="btn btn-primary">

                                @icon([ 'icon' => 'search' ]) @endicon

                            </button>

                        </div>

                    </div>

                @endFormGroup

            @endform

        </section>

        <section>

            @tab([])
        
                @tabNav([])

                    @tabItem([
                        'active' => true,
                        'idx' => 1,
                        'icon' => 'list',
                        'text' => 'List',
                    ]) @endtabItem

                    @tabItem([
                        'idx' => 2,
                        'icon' => 'th-large',
                        'text' => 'Card',
                    ]) @endtabItem

                @endtabNav

                @tabContent([])

                    @tabPanel([
                        'active' => true,
                        'idx' => 1,
                    ])

                        <article>
                            
                            @table([
                                'header' => [
                                    '#', 'Full Name', 'Email', 'Actions',
                                ],
                            ])

                                @if (count($users) == 0)

                                    <tr>
                                        <td colspan="4" class="color-red">@lang('No Results Found.')</td>
                                    </tr>

                                @else

                                    @foreach ($users as $user)

                                        <tr>
                                            <td class="table-photo">
                                                
                                                @avatar([
                                                    'class' => '',
                                                    'path' => $user->meta->avatar,
                                                ]) @endavatar

                                            </td>
                                            <td>{{ $user->name }}</td>
                                            <td>
                                                <a class=""
                                                    target="_blank"
                                                    href="mailto:{{ $user->email }}"
                                                >
                                                    {{ $user->email }}
                                                </a>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-primary"
                                                    href="{{ url('/users/' . $user->id . '/edit') }}"
                                                >
                                                    @icon([ 'icon' => 'wrench' ]) @endicon
                                                </a>
                                                <a class="btn btn-sm btn-primary"
                                                    href="{{ url('/users/' . $user->id) }}"
                                                >
                                                    @icon([ 'icon' => 'star-o' ]) @endicon
                                                </a>
                                            </td>
                                        </tr>

                                    @endforeach

                                @endif

                            @endtable
                            
                        </article>

                    @endtabPanel

                    @tabPanel([
                        'idx' => 2,
                    ])

                        <article>

                            @if (count($users) == 0)

                                <p class="color-red text-center">@lang('No Results Found.')</p>

                            @else

                                <div class="row">

                                    @foreach ($users as $user)

                                        @card([])

                                            @avatar([
                                                'class' => 'img-fluid img-thumbnail',
                                                'path' => $user->meta->avatar,
                                            ]) @endavatar

                                            <h4 class="text-truncate m-t m-b">{{ $user->name }}</h4>
                                            <p class="text-truncate m-b">
                                                <a target="_blank"
                                                    href="mailto:{{ $user->email }}"
                                                >
                                                    {{ $user->email }}
                                                </a>
                                            </p>
                                            <a class="btn btn-sm btn-primary"
                                                href="{{ url('/users/' . $user->id . '/edit') }}"
                                            >
                                                @icon([ 'icon' => 'wrench' ]) @endicon
                                            </a>
                                            <a class="btn btn-sm btn-primary"
                                                href="{{ url('/users/' . $user->id) }}"
                                            >
                                                @icon([ 'icon' => 'star-o' ]) @endicon
                                            </a>

                                        @endcard

                                    @endforeach

                                </div>

                            @endif
                            
                        </article>

                    @endtabPanel

                    <div class="m-t text-center">

                        {{ $users->links() }}
                        
                    </div>

                @endtabContent

            @endtab

        </section>
        
    </div>

@endsection