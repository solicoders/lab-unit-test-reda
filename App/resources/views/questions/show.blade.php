<!DOCTYPE html>
<html lang="fr">
@extends('layouts.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Détails du Question</h1>
                </div>
                <div class="col-sm-6">
                    <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-default float-right"><i class="far fa-edit"></i> Modifier</a>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-sm-12">
                                <label for="nom">Question:</label>
                                <p>{{ $question->question }}</p>
                            </div>
                            <div class="col-sm-12">
                                <label for="description">Reponse:</label>
                                <p>{{ $question->reponse }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
</body>

</html>
