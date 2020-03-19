<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\SgrSat\SgrSat;


try {
    $resp = SgrSat::consulta(2, '2020-03-01', '2020-03-18', '24bb6087-3a03-4581-9b1f-4e8332879369');

    header("Content-type: text/xml");
    echo $resp;

} catch (\Exception $e) {
    echo $e->getMessge();
}
