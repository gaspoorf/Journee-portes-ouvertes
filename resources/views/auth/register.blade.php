@extends("layouts.master")


@section('content')

   <div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <label for="name">Nom</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required autofocus>
            </div>
            <div>
                <label for="first_name">Prenom</label>
                <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" required autofocus>
            </div>
            <div>
                <label for="email">Adresse e-mail</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required>
            </div>
            <div>
                <label for="email">Satus</label>
                <input type="text" name="status" id="status" value="{{ old('status') }}" required>
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div>
                <label for="password_confirmation">Confirmer le mot de passe</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required>
            </div>
            <button type="submit">S'inscrire</button>
        </form>
   </div>
   <p>Vous avez déjà un compte ? <a href="{{ route('login') }}">Connectez-vous ici</a>.</p>
   
@endsection
