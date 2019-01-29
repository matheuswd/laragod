
<div class="checkbox">

    <input
        name="{{ $name }}"
        id="{{ $name }}"
        type="checkbox"
        value="1"
        {{ old($name) ? 'checked' : ( !empty($checked) ? 'checked' : '' ) }}
    />

    <label for="{{ $name }}">{{ !empty($title) ? __($title) : '' }}</label>

</div>