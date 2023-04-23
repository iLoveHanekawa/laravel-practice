<div class = 'bg-black text-white'>
    @csrf
    @foreach ($rappers as $rapper)
        <div>{{ $rapper['name'] }}</div>
        <div>{{ $rapper['description'] }}</div>
    @endforeach

</div>
