<!doctype html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

<div class="container">
  <div class="row">
  <div class="col-md-6 col-lg-4 offset-lg-4 offset-md-3 mt-5">
    <div class="bg-secondary p-5 border shadow">
        <form action="<?php echo SITE_URL; ?>/admin/runLogin" method="post">                
            <div class="mb-4">
                <input type="text" class="form-control" name="username" id="username"placeholder="Username">
            </div>
            <div class="mb-4">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary w-100 my-3 shadow">Giriş Yap</button>
        </form>
    </div>
</div>

  </div>
</div>

</html>