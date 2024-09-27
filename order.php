<?php $title = "K'ramad - Order Now"; ?>
<?php require_once 'layout/header.php'; ?>

<!-- Page Header Start -->
<div class="page-header parallaxie">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- Page Header Box start -->
        <div class="page-header-box">
          <h1 class="text-anime">Order Online</h1>
        </div>
        <!-- Page Header Box end -->
      </div>
    </div>
  </div>
</div>
<!-- Page Header End -->

<!-- Advance Booking Start -->
<div class="advance-booking-page wow fadeInUp" data-wow-delay="0.75s">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <!-- Booking Content start -->
        <div class="booking-content">
          <!-- <p>Secure your spot at our restaurant with ease using our advance booking form. Simply provide your details and preferences, and we'll ensure your reservation is seamlessly arranged. Enjoy the convenience of planning your dining experience ahead of time, guaranteeing a memorable visit to our establishment.</p> -->
        </div>
        <!-- Booking Content end -->

        <!-- Booking Form start -->
        <div class="booking-form">
          <form method="post" action="wame/action.php">
            <div class="row">
              <div class="form-group col-md-6 mb-4">
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" required>
                <div class="help-block with-errors"></div>
              </div>

              <div class="form-group col-md-6 mb-4">
                <input type="text" name ="nomer_telepon_pembeli" class="form-control" id="nomor_telepon_pembeli"
                  placeholder="No. Tlp" required>
                <div class="help-block with-errors"></div>
              </div>

              <div class="form-group col-md-6 mb-4">
                <input type="number" name="produk" class="form-control" id="produk" placeholder="Jumlah Pesanan" required>
                <div class="help-block with-errors"></div>
              </div>

              <div class="form-group col-md-6 mb-4">
                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" required>
                <div class="help-block with-errors"></div>
              </div>

              <div class="form-group col-md-12 mb-4">
                <textarea name="pesan" class="form-control" id="pesan" rows="8" placeholder="Catatan"></textarea>
                <div class="help-block with-errors"></div>
              </div>

              <div class="col-md-12 button-group text-center">
                <button name="submit" type="submit" class="btn-default">Order Now</button>
              </div>
            </div>
          </form>
        </div>
        <!-- Booking Form end -->
      </div>
    </div>
  </div>
</div>
<!-- Advance Booking End -->

<?php require_once 'layout/footer.php'; ?>
