<h1>Question {{ $question }}</h1>

<form action="{{ route('questionnaire.repondre') }}" method="post">
    @csrf
    <input type="hidden" name="question" value="{{ $question }}">
    <label for="reponse">Réponse :</label>
    <input type="text" name="reponse" id="reponse">
    <input type="submit" value="Suivant">
</form>