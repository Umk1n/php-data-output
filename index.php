<?
  $db = new PDO("mysql:host=localhost;dbname=info_optim",
  "root", "root");
  $info = [];
  $info_title = [];
  if ($query = $db->query("SELECT * FROM main_info")) {
    echo "<pre>";
    $info = $query->fetchAll(PDO::FETCH_ASSOC);
    echo "</pre>";
  } else {
    print_r($db->errorInfo());
  }
  if ($query = $db->query("SELECT * FROM title")) {
    echo "<pre>";
    $info_title = $query->fetchAll(PDO::FETCH_ASSOC);
    echo "</pre>";
  } else {
    print_r($db->errorInfo());
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Оптимизация</title>
</head>
<body>
  <div class="container">
  <?include 'header.php'; ?>
  <?include 'content.php'; ?>
  <?include 'footer.php'; ?>
  </div>
</body>
</html>