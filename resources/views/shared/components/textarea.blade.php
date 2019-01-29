
<textarea
    name="{{ $name }}"
    rows="{{ !empty($rows) ? $rows : 1 }}"
    class="form-control {{ !empty($error) ? 'form-control-danger' : '' }} {{ !empty($tags) ? 'tag-editor' : '' }}"
    placeholder="{{ !empty($title) ? __($title) : '' }}"
>{{ old($name) ? old($name) : ( !empty($value) ? $value : '' ) }}</textarea>