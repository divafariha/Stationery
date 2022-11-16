<!--
buat ngedit ya brooo.......!
-->
<?php
    include "../koneksi.php";
	$id_barang=$_GET['id_barang'];
	$tb_barang=mysqli_query($koneksi,"SELECT * FROM tb_barang WHERE id_barang='$id_barang'");
	while($r=mysqli_fetch_array($tb_barang)){
?>

<div class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title" id="myModalLabel">Edit Data BARANG</h4>
        </div>

        <div class="modal-body">
        	<form action="proses_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
				
                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="nama_barang">NAMA BARANG</label>
                    <input type="hidden" name="id_barang"  class="form-control" value="<?php echo $r['id_barang']; ?>" />
     				<input type="text" name="nama_barang"  class="form-control" value="<?php echo $r['nama_barang']; ?>"/>
                </div>

				<div class="form-group" style="padding-bottom: 20px;">
                	<label for="stok_barang">STOK BARANG</label>
					<input type="text" name="stok_barang"  class="form-control" value="<?php echo $r['stok_barang']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="deskripsi_barang">DESKRIPSI BARANG</label>
     				<textarea name="deskripsi_barang"  class="form-control"><?php echo $r['deskripsi_barang']; ?></textarea>
                </div>

				<div class="form-group" style="padding-bottom: 20px;">
                	<label for="harga_barang">HARGA BARANG</label>
     				<input type="text" name="harga_barang"  class="form-control" value="<?php echo $r['harga_barang']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="Date">Date</label>       
     				<input type="text" name="date"  class="form-control" value="<?php echo $r['date']; ?>" disabled/>
                </div>

	            <div class="modal-footer">
	                <button class="btn btn-success" type="submit">
	                    Confirm
	                </button>

	                <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
	               		Cancel
	                </button>
	            </div>

            	</form>

             <?php } ?>

            </div>

           
        </div>
    </div>