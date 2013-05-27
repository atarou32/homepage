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

   
    <?php echo $rss_link_html; ?>   

    
   

  
  </body>
</html>
