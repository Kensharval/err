<?php
include 'error.php';
use github_com\xiclonn\php\etp\err as err;

$e1 = new err\Error ("Some error.");
$e2 = new err\Error ("Some error.", $e1);

echo $e1->Descrp () . "<br />";
echo $e1->Sec ()->Descrp () . "<br />";
echo $e2->Descrp () . "<br />";
echo $e2->Sec ()->Descrp () . "<br />";
