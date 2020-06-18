<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>お問い合わせ</title>
  <link rel="stylesheet" type="text/css" href="css/form.css">

</head>

<body>
  <div class="main">
    <div class="headline">
      <h2> お問い合わせ</h2>
    <div>
    <div class="guide">
      <p> 下記の項目をご記入ください。</p>
    </div>

    <form method='post'>
      <div class="section">
        <p>名前</p>
        <p class="condition">10文字以内</p>
        <input type="text" name="name" value="<?php echo $input_info['name']; ?>">
        <?php if(!empty($errors['name'])){ ?>
          <div class="error">
            <?php echo $errors['name']; ?>
          </div>
        <?php } ?>
        </div>
      </div>

      <div class="section">
        <p>メールアドレス</p>
        <input type="email" name="mail" value="<?php echo $input_info['mail']; ?>">
        <?php if(!empty($errors['mail'])){ ?>
          <div class="error">
            <?php echo $errors['mail']; ?>
          </div>
        <?php } ?>
      </div>

      <div class="section">
        <p>本文</p>
        <p class="condition">400文字以内</p>
        <input type="text" name="main" value="<?php echo $input_info['main']; ?>">
        <?php if(!empty($errors['main'])){ ?>
          <div class="error">
            <?php echo $errors['main']; ?>
          </div>
        <?php } ?>
      </div>

      <div class="section">
        <p>業種</p>
        <select name="job">
            <option value="SE">SE</option>
            <option value="営業">営業</option>
        </select>
        <?php if(!empty($errors['job'])){ ?>
          <div class="error">
            <?php echo $errors['job']; ?>
          </div>
        <?php } ?>
      </div>

      <div class="section">
        <p>性別</p>
        <input type="radio" name="gender" value="M" checked>男性
        <input type="radio" name="gender" value="F">女性
        <?php if(!empty($errors['gennder'])){ ?>
          <div class="error">
            <?php echo $errors['gender']; ?>
          </div>
        <?php } ?>
      </div>

        <p>
          <p>個人情報の取り扱いについて</P>
          <input type="hidden" name="check" value="">
          <input type="checkbox" name="check" value="on">同意しました
        </p>
        <?php if(!empty($errors['check'])){ ?>
          <div class="error">
            <?php echo $errors['check']; ?>
          </div>
        <?php } ?>

        <p><input type="submit" value='確認' formaction="check.php" class="button"></p>

        <div class="footer">
          <p>&copypeta-hikari</p>
        </div>
    </form>
  </div>
</body>
</html>