<form action="{{ route('questions.store') }}" method="POST">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="inputNom">Test</label>
            <select name="test_id" class="form-control">
                <option value="default" disabled selected>Choisissez le test</option>
                @foreach ($tests as $test)
                    <option value="{{ $test->id }}">{{ $test->nom }}</option>
                @endforeach
            </select>
            @error('test_id')
                <p class="text-danger"> {{ $message }} </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="inputDescription">Question</label>
            <div class="d-flex">
                <input name="question" class="form-control" placeholder="Entrez la description">
            </div>
            @error('question')
                <p class="text-danger"> {{ $message }} </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="inputDescription">Reponse</label>
            <div class="d-flex mb-1">
                <input name="reponse" class="form-control" id="" placeholder="Entrez la Reponse">
            </div>
            @error('reponse')
                <p class="text-danger"> {{ $message }} </p>
            @enderror
        </div>
        <div class="d-flex">
            <a href="{{ route('questions.index') }}" class="btn btn-default">Annuler</a>
            <button type="submit" class="btn btn-info ml-2">Ajouter</button>
        </div>
    </div>

</form>
