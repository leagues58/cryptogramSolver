/*******************************************************************************
solvePuzzle
input: none
output: updates .plaintext div with final plaintext
This is the base function from which all the various stages of the decryption
are called.  It gets the input ciphertext from the #ciphertect input field,
stores that text in an array (replacing spaces with a placeholder), calculates
the frequency of each letter in the input, correlates those calculated
frequencies with the known frequencies of letter in English, and substitutes
each letter with its frequency-matching letter.  This will most likely not
yield a completed/correct plaintext, but its a start for now.  Will most
likely add a dictionary lookup and some good ol' brute force later.
*******************************************************************************/
function solvePuzzle(){

    // capture the input and convert to array
    var strCipher = $("#ciphertext").val();
    var arrCipherText = Array.from(strCipher.replace(/ /gi, "-"));
    var arrCipherFreq = {};
    var strPlaintext = "";

    // get a sorted array of letter frequencies from the ciphertext
    arrCipherFreq = sortByFrequency(calculateFrequencies(arrCipherText));

    // not sure that this will be necessary/used
    correlateFrequencies(arrCipherText);

    // make the substitutions using the letter arrangements from the freq array
    strPlaintext = makeSubstitutions(arrCipherText, arrCipherFreq);

    // return the deciphered text to the results div
    $(".plaintext").html(strPlaintext);

}




// run through the ciphertext array, summing up each letter's occurance count,
// which will be used to get that letter's frequency
function calculateFrequencies(arr) {
  return null;
}


// run through the array of frequencies, sorting from highest to lowest
// probs going to just remove unused letters
function sortByFrequency(arr) {
  return null;
}


// not sure that anything other than the ordering of letters will be used for now
function correlateFrequencies(arr) {

  var ArrEnglishFreq = {  e:.1202, t:.0910, a:.0812, o:.0768, i:.0731, n:.0695, s:.0628, r:.0602, h:.0592, d:.0432, l:.0398, u:.0288, c:.0271,
                          m:.0261, f:.0230, y:.0211, w:.0209, g:.0203, p:.0182, b:.0149, v:.0111, k:.0069, x:.0017, q:.0011, j:.0010, z:.0007};


}



// this will be the function that actually substitutes each letter for its key
function makeSubstitutions(arrText, arrFreq) {
  return null;
}
