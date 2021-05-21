<?php 
require '../public/config.php';
require FOLDER.'public/tcpdf/tcpdf.php';
require FOLDER.'models/show_contract_format.model.php';

if (isset($_GET['id']) && !empty($_GET['id'])){
	$id = $_GET['id'];
	$contract = getContract($id);
	if ($contract) {
		$idLessor = $contract['id_lessor'];
		$idLessee = $contract['id_lessee'];
		$idProperty = $contract['id_property'];
	}
	$lessee = getLesseeData($idLessee);
	$lessor = getLessorData($idLessor);
	$property = getPropertyData($idProperty);
}




$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('4ndly');
$pdf->SetTitle('Contrato_'.$idLessee.'_'.$idLessor);

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

// Set some content to print lessee ---------------------------------------------------------
$html = <<<EOD
<style>
	p{
		font-size: 8mm;
		margin: auto;
	}

	.sub{
		font-size: 5mm;
		margin: auto;

	}
</style>
	<p><b>Informacion de Arrendamiento</b></p>
	<p class = "sub" ><b>Arrendtario</b></p>

EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------
$fname = $lessee['fname'];
$lname = $lessee['lname'];
$id = $lessee['id'];
$phone = $lessee['phone'];
$adress= $lessee['adress'];

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
$pdf->Image(LINK.'public/img/lessee_img/'.$lessee['img'], 156, 68, 40, 50, 'JPG', 'http://www.tcpdf.org', '', true, 150, '', false, false, 0, false, false, false);

// ---------------------------------------------------------

$email = $lessee['email'];
$home_phone = $lessee['home_phone'];
$ocupation = $lessee['ocupation'];
$nacionality = $lessee['nacionality'];
$civil_status = $lessee['civil_status'];


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


// --------------------------------------------------------- lessor ----------------------------------------------

$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

$html = <<<EOD
<style>
	p{
		font-size: 8mm;
		margin: auto;
	}

	.sub{
		font-size: 5mm;
		margin: auto;

	}
</style>
	<p class = "sub" ><b>Arrendador</b></p>

EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------
$fname = $lessor['fname'];
$lname = $lessor['lname'];
$id = $lessor['id'];
$phone = $lessor['phone'];
$adress= $lessor['adress'];

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
$pdf->Image(LINK.'public/img/lessor_img/'.$lessor['img'], 156, 49, 40, 50, 'JPG', 'http://www.tcpdf.org', '', true, 150, '', false, false, 0, false, false, false);

// ---------------------------------------------------------

$email = $lessor['email'];
$home_phone = $lessor['home_phone'];
$ocupation = $lessor['ocupation'];
$nacionality = $lessor['nacionality'];
$civil_status = $lessor['civil_status'];


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


// --------------------------------------------------------- ppt ----------------------------------------------------

$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

$html = <<<EOD
<style>
	p{
		font-size: 5mm;
		margin: auto;
	}
</style>
	<p><b>Imueble</b></p>

EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------
$adress = $property['adress'];
$type = $property['type'];
$description = $property['description'];
$state = $property['state'];
$area= $property['area'];

$html = <<<EOD
<style>
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
		<table cell-padding = "1">
			<tbody>
				<tr class="odd">
					<td>Direccion</td>
					<td>$adress</td>
				</tr>
				<tr>
					<td>Tipo</td>
					<td>$type</td>
				</tr>
				<tr class="odd">
					<td>Estado</td>
					<td>$state</td>
				</tr>
				<tr>
					<td>Area</td>
					<td>$area</td>
				</tr>
				<tr class="odd">
					<td>Descripcion</td>
					<td>$description</td>
				
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
// ---------------------------------------------------------

$html = <<<EOD
<style>
	p{
		font-size: 5mm;
		margin: auto;
	}
</style>
	<p><b>Contrato</b></p>

EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------
$place = $contract['place'];
$start_date = $contract['start_date'];
$end_date = $contract['end_date'];
$bill = $contract['bill'];
$deposite = $contract['deposite'];
$pay_day = $contract['pay_day'];
$activity = $contract['activity'];
$renew = $contract['renew'] == 1 ? 'Si' : 'No';


$html = <<<EOD
<style>
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
		<table cell-padding = "1">
			<tbody>
				<tr class="odd">
					<td>Lugar</td>
					<td>$place</td>
				</tr>
				<tr>
					<td>Fecha de emision</td>
					<td>$start_date</td>
				</tr>
				<tr class="odd">
					<td>Fecha de fin</td>
					<td>$end_date</td>
				</tr>
				<tr>
					<td>Renta</td>
					<td>$bill</td>
				</tr>
				<tr class="odd">
					<td>Fianza</td>
					<td>$deposite</td>
				</tr>
				<tr>
					<td>Fecha de pago</td>
					<td>$pay_day</td>
				</tr>
				<tr class="odd">
					<td>Actividad</td>
					<td>$activity</td>
				</tr>
				<tr>
					<td>Renovacion</td>
					<td>$renew</td>
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
// ---------------------------------------------------------
// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('Contrato_'.$idLessee.'_'.$idLessor.'.pdf', 'I');




?>

