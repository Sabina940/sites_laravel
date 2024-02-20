<h1>Records</h1>

<ul>
    @foreach ($records as $record)
        <li>{{ $record }}</li>
    @endforeach

{{--    <?php--}}
{{--    foreach ($records as $record){--}}
{{--        echo "<li> $record </li>";--}}
{{--        //echo '<li>' . $record . '</li>';--}}
{{--    }--}}
{{--    ?>--}}
</ul>

<a href="/contact">Contact</a>

// link with route name
<a href="{{ route('contact') }}">Contact</a>
