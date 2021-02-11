<?php
     include "koneksiDB.php";
     $no = $_GET['no'];
     $sql = mysql_query("select*form tabel_penjualan where no='$no'");
     while ($data = mysql_fetch_array($sql)) {
         $no                = $data['no'];
         $nama_barang       = $data['nama_barang'];
         $jenis_barang      = $data['jenis_barang'];
         $harga_satuan      = $data['harga_satuan'];
         $jumlah_beli       = $data['jumlah_beli'];
         $total_harga       = $data['total_harga'];
         $diskon            = $data['diskon'];
         $setelah_diskon    = $data['setelah_diskon'];
         $bayar             = $data['bayar'];
         $kembalian         = $data['kembalian']
        }
        ?>
        <form method="POST" action="update_penjualan.php ?no=<?php echo $no;?>">
            <table border="0" align="center">
             <tr>
               <td colspan="3" align="center"><h2>Form Update</h2></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="nama_barang" id="nama_barang" value="<?php echo $nama_barang; ?>" /></td>
            </tr>
            <tr>
                <td>Jenis Barang</td>
                <td>:</td>
                <td><input type="text" name="jenis_barang" id="jenis_barang" value="<?php echo $jenis_barang; ?>" /></td>
            </tr>
            <tr>
                <td>Harga Satuan</td>
                <td>:</td>
                <td><input type="text" name="harga_satuan" id="harga_satuan" value="<?php echo $harga_satuan; ?>" 
                onfocus="mulaiHitung()" onblur="berhentiHitung()"/></td>
            </tr>
            <tr>
                <td>Jumlah Beli</td>
                <td>:</td>
                <td><input type="text" name="jumlah_beli" id="jumlah_beli" value="<?php echo $jumlah_beli; ?>" 
                onfocus="mulaiHitung()" onblur="berhentiHitung()"/></td>
            </tr>
            <tr>
                <td>Total Bayar</td>
                <td>:</td>
                <td><input type="text" name="total_bayar" id="total_bayar" value="<?php echo $total_bayar; ?>" /></td>
            </tr>
            <tr>
                <td>Dikon</td>
                <td>:</td>
                <td><input type="text" name="diskon" id="diskon" value="<?php echo $diskon; ?>" /></td>
            </tr>
            <tr>
                <td>Total Setelah Diskon</td>
                <td>:</td>
                <td><input type="text" name="setrlah_diskon" id="setelah_diskon" value="<?php echo $setelah_diskon; ?>" /></td>
            </tr>
            <tr>
                <td>Bayar</td>
                <td>:</td>
                <td><input type="text" name="bayar" id="bayar" value="<?php echo $bayar; ?>" onfocus="mulaiHitung()" onblur="
                berhentiHitung()" /></td>
            </tr>
            <tr>
                <td>Kembalian</td>
                <td>:</td>
                <td><input type="text" name="kembalian" id="kembalian" value="<?php echo $kembalian; ?>" /></td>
            </tr>
            <script type="text/javascript">
                 function mulaiHitung(){
                     Interval = setInterval("hitung()".1);
                    }
                    function hitung(){
                        harga_satuan = parseInt(document.getElementById("harga_satuan").value);
                        jumlah_beli = parseInt(document.getElementById("jumlah_beli").value);
                        document.getElementById = harga_satuan*jumlah_beli;
                        document.getElementById("total_bayar").value*total_bayar;

                        diskon = "";
                        persen = "";
                        if(total_bayar <= 100000){
                            diskon = (0/100)*total_bayar;
                            persen ="0%";
                        }
                        else if(total_bayar > 100000 && total_bayar <= 200000){
                            diskon = (10/100)*total_bayar;
                            persen = "10%";
                        }
                        else if(total_bayar > 200000 && total_bayar <= 300000){
                            diskon = (20/100)*total_bayar;
                            persen = "20%";
                        }
                        else if(total_bayar > 300000){
                            diskon = (10/100)*total_bayar;
                            persen = "30%";
                        }
                        document.getElementById("diskon").value = persen + "--> "+diskon;
                        setelah_diskon  = total_bayar - diskon;
                        document.getElementById("setelah_diskon").value = setelah_diskon;
                        bayar           = parseInt(document.getElementById("bayar").value);
                        kembalian       = bayar - setelah_diskon;
                        document.getElementById("kembalian").value = kembalian;
                    }
                    function berhentiHitung(){
                        clearInterval(Interval);
                    }
                </script>
                <tr>
                    <td></td>
                    <td></td>
                    <td><a href="laporan_penjualan.php">Laporan</a></td>
                </tr>
                @copyright by 18111019_AnisaSitiNurjanah_TIFRP18CIDB_UASWEB1
        </table>
</form>