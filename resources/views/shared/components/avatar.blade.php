
<img class="{{ !empty($class) ? $class : '' }}"
    src="{{ !empty($path) ? ( asset('storage/' . $path) . '?' . rand() ) : asset('img/avatar-2-128.png') }}"
    alt="{{ $slot }}"
/>