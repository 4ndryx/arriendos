<?php 
require '../public/config.php';
require FOLDER.'public/tcpdf/tcpdf.php';
require FOLDER.'models/show_property_profile.model.php';

if (isset($_GET['id']) && !empty($_GET['id'])){
	$id = $_GET['id'];
}

$data = getProperty($id);
$lessee = getLessee($data['id_lessee']);
$lessor = getLessor($data['id_lessor']);



$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('4ndly');
$pdf->SetTitle('Propriedad_'.$id);

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
	<p><b>Informacion de Imueble</b></p>

EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------
$adress = $data['adress'];
$type = $data['type'];
$description = $data['description'];
$state = $data['state'];
$area= $data['area'];

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
	<p><b>Informacion Basica</b></p>
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
				
EOD;

if (empty($lessor)){
	$html.='<tr class = "odd"><td>No tiene arrendador. Registre al arrendador, o ingrese al perfil de su arrendador para asignarselo </td></tr>';
}else{
	$html.= '<tr class = "odd"><td><strong>Arrendador</strong></td>
	        <td>'.$lessor['fname'].'</td>
	        <td>'.$lessor['lname'].'</td>
	        <td>'.$lessor['id'].'</td></tr>';
                        }
if (empty($lessee)){
    $html.='<tr><td>Aun no tiene arrendatario</td></tr>';}
else{
    $html.='<tr><td><strong>Arrendatario</strong></td>
            <td>'.$lessee['fname'].'</td>
            <td>'.$lessee['lname'].'</td>
            <td>'.$lessee['id'].'</td></tr>';}
    
		$html.=	"</tbody>
				</table>
		        </div>
		</div>";

$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);


// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('Propriedad_'.$id, 'I');




?>