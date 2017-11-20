<?php

include 'lib/curler.php';
include 'lib/parser.php';
include 'lib/worm.php';
/**
 * Contain the main class , named Worm . Use of this web crawler should
 * only start from this class
 */
class Worm
{

  public $curl;

  public $parser;

  // functions

  public function __construct()
  {
  $this->curl = New Curler;

  $this->parser = New HtmlParser;
  }

  public function fetchContent($url , $open , $close )
  {
    $content = $this->curl->getOutput() ;
    $this->curl->setFile($url);
    $this->parser->setInput($content);
    $this->parser->setElement($open , $close);
    $this->parser->parseElement();

    return $this->parser->getElement();
  }
}

 ?>
