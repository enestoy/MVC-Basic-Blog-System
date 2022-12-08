<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    <div class="row">
        <div class="col-6 mt-5">
            <h2>Makale Listesi</h2>
            <table class="table table-success">
                <tr>
                    <td>ID</td>
                    <td>BAŞLIK</td>
                    <td>İŞLEMLER</td>
                </tr>
                <?php
                foreach ($makaleListele as $key => $value) {
                    echo "<tr>";
                    echo "<td>" . $value["id"] . "</td>";
                    echo "<td>" . $value["baslik"] . "</td>";
                    echo "<td>";
                    echo "<a class='link-primary me-2' href='http://localhost/mvc-1/index/makaleDuzenle/" . $value["id"] . "'>Düzenle</a>";
                    echo "<a class='link-primary' href='http://localhost/mvc-1/index/makaleSil/" . $value["id"] . "'>Sil</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>