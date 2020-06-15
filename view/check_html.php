<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <title>確認画面</title>

</head>

<body>

    <?php foreach($input_info as $key => $data){ ?>
          <p>
              <?php echo "$key : $data"; ?>
          </p>
    <?php } ?>

    <h1>完了</h1>

</body>
</html>