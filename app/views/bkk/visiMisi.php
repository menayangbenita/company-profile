<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('<?= BASEURL; ?>img/SMKN8_2.JPG');">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Visi Misi</h2>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="<?= BASEURL; ?>">ASTA ARKANANTA K8</a></li>
        <li>Visi Misi</li>
      </ol>
    </div>
  </nav>
</div><!-- End Breadcrumbs -->


<!-- ======= About Us Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

  <div class="row gy-4">
                <div class="col-lg-8 content mb-5">
                    <h3>Visi</h3>
                    <div class="border-start border-secondary border-2 mb-5 pe-lg-5">
                        <p class="ms-3">
                            <i><?= $data['visi']['visi'] ?></i>
                        </p>
                    </div>
                    <div>
                        <h3>Misi</h3>
                        <ul>
                          <?php $misi = array_chunk($data['misi'], 3); ?>
                            <?php foreach ($misi as $misii) : ?>
                                <div class="col-lg-4">
                                    <ul class="ms-2 my-0">
                                        <?php foreach ($misii as $item) : ?>
                                            <li><i class="bi bi-arrow-right-short"></i><?= $item['misi'] ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
      