<html>
<?php
$fp = fopen('mini4.csv', 'a');
$new_content = $_POST['firstName'] . ',' .
    $_POST['lastName'] . ',' .
    $_POST['email'] . ',' .
    $_POST['phone'] . ',' .
    $_POST['books'] . ',' .
    $_POST['os'] . '<br>';
fwrite($fp, $new_content);
fclose($fp);

$csv_contents = file_get_contents('mini4.csv');
echo $csv_contents;
?>

</html>