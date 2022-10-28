<?php $title = 'CREER';

ob_start();

?>

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