<?php

$username = 'ronaldo';

$pythonScript = "C:\\xampp\\htdocs\\cmdpython\\test.py"; //your file python directory
$cmd = array("python", $pythonScript, $username);   //execute , if you want to try run it via cmd instead
$cmdText = implode(' ', $cmd);

echo "Running command: " . $cmdText . "\n<br />";
$result = shell_exec($cmdText);

echo "------- Got the following result:\n<br />";
echo $result;

$resultData = json_decode($result, true);

# echo "The result was transformed into:\n";
# var_dump($resultData);

?>
