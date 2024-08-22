<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav><li><ul><a href="/">HOME</a></ul></li></nav>

    <?php
        date_default_timezone_set("America/Sao_Paulo"); //TimeZone do Brasil GMT-3
        echo "Hoje é dia ".date('D/M/Y - d/m/y')." e a hora atual é ".date('G:I:S - g:i:s')." e a TimeZone é GMT".date('T');
    ?>
</body>
</html>