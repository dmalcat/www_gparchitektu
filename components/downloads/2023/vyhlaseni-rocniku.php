<?php
header("Content-type:application/pdf");

$filename = "./assets/documents/GPA2023-vyhlaseni_rocniku.pdf";

// It will be called downloaded.pdf
header("Content-Disposition:attachment;filename=GPA2023-vyhlaseni_rocniku.pdf");

header("Content-Length: " . filesize($filename));

// The PDF source is in original.pdf
readfile($filename);
?>
