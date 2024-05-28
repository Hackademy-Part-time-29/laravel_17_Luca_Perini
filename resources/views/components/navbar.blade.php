<nav class="navbar">
    <ul>
        <li><a href="{{route('welcome')}}">Home</a></li>
        <li><a href="{{route('contact-us')}}">Contattaci</a></li>
        <li><a href="#articoli">Articoli</a></li>
        <li><a href="#categorie">Categorie</a></li>
        <li><a href="{{route('genre.index')}}">Generi</a></li>

        @auth
    <span>
        <h4><li class="dropdown">
            <a href="#categorie" class="dropbtn">Bentornato, {{ auth()->user()->name }}!</a>
            <div class="dropdown-content">
                <a href="#" onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Logout</a>
                <form id="form-logout" method="POST" action="{{ route('logout') }}" class="d-none">
                    @csrf
                </form>
                <a href="#categoria2">+ Aggiungi Articolo</a>
                <a href="#categoria3">+ Aggiungi Categoria</a>
            </div>
        </li></h4>
    </span>
    @else
    <li><a href="{{route('register')}}">Registrati</a></li>
    <li><a href="{{route('login')}}">Login</a></li>
    @endauth
    <form method="GET" action="{{route('anime.search')}}" class="d-flex" role="search">
        <input type="text" class="search-input" placeholder="Cerca..." name="q">
            <button class="search-button">Cerca:</button>
      </form>
    </ul>
</nav>