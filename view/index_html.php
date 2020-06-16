<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>form</title>
  <link rel="stylesheet" type="text/css" href="css/form.css">

</head>

<body>
  <div class="main">
  <h2> お問い合わせ</h2>
  <p> 下記の項目をご記入ください。</p>

  <form method = 'post'>

        <p>名前<input type = "text" name = "name" value ="<?php echo $input_info['name']; ?>"></p>
        <?php if(!empty($errors['name'])){ echo $errors['name'];} ?>

        <p>maile<input type = "emaile" name = "maile" value = "<?php echo $input_info['maile']; ?>"></p>
        <?php if(!empty($errors['maile'])){ echo $errors['maile'];} ?>

        <p>本文<input type = "text" name = "main" value = "<?php echo $input_info['main']; ?>"></p>
        <?php if(!empty($errors['main'])){ echo $errors['main'];} ?>

        <p>
          業種<select name = "job">
            <option value = "SE">SE</option>
            <option value = "営業">営業</option>
        </select>
        </p>
        <p>
          性別<input type = "radio" name = "gender" value = "M" checked>男性
              <input type = "radio" name = "gender" value = "F">女性
        </p>
        <p>
          <input type="hidden" name="check" value="">
          <input type = "checkbox" name = "check" value ="on">同意しました
        </p>
        <?php if(!empty($errors['check'])){echo $errors['check']; } ?>

        <p><input type ="submit" value = '送信' formaction = "check.php"></p>
    </form>
</body>
</html>