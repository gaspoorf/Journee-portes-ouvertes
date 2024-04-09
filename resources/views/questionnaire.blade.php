@extends("layouts.master")

@section('navbar-class', 'navbar-questionnaire')
@section('content')

   <div>
      <h1>Questionnaires</h1>
      @foreach ($questionnaires as $questionnaire)
         <div class="questionnaire" onclick="window.location.href = '{{ route('questionnaire.show', $questionnaire->id) }}'">
            <h2>{{ $questionnaire->titre }}</h2>
            <p>{{ $questionnaire->description }}</p>
         </div>
      @endforeach
   </div>

@endsection