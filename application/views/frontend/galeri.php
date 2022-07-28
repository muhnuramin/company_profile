<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2><?php echo get_phrase('Galeri Foto') ?></h2>
                <ol>
                    <li><a href="<?php echo site_url('Beranda_c') ?>"><?php echo get_phrase('Beranda') ?></a></li>
                    <li><?php echo get_phrase('Galeri Foto') ?></li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <section id="portfolio" class="portfolio">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                <?php foreach ($album as $a) : ?>
                                    <li data-filter=".filter-<?= ($a->id_album) ?>">
                                        <?php if ($this->session->userdata('current_language') == 'English') { ?>
                                            <?= $a->nama_album_en ?>
                                        <?php } else { ?>
                                            <?= $a->nama_album ?>
                                        <?php } ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <div class="row portfolio-container">
                        <?php foreach ($galeri as $g) : ?>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-<?= ($g->nama_album) ?>">
                                <div class="portfolio-wrap">
                                    <img src="<?php echo base_url('assets/'); ?>img/<?php echo $g->foto_galeri ?>" class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <div class="portfolio-links">
                                            <a href="<?php echo base_url('assets/'); ?>img/<?php echo $g->foto_galeri ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        </div>
    </section>

</main><!-- End #main -->