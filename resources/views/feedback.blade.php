@extends('shared.theme')

@section('stylesheets')

    <link rel="stylesheet" href="{{ asset('css/lib/ion-range-slider/ion.rangeSlider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lib/ion-range-slider/ion.rangeSlider.skinHTML5.css') }}">

@endsection

@section('scripts')

    <script src="{{ asset('js/lib/ion-range-slider/ion.rangeSlider.js') }}"></script>
    <script>

        $(document).ready(function() {

            $(".slider").ionRangeSlider({
                min: 1,
                max: 5,
                from: 1,
                grid: true,
                grid_num: 4,
                hide_min_max: true
            });

        });
        
    </script>

@endsection

@section('content-header')

    @Header([ 'icon' => 'thumbs-o-up', 'url' => '/help' ]) @lang('Feedback') @endHeader

@endsection

@section('content')

    <div class="container-fluid">

        @Alerts([
            'status' => false,
            'errors' => $errors->any(),
        ]) @endAlerts

        <section>

            @box([])

                @form([ 'method' => 'post', 'url' => '/feedback' ])

                    <h5 class="with-border">
                        @lang('Your feedback is very important to us!')
                    </h5>

                    <p>@lang('If you find any bug, want to ask a question, wish to evaluate us or suggest a new feature, feel free to use the form below.')</p>
                    <p>@lang('We will do our best to ensure your good experience here.')</p>

                    <div class="row">

                        <div class="col-md-12">

                            <div class="form-group">

                                <label class="text-muted">@lang('Select the Subject')</label>

                                <select
                                    name="type"
                                    class="form-control {{ $errors->has('type') ? 'form-control-danger' : '' }}"
                                >
                                    <option value=""></option>
                                    <option value="bug" {{ old('type') == 'bug' ? 'selected' : '' }}>@lang('System Bug')</option>
                                    <option value="support" {{ old('type') == 'support' ? 'selected' : '' }}>@lang('System Support')</option>
                                    <option value="evaluate" {{ old('type') == 'evaluate' ? 'selected' : '' }}>@lang('Evaluate Us')</option>
                                    <option value="suggestion" {{ old('type') == 'suggestion' ? 'selected' : '' }}>@lang('Suggestion')</option>
                                    <option value="another" {{ old('type') == 'another' ? 'selected' : '' }}>@lang('Another Subject')</option>
                                </select>

                                @if ($errors->has('type'))
                                    <small class="text-danger">
                                        <i class="fa fa-long-arrow-right"></i> {{ $errors->first('type') }}
                                    </small>
                                @endif

                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-12">

                            <div class="form-group">

                                <textarea
                                    name="description"
                                    rows="4"
                                    class="form-control {{ $errors->has('description') ? 'form-control-danger' : '' }}"
                                    placeholder="@lang('Describe your message in a easy way.')"
                                >{{ old('description') }}</textarea>

                                @if ($errors->has('description'))
                                    <small class="text-danger">
                                        <i class="fa fa-long-arrow-right"></i> {{ $errors->first('description') }}
                                    </small>
                                @endif

                            </div>

                        </div>

                    </div>

                    <div class="m-t">

                        <button type="submit" class="btn btn-primary">

                            @icon([ 'icon' => 'check' ]) @endicon @lang('Save')
                            
                        </button>

                    </div>

                @endform

            @endbox

        </section>

    </div>

@endsection