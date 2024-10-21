<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input processes</title>
</head>
<body>
    

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input1 = $_POST['input1'];
    $input2 = $_POST['input2'];

    // test inputs if bot are string
    if (is_numeric($input1) && is_numeric($input2)) {
        $result = $input1 * $input2;
        echo "bot are number" . $result;
    }
    // test if one is string or not
    elseif (is_string($input1) || is_string($input2)) {
        // bot are string
        if (is_string($input1) && is_string($input2)) {
            $strings = [$input1, $input2];
            sort($strings);
            echo "" . implode(", ", $strings);
        }
        // if one input is string
        else {
            $result = $input1 . $input2;
            echo "one is string " . $result;
        }
    }
} else {
    echo "enter your data.";
}
?>

<h2>enter your inputs</h2>
    <form action="Q1.php" method="post">
        <label for="input1">input 1:</label>
        <input type="text" id="input1" name="input1" required><br><br>

        <label for="input2">input 2:</label>
        <input type="text" id="input2" name="input2" required><br><br>

        <input type="submit" value="send">
    </form>

</body>
</html>
