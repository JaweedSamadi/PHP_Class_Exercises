<?php
function reverseWordsInSentences($paragraph) {
    // Split the paragraph into sentences using a regular expression to match sentence-ending punctuation
    $sentences = preg_split('/([.!?])/', $paragraph, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);

    $reversedSentences = [];

    for ($i = 0; $i < count($sentences); $i += 2) {
        $sentence = trim($sentences[$i]);  

        // Split the sentence into words, reverse the array of words, and join them back into a string
        $words = explode(' ', $sentence);
        $reversedWords = array_reverse($words);

        // Add the reversed sentence to the result with the original punctuation
        $reversedSentences[] = implode(' ', $reversedWords) . $sentences[$i + 1];
    }

    // Join the reversed sentences into a single string
    return implode(' ', $reversedSentences);
}

// Example usage:
$paragraph = "I love programming. It is fun! and also whould you like to learn it?";
$result = reverseWordsInSentences($paragraph);

echo "Reversed paragraph: " . $result;
?>
