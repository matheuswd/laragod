
<input
    name="{{ $name }}"
    type="date"
    class="form-control form-control-rounded {{ !empty($error) ? 'form-control-danger' : '' }}"
    value="{{ old($name) ? old($name) : ( !empty($value) ? $value->format('Y-m-d') : '1969-12-31' ) }}"
    {{ !empty($disabled) ? 'readonly' : '' }}
/>
