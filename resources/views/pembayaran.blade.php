<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Pembayaran</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>

  <div class="container mt-5">
    <h2>Detail Pembayaran</h2>
    
    <!-- Detail Barang -->
    <div class="card mt-4">
      <div class="card-header">
        Detail Tiket Konser Musik
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-4">
            <img src="https://pophariini.com/wp-content/uploads/2020/06/NOAH-1-dok-musica.jpg" alt="Foto Barang" class="img-fluid mb-3" style="max-width: 300px;">
          </div>
          <div class="col-md-8">
            <h5 class="card-title">Tiket Konser Musik : Indonesian Idol</h5>
            <p class="card-text">Harga: Rp. 1.200.000</p>
            <p class="card-text">Jumlah: 2</p>
            <p class="card-text">Total: Rp. 2.400.000</p>
            </div>
        </div>
      </div>
    </div>

    <!-- Jenis Pembayaran -->
    <div class="card mt-4">
      <div class="card-header">
        Jenis Pembayaran
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="paymentMethod">Pilih Metode Pembayaran:</label>
          <select class="form-control" id="paymentMethod">
            <option value="bankTransfer">Transfer Bank</option>
            <option value="ewallet">E-Wallet</option>
          </select>
        </div>
      </div>
    </div>


    <!-- Tombol Upload Bukti Pembayaran -->
    <div class="card mt-4">
      <div class="card-header">
        Upload Bukti Pembayaran
      </div>
      <div class="card-body">
        <form action="#" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="proofOfPayment">Pilih Gambar:</label>
            <input type="file" class="form-control-file" id="proofOfPayment" name="proofOfPayment" accept="image/*">
          </div>
          <button type="submit" class="btn btn-secondary">Unggah</button>
        </form>
      </div>
    </div>

    <button class="btn btn-primary mt-4 mb-4 ">Lakukan Pesanan</button>


  </div>

  <!-- Bootstrap JS and Popper.js (optional) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
