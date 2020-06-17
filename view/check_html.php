<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>確認画面</title>
  <link rel="stylesheet" type="text/css" href="css/form.css">
</head>

<body>
  <div class="main">
    <div class="headline">
      <h2>ご入力内容のご確認</h2>
    </div>
    <div class="guide">
      <p>以下の内容でお間違いがないかご確認ください。</p>
      <p>お間違いがなければ送信ボタンを押してください。</p>
    </div>

    <?php foreach($output_info as $key => $data){ ?>
          <p>
              <?php echo "$output_items[$key] : $output_info[$key]"; ?>
          </p>
    <?php } ?>

    <p><input type ="submit" value = '送信'></p>

    <div class="footer">
      <p>&copypeta-hikari</p>
    </div>
  </div>
</body>
</html>