<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <h1>isim listesi</h1>
    <ul>
            <?php
                foreach ($isimListele as $key => $value) {
                    echo "<li>" . $value["baslik"] ."</li>";
                }
            ?>
        </ul>
    </body>
</html>