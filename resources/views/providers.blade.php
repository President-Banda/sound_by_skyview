<h1>{{ $heading }}</h1>

@foreach ($owners as $owner )
<h1>{{ $owner['id'] }}</h1>
<p>{{ $owner['description'] }}</p>
    
@endforeach