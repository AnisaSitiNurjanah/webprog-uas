<form>
   <table border="1" align="center">
       <tr>
          <td colspan="12" align="center"><h2>Laporan Penjualan</h2></td>
      </tr>
      <tr>
          <td>No</td>
          <td>Nama Barang</td>
          <td>Jenis Barang</td>
          <td>Harga Satuan</td>
          <td>Jumlah Beli</td>
          <td>Total Harga</td>
          <td>Diskon</td>
          <td>Total Setelah Diskon</td>
          <td>Bayar</td>
          <td>Kembalian</td>
          <td colspan="2" align="center">Aksi</td>
        </tr>
        <?php 
             include "koneksiDB.php";
             $sql = mysql_query("select*form table_penjualan order by no asc") or die("Menampilkan data GAGAL");
             while ($data = mysql_fetch_array($sql)){
                 $no                = $data['no'];
                 $nama_barang       = $data['nama_barang'];
                 $jenis_barang      = $data['jenis_barang'];
                 $harga_satuan      = $data['harga_satuan'];
                 $jumlah_beli       = $data['jumlah_beli'];
                 $total_harga       = $data['total_harga'];
                 $diskon            = $data['diskon'];
                 $setelah_diskon    = $data['setelah_diskon'];
                 $bayar             = $data['bayar'];
                 $kembalian         = $data['kembalian'];
         ?>
         <tr>
             <td><?php echo $no;?></td>
             <td><?php echo $nama_barang;?></td>
             <td><?php echo $jenis_barang;?></td>
             <td><?php echo $harga_satuan;?></td>
             <td><?php echo $jumlah_beli;?></td>
             <td><?php echo $total_harga;?></td>
             <td><?php echo $diskon;?></td>
             <td><?php echo $setelah_diskon;?></td>
             <td><?php echo $bayar;?></td>
             <td><?php echo $kembalian;?></td>
             <td><a href="form_update.php ?no=<?php echo $no;?>">Update</a></td>
             <td><a href="hapus_laporan.php ?n_no=<?php echo $no;?>">Hapus</a></td>
       </tr>
       <?php } ?>
       <tr>
           <td colspan="12" align="right"><a href="index.php">Data Baru</a></td>
        </tr>
    </table>
    @copyright by 18111019_AnisaSitiNurjanah_TIFRP18CIDB_UASWEB1
</form>