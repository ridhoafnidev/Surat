<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Inventaris';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Selamat Datang!</h1>

        <p class="lead">Anda berada di BRSAMPK</p>

        <?php /* Html::a('Lihat Data Asset Inventaris', ['/laporan/laporan'], ['class'=>'btn btn-lg btn-success']) */ ?>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
                <h2>Visi</h2>

                <p>“Menjadi pusat rehabilitasi sosial remaja terbaik di regional sumatera tahun 2025”</p>

                <p><a class="btn btn-default" href="#">Read more.. &raquo;</a></p>
            </div>
            <div class="col-lg-6">
                <h2>Misi</h2>

                <p>a.  Menyelenggarakan pelayanan kesejahteraan sosial yang profesional dan proporsional.</p>
                <p>b.  Meningkatkan dan mengembangkan Sumber Daya Manusia (SDM) di lingkungan BRSAMPK “Rumbai” Pekanbaru.</p>
                <p>c.  Memberdayakan individu, kelompok, keluarga, lembaga sosial, dan jaringan kerja terkait, dalam meningkatkan peran dan tangung jawab sosialnya.<span id="dots">...</span></p>
                <p><span id="more">d.  Meningkatkan kualitas dan kuantitas sarana dan prasarana pelayanan kesejahteraan sosial.</p>
                <p>e.  Melakukan penjangkauan dan rehabilitasi sosial di pulau terluar di wilayah sumatera.</p>


                <p><a class="btn btn-default" id="myBtn" onclick="myFunction()">Read more... &raquo;</a></p>
            </div> 
            <!-- <div class="col-lg-4">
                <h2>Sejarah</h2>

                <p>PT.KUNANGO JANTAN adalah sebuah perusahaan yang bergerak di bidang manufacturing dan trading yang didirikan berdasarkan Akta Notaris Arry Supratno, SH No. 30 tanggal 09 April 1993, perusahaan ini awalnya bergerak  bidang trading mekanikal elektrikal yang mengakibatkan terjadinya perubahan pada Akta Notaris Frida Damayanti, SH No. 4 tanggal 09 Januari 2001. Pada awal berdirinya perusahaan ini hanya memproduksi Manufacture Tiang Besi. </p>

                <p><a class="btn btn-default" href="#">Read more... &raquo;</a></p>
            </div> -->
        </div>

    </div>
</div>

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
