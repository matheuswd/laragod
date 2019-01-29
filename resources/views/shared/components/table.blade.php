
<div class="table-responsive">

    <table class="table table-hover table-sm text-center">

        <thead>

            <tr>

                @foreach ($header as $text)

                    <th>@lang($text)</th>

                @endforeach

            </tr>

        </thead>

        <tbody>

            {{ $slot }}

        </tbody>

    </table>

</div>