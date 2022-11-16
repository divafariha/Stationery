<!--
buat ngedit ya brooo.......!
-->
<?php
    include "../koneksi.php";
	$id_pembeli=$_GET['id_pembeli'];
	$tb_pembeli=mysqli_query($koneksi,"SELECT * FROM tb_pembeli WHERE id_pembeli='$id_pembeli'");
	while($r=mysqli_fetch_array($tb_pembeli)){
?>

<div class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title" id="myModalLabel">Edit Data PEMBELI</h4>
        </div>

        <div class="modal-body">
        	<form action="proses_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
				
                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="nama_pembeli">Nama Pembeli</label>
                    <input type="hidden" name="id_pembeli"  class="form-control" value="<?php echo $r['id_pembeli']; ?>" />
     				<input type="text" name="nama_pembeli"  class="form-control" value="<?php echo $r['nama_pembeli']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="alamat_pembeli">Alamat Pembeli</label>
     				<textarea name="alamat_pembeli"  class="form-control"><?php echo $r['alamat_pembeli']; ?></textarea>
                </div>

				<div class="form-group" style="padding-bottom: 20px;">
                	<label for="notelp_pembeli">Nomor Telepon Pembeli</label>
     				<input type="text" name="notelp_pembeli"  class="form-control" value="<?php echo $r['notelp_pembeli']; ?>">
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