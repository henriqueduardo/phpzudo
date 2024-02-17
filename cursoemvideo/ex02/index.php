<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>phpzudo</title>
</head>

<body>
  <p>exemplo</p>
  <?php
    date_default_timezone_set("America/Sao_Paulo"); // setar timezone
    echo "hoje é dia " . date("d/M/Y"); // dias, meses e anos
    echo "e agora são " . date("G:i:s"); // horas, minutos e segundos
  ?>
</body>

</html>