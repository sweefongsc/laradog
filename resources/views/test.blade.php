@if (isset($name))  
<h1>Hello {{$name}}</h1>
@else
<h1>Test</h1>
@endif




<h1>{{ $name }}</h1>


@if ($name === 'Flavio')
<h1>Yo {{ $name }}</h1>
@else
<h1>Good morning {{ $name }}</h1>
@endif


@php
$cats = array("Fluffy", "Mittens", "Whiskers", "Felix");
@endphp


@for ($i = 0; $i < 10; $i++)
Count: {{ $i }}
@endfor
<ul>
@foreach ($cats as $cat)
<li>{{ $cat }}</li>
@endforeach
</ul>