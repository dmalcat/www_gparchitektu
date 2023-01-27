<?php
header("Content-type:application/pdf");

$filename = "./assets/documents/GPA2021-vysledky.pdf";

// It will be called downloaded.pdf
header("Content-Disposition:attachment;filename=GPA2021-vysledky.pdf");

header("Content-Length: " . filesize($filename));

// The PDF source is in original.pdf
readfile($filename);
?>
