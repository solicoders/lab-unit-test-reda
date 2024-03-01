<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Tests</title>
</head>

<body>
    <?php include_once "../layouts/heade.php" ?>
    <?php include_once "../layouts/nav.php" ?>
    <?php include_once "../layouts/aside.php" ?>

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Gestion Des Questions</h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="content">
            <div class="container-fluid">
                <?php include_once "./form.php" ?>
            </div>
        </div>
    </div>

    <?php include_once "../layouts/footer.php" ?>
    <?php include_once "../layouts/script-link.php"; ?>
</body>

</html>