<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$example = 'this is a sample string based on php ' . '<br>';
echo 'length = ';
echo strlen( $example) ;

echo '<br><br>';

echo 'word count = ';
echo str_word_count($example);

echo '<br><br>';

echo 'position of sample = ';
echo strpos($example, 'sample'); // string in stored a variable or direct string

echo '<br><br>';

echo 'reverse = ';
echo strrev('this is a sample string based on php');

echo '<br><br>';

echo ' replace = ';
echo str_replace('php','java','this is a sample string based on php');
// word, after replace word, string
?>
</body>
</html>