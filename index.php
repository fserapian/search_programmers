<?php include_once 'config/init.php'; ?>

<?php
// init template obj
$template = new Template('views/home.php');
// init programmeur
$programmeur = new Programmeur();

if (isset($_POST['submit'])) {
    $langage = $_POST['langage'];

    $template->progs = $programmeur->findByLanguage($langage);

    if (!($template->progs)) {
        redirect('index.php', 'Langage introuvable', 'error');
    }
} else {
    $template->langs = $programmeur->getLangages();
    $template->progs = $programmeur->getProgrammeurs();
}

echo $template;
