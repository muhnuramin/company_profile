<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel" role="listbox">
            <?php foreach ($sliderActive as $result) : ?>
                <div class="carousel-item active" style="background-image: url(<?php echo base_url('assets/') ?>img/<?php echo $result->foto_slider ?>)">
                </div>
            <?php endforeach; ?>
            <?php foreach ($slider as $result) : ?>
                <div class="carousel-item" style="background-image: url(<?php echo base_url('assets/') ?>img/<?php echo $result->foto_slider ?>)">
                </div>
            <?php endforeach; ?>
        </div>
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
    </div>
</section>
<!-- End Hero -->
<!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container">
        <div class="section-title">
            <h2><?php echo get_phrase('Tentang Kami') ?></h2>
            <?php foreach ($tentang->result() as $result) : ?>
                <b></b>
        </div>
        <div class="row">
            <div class="col-lg-6 order-1 order-lg-2">
                <img src="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_tentang ?>" style="width: 500px;" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                <h3><?php echo $result->nama_tentang ?></h3>
                <p style="text-align: justify;">
                    <?php if ($this->session->userdata('current_language') == 'English') { ?>
                        <?php echo substr($result->deskripsi_tentang_en, 0, 1000) . '...' ?>
                    <?php } else { ?>
                        <?php echo substr($result->deskripsi_tentang, 0, 1000) . '...' ?>
                    <?php } ?>
                </p>
                <a href="<?php echo site_url('About-us') ?>" class="btn btn-outline-success"><?php echo get_phrase('selengkapnya') ?></a>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</section>
<!-- End About Us Section -->
<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
</section>
<!-- End Cta Section -->
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="section-title">
            <h2><?php echo get_phrase('Galeri Foto') ?></h2>
        </div>
        <div class="row portfolio-container">
            <?php foreach ($galeri as $a) : ?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="<?php echo base_url('assets/'); ?>img/<?php echo $a->foto_galeri ?>" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><?php if ($this->session->userdata('current_language') == 'English') { ?>
                                    <?php echo $a->nama_album_en; ?>
                                <?php } else { ?>
                                    <?php echo $a->nama_album; ?>
                                <?php } ?></h4>
                            <div class="portfolio-links">
                                <a href="<?php echo base_url('assets/'); ?>img/<?php echo $a->foto_galeri ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= ($a->nama_album) ?>"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- End Portfolio Section -->