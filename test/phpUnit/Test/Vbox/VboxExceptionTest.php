<?php

use PHPUnit\Framework\TestCase;
use Tekstove\UrlVideoParser\Vbox\VboxException;
use Tekstove\UrlVideoParser\Exception\ParseException;

/**
 * @author po_taka <angel.koilov@gmail.com>
 */
class VboxExceptionTest extends TestCase
{
    public function testBaseType()
    {
        $exception = new VboxException();
        $this->assertInstanceOf(ParseException::class, $exception);
    }
}
