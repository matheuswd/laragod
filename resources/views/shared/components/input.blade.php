
<input
    name="{{ $name }}"
    type="{{ !empty($type) ? $type : 'text' }}"
    class="form-control form-control-rounded {{ !empty($error) ? 'form-control-danger' : '' }}"
    placeholder="{{ !empty($title) ? __($title) : '' }}"
    value="{{ old($name) ? old($name) : ( !empty($value) ? $value : '' ) }}"
    {{ !empty($disabled) ? 'readonly' : '' }}
/>
