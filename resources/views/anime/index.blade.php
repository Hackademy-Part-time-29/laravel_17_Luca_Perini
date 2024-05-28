<x-layout>
    <div class="hero-content">
        <h1>I nostri Generi:</h1>
    </div>
    <div class="card-container">
        @foreach ($animes as $anime)
        <div class="card">
            <img src="{{$anime['image']}}" alt="...">
            <h1 class="card-title">{{$anime['title_en']}}</h1>
            <h2 class="card-subtitle">{{$anime['title_jp']}}</h2>
            <p class="card-text">{{Str::limit($anime['synopsis'],100)}}</p>
            <a href="{{route('anime.show',$anime['id'])}}" class="card-link">Clicca qui</a>
        </div> 
        @endforeach
    </div>
</x-layout>