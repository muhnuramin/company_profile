<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2><?php echo get_phrase('Produk Detail') ?></h2>
                <ol>
                    <li><a href="<?php echo site_url('Beranda_c') ?>"><?php echo get_phrase('Beranda') ?></a></li>
                    <li><a href="<?php echo site_url('Layanan_c') ?>"><?php echo get_phrase('Produk Kami') ?></a></li>
                    <li><?php echo get_phrase('Produk Detail') ?></li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <?php foreach ($produk as $p) : ?>
                <main id="main">
                    <!-- ======= Portfolio Details Section ======= -->
                    <section id="portfolio-details" class="portfolio-details">
                        <div class="container">

                            <div class="row gy-4">

                                <div class="col-lg-6">
                                    <div class="card">
                                        <img src="<?php echo base_url('assets/'); ?>img/<?php echo $p->foto_layanan ?>" alt="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="portfolio-description">
                                        <?php if ($this->session->userdata('current_language') == 'English') { ?>
                                            <h2><?= $p->nama_layanan_en ?></h2>
                                        <?php } else { ?>
                                            <h2><?= $p->nama_layanan ?></h2>
                                        <?php } ?>
                                        <?php if ($this->session->userdata('current_language') == 'English') { ?>
                                            <p><?php echo $p->deskripsi_layanan_en ?></p>
                                        <?php } else { ?>
                                            <p><?php echo $p->deskripsi_layanan ?></p>
                                        <?php } ?>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </section><!-- End Portfolio Details Section -->

                </main>
            <?php endforeach; ?>
        </div>
    </section>

</main><!-- End #main -->