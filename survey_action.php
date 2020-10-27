<body>
    <h1>php页面</h1>
<?php   
  foreach ($_POST as $key => $value){echo "<li>{$key} : {$value} </li>";}
?>
</body>