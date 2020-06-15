<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>form</title>

</head>

<body>
    <form method = 'post'>
      
        <p>名前<input type = "text" name = "name" value = <?php echo $input_name ?>></p>
        <?php if(!empty($errors['name'])){ echo $errors['name'];} ?>
        
        <p>maile<input type = "emaile" name = "maile" value = <?php echo $input_maile ?>></p>
        <?php if(!empty($errors['maile'])){ echo $errors['maile'];} ?>

        <p>本文<input type = "text" name = "main" value = <?php echo $input_main ?>></p>
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
        <p><input type = "checkbox" name = "check" value = "ok">同意しました</p>
        <?php if(!empty($errors['check'])){echo $errors['check']; } ?>

        <p><input type ="submit" value = '送信' formaction = "check.php"></p>

</body>
</html>
<!--pattern="^[a-zA-Z0-9!$&*.=^`|~#%'+\/?_{}-]+@([a-zA-Z0-9_-]+\.)+[a-zA-Z]{2,4}$"-->