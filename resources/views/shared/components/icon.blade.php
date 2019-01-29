
@if (!empty($error))

    <i class="fa fa-times color-red"></i>

@elseif (!empty($font))

    <i class="font-icon font-icon-{{ !empty($icon) ? $icon : 'home' }}"></i>

@else

    <i class="fa fa-{{ !empty($icon) ? $icon : 'home' }} color-{{ !empty($color) ? $color : '' }}"></i>

@endif