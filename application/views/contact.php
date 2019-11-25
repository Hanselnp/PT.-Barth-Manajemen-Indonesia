<html lang="en">
<title>PT. Barth Management Indonesia</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>/css/main.css">
<link rel="icon favicon" href="<?php echo base_url() ?>/images/logoBMI.png">

<!-- Javascript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>/js/font-awesome/all.js" charset="utf-8"></script>
<script src="<?php echo base_url() ?>/js/sly/sly.min.js" charset="utf-8"></script>
<script src="<?php echo base_url() ?>/js/main.js" charset="utf-8"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</head>

<body>
  <div class="container-fluid p-0 ">
      <div class="row no-gutters">
          <div class="col-12">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <a class="navbar-brand ml-md-2 ml-lg-3" href="#">
                      <img src="<?php echo base_url() ?>/images/logoBMI.png" width="40" height="40" class="d-inline-block align-middle" alt="">
                      <span class="ml-1 navbar-brand-text d-inline-block align-middle">
                          <text class="top-text">PT. Barth Management</text>
                          <br>
                          <text class="bottom-text">Indonesia</text></span>
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto mr-lg-3">
                        <li class="nav-item active">
                          <a class="nav-link" href="<?php echo base_url(); ?>">Beranda<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item about">
                          <a class="nav-link" href="<?php echo base_url(); ?>#about">Tentang Kami</a>
                        </li>
                        <li class="nav-item service">
                          <a class="nav-link" href="<?php echo base_url(); ?>#services">Layanan</a>
                        </li>
                        <li class="nav-item team">
                          <a class="nav-link" href="<?php echo base_url(); ?>#team">Tim</a>
                        </li>
                        <li class="nav-item contact">
                          <a class="nav-link" href="<?php echo base_url(); ?>#contact">Client Kami</a>
                        </li>
                      </ul>
                  </div>
              </nav>
          </div>
      </div>
  </div>

  <div id="home" class="container-fluid " style="margin-top:65px">
    <div class="row full-row-background" style="background-image: url('<?php echo base_url(); ?>/images/top-2.png');">
      <div class="container">
        <div class="row no-gutters full-row-background">
            <div class="container">
              <section id="contact-us">
                <div class="row" style="padding-top: 32px">
                    <div class="col-12 col-md-6 mt-2 mb-2">
                        <div class="sect-header">
                            <h2>Hubungi Kami</h2>
                        </div>
                        <div class="desc-text" style="padding-top: 15px">
                            <p>Tertarik untuk menggunakan jasa kami?</p>
                            <p>Hubungi kami di: +62 812 9333 0862 atau datang saja ke kantor kami di Jl. Gading Serpong, Tangerang, 15811</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-2 mb-2">
                        <div class="foot-header text-right">
                        </div>
                        <div class="desc-text">
                            <form method="POST" action="<?= base_url('Home/emailSend') ?>" style="padding-top: 15px">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nama@contoh.com" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Nama Perusahaan</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="namaperusahaan">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Pesan</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="pesan"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary float-right" style="background-color: #107DAC;">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
              </section>
            </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
