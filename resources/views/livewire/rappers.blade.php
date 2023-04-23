<div class = 'bg-black text-white'>
    @foreach ($rappers as $rapper)
        <div>{{ $rapper['name'] }}</div>
        <div>{{ $rapper['description'] }}</div>
    @endforeach

</div>
