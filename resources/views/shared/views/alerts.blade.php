
@if (!empty($status))

    @alert([ 'type' => 'success' ]) @lang($status) @endalert

@endif

@if (!empty($errors))

    @alert([ 'type' => 'danger' ]) @lang('Some fields are invalid. Please check your input.') @endalert

@endif