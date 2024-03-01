<form action="" method="POST">
    <div class="card-body">
        <div class="form-group">
            <label for="inputNom">Test</label>
            <select class="form-control">
                <option value="default">Choisissez le test</option>
                <option value="Inscription à Solicode">Inscription à Solicode</option>
            </select>
        </div>

        <div class="form-group">

        </div>

        <div class="form-group">
            <label for="inputDescription">Reponse</label>
            <div class="d-flex">
                <input name="projectDescription" class="form-control" value="Reponse de Question" id="" placeholder="Entrez la description">
                <input type="radio" name="reponse" class="ml-4" value="Question" id="" placeholder="Entrez la description">
            </div>
        </div>

    </div>

    <div class="card-footer">
        <a href="./index.php" class="btn btn-default">Annuler</a>
        <button type="submit" class="btn btn-info">Ajouter</button>
    </div>
</form>