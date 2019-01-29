@extends('shared.theme')

@section('stylesheets')

@endsection

@section('scripts')

@endsection

@section('content-header')

    @Header([ 'icon' => 'support', 'url' => '/help' ]) @lang('Frequently Asked Questions') @endHeader

@endsection

@section('content')

    <div class="container-fluid">

        <section>
        
            @box([])

                <div class="row">

                    <div class="col-md-6">

                        <h5>What about new features?</h5>
                        <p class="color-blue-grey">Vivamus eu porttitor magna. Nullam dictum, ex nec vehicula finibus, nunc nulla feugiat lacus, eu euismod turpis mauris sit amet ligula. Donec vel facilisis ante. Nunc ac ex augue. Nulla ac placerat dui. Aliquam erat volutpat. Nam ut lectus est. Maecenas egestas purus at semper sagittis. Morbi pulvinar sit amet elit at fringilla. Nullam quam quam, tristique vitae est gravida, lobortis rhoncus ipsum. Praesent nec sem sed nibh euismod blandit. Phasellus pellentesque sed lectus vel suscipit.</p>

                    </div>

                    <div class="col-md-6">

                        <h5>How to recovery my password?</h5>
                        <p class="color-blue-grey">Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer tincidunt vel nulla eget posuere. Nunc dapibus diam ac erat euismod, in imperdiet velit lacinia. Maecenas vestibulum sagittis eros nec tincidunt. Proin quis varius nisl, in gravida ligula. Phasellus id odio ullamcorper, lobortis nulla id, convallis massa. Mauris accumsan at arcu et luctus. Donec bibendum varius dictum. Nulla facilisi.</p>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6">

                        <h5>How to build something great?</h5>
                        <p class="color-blue-grey">Vivamus eu porttitor magna. Nullam dictum, ex nec vehicula finibus, nunc nulla feugiat lacus, eu euismod turpis mauris sit amet ligula. Donec vel facilisis ante. Nunc ac ex augue. Nulla ac placerat dui. Aliquam erat volutpat. Nam ut lectus est. Maecenas egestas purus at semper sagittis. Morbi pulvinar sit amet elit at fringilla. Nullam quam quam, tristique vitae est gravida, lobortis rhoncus ipsum. Praesent nec sem sed nibh euismod blandit. Phasellus pellentesque sed lectus vel suscipit.</p>

                    </div>

                    <div class="col-md-6">

                        <h5>Why I need to verify my email?</h5>
                        <p class="color-blue-grey">Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer tincidunt vel nulla eget posuere. Nunc dapibus diam ac erat euismod, in imperdiet velit lacinia. Maecenas vestibulum sagittis eros nec tincidunt. Proin quis varius nisl, in gravida ligula. Phasellus id odio ullamcorper, lobortis nulla id, convallis massa. Mauris accumsan at arcu et luctus. Donec bibendum varius dictum. Nulla facilisi.</p>

                    </div>

                </div>

            @endbox

        </section>

    </div>

@endsection