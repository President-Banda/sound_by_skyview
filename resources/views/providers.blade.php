<h1>{{ $heading }}</h1>

@foreach ($owners as $owner )
<h1 style="padding: 50px">{{ $owner['id'] }}</h1>
<p style="justify-content: center; margin:50px">{{ $owner['description'] }}</p>
    
@endforeach