<html>
<head>
  <title>API List</title>
</head>
<body>
  <h1>API List</h1>
  <?
  foreach (glob("*.php") as $filename) {
    $cleanName = substr($filename, 0, -4);
    if($filename != "index.php")
    {
      echo "<a href=$filename>$cleanName</a><br />";
    }
  }
  ?>
</body>
</html>
