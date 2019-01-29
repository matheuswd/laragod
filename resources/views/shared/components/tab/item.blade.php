
<li class="nav-item">

    <a class="nav-link {{ !empty($active) ? 'active show' : '' }}"
        href="#tabs-1-tab-{{ $idx }}"
        role="tab"
        data-toggle="tab"
        aria-selected="true"
    >
        <span class="nav-link-in color-{{ !empty($error) ? 'red' : '' }}">

            @icon([ 'icon' => $icon, 'color' => ( !empty($error) ? 'red' : '' ) ]) @endicon
            @lang($text)

        </span>
    </a>

</li>