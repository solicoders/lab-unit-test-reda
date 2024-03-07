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
            <label for="inputDescription">Question</label>
            <div class="d-flex">
                <input name="projectDescription" class="form-control" value="Quel langage est principalement utilisé pour rendre les pages web interactives et dynamiques ?" id="" placeholder="Entrez la description">
            </div>
        </div>

        <div class="form-group">
            <label for="inputDescription">Reponse</label>
            <div class="d-flex mb-1">
                <input name="projectDescription" class="form-control" value="JavaScript" id="" placeholder="Entrez la description">
                <input type="radio" name="reponse" class="ml-4" checked>
            </div>
            <div class="d-flex mb-1">
                <input name="projectDescription" class="form-control" value="HTML" id="" placeholder="Entrez la description">
                <input type="radio" name="reponse" class="ml-4">
            </div>
            <div class="d-flex mb-1">
                <input name="projectDescription" class="form-control" value="CSS" id="" placeholder="Entrez la description">
                <input type="radio" name="reponse" class="ml-4">
            </div>
        </div>
        <div class="d-flex">
            <a href="./index.php" class="btn btn-default">Annuler</a>
            <button type="submit" class="btn btn-info ml-2">Ajouter</button>
        </div>
    </div>

</form>