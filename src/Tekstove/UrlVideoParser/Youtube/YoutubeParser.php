<?php

namespace Tekstove\UrlVideoParser\Youtube;

use Tekstove\UrlVideoParser\ParserInterface;
use Tekstove\UrlVideoParser\Youtube\YoutubeException;

/**
 * Parse urls from www.youtube.com
 *
 * @author po_taka <angel.koilov@gmail.com>
 */
class YoutubeParser implements ParserInterface
{

    private $validVideoIdRegExp = '[a-zA-Z0-9\-_]{5,}';
    
    public function getId($url)
    {
        $matches = null;
        
        $checks = [
            "~v\/({$this->validVideoIdRegExp})~iu",
            "~\\?v\=({$this->validVideoIdRegExp})~iu",
            "~\\.be/({$this->validVideoIdRegExp})~iu",
            "~\\/embed\/({$this->validVideoIdRegExp})['\"]~iu",
        ];
        
        foreach ($checks as $check) {
            if (preg_match($check, $url, $matches)) {
                return $matches[1];
            }
        }
        
        throw new YoutubeException("Can't parse {$url}");
    }
}
