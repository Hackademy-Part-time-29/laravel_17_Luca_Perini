<x-layout>
    <div class="hero-content">
        <h1>I nostri Generi:</h1>
    </div>
    <div class="card-container">
        @foreach ($genres as $genre)
        <div class="card">
            <h1 class="card-title">{{$genre['name']}}</h1>
            <h2 class="card-subtitle">Numero Anime : {{$genre['count']}}</h2>
            <a href="{{route('genre.anime',['id'=>$genre['mal_id']])}}" class="card-link">Clicca qui</a>
        </div> 
        @endforeach
    </div>
</x-layout>