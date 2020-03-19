<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\SgrSat\SgrSat;

$serie = 2;
$data_inicial = '2020-03-01';
$data_final = '2020-03-19';
$chave_seguranca = '24bb6087-3a03-4581-9b1f-4e8332879369';

try {
    $resp = SgrSat::consulta($serie, $data_inicial, $data_final, $chave_seguranca);

    header("Content-type: text/xml");
    echo $resp;

} catch (\Exception $e) {
    echo $e->getMessage();
}
