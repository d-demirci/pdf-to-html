<?php
use Gufy\PdfToHtml\Base,
 Gufy\PdfToHtml\Config,
 Gufy\PdfToHtml\Html,
 Gufy\PdfToHtml\Pdf;

class PdfBaseTest extends PHPUnit_Framework_TestCase
{
  public function testConfiguration()
  {
    $pdf = new Base;
    $this->assertEquals('/usr/bin/pdftohtml', $pdf->bin());
    Config::set('pdftohtml.bin', '/usr/local/bin/pdftohtml');
    $this->assertEquals('/usr/local/bin/pdftohtml', $pdf->bin());
    Config::set('pdftohtml.bin', '/usr/bin/pdftohtml');
  }
  public function testInfoConfiguration()
  {
    $pdf = new Pdf(dirname(__FILE__).'/source/test.pdf');
    $this->assertEquals('/usr/bin/pdfinfo', $pdf->bin());
    Config::set('pdfinfo.bin', '/usr/local/bin/pdfinfo');
    $this->assertEquals('/usr/local/bin/pdfinfo', $pdf->bin());
    Config::set('pdfinfo.bin', '/usr/bin/pdfinfo');
  }
}