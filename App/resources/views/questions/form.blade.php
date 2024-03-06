<form action="{{ !isset($question->id) ? route('questions.store') : route('questions.update', $question->id) }}"
    method="POST">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="inputNom">Test</label>
            <select name="test_id" class="form-control">
                <option value="default">Choisissez le test</option>
                @foreach ($tests as $test)
                    <option value="{{ $test->id }}" {{ $question->test_id == $test->id ? 'selected' : '' }}>
                        {{ $test->nom }}</option>
                @endforeach
            </select>
            @error('test_id')
                <p class="text-danger"> {{ $message }} </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="inputDescription">Question</label>
            <div class="d-flex">
                <input value="{{ $question->question }}" name="question" class="form-control"
                    placeholder="Entrez la description">
            </div>
            @error('question')
                <p class="text-danger"> {{ $message }} </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="inputDescription">Reponse</label>
            <div class="d-flex mb-1">
                <input value="{{ $question->reponse }}" name="reponse" class="form-control" id=""
                    placeholder="Entrez la Reponse">
            </div>
            @error('reponse')
                <p class="text-danger"> {{ $message }} </p>
            @enderror
        </div>
        <div class="d-flex">
            <a href="{{ route('questions.index') }}" class="btn btn-default">Annuler</a>
            <button type="submit" class="btn btn-info ml-2">
                {{ !isset($question->id) ? 'Ajouter' : 'Modifier' }}
            </button>
        </div>
    </div>

</form>
