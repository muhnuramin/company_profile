<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2><?php echo get_phrase('Hubungi Kami') ?></h2>
                <ol>
                    <li><a href="<?php echo site_url('Beranda_c') ?>"><?php echo get_phrase('Beranda') ?></a></li>
                    <li><?php echo get_phrase('Hubungi Kami') ?></li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">

                <div class="row">
                    <?php foreach ($kontak->result() as $result) : ?>
                        <div class="col-lg-5 d-flex align-items-stretch">
                            <div class="info">

                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p><?php echo $result->email_kontak ?></p>
                                </div>

                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4><?php echo get_phrase('nomor') ?>:</h4>
                                    <p><?php echo $result->nomor_kontak ?></p>
                                </div>

                                <?php echo $result->script_embed_code ?>
                            </div>

                        </div>

                        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <?php if ($this->session->userdata('current_language') == 'English') { ?>
                                    <?php echo $result->deskripsi_kontak_us ?>
                                <?php } else { ?>
                                    <?php echo $result->deskripsi_kontak ?>
                                <?php } ?>
                            </form>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
            <!-- End Contact Section -->
        </div>
    </section>

</main><!-- End #main -->