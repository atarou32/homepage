<html>
  <meta charset="UTF-8">
  <body>
    <div class="border">
    <h2><?php echo htmlspecialchars($thread_title, ENT_QUOTES); ?></h2>
    <div>
     <?php echo nl2br(htmlspecialchars($thread_summary, ENT_QUOTES)); ?>
    </div>
    </div>
    <div class="border">
     <?php $count = 1;?>
     <?php foreach ($rows as $row): ?>
       <u><?php echo $count;?>番目の投稿です.</u>
       <div><?php echo nl2br(htmlspecialchars($row['body'])); ?></div>
       <?php $count = $count + 1; ?>
     <?php endforeach; ?>
    </div>      
    <?php echo Form::open('free/save_res/'. $thread_id, array($token_key => $token));
      echo '<div class="border">';
      echo '<h3 class="border">投稿する</h3>';
      echo '<div class="p">';
      echo '<p>内容(250文字)</p>';
      echo Form::textarea('body', $res_body, array('rows'=> 32, 'cols'=> 50));
      echo '<br>';
      echo Form::submit();
      echo '</div>';
      echo '<a href ="'. Uri::create('free'). '">スレッド一覧</a>';
      echo '</div>';
      echo Form::close(); ?>

    
  </body>
</html>
