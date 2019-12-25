<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  /*text-align: left;    */
}
table#t01 {
  width: 100%;    
  background-color: #f1f1c1;
}

</style>

<!-- <label style="font-size:17px;font-family:'Times New Roman', Times, serif;">
	Barang atau pekerjaan tersebut telah diterima dan diselesaikan dengan baik oleh :
</label> -->

<?php 

   $bulan_awal = Yii::$app->getRequest()->getQueryParam('awal');
   $bulan_akhir = Yii::$app->getRequest()->getQueryParam('akhir');
   $split_awal = explode('-', $bulan_awal);

   function tanggal_indo($tanggal_awal, $tanggal_akhir)
   {
      $bulan = array (1 => 'Januari',
                           'Februari',
                           'Maret',
                           'April',
                           'Mei',
                           'Juni',
                           'Juli',
                           'Agustus',
                           'September',
                           'Oktober',
                           'November',
                           'Desember'
                           );
     $split_awal = explode('-', $tanggal_awal);
     $split_akhir = explode('-', $tanggal_akhir);
     if ((int)$split_awal[1] == (int)$split_akhir[1] ) {
      return $bulan[(int)$split_awal[1]]; 
       
     }else{

     return $bulan[(int)$split_awal[1]]. "-".$bulan[(int)$split_akhir[1]]; 
     }
   }


 ?>

<!-- <div id="centrar">
 <b><p style="text-align: center;font-size:12px;">
  DAFTAR INVENTARIS KANTOR & PABRIK<br>
  PT. KUNANGO JANTAN CABANG PEKANBARU<br>
  ATAS DASAR DEPARTEMENT PENGGUNA<br>
  POSISI PER <?php /* tanggal_indo($bulan_awal, $bulan_akhir) ?> <?= $split_awal[0] */?><p></p>
</div> -->


 <table style="width:100%" border="1" style='font-family:"Courier New", Courier, monospace; font-size:10%'>
  <tr>
    <th>NO.</th>
    <th>TANGGAL PENERIMAAN SURAT</th>
    <th>NOMOR DAN TANGGAL SURAT</th> 
    <th>SIFAT SURAT</th>
    <th>ISI RINGKAS</th>
    <th>KEPADA</th>
    <th>PENGELOLA</th>
  </tr>
  <?php 

$no=1; foreach ($modelSMasuk as $value) {?>
	<tr>
	    <td><?php echo $no; ?></td>
	    <td><?php echo $value['tgl_surat']?></td> 
	    <td><?php echo $value['no_smasuk']?></td>
	    <td><?php echo $value['sifat']?></td>  
	    <td><?php echo $value['lampiran']?></td> 
	    <td><?php echo $value['nama_instansi']?></td> 
	    <td></td> 
  	</tr>
	<?php 
	$no++; }
 ?>
  
</table>
<!-- <br>
<p style="margin-left:600px; font-size:10px;font-family:'Times New Roman', Times, serif;">
	Dibuat Oleh, <br> Supervisor GA 
</p>
<br>
<p style="margin-left:600px; font-size:10px;font-family:'Times New Roman', Times, serif;">
	( Siti Afsah, SH ) 
</p> -->
