<!DOCTYPE html>
<html lang="fr">
    <head>
        <link rel="icon" type="image/x-icon" href="../Public/images/favicon.ico">
        <link href="../Public/css/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo htmlentities($title) ?></title>
    </head>
    <body>
    <table>
        <caption>ANNUAIRE</caption>
        <thead>
        <th>
            <tr>
            <td>Civilité</td>
            <td>Prénom</td>
            <td>Nom</td>
            <td>CP</td>
            <td>ville</td>
                <td>pays</td>
                <td>téléphone</td>
            </tr>
        </th>
        <th>
            <tr>
                <td>Fax</td>
                <td>Email</td>
                <td>URL</td>
            </tr>
        </th>
        </thead>
        <?php
        foreach ($fiches as $fiche) {?>
        <tr>
            <td><?php printf("%s", htmlentities($fiche['civilite'])) ?></td>
            <td><?php printf("%s", htmlentities($fiche['prenom'])) ?></td>
            <td><?php printf("%s", htmlentities($fiche['nom'])) ?></td>
            <td><?php printf("%s", htmlentities($fiche['cp'])) ?></td>
            <td><?php printf("%s", htmlentities($fiche['ville'])) ?></td>
            <td><?php printf("%s", htmlentities($fiche['pays'])) ?></td>
            <td><?php printf("%s", htmlentities($fiche['telephone'])) ?></td>
        </tr>
        <tr>

            <td><?php printf("%s", htmlentities($fiche['fax'])) ?></td>
            <td><?php printf("%s", htmlentities($fiche['email'])) ?></td>
            <td><?php printf("%s", htmlentities($fiche['url'])) ?></td>
            <td><span onclick="" class="infobulle" aria-label="Créer"><i class="fa fa-edit" aria-hidden="true"></i></span></td>
            <td><span onclick="" class="infobulle" aria-label="Supprimer"><i class="fa fa-eraser" aria-hidden="true"></i></span></td>
            <?php
        } ?>
        </tr>
        </tbody>
    </table>
    </body>
</html>