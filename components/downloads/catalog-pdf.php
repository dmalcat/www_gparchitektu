<?php
header("Content-type:application/pdf");

$filename = "./assets/documents/GPA_katalog_231.pdf";

// It will be called downloaded.pdf
header("Content-Disposition:attachment;filename=GPA_katalog_231.pdf");

header("Content-Length: " . filesize($filename));

// The PDF source is in original.pdf
readfile($filename);
?>
