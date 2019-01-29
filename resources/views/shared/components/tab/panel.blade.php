
<div class="tab-pane fade {{ !empty($active) ? 'in show active' : '' }}"
    id="tabs-1-tab-{{ $idx }}"
    role="tabpanel"
    >

    {{ $slot }}

</div>