
<div class="container-fluid">

    <div class="tbl">
        <div class="tbl-row">

            <div class="tbl-cell tbl-cell-action">
                
                @icon([ 'icon' => $icon, 'color' => 'blue-grey' ]) @endicon

            </div>
            <div class="tbl-cell">
                
                <h4>{{ $slot }}</h4>
                
            </div>

            @if (empty($noAction))

                <div class="tbl-cell tbl-cell-action">
                    <a class="btn btn-secondary-outline" href="{{ !empty($url) ? url($url) : url('/home') }}">
                        @icon([ 'icon' => 'arrow-left' ]) @endicon
                    </a>
                </div>

            @endif

        </div>
    </div>
    
</div>