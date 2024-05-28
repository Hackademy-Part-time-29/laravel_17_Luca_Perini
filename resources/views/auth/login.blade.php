<x-layout>
    <div class="hero-content">
        <h1>Sei già un utente di {{env('app_NAME')}}?</h1>
        <p>Accedi!</p>
    </div>
    <main class="contact-form">
        <form action="{{route('login')}}" method="post" class="form">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{old('email')}}" required>
                @error('email')
                <div class="error-msg">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                <div class="error-msg">
                    {{ $message }}
                </div>
            @enderror
            <button type="submit" class="btn">Login</button>
        </form>
    </main>
</x-layout>