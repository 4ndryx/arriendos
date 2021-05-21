<?php 
require '../public/config.php';
require FOLDER.'public/tcpdf/tcpdf.php';

if (isset($_GET['id']) && !empty($_GET['id']) && isset($_GET['type']) && !empty($_GET['type'])){
	$id = $_GET['id'];
	$kind = $_GET['type'];
}
if ($kind == 'lessee'){
	require FOLDER.'models/show_lessee_profile.model.php';
	$data = getLessee($id);
	$properties = getProperties($id);
	$img = 'lessee_img/'.$data['img'];
	$title = 'Arrendatario';
}

if ($kind == 'lessor'){
	require FOLDER.'models/show_lessor_profile.model.php';
	$data = getLessor($id);
	$properties = getProperties($id);
	$img = 'lessor_img/'.$data['img'];
	$title = 'Arrendador';
}

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('4ndly');
$pdf->SetTitle($title.' '.$id);

// set default header data
$pdf->SetHeaderData('logosm.png', 35, "","            Instituto Autónomo de Mercados Bolivarianos del Municipio Miranda" , array(0,0,0), array(0,0,0));
$pdf->setFooterData(array(0,0,0), array(0,0,0));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica oce file size.
$pdf->SetFont('dejavusans', '', 14, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

// Set some content to print
$html = <<<EOD
<style>
	p{
		font-size: 8mm;
		margin: auto;
	}
</style>
	<p><b>Informacion de $title</b></p>

EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------
$fname = $data['fname'];
$lname = $data['lname'];
$id = $data['id'];
$phone = $data['phone'];
$adress= $data['adress'];

$html = <<<EOD
<style>
	table {
		width:75%;
	}
	tr{
		line-height:40px;
	}
	td{
		padding-left: 5px;
	}
  .odd {
    background-color: #F2f2f2;
  }
</style>
<div>
	<div>
	<p><b>Informacion Basica</b></p>
		<table cell-padding = "1">
			<tbody>
				<tr class="odd">
					<td>Nombre</td>
					<td>$fname</td>
				</tr>
				<tr>
					<td>Apellido</td>
					<td>$lname</td>
				</tr>
				<tr class="odd">
					<td>Cedula</td>
					<td>$id</td>
				</tr>
				<tr>
					<td>Movil</td>
					<td>$phone</td>
				</tr>
				<tr class="odd">
					<td>Direccion</td>
					<td>$adress</td>
				
				</tr>
			</tbody>
		</table>
        </div>
</div>


EOD;
$pdf->SetCellPadding(0);
$tagvs = array('p' => array(0 => array('h' => 0, 'n' => 0), 1 => array('h' => 0, 'n' => 0)));
$pdf->setHtmlVSpace($tagvs);

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
$pdf->Image(LINK.'/public/img/'.$img, 156, 52.5, 40, 50, 'JPG', 'http://www.tcpdf.org', '', true, 150, '', false, false, 0, false, false, false);

// ---------------------------------------------------------

$email = $data['email'];
$home_phone = $data['home_phone'];
$ocupation = $data['ocupation'];
$nacionality = $data['nacionality'];
$civil_status = $data['civil_status'];


$html = <<<EOD
<style>
	table{

	}
	.sm {
		width:37%;
	}
	.lg {
		width:63%;
	}
	tr{
		line-height:40px;
	}
	td{
		margin-right: 5px;
	}
  .odd {
    background-color: #F2f2f2;
  }
</style>
<div>
	<div>
	<p><b>Informacion general</b></p>
		<table>
			<tbody>
				<tr class="odd">
					<td class = "sm">Correo electronico</td>
					<td class = "lg">$email</td>
				</tr>
				<tr>
					<td>Telefono de casa</td>
					<td class = "lg">$home_phone</td>
				</tr>
				<tr class="odd">
					<td class = "sm">Ocupacion</td>
					<td class = "lg">$ocupation</td>
				</tr>
				<tr>
					<td class = "sm">Nacionalidad</td>
					<td class = "lg">$nacionality</td>
				</tr>
				<tr class="odd">
					<td class = "sm">Estado civil</td>
					<td>$civil_status</td>
				</tr>
			</tbody>
		</table>
        </div>
</div>


EOD;

$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);


// ---------------------------------------------------------



$html = <<<EOD
<style>
	table{

	}
	.sm {
		width:37%;
	}
	.lg {
		width:63%;
	}
	tr{
		line-height:40px;
	}
	td{
		margin-right: 5px;
	}
  .odd {
    background-color: #F2f2f2;
  }
</style>
<div>
	<div>
		<p><b>Arrendamiento</b></p>
		<table><p>Imueble </p>	
			<tbody>
				
				<tr class="odd">
					<td class = "sm">Direccion</td>
					<td class = "">Tipo</td>
					<td class = "">Superficie</td>
				</tr>
EOD;

if (empty($properties)) {
	$html.= "<tr><td>No hay datos</td></tr>";
}else{
	$i = 0;
	foreach ($properties as $property) {
		$adress = $property['adress'];
		$type = $property['type'];
		$area = $property['area'];
		$i++;
		if ($i%2 == 0){
			$html.='<tr class="odd"><td>'.$adress.'</td>
				<td>'.$type.'</td>
				<td>'.$area.'</td></tr>';

		}else{
				$html.='
				<tr><td>'.$adress.'</td>
				<td>'.$type.'</td>
				<td>'.$area.'</td></tr>
				';}
		

	}
}
		$html.=	"</tbody>
				</table>
		        </div>
		</div>";

$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);


// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output($title.' '.$id.'pdf', 'I');




?>