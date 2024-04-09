@extends("layouts.master")

@section('content')

    <div>
        <h1>Profil de {{ $user->name }}</h1>
        <p>Nom : {{ $user->name }}</p>
        <p>Email : {{ $user->email }}</p>
    </div>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Se déconnecter</button>
    </form>

    <div>
        <h3>
            Récapitulatif de ma visite 
        </h3>
    </div>

    <div>
        <p>J'ai visité :</p>

        @foreach($user->destinations as $destination)
        <p>{{ $destination->name }}</p>
        @endforeach
    </div>

    <!-- télécharger PDF -->
    <form method="GET" action="{{ route('download.pdf') }}">
        @csrf
        <button type="submit">Télécharger mon compte rendu</button>
    </form>


@endsection