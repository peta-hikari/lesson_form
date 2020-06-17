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

    <div class="display">
      <div class="section">
        <p>名前</p>
        <?php echo $output_info['name']; ?>
      </div>

      <div class="section">
        <p>メールアドレス</p>
        <?php echo $output_info['mail']; ?>
      </div>

      <div class="section">
        <p>本文</p>
        <?php echo $output_info['main']; ?>
      </div>

      <div class="section">
        <p>業種</p>
        <?php echo $output_info['job']; ?>
      </div>

      <div class="section">
        <p>性別</p>
        <?php echo $output_info['gender']; ?>
      </div>

      <div class="btn">
        <p><input type = "submit" value = '戻る' formaction = "index.php" class="button"></p>
        <p><input type = "submit" value = '送信' class="button"></p>
      </div>
      </div>
    <div class="footer">
      <p>&copypeta-hikari</p>
    </div>
  </div>
</body>
</html>