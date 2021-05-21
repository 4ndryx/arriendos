<?php 
require '../public/config.php';
require FOLDER.'public/tcpdf/tcpdf.php';


$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('4ndly');
$pdf->SetTitle('Lista');

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
$pdf->SetFont('dejavusans', '', 9, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

// Set some content to print
if (isset($_GET['type']) && !empty($_GET['type'])){
	$kind = $_GET['type'];
	if ($kind == 'lessor' || $kind == 'lessee') {
		if ($kind == 'lessee'){
			require FOLDER.'models/show_lessee.model.php';
			$data = getLessees();
			$title = 'Arrendatarios';
		}

		if ($kind == 'lessor'){
			require FOLDER.'models/show_lessor.model.php';
			$data = getLessors();
			$title = 'Arrendadores';
		}


		$html = '
		<style>
			p{
				font-size: 8mm;
				margin: auto;
			}
		</style>
			<p><b>Lista de '.$title.' registrados</b></p>

		';

		// Print text using writeHTMLCell()
		$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

		// ---------------------------------------------------------

		$html = '
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
			        <table>
		                  <thead>
		                  <tr class = "odd">
		                    <th><b>Nombre</b></th>
		                    <th><b>Cedula</b></th>
		                    <th><b>Cellular</b></th>
		                    <th><b>Direccion</b></th>
		                  </tr>
		                  </thead>
		                  <tbody>
		';


		$i= 0;
		foreach ($data as $dat){
			$name = $dat['fname'].' '.$dat['lname'];
			$id = $dat['id'];
			$phone = $dat['phone'];
			$adress = $dat['adress'];
		   	$i++;
			if ($i%2 == 0){
				$html.='<tr class="odd">
							<td>'.$name.'</td>
		        			<td>'.$id.'</td>
		        			<td>'.$phone.'</td>
		        			<td>'.$adress.'</td>
		    			</tr>';
			}else{
				$html.='<tr>										
							<td>'.$name.'</td>
		        			<td>'.$id.'</td>
		        			<td>'.$phone.'</td>
		        			<td>'.$adress.'</td>
		    			</tr>';
			}
		}

		$html.='     </tbody>
		            </table>
		';

		$pdf->SetCellPadding(0);
		$tagvs = array('p' => array(0 => array('h' => 0, 'n' => 0), 1 => array('h' => 0, 'n' => 0)));
		$pdf->setHtmlVSpace($tagvs);

		// Print text using writeHTMLCell()
		$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);	
	}
	if ($kind == 'ppt'){
		require FOLDER.'models/show_property.model.php';
		$title = 'Propriedades';
		$data = getAllProperties();

		$html = '
		<style>
			p{
				font-size: 8mm;
				margin: auto;
			}
		</style>
			<p><b>Lista de '.$title.' registradas</b></p>

		';

		// Print text using writeHTMLCell()
		$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

		// ---------------------------------------------------------

		$html = '
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
			        <table>
		                  <thead>
		                  <tr class = "odd">
		                    <th><b>Direcccion</b></th>
                    		<th><b>Area</b></th>
                    		<th><b>Tipo</b></th>
                    		<th><b>Estado</b></th>
                    		<th><b>Descripcion</b></th>
		                  </tr>
		                  </thead>
		                  <tbody>';

		$i= 0;
		foreach ($data as $dat){
			$adress = $dat['adress'];
			$area = $dat['area'];
			$type = $dat['type'];
			$state = $dat['state'];
			$description = $dat['description'];
		   	$i++;
			if ($i%2 == 0){
				$html.='<tr class="odd">
							<td>'.$adress.'</td>
		        			<td>'.$area.'</td>
		        			<td>'.$type.'</td>
		        			<td>'.$state.'</td>
		        			<td>'.$description.'</td>
		    			</tr>';
			}else{
				$html.='<tr>										
							<td>'.$adress.'</td>
		        			<td>'.$area.'</td>
		        			<td>'.$type.'</td>
		        			<td>'.$state.'</td>
		        			<td>'.$description.'</td>
		    			</tr>';
			}
		}

		$html.='</tbody>
		    </table>';

		$pdf->SetCellPadding(0);
		$tagvs = array('p' => array(0 => array('h' => 0, 'n' => 0), 1 => array('h' => 0, 'n' => 0)));
		$pdf->setHtmlVSpace($tagvs);

		// Print text using writeHTMLCell()
		$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
	}
	if ($kind == 'lessing'){
		require FOLDER.'models/show_contract.model.php';
		$title = 'Arrendamientos';
		$data = getContracts();

		$html = '
		<style>
			p{
				font-size: 8mm;
				margin: auto;
			}
		</style>
			<p><b>Lista de '.$title.' registradas</b></p>

		';

		// Print text using writeHTMLCell()
		$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

		// ---------------------------------------------------------

		$html = '
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
			        <table>
		                  <thead>
		                  <tr class = "odd">
		                    <th>Arrendatario</th>
                    		<th>Arrendador</th>
                    		<th>Propriedad</th>
                    		<th>Renta</th>
                    		<th>Fianza</th>
                    		<th>F. de Emision</th>
                    		<th>F. de fin</th>
                    		<th>Dia de pago</th>
		                  </tr>
		                  </thead>
		                  <tbody>
		';

		$i= 0;
		foreach ($data as $dat){
			$id_lessee = $dat['id_lessee'];
    		$id_lessor = $dat['id_lessor'];
    		$id_property = $dat['id_property'];
    		$bill = $dat['bill'];
    		$deposite = $dat['deposite'];
    		$start_date = $dat['start_date'];
    		$end_date = $dat['end_date'];
    		$pay_day = 	$dat['pay_day'];	
		   	$i++;
			if ($i%2 == 0){
				$html.='<tr class="odd">
							<td>'.$id_lessee.'</td>
		        			<td>'.$id_lessor.'</td>
		        			<td>'.$id_property.'</td>
		        			<td>'.$bill.'</td>
		        			<td>'.$deposite.'</td>
		        			<td>'.$start_date.'</td>
		        			<td>'.$end_date.'</td>
		        			<td>'.$pay_day.'</td>
		    			</tr>';
			}else{
				$html.='<tr>										
							<td>'.$id_lessee.'</td>
		        			<td>'.$id_lessor.'</td>
		        			<td>'.$id_property.'</td>
		        			<td>'.$bill.'</td>
		        			<td>'.$deposite.'</td>
		        			<td>'.$start_date.'</td>
		        			<td>'.$end_date.'</td>
		        			<td>'.$pay_day.'</td>
		    			</tr>';
			}
		}

		$html.='     </tbody>
		            </table>
		';

		$pdf->SetCellPadding(0);
		$tagvs = array('p' => array(0 => array('h' => 0, 'n' => 0), 1 => array('h' => 0, 'n' => 0)));
		$pdf->setHtmlVSpace($tagvs);

		// Print text using writeHTMLCell()
		$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
	}
	
}





// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output($title.'.pdf', 'I');




?>
					