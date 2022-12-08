  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>İçerik Yönetimi</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a target="_blank" href="<?php echo SITE_URL; ?>">
              <span>Siteyi Görüntüle</span>
            </a>
          </li>
          <li>
            <a href="<?php echo SITE_URL; ?>/panel/addNewContent">
              <span>Yeni İçerik Ekle</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo SITE_URL; ?>/admin/logout">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Çıkış Yap</span>
        </a>
      </li><!-- End Login Page Nav -->


    </ul>

  </aside><!-- End Sidebar-->