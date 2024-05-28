<x-layout>
    <main>
        <section class="contact-form">
            <h1>Contattaci</h1>
            @if (session('success'))
                <div class="success-msg">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('contact-saved') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                    @error('email')
                    <div class="error-msg">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome">
                    @error('nome')
                    <div class="error-msg">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="cognome">Cognome:</label>
                    <input type="text" id="cognome" name="cognome">
                    @error('cognome')
                    <div class="error-msg">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="messaggio">Messaggio:</label>
                    <textarea id="messaggio" name="messaggio" rows="4"></textarea>
                    @error('messaggio')
                    <div class="error-msg">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <button type="submit">Invia</button>
            </form>
        </section>
    </main>
</x-layout>
