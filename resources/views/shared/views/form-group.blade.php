
<div class="form-group">

    @if (empty($clean))

        <div class="form-control-wrapper form-control-icon-{{ !empty($left) ? 'left' : 'right' }}">

            {{ $slot }}

        </div>

    @else

        {{ $slot }}

    @endif

    @if (!empty($error))

        <small class="text-danger">

            @icon([ 'icon' => 'long-arrow-right', 'color' => 'red' ]) @endicon {{ $error }}

        </small>

    @endif

</div>