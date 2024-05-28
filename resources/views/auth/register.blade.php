<x-layout>
    <div class="hero-content">
        <h1>Registrati su {{env('app_NAME')}}</h1>
        <p>Inserisci le tue credenziali:</p>
    </div>
    <main class="contact-form">

        <form action="{{route('register')}}" method="post" class="form">
            @if (session('success'))
            <div class="success-msg">
                {{ session('success') }}
            </div>
        @endif
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{old('email')}}" required>
                @error('email')
                <div class="error-msg">
                    {{ $message }}
                </div>
            @enderror
            </div>
            <div class="form-group">
                <label for="username">Nome Utente:</label>
                <input type="text" id="username" name="name" value="{{old('name')}}" required>
                @error('name')
                <div class="error-msg">
                    {{ $message }}
                </div>
            @enderror
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                <div class="error-msg">
                    {{ $message }}
                </div>
            @enderror
            </div>
            <div class="form-group">
                <label for="password">Confirm Password:</label>
                <input type="password" id="password" name="password_confirmation" required>
                @error('password_confirmation')
                <div class="error-msg">
                    {{ $message }}
                </div>
            @enderror
            </div>
            <button type="submit" class="btn">Registrati</button>
        </form>
    </main>
</x-layout>