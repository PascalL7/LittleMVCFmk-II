<?php $title = 'LISTER';

ob_start();
$content = ob_get_clean();
require('./View/template.php');
?>