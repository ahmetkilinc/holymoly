<?php
//include_once('PHPExcel/Classes/PHPExcel/IOFactory.php');
require_once 'PHPExcel/Classes/PHPExcel.php';

//$objPHPExcel = PHPExcel_IOFactory::load("deprem_bolge.xls");
//$inputFileName = 'deprem_bolge.xls';

/*check point*/

//$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
//$objReader = PHPExcel_IOFactory::createReader($inputFileType);
//$objPHPExcel = $objReader->load($inputFileName);

//$data = array(1,$objPHPExcel->getActiveSheet()->toArray(null,true,true,true));
/*
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'HTML');
$objWriter->writeAllSheets();
$objWriter->save('php://output');*/

$objReader = PHPExcel_IOFactory::createReader("deprem_bolge.xls");
$objReader->readAllSheets();
$objReader->load('php://output');

//echo $objWriter->getActiveSheet()->getCell('A54')->getValue();


//var_dump($foundInCells);


/*
//print the result
echo '<pre>';
	print_r($data);
echo '</pre>';
*/
//another option to display the data
//go over the result and parse the records, then make it more readable
/*
if($data[0]==1){
	foreach($data[1] AS $row){
		foreach($row AS $column){
			echo $column . ', ';
		}
		echo '<br />';
	}
}*/
?>