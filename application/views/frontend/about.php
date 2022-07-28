<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2><?php echo get_phrase('Tentang Kami') ?></h2>
                <ol>
                    <li><a href="<?php echo site_url('Beranda_c') ?>"><?php echo get_phrase('Beranda') ?></a></li>
                    <li><?php echo get_phrase('Tentang Kami') ?></li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->
    <?php foreach ($tentang->result() as $result) : ?>
        <section class="inner-page">
            <div class="container">
                <center>
                    <a href="#">
                        <img src="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_tentang ?>" style="margin-top: 120px; width: 500px; margin-top:100px;" alt="<?php echo $namaPerusahaan; ?>">
                    </a>
                </center>
                <h4>
                    <b><?php echo $result->nama_tentang ?></b>
                </h4>
                <p>
                    <?php if ($this->session->userdata('current_language') == 'English') { ?>
                        <?php echo $result->deskripsi_tentang_en ?>
                    <?php } else { ?>
                        <?php echo $result->deskripsi_tentang ?>
                    <?php } ?>
                </p>
            </div>
        </section>
    <?php endforeach; ?>

</main><!-- End #main -->