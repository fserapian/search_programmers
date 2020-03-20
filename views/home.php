<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap-lumen.min.css">
    <title>Home | Examen php/js</title>
</head>

<body>
    <div class="row">
        <div class="col-md-6 mx-auto mt-5">
            <!-- message -->
            <?php displayMessage(); ?>

            <h1 class="mb-4">Examen php/js</h1>
            <form action="index.php" method="post">
                <div class="form-group">
                    <label for="nomLang">Nom Langage</label>
                    <input type="text" name="langage" id="nomLang" class="form-control" placeholder="Entrez un nom de langage">
                </div>
                <input type="submit" name="submit" value="Go" class="btn btn-lg btn-primary mb-3">
            </form>

            <?php foreach ($progs as $prog) : ?>
                <div class="card mb-2">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $prog->nom; ?></h3>
                        <p class="card-text"><?php echo $prog->courriel; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</body>

</html>