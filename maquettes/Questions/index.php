<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Tests</title>
</head>

<?php include_once "../layouts/heade.php" ?>

<body class="sidebar-mini" style="height: auto;">
    <?php include_once "../layouts/nav.php" ?>
    <?php include_once "../layouts/aside.php" ?>

    <div class="content-wrapper" style="min-height: 1302.4px;">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Liste des Questions</h1>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-sm-right">
                            <a href="./create.php" class="btn btn-info">
                                <i class="fas fa-plus"></i> Ajouter Une Question
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header col-md-12">
                                <div class=" p-0">
                                    <div class="input-group input-group-sm float-sm-right col-md-3 p-0">
                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Recherche">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body table-responsive p-0">
                                <table class="table table-striped text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Question</th>
                                            <th>Reponse</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?= substr('Quel est le langage utilisé pour définir la structure et le contenu des pages web ?', 0, 50) ?></td>
                                            <td>
                                                HTML (HyperText Markup Language)
                                            </td>
                                            <td class="text-center">
                                                <a href="./show.php" class='btn btn-default btn-sm'>
                                                    <i class="far fa-eye"></i>
                                                </a>
                                                <a href="./edit.php" class="btn btn-sm btn-default"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <button type="button" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><?= substr(' Quel langage est utilisé pour styliser les pages web et définir leur présentation visuelle ?', 0, 50) ?></td>
                                            <td>
                                                CSS (Cascading Style Sheets)
                                            </td>
                                            <td class="text-center">
                                                <a href="./show.php" class='btn btn-default btn-sm'>
                                                    <i class="far fa-eye"></i>
                                                </a>
                                                <a href="./edit.php" class="btn btn-sm btn-default"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <button type="button" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><?= substr('Quel langage est principalement utilisé pour rendre les pages web interactives et dynamiques ?', 0, 50) ?></td>
                                            <td>
                                                JavaScript
                                            </td>
                                            <td class="text-center">
                                                <a href="./show.php" class='btn btn-default btn-sm'>
                                                    <i class="far fa-eye"></i>
                                                </a>
                                                <a href="./edit.php" class="btn btn-sm btn-default"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <button type="button" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="d-flex justify-content-between align-items-center p-2">
                                <div class="d-flex align-items-center mb-2">
                                </div>
                                <div class="mr-5">
                                    <ul class="pagination  m-0 float-right">
                                        <li class="page-item"><a class="page-link text-secondary" href="#">«</a></li>
                                        <li class="page-item"><a class="page-link text-secondary active" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link text-secondary" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link text-secondary" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link text-secondary" href="#">»</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php include_once "../layouts/footer.php" ?>
    <?php include_once "../layouts/script-link.php"; ?>
</body>

</html>