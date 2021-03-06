<?php

namespace Tekstove\UrlVideoParser\Vbox;

use Tekstove\UrlVideoParser\ParserInterface;
use Tekstove\UrlVideoParser\Vbox\VboxException;

/**
 * parse urls from www.vbox7.com
 *
 * @author po_taka <angel.koilov@gmail.com>
 */
class VboxParser implements ParserInterface
{
    private $validVideoIdRegExp = '[a-zA-Z0-9]+';
    
    public function getId($url)
    {
        $matches = null;
        
        $checks = [
            "|play\:({$this->validVideoIdRegExp})|iu",
            "|vid=({$this->validVideoIdRegExp})|iu",
        ];
        
        foreach ($checks as $check) {
            if (preg_match($check, $url, $matches)) {
                return $matches[1];
            }
        }
        
        throw new VboxException("Can't parse {$url}");
    }
}
