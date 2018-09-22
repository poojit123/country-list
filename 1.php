<?php 
 $file='country-list.json';
 $content=file_get_contents($file);
 $object= json_decode( $content);
 $countryCode='BD'; // here is selected country code.

 $array=(array)$object; // convert object to array.

 function searchForId($id, $array) {
   foreach ($array as $key => $val) {
       if ($key === $id) {
           return $val;
       }
   }
   return null;
 }
 
 // show country name from selected country code. 
 foreach ($array as $key => $value) {
 	$newArray= (array)$value;
 	 echo searchForId($countryCode, $newArray);
 }

 // for show country list
 	foreach ($array as $key => $value) {
	 	$newArray= (array)$value;
	 	echo "<pre>";
	 	print_r($newArray);
	 }

 ?>