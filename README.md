# Builds
[![Build Status](https://travis-ci.org/Tekstove/UrlVideoParser.svg?branch=master)](https://travis-ci.org/Tekstove/UrlVideoParser)

# UrlVideoParser

Allow getting video id from link.

Will extract `z7ODF3A0HhE` from `https://www.youtube.com/watch?v=z7ODF3A0HhE`

If video is is not found `Tekstove\UrlVideoParser\Exception\ParseException` is thrown.

Suuported sites:
* [youtube.com](https://www.youtube.com/) - [YoutubeParser](src/Tekstove/UrlVideoParser/Youtube/YoutubeParser)
* [vbox7.com](https://www.vbox7.com/) - [VboxPartser](src/Tekstove/UrlVideoParser/Vbox/VboxPartser)

# Installation
We support [composer](https://getcomposer.org/)
```
composer require tekstove/url-video-parser
```
