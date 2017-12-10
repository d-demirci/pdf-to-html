<?php
// if you are using composer, just use this
include 'vendor/autoload.php';

// initiate

$pdf = new Gufy\PdfToHtml\Pdf('sample.pdf');

// convert to html string
$html = $pdf->html();

// convert a specific page to html string
$page = $pdf->html(1);

// convert to html and return it as [Dom Object](https://github.com/paquettg/php-html-parser)
$dom = $pdf->getDom();

// check if your pdf has more than one pages
$total_pages = $pdf->getPages();

// Your pdf happen to have more than one pages and you want to go another page? Got it. use this command to change th$
//$dom->goToPage(1696);

// and then you can do as you please with that dom, you can find any element you want
$paragraphs = $dom->find('body');


// change pdftohtml bin location
\Gufy\PdfToHtml\Config::set('pdftohtml.bin', '/usr/bin/pdftohtml');

// change pdfinfo bin location
\Gufy\PdfToHtml\Config::set('pdfinfo.bin', '/usr/bin/pdfinfo');
echo $paragraphs;
?>

