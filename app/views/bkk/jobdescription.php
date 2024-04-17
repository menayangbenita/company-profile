<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('<?= BASEURL; ?>img/SMKN8_2.JPG');">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Jobdescription</h2>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="<?= BASEURL; ?>">BKK</a></li>
        <li>Jobdescription</li>
      </ol>
    </div>
  </nav>
</div><!-- End Breadcrumbs -->

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">
    <div class="row gy-4">
        <div class="col-lg-8 content mb-5">
            <h3>Jobdescription</h3>
            <p>
                <?= $data['jobdesc']['isi'] ?><br>
                <a class="text-primary text-decoration-underline" target="_blank" href="<?= $data['jobdesc']['link'] ?>"><?= $data['jobdesc']['link'] ?></a>
            </p>
            <div class="pe-lg-3 mb-3 position-relative">
                <div class="pdf-container rounded-2">
                    <iframe src="<?= $data['jobdesc']['link'] ?>" width="100%" height=""></iframe>
                </div>
            </div>
        </div>
        
        