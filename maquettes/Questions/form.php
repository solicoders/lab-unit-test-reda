<form action="" method="POST">
    <div class="card-body">
        <div class="form-group">
            <label for="inputNom">Question</label>
            <input name="projectName" type="text" class="form-control" id="inputNom" placeholder="Entrez le titre" value="CNMH">
        </div>

        <div class="form-group">
            <label for="inputDescription">Reponse</label>
            <textarea name="projectDescription" class="form-control" id="" placeholder="Entrez la description">Description de CNMH</textarea>
        </div>

    </div>

    <div class="card-footer">
        <a href="./index.php" class="btn btn-default">Annuler</a>
        <button type="submit" class="btn btn-info">Ajouter</button>
    </div>
</form>