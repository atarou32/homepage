<?php

class Rsslink
{
  public function saveHtml()
  {
    $html = '<h3>人気エントリー</h3>';
    $rss = 'http://feeds.feedburner.com/hatena/b/hotentry/';
    $data = simplexml_load_file($rss);
    foreach($data->item as $itemValue) {
      $html = $html . '<a href="'.$itemValue->link.'">'.$itemValue->title.'</a><br />';
    } 

    $html = $html .'<h3>OReilly の書籍</h3>';
    $rss = 'http://www.oreilly.co.jp/catalog/soon.xml';
    $data = simplexml_load_file($rss);
    foreach($data->item as $itemValue) {
      $html = $html . '<a href="'.$itemValue->link.'">'.$itemValue->title.'</a><br />';
    }

    $html = $html . '<h3>SimpleTalk RSS</h3>';
    $rss = 'https://www.simple-talk.com/feed/';
    $data = simplexml_load_file($rss);
    foreach($data->channel->item as $itemValue) {
      $html = $html . '<a href="'.$itemValue->link.'">'.$itemValue->title.'</a><br />';
    }
    
    file_put_contents('RSS.html',$html);
  }

  public function loadHtml()
  {
    return file_get_contents(APPPATH.'classes/RSS.html');
  }
}
