<main id="main" class="main">

	<div class="pagetitle">
		<h1>Profil Güncelle</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>/panel/home">Anasayfa</a></li>
				<li class="breadcrumb-item active">Profil</li>
			</ol>
		</nav>
	</div><!-- End Page Title -->

	<section class="section profile">
		<div class="row">
		<?php
    if(isset($formErrors)){
    ?>
        <div class="alert alert-danger">
        <?php
            foreach ($formErrors as $key => $value) {
                switch($key){
					case 'etiket':
                        foreach ($value as $val) {
                            echo "ETİKET: " . $val . "<br />";
                        }
                        break;
                    case 'title':
                        foreach ($value as $val) {
                            echo "BAŞLIK: " . $val . "<br />";
                        }
                        break;
                    case 'content':
                        foreach ($value as $val) {
                            echo "İÇERİK: " . $val . "<br />";
                        }
                        break;
                    default:
                        break;
                }
            }
        ?>
        </div>
    <?php } ?>
			<div class="col-xl-4">

				<div class="card">
					<div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

						<img src="<?php echo SITE_PUBLIC; ?>/img/apple-touch-icon.png" alt="Profile" class="rounded-circle">
						<h2><?php echo Session::get("username"); ?></h2>

					</div>
				</div>

			</div>

			<div class="col-xl-8">

				<div class="card">
					<div class="card-body pt-3">
						<!-- Bordered Tabs -->
						<ul class="nav nav-tabs nav-tabs-bordered">
							<li class="nav-item">
								<button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Blog Ekle</button>
							</li>
						</ul>

						<div class="tab-content pt-2">
							<div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">

								<!-- Profile Edit Form -->
								<form action="<?php echo SITE_URL; ?>/panel/addnewcontentrun" method="post">

								<div class="row mb-3">
										<label for="etiket" class="col-md-4 col-lg-3 col-form-label">Etiket</label>
										<div class="col-md-8 col-lg-9">
											<input name="etiket" type="text" class="form-control" id="etiket" value="">
										</div>
									</div>

									<div class="row mb-3">
										<label for="title" class="col-md-4 col-lg-3 col-form-label">Başlık</label>
										<div class="col-md-8 col-lg-9">
											<input name="title" type="text" class="form-control" id="title" value="">
										</div>
									</div>

									<div class="row mb-3">
										<label for="content" class="col-md-4 col-lg-3 col-form-label">İçerik</label>
										<div class="col-md-8 col-lg-9">
											<textarea name="content" class="form-control" id="content" style="height: 100px"></textarea>
										</div>
									</div>


									<div class="text-center">
										<button type="submit" class="btn btn-primary">Ekle</button>
									</div>
								</form><!-- End Profile Edit Form -->
							</div>
						</div><!-- End Bordered Tabs -->

					</div>
				</div>

			</div>
		</div>
	</section>

</main><!-- End #main -->