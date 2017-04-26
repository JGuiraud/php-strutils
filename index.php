<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
include 'strutils.php';

$myStr = new styleString('hellooooo!!');

echo $myStr->getStr();

echo '<br> bold: ';
$myStr->bold();
echo $myStr->getStr();

echo '<br> italic: ';
$myStr->italic();
echo $myStr->getStr();

echo '<br> underlined: ';
$myStr->underline();
echo $myStr->getStr();

echo '<br> capitalised: ';
$myStr->capitalise();
echo $myStr->getStr();

echo '<br>uglified: ';
$myStr->uglify();
echo $myStr->getStr();

echo '<hr>';

?>

    <style>
        .capitalise {
            text-transform: capitalize;
        }
        .ugly {
            font-weight: bold;
            font-style: italic;
            text-decoration: underline;
        }

    </style>
</body>
</html>
