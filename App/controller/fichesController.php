<?php

namespace App\controller\fichesController;

include_once('App/model/connection.php');
include_once('App/model/repository/fichesRepository.php');;


if (!empty($connection)) {
    listerFichesController($connection);
}

/**
 * @param $connection
 * @return void
 */
function listerFichesController($connection)
{
    $fiches = listerToutesLesFiches($connection);

    include_once('View/fiches/listerView.php');
}

/**
 * @param $connection
 * @return void
 */
function creerUneFiche($connection)
{
    include_once('View/fiches/creerView.php');
}


/**
 * @param $connection
 * @return void
 */
function modifierUneFiche($connection)
{
    include_once('View/fiches/modifierView.php');
}