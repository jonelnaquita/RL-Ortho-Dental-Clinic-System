<?php

//prevent , if not submit
if(!isset($_POST['downloadButton'])) dir();

$request = array('fullname'=>$_POST['fullname'], 'cnumber'=>$_POST['cnumber'], 'sex'=>$_POST['sex'], 'tested'=>$_POST['tested'], 'user'=>$_POST['user'], 'symptoms'=>$_POST['symptoms']);

//inlude template


ob_start();
require_once('templatePDF.php');
$template = ob_get_clean();

//inlcude dompdf library
require_once('vendor/autoload.php');
use Dompdf\Dompdf;
//use Dompdf\Options;

//$options = new Options();
//$options->set('isRemoteEnabled', true);
//$dompdf = new Dompdf($options);

//using pdf dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($template);

//set papger size 
// /$dompdf->setPaper('A4', 'portrait');

//Render the html to pdf
$dompdf->render();

//ouput to browser
$dompdf->stream('message-'.time());

//write pdf to directory
//file_put_contents('pdfs/message-'.time().'.pdf', $dompdf->output());
?>