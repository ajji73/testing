<?php

function Pallindrome($word){
	$word = strtolower($word);
	$len = strlen($word);
	
	$new = '';
	for($i = $len - 1; $i >= 0; $i--){
		$new .= $word[$i];	
	}
	
	if($word == $new){
		return TRUE;
	}else{
		return FALSE;
	}
	
}

$output = Pallindrome('DasvAD');

if($output){
	echo "Its a Pallindrome Word";
}else{
	echo "Its not a Pallindrome Word";
}

?>
