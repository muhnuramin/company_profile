<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2><?php echo get_phrase('Produk Kami') ?></h2>
                <ol>
                    <li><a href="<?php echo site_url('Beranda_c') ?>"><?php echo get_phrase('Beranda') ?></a></li>
                    <li><?php echo get_phrase('Produk Kami') ?></li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                <?php foreach ($product as $p) : ?>
                                    <li data-filter=".filter-<?= $p['id_kategori']; ?>">
                                        <?php if ($this->session->userdata('current_language') == 'English') { ?>
                                            <?php echo $p['nama_kategori_en']; ?>
                                        <?php } else { ?>
                                            <?php echo $p['nama_kategori']; ?>
                                        <?php } ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <br><br>
                    <div class="row portfolio-container">
                        <?php foreach ($layanan as $l) : ?>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-<?= ($l->kategori); ?>">
                                <div class="portfolio-wrap">
                                    <img src="<?php echo base_url('assets/'); ?>img/<?php echo $l->foto_layanan ?>" class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <?php if ($this->session->userdata('current_language') == 'English') { ?>
                                            <h4><?php echo $l->nama_layanan_en ?></h4>
                                            <p><?php echo substr($l->deskripsi_layanan_en, 0, 50) . " ... " ?></p>
                                        <?php } else { ?>
                                            <h4><?php echo $l->nama_layanan ?></h4>
                                            <p><?php echo substr($l->deskripsi_layanan, 0, 50) . " ... " ?></p>
                                        <?php } ?>
                                        <div class="portfolio-links">
                                            <a href="<?php echo base_url('assets/'); ?>img/<?php echo $l->foto_layanan ?>" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                            <a href="<?= base_url('Layanan_c/detail/'); ?><?= ($l->id_layanan); ?>"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </section>
            <!-- End Portfolio Section -->
        </div>
    </section>

</main><!-- End #main -->