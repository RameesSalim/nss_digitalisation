<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';

$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];

$mpdf = new \Mpdf\Mpdf([
    'fontDir' => array_merge($fontDirs, [
        __DIR__ . '/vendor/font/',
    ]),
    'fontdata' => $fontData + [
        'BookAntiqua' => [
            'R' => 'BookAntiqua.ttf',
            'I' => 'BookAntiqua.ttf',
        ]
    ],
    'default_font' => 'BookAntiqua'
    // ,['tempDir' => __DIR__ . '/custom/temp/dir/path']
]);

$data = '<HTML>
<HEAD>
	<STYLE TYPE="text/css">
	<!--
		@font-face{
			font-family:BookAntiqua;
			src:url("/vendor/font/BookAntiquda.ttf");
		}
		*{
			font-family:BookAntiqua;
		}
		@page { size: 8.5in 11in; margin-right: 0.75in; margin-top: 0.39in; margin-bottom: 1in }
		P { margin-bottom: 0.08in; direction: ltr; color: #000000; widows: 2; orphans: 2 }
		P.western { font-family: "BookAntiqua", serif; font-size: 12pt; so-language: en-US }
		P.cjk { font-family: "BookAntiqua", serif; font-size: 12pt }
		P.ctl { font-family: "BookAntiqua", serif; font-size: 12pt; so-language: ar-SA }
		p.a {line-height:200%;}
	-->
	</STYLE>
</HEAD>
<BODY LANG="en-US" TEXT="#000000" DIR="LTR">
<P CLASS="western" ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P CLASS="western" ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P CLASS="western" ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P CLASS="western" ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P CLASS="western" ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P CLASS="western" ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P CLASS="western" ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P CLASS="western" ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P CLASS="western" ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P CLASS="western" ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P CLASS="western" ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P CLASS="western" ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P CLASS="western" ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P CLASS="western" ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P CLASS="western" ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P CLASS="western" ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P CLASS="wesetrn" ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>';
$data .= '
<P CLASS="western" ALIGN=CENTER STYLE="margin-bottom: 0in;font-size:18px;"><FONT FACE="BookAntiqua"><U>EXTRACT
OF ADMISSION REGISTER MAINTAINED AT G.H.S</U></FONT><FONT FACE="BookAntiqua">.PALISSERY</FONT></P>';

$data .= '<P CLASS="western" STYLE="margin-bottom: 0in"><BR>
</P>
<P CLASS="western" STYLE="margin-bottom: 0in"><BR>
</P>';

$data .= '<table border="0" width="100%" style="font-family: s;">';
$data .= '
	<tr>
		<td width="5%">
			1.
		</td>
		<td width="40%">
			<p class="a">Admission No.</p>
		</td>
		<td width="55%">
			<b>:'.$_SESSION['data']['adno'].'</b>
		</td>
	</tr>';
$data .= '
	<tr>
		<td width="5%">
			<BR>
		</td>
		<td width="40%">
			<BR>
		</td>
		<td width="55%">
			<BR>
		</td>
	</tr>';
$data .= '
	<tr>
		<td width="5%">
			2.
		</td>
		<td width="40%">
			<p class="a">Name</p>
		</td>
		<td width="55%">
			<b>:'.$_SESSION['data']['name'].'</b>
		</td>
	</tr>';
	$data .= '
	<tr>
		<td width="5%">
			<BR>
		</td>
		<td width="40%">
			<BR>
		</td>
		<td width="55%">
			<BR>
		</td>
	</tr>';
$data .= '
	<tr>
		<td width="5%">
			3.
		</td>
		<td width="40%">
			<p class="a">Name of parent or Guardian and the relationship of the Guardian </p>
		</td>
		<td width="55%">
			<b>:'.$_SESSION['data']['parent_name'].'</b>
		</td>
	</tr>';
	$data .= '
	<tr>
		<td width="5%">
			<BR>
		</td>
		<td width="40%">
			<BR>
		</td>
		<td width="55%">
			<BR>
		</td>
	</tr>';
$data .= '
	<tr>
		<td width="5%">
			4.
		</td>
		<td width="40%">
			<p class="a">Occupation of parent or Guardian and his residence </p>
		</td>
		<td width="55%">
			<b>:'.$_SESSION['data']['parent_occup'].'</b>
		</td>
	</tr>';
	$data .= '
	<tr>
		<td width="5%">
			<BR>
		</td>
		<td width="40%">
			<BR>
		</td>
		<td width="55%">
			<BR>
		</td>
	</tr>';
$data .= '
	<tr>
		<td width="5%">
			5.
		</td>
		<td width="40%">
			<p class="a">School previuosly attended the Periods spent in each Std </p>
		</td>
		<td width="55%">
			<b>:'.$_SESSION['data']['school'].'</b>
		</td>
	</tr>';
	$data .= '
	<tr>
		<td width="5%">
			<BR>
		</td>
		<td width="40%">
			<BR>
		</td>
		<td width="55%">
			<BR>
		</td>
	</tr>';
$data .= '
	<tr>
		<td width="5%">
			6.
		</td>
		<td width="40%">
			<p class="a">Date of Admission </p>
		</td>
		<td width="55%">
			<b>:'.$_SESSION['data']['doa'].'</b>
		</td>
	</tr>';
	$data .= '
	<tr>
		<td width="5%">
			<BR>
		</td>
		<td width="40%">
			<BR>
		</td>
		<td width="55%">
			<BR>
		</td>
	</tr>';
$data .= '
	<tr>
		<td width="5%">
			7.
		</td>
		<td width="40%">
			<p class="a">Date of Birth :</p>
		</td>
		<td width="55%">
			<b>:'.$_SESSION['data']['dob'].'</b>
		</td>
	</tr>';
	$data .= '
	<tr>
		<td width="5%">
			<BR>
		</td>
		<td width="40%">
			<BR>
		</td>
		<td width="55%">
			<BR>
		</td>
	</tr>';
$data .= '
	<tr>
		<td width="5%">
			8.
		</td>
		<td width="40%">
			<p class="a">Religion</p>
		</td>
		<td width="55%">
			<b>:'.$_SESSION['data']['religion'].'</b>
		</td>
	</tr>';
	$data .= '
	<tr>
		<td width="5%">
			<BR>
		</td>
		<td width="40%">
			<BR>
		</td>
		<td width="55%">
			<BR>
		</td>
	</tr>';
$data .= '
	<tr>
		<td width="5%">
			9.
		</td>
		<td width="40%">
			<p class="a">Does the pupil belongs to SC/ST , OBC or he/she convert from SC/ST </p>
		</td>
		<td width="55%">
			<b>:'.$_SESSION['data']['scst'].'</b>
		</td>
	</tr>';
	$data .= '
	<tr>
		<td width="5%">
			<BR>
		</td>
		<td width="40%">
			<BR>
		</td>
		<td width="55%">
			<BR>
		</td>
	</tr>';
$data .= '
	<tr>
		<td width="5%">
			10.
		</td>
		<td width="40%">
			<p class="a">Standard on Admission </p>
		</td>
		<td width="55%">
			<b>:'.$_SESSION['data']['soa'].'</b>
		</td>
	</tr>';
	$data .= '
	<tr>
		<td width="5%">
			<BR>
		</td>
		<td width="40%">
			<BR>
		</td>
		<td width="55%">
			<BR>
		</td>
	</tr>';
$data .= '
	<tr>
		<td width="5%">
			11.
		</td>
		<td width="40%">
			<p class="a">Standard on Leaving</p>
		</td>
		<td width="55%">
			<b>:'.$_SESSION['data']['sol'].'</b>
		</td>
	</tr>';
	$data .= '
	<tr>
		<td width="5%">
			<BR>
		</td>
		<td width="40%">
			<BR>
		</td>
		<td width="55%">
			<BR>
		</td>
	</tr>';
$data .= '
	<tr>
		<td width="5%">
			12.
		</td>
		<td width="40%">
			<p class="a">Date of Leaving</p>
		</td>
		<td width="55%">
			<b>:'.$_SESSION['data']['dol'].'</b>
		</td>
	</tr>';
	$data .= '
	<tr>
		<td width="5%">
			<BR>
		</td>
		<td width="40%">
			<BR>
		</td>
		<td width="55%">
			<BR>
		</td>
	</tr>';
$data .= '
	<tr>
		<td width="5%">
			13.
		</td>
		<td width="40%">
			<p class="a">No. & Date of Transfer Certificate produced on admission </p>
		</td>
		<td width="55%">
			<b>:'.$_SESSION['data']['tca'].'</b>
		</td>
	</tr>';
	$data .= '
	<tr>
		<td width="5%">
			<BR>
		</td>
		<td width="40%">
			<BR>
		</td>
		<td width="55%">
			<BR>
		</td>
	</tr>';
$data .= '
	<tr>
		<td width="5%">
			14.
		</td>
		<td width="40%">
			<p class="a">No & Date of certificate of transfer granted on Leaving</p>
		</td>
		<td width="55%">
			<b>:'.$_SESSION['data']['tcl'].'</b>
		</td>
	</tr>';
	$data .= '
	<tr>
		<td width="5%">
			<BR>
		</td>
		<td width="40%">
			<BR>
		</td>
		<td width="55%">
			<BR>
		</td>
	</tr>';
$data .= '
	<tr>
		<td width="5%">
			15.
		</td>
		<td width="40%">
			<p class="a">Reason for Leaving </p>
		</td>
		<td width="55%">
			<b>:'.$_SESSION['data']['reason'].'</b>
		</td>
	</tr>';
	$data .= '
	<tr>
		<td width="5%">
			<BR>
		</td>
		<td width="40%">
			<BR>
		</td>
		<td width="55%">
			<BR>
		</td>
	</tr>';
$data .= '
	<tr>
		<td width="5%">
			16.
		</td>
		<td width="40%">
			<p class="a">Date of Vaccination </p>
		</td>
		<td width="55%">
			<b>:'.$_SESSION['data']['dov'].'</b>
		</td>
	</tr>';
	$data .= '
	<tr>
		<td width="5%">
			<BR>
		</td>
		<td width="40%">
			<BR>
		</td>
		<td width="55%">
			<BR>
		</td>
	</tr>';
$data .= '
	<tr>
		<td width="5%">
			17.
		</td>
		<td width="40%">
			<p class="a">Remarks </p>
		</td>
		<td width="55%">
			<b>:'.$_SESSION['data']['remarks'].'</b>
		</td>
	</tr>';
$data .= '

</table>';

$data .= '
</BODY>
</HTML>';
$mpdf->WriteHTML($data);
$mpdf->Output();


?>
