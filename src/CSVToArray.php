<?php


namespace CSVToArray;

Class CSVToArray{

public static function csvToArray($path='file.csv', $separator=";", $tags=True)
{
$array_tags=[];
$array_from_csv=[];
$index = 0;
if (($file = fopen($path , "r")) !== FALSE) {
    while (($datos = fgetcsv($file, 1000, $separator)) !== FALSE) {
    	$array_aux = [];
    	for ($i=0; $i < count($datos); $i++) {
    		if($tags){
        	if ($index <> 0) {
        		$array_aux[$array_tags[$i]] = $datos[$i];
        		}else{
        		array_push($array_tags, $datos[$i]);
        	}
    		}else{
        		array_push($array_aux, $datos[$i]);
    		}
    	}
    	$index++;
    	array_push($array_from_csv, $array_aux);
    	}
	}
	return $array_from_csv;
	}
}
?>