<?php
header("Content-type:application/pdf");

$filename = "./assets/documents/GPA2022-prodlouzeni-terminu-prihlaseni-do-souteze.pdf";

// It will be called downloaded.pdf
header("Content-Disposition:attachment;filename=GPA2022-prodlouzeni-terminu-prihlaseni-do-souteze.pdf");

header("Content-Length: " . filesize($filename));

// The PDF source is in original.pdf
readfile($filename);
?>
