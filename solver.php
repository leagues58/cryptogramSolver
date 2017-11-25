<?php

	require __DIR__.'/db_conn.php';


	$arrCipher = [];
	$strPlainText = $_POST['ciphertext'];
	$db_conn = database_connection();

	// load the input ciphertext into an array
	$arrCipher = convertTextToArray($_POST['ciphertext']);
	//printArray($arrCipher);
	print2dArray($arrCipher);
	// calculate the most common 3-5 letters and assign those their frequency-based values

	// perform a scramble, assigning each letter an different letter's value, except for the previously set letters

	// check if the output is english, checking each each word in order, rescrambling when a non-word is found

	// if all words are english, return the string
	if(checkStringIsEngligh($arrCipher)) {


	}

	




	/*********************************************************************************
	convertTextToArray
	input: strText
	output: two dimensional array, first dimension is the letters of the input text,
			second dimension is the placeholders for what the guessed actual value
			of each letter is.
	This function converts the input text string into a two dimensional array where
	the first dimension is the actual text value and the second dimension is (for now)
	a placeholder where the guess-at value of each letter's translation will go.
	Spaces are replaces with underscores.
	For example, input text 'Cats are cool' will result in:
	|c|a|t|s|_|a|r|e|_|c|o|o|l|
	|-|-|-|-|-|-|-|-|-|-|-|-|-|
	*********************************************************************************/
	function convertTextToArray($strText) {

		$arrReturn;
		$arrReturn = array();

		for ($i=0; $i<strlen($strText); $i++) {
			for($j=0; $j<2; $j++) {
				if($j == 0) {
					$arrReturn[$i][$j] = str_replace(' ', '_', $strText[$i]);	
				} else {
					$arrReturn[$i][$j] = '-';
				}
				
			}
		    
		}

		return $arrReturn;
	}


	// function to perform scramble
	function scrambleLetters($arrCipher) {
		return null;
	}


	// function to iterate through each word, checking if engligh
	function checkStringIsEngligh($arrCipher) {

		// for each word in the arrCipher

		return true;
	}


	// function that actually checks indiviudal word against dictionary
	function wordIsEnglish($strWord) {

		$strSQL =	"SELECT
						word
					FROM words
					WHERE
						word = :strWord";


		$record = $db_conn->prepare($strSQL);
		$record->bindParam(':strWord', $strWord);

		$record->execute();

		while($results = $record->fetch(PDO::FETCH_OBJ)) {
			return true;
		}

		return false;
	}


	function print2dArray($arr) {

		for($i=0; $i<count($arr); $i++) {
			for($j=0; $j<count($arr[$i]); $j++) {
				echo $arr[$i][$j] . ' ';
			}
			echo '<br>';
		}
	}


	function printArray($arr) {

		for($i=0; $i<count($arr); $i++) {
			echo $arr[$i][1] . ' ';
		}
	}





?>
