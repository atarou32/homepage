<html>
  <meta charset="UTF-8">
  <body>
    <?php foreach ($rows as $row): ?>
      <div style="background-color: #999">
        <?php echo htmlspecialchars($row['title'], ENT_QUOTES); ?>
      </div>
      <div>
        <?php echo nl2br(htmlspecialchars($row['summary'], ENT_QUOTES)); ?>
      </div>
    <?php endforeach; ?>
  </body>
</html>
