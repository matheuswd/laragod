
<form method="post"
    name="{{ !empty($method) ? $method : '' }}"
    action="{{ url(!empty($url) ? $url : '/') }}"
    class="{{ !empty($class) ? $class : '' }}"
    enctype="{{ !empty($fileUpload) ? 'multipart/form-data' : 'application/x-www-form-urlencoded' }}"
>

    @csrf
    @method(!empty($method) ? $method : 'post')

    {{ $slot }}

</form>