<?php

class pdfController
{

    public function __construct(){
        require_once "Models/PtcModel.php";
       
    }
    public function mostrarPdf()
    {
        $d = 12;
        $ptc = new ptc();
        $resultado = $ptc->getPdf($d,$d);
        if ($resultado) {
            // Establece las cabeceras HTTP para indicar que se trata de un archivo PDF
            header("Content-type: application/pdf");
            header("Content-Disposition: inline; filename=mi_pdf.pdf");
            echo $resultado['pdf_blob'];
        } else {
            echo "El archivo PDF no se pudo cargar.";
        }
    }
}
