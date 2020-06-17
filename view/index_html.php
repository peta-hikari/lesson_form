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
    <p> 下記の項目をご記入ください。</p>

    <form method = 'post'>
      <div class="section">
        <p>名前</p>
        <input type = "text" name = "name" value ="<?php echo $input_info['name']; ?>">
        <div class = "error">
          <?php if(!empty($errors['name'])){ echo $errors['name'];} ?>
        </div>
      </div>

      <div class = "section">
        <p>メールアドレス</p>
        <input type = "email" name = "mail" value = "<?php echo $input_info['mail']; ?>">
        <div class = "error">
          <?php if(!empty($errors['mail'])){ echo $errors['mail'];} ?>
        </div>
      </div>

      <div class = "section">
        <p>本文</p>
        <input type = "text" name = "main" value = "<?php echo $input_info['main']; ?>">
        <div class = "error">
          <?php if(!empty($errors['main'])){ echo $errors['main'];} ?>
        </div>
      </div>

      <div class = "section">
        <p>業種</p>
        <select name = "job">
            <option value = "SE">SE</option>
            <option value = "営業">営業</option>
        </select>
        <div class = "error">
          <?php if(!empty($errors['job'])){ echo $errors['job'];} ?>
        </div>
        </p>
      </div>

      <div class = "section">
        <p>性別</p>
        <input type = "radio" name = "gender" value = "M" checked>男性
        <input type = "radio" name = "gender" value = "F">女性
        <div class = "error">
          <?php if(!empty($errors['gender'])){ echo $errors['gender'];} ?>
        </div>
      </div>

        <p>
          <input type="hidden" name="check" value="">
          <input type = "checkbox" name = "check" value ="on">同意しました
        </p>
        <div class = "error">
          <?php if(!empty($errors['check'])){echo $errors['check']; } ?>
        </div>

        <p><input type ="submit" value = '確認' formaction = "check.php"></p>

        <div class="footer">
          <p>&copypeta-hikari</p>
        </div>
    </form>
  </div>
</body>
</html>