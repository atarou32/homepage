<html>
  <meta charset="UTF-8">
  <body>
    <?php foreach ($rows as $row): ?>
      <div style="background-color: #AA9">
        <a href="<?php echo Uri::create('free/thread/'.$row['id']); ?>">
          <?php echo htmlspecialchars($row['title'], ENT_QUOTES); ?>
        </a>
      </div>
      <div>
        <?php echo nl2br(htmlspecialchars($row['summary'], ENT_QUOTES)); ?>
      </div>
    <?php endforeach; ?>
    <?php echo Form::open('free/save_thread', array($token_key => $token));
      echo '<div class="border">';
      echo '<h3 class="border">スレッドを立てる</h3>';
      echo '<div class="p">';
      echo '<p>題名(30文字)</p>';
      echo Form::input('title', $thread_title, array('size' => $thread_title_max));
      echo '<p>概要(250文字)</p>';
      echo Form::textarea('summary', $thread_summary, array('rows'=> 8, 'cols'=> 50));
      echo '<br>';
      echo Form::submit();
      echo '</div>';
      echo '</div>';
      echo Form::close(); ?>

    <h3>人気エントリー</h3>
    <?php $rss = 'http://feeds.feedburner.com/hatena/b/hotentry';
          $data = simplexml_load_file($rss);
          foreach($data->item as $itemValue) {
           echo '<a href="'.$itemValue->link.'">'.$itemValue->title.'</a><br />';
	  }
    ?>

    <h3>OReilly の書籍</h3>
    <?php $rss = 'http://www.oreilly.co.jp/catalog/soon.xml';
          $data = simplexml_load_file($rss);
          foreach($data->item as $itemValue) {
           echo '<a href="'.$itemValue->link.'">'.$itemValue->title.'</a><br />';
	  }
    ?>

    <h3>SimpleTalk RSS</h3>
    <?php $rss = 'https://www.simple-talk.com/feed/';
          $data = simplexml_load_file($rss);
          foreach($data->channel->item as $itemValue) {
           echo '<a href="'.$itemValue->link.'">'.$itemValue->title.'</a><br />';
	  }
    ?>

    <h3>コンピュータ関係の書籍</h3>
    <?php $rss = 'http://www.computerbook.jp/rss/books/index.xml';
          $data = simplexml_load_file($rss);
          foreach($data->channel->item as $itemValue) {
           echo '<a href="'.$itemValue->link.'">'.$itemValue->title.'</a><br />';
	  }
    ?>
  </body>
</html>
