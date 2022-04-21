<header>
    <div class="container">
        <div class="header-info">
            <a href="{{ route('home.index') }}">
                <h1>Movies</h1> 
            </a>
            <div>
            {{-- <a href="{{ route('vote.show') }}">
                <button class="vote-btn">Ordina per voto</button>
            </a> --}}
            <a href="{{ route('films.show') }}">
                <button class="vote-btn">i più votati</button>
            </a> 
            </div>
        </div>
    </div>
</header>