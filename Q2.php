
<?php
// a constant for the exchange rate: 1 USD = 0.92 EUR
define("EXCHANGE_RATE", 0.92);

function convertAmounts($amounts, $direction) {
    $convertedAmounts = [];

    foreach ($amounts as $amount) {
        if ($direction === "USD to EUR") {
            $convertedAmounts[] = $amount * EXCHANGE_RATE;  // Convert USD to EUR
        } elseif ($direction === "EUR to USD") {
            $convertedAmounts[] = $amount / EXCHANGE_RATE;  // Convert EUR to USD
        } else {
            throw new Exception("Invalid conversion direction.");
        }
    }

    return $convertedAmounts;
}

$amounts = [100, 200, 300, 400];
$direction = "EUR to USD";

// Convert amounts
$result = convertAmounts($amounts, $direction);

// Output the converted amounts
echo "<h2>Coverted amounts:</h2><br>";
for ($i = 0; $i < count($result); $i++) {
    echo $result[$i]."<br>";
}

?>
