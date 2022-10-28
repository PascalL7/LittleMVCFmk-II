<?php $title = 'MODIFIER';

ob_start();

?>

<h1>My store !</h1>
<h2>Last items</h2>

<?php
foreach ($fiches as $fiche) {
?>

    <div class="news">
        <h3>
            <?php printf("%s", htmlentities($fiche['prenom'])) ?>
        </h3>
    </div>

<?php
}
//$query->closeCursor();

$content = ob_get_clean();

require('template.php');
?>