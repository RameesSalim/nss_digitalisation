<?php
require_once 'vendor/dompdf/lib/html5lib/Parser.php';
require_once 'vendor/dompdf/src/Autoloader.php';
Dompdf\Autoloader::register();

// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;

//Setting Font
$options = new Options();
$dompdf->set_option('defaultFont', 'Courier');
$dompdf = new Dompdf($options);


$cart_body='<html><body><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><center><font size="19px"><center><u>EXTRACT OF ADMISSION REGISTER MAINTAINED AT G.H.S.PALISSERY</u></center></font><br><br><br><font size="16px"><p style="text-align:left;">1. Admission No.:<br>2. Name	:<br>3. Name of parent or Guardian and <br> the relationship to the Guardian :<br>4. Occupation of parent or Guardian<br> and his residence :<br> 5. School  previously attended the<br> Periods spent in each Std. : <br> 6. Date of admission : <br>7. Date of birth : <br>8. Religion	:<br>9. Does the pupil belongs to SC/ST,<br> OBC or he/she convert from SC/ST :<br>10. Standard on Admission :<br>11. Standard on leaving :<br>12.  Date of leaving :<br>
	13.  No &  Date of transfer  Certificate<br> produced on admission. : <br>
	14.   No & Date of certificate of transfer<br> granted on leaving : <br>
	15.   Reason for Leaving :<br>16.   Date of Vaccination :<br>17.   Remarks :<br>			';
// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($cart_body);

// (Optional) Setup the paper size and orientation	
/*$dompdf->setPaper('A4', 'portrait');*/

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
?>