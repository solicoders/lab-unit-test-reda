<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une Question</title>
</head>

@extends('layouts.layout')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title"> <i class="nav-icon fas fa-table"></i> Ajouter une Question</h3>
                        </div>
                        @include('questions.form')
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection
</body>

</html>
