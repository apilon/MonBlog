<?php
if (isset($_GET['test'])) {
    if ($_GET['test'] == 'modeleBillet') {
        require 'Tests/Modeles/testBillet.php';
    } else if ($_GET['test'] == 'vueErreur') {
        require 'Tests/Vues/testVueErreur.php';
    }
}
?>
<h3>Tests de Modèles</h3>
<ul>
    <li>
        <a href="tests.php?test=modeleBillet">Billet</a>
    </li>
</ul>
<h3>Tests de Vues</h3>
<ul>
    <li>
        <a href="tests.php?test=vueErreur">Erreur</a>
    </li>
</ul>
