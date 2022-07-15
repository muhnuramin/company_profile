<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex">
    <div class="logo mr-auto">
      <h1><a href="index.html"><img src="<?php echo base_url('assets/'); ?>img/logo_h.png" style="margin: -10px -0px 0px 0px;" alt="Logo <?php echo $namaPerusahaan; ?>"></a></h1>
    </div>

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li> <a href="<?php echo site_url('Home') ?>"><?php echo get_phrase('Beranda') ?></a></li>
        <li> <a href="<?php echo site_url('About-us') ?>"><?php echo get_phrase('Tentang Kami') ?></a></li>
        <li> <a href="<?php echo site_url('Our-Products') ?>"><?php echo get_phrase('Produk Kami') ?></a></li>
        <li> <a href="<?php echo site_url('Photo-Gallery') ?>"><?php echo get_phrase('Galeri Foto') ?></a></li>
        <li class="active"> <a href="<?php echo site_url('Contacts') ?>"><?php echo get_phrase('Hubungi Kami') ?></a></li>
        <li>
          <a href="#" class="" data-toggle="dropdown">
            <?php echo get_phrase('Pilih Bahasa'); ?>
            <img src="<?php echo base_url('assets/') ?>flag/id.png">&nbsp;<img src="<?php echo base_url('assets/') ?>flag/en.png">
            &nbsp;
            <i class="ace-icon fa fa-angle-down bigger-110"></i>
          </a>

          <ul class="dropdown-menu dropdown-light-blue dropdown-caret">
            <?php

            $fields = $this->db->list_fields('language');

            foreach ($fields as $field) {

              if ($field == 'phrase_id' || $field == 'phrase') continue;

            ?>

              <li>

                <a href="<?php echo base_url(); ?>Multilanguage/select_language/<?php echo $field; ?>" style="color:black;">

                  <?php echo $field; ?>

                  <?php //selecting current language

                  if ($this->session->userdata('current_language') == $field) : ?>

                    <i class="icon-ok"></i>

                  <?php endif; ?>

                </a>

              </li>

            <?php

            }

            ?>
          </ul>
        </li>
      </ul>
    </nav><!-- .nav-menu -->
  </div>
</header><!-- End Header -->

<!-- ======= Page Property  ======= -->
<div class="our-skill-area fix hidden-sm">
  <div class="overlay"></div>
  <div class="area-padding-2" style="background-size: cover; background-position: 0 -700px; background-image: url(<?php echo base_url('assets/') ?>img/82fa28179db1f8b30c60786d1418f120.jpeg); ">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="slide-head-text text-center">
            <h3 class="wow fadeInDown"><span><?php echo get_phrase('Hubungi Kami') ?></span></h3>
            <ul class="short-bread wow fadeInUp">
              <li><a href="<?php echo site_url('Beranda_c') ?>"><?php echo get_phrase('Beranda') ?></a></li>
              <li><?php echo get_phrase('Hubungi Kami') ?></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Page Properti -->

<main id="main">
  <!-- ======= About Section ======= -->
  <div class="about-area area-padding">
    <div class="container">
      <?php foreach ($kontak->result() as $result) : ?>
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft">
            <div class="well-middle">
              <div class="single-well-c">
                <a href="#">
                  <h2 class="sec-head-c"><span><?php echo get_phrase('Hubungi Kami') ?></span></h2>
                </a>
                <p>
                  <?php if ($this->session->userdata('current_language') == 'English') { ?>
                    <?php echo $result->deskripsi_kontak_us ?>
                  <?php } else { ?>
                    <?php echo $result->deskripsi_kontak ?>
                  <?php } ?>
                </p>
                <p>Email :
                  <?php echo $result->email_kontak ?></p>
                <p><?php echo get_phrase('nomor') ?> :
                  <?php echo $result->nomor_kontak ?>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight">
            <div class="well-left">
              <div class="single-well">
                <?php echo $result->script_embed_code ?>
              </div>
            </div>
          </div>
        </div>
    </div>
  <?php endforeach; ?>
  </div><!-- End About Section -->
</main><!-- End #main -->