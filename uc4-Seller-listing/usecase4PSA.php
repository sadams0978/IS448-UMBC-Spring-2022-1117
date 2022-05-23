<?php

//an array that contains the abbreviations in upper-case and their corresponding full-form
$arr = array(
	"GEM MINT" => "GEM-MT10",
	"MINT" => "Mint",
	"NEAR MINT-MINT" => "NM-MT 8",
	
);

	//urban.php?parameter1=xml


//get the parameter1 parameter from URL and store in the local variable $q


$q=$_GET["parameter1"];



//above stores the abbreviations

//convert the user-entered value into all-upper-case, because that is the form in which our array
$uppercaseString = strtoupper($q);
//lookup all hints from array if length of q>0
if (strlen($uppercaseString) > 0)
{
	// Set output to "no suggestion" if no definitions were found
	// or to the correct values
	if (array_key_exists($uppercaseString,$arr))
	//if($arr[$uppercaseString] != ""){
	{
		$result = $arr[$uppercaseString];
	}
	else{
		$result = "no suggestion";
	}
   
}

//output the response
echo "$result";
?>