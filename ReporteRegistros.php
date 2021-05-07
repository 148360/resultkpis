<?php

  include_once "dompdf/autoload.inc.php";
  use Dompdf\Dompdf;
  $pdf=new Dompdf();
  ob_start();
   include_once "ContenidoRegistros.php";
  $html=ob_get_clean();
  $pdf->loadhtml($html);
  $pdf->setPaper("A3","landscape");
  $pdf->render();
  $pdf->stream();


?>

