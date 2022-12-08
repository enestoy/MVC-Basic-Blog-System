<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Yeni Makale</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <?php 
                if(isset($mesaj)){
                    echo "<div class='alert alert-success'>".$mesaj["mesaj"]."</div>";
                }
                ?>
                <h3>Yeni Makale</h3>
                <form action="http://localhost/mvc-1/index/makaleKaydet" method="post">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Başlık</label>
                        <input type="text" class="form-control" id="baslik" name="baslik" placeholder="Bir Başlık Giriniz.">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">İçerik</label>
                        <textarea class="form-control" placeholder="İçerik Giriniz." id="icerik" name="icerik" style="height: 100px"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Etiket</label>
                        <input type="text" class="form-control"id="etiket" name="etiket"placeholder="Bir Etiket Giriniz.">
                    </div>
                    <button type="submit"class="btn btn-dark">Kaydet</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>