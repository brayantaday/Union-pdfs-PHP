<?php

require_once "vendor/autoload.php";
use iio\libmergepdf\Merger;
$merger = new Merger;
$merger->addIterator(['ejemplo.pdf', 'ejemplo2.pdf']);
$createdPdf = $merger->merge();
var_dump($createdPdf);
$nombreArchivo = "combinado.pdf";

header("Content-type:application/pdf");
header("Content-disposition: inline; filename=$nombreArchivo");
header("content-Transfer-Encoding:binary");
header("Accept-Ranges:bytes");
# Imprimir salida luego de encabezados
echo $createdPdf;
exit;
?>