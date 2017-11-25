<?php

	require __DIR__.'/db_conn.php';


	$arrCipher = [];
	$strPlainText = $_POST['ciphertext'];
	$db_conn = database_connection();

	// load the input ciphertext into an array
	$arrCipher = convertTextToArray($_POST['ciphertext']);

	// calculate the most common 3-5 letters and assign those their frequency-based values

	// perform a scramble, assigning each letter an different letter's value, except for the previously set letters

	// check if the output is english, checking each each word in order, rescrambling when a non-word is found

	// if all words are english, return the string
	if(checkStringIsEngligh($arrCipher)) {
		echo $strPlainText;
	}





	// function to convert a text string to an array
	function convertTextToArray($strText) {
		return null;
	}


	// function to perform scramble
	function scrambleLetters($arrCipher) {
		return null;
	}


	// function to iterate through each word, checking if engligh
	function checkStringIsEngligh($arrCipher) {
		return true;
	}


	// function that actually checks indiviudal word against dictionary
	function wordIsEnglish($strWord) {
		return null;
	}


?>
