<?php 
/**
 * format the date
 * 
 */
function formatDate($date){

	return date('F j, Y, g:i a' , strtotime($date));

}

/**
 * shorten text
 */

function shortenText($text)
{	
	$text = substr($text , 0 , 450 );
	return $text;
     
    
}

 ?>