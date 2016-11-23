<?php

use PHPUnit\Framework\TestCase;
use Tekstove\UrlVideoParser\Youtube\YoutubeException;
use Tekstove\UrlVideoParser\Exception\ParseException;

/**
 * Description of YoutubeExceptionTest
 *
 * @author po_taka <angel.koilov@gmail.com>
 */
class YoutubeExceptionTest
{
    public function testBaseType()
    {
        $exception = new YoutubeException();
        $this->assertInstanceOf(ParseException::class, $exception);
    }
}
