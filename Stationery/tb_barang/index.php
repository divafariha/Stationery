<!--
Author : Diva Fariha Aswarina (210103052)
Created : Tabel Pembeli
Title : Crud Menggunakan Bootsrap
-->
<!doctype html>
<html lang="en">
<head>
<title>Crud Menggunakan Modal Bootstrap (popup)</title>
<meta content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" name="viewport"/>
<meta content="Aguzrybudy" name="author"/>
<link href="../css/bootstrap.css" rel="stylesheet">
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container"><br>
  <h1>SC Stationery Management System</h1>
  <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="../tb_pembeli/index.php">Tabel Pembeli</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../tb_barang/index.php">Tabel Barang</a>
      </li>
    </ul>
  </div>
</div>
<br>
  <h2>Tabel Data Barang</h2>
  <p><a href="#" class="btn btn-success" data-target="#ModalAdd" data-toggle="modal">Add Data</a></p>      

<table id="mytable" class="table table-bordered">
    <thead>
      <th>No</th>
      <th>NAMA BARANG</th>
      <th>STOK BARANG</th>
      <th>DESKRIPSI BARANG</th>
      <th>HARGA BARANG</th>
      <th>Action</th>
    </thead>
<?php 
  //menampilkan data mysqli
  include "../koneksi.php";
  $no = 0;
  $tb_barang=mysqli_query($koneksi,"SELECT * FROM tb_barang");
  while($r=mysqli_fetch_array($tb_barang)){
  $no++;
       
?>
  <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo  $r['nama_barang']; ?></td>
      <td><?php echo  $r['stok_barang']; ?></td>
      <td><?php echo  $r['deskripsi_barang']; ?></td>
      <td><?php echo  $r['harga_barang']; ?></td>
      <td>
         <a href="#" class='open_modal' id='<?php echo  $r['id_barang']; ?>'>Edit</a>
         <a href="#" onclick="confirm_modal('proses_delete.php?&id_barang=<?php echo  $r['id_barang']; ?>');">Delete</a>
      </td>
  </tr>
 

<?php } ?>
</table>
</div>

<!-- Modal Popup untuk Add--> 
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Add Data Using Modal Boostrap (popup)</h4>
        </div>

        <div class="modal-body">
          <form action="proses_save.php" name="modal_popup" enctype="multipart/form-data" method="POST">
              
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="nama_barang">Modal Name</label>
                  <input type="text" name="nama_barang"  class="form-control" placeholder="Nama Barang" required/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="stok_barang">STOK BARANG</label>
                  <input type="text" name="stok_barang"  class="form-control" placeholder="Stok Barang" required/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="deskripsi_barang">DESKRIPS BARANG</label>
                   <textarea name="deskripsi_barang"  class="form-control" placeholder="Deskripsi barang" required></textarea>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="harga_barang">HARGA BARANG</label>
                  <input type="text" name="harga_barang"  class="form-control" placeholder="Harga Barang" required>
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

           

            </div>

           
        </div>
    </div>
</div>

<!-- Modal Popup untuk Edit--> 
<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>

<!-- Modal Popup untuk delete--> 
<div class="modal fade" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?</h4>
      </div>
                
      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <a href="#" class="btn btn-danger" id="delete_link">Delete</a>
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>



<!-- Javascript untuk popup modal Edit--> 
<script type="text/javascript">
   $(document).ready(function () {
   $(".open_modal").click(function(e) {
      var m = $(this).attr("id");
		   $.ajax({
    			   url: "modal_edit.php",
    			   type: "GET",
    			   data : {id_barang: m,},
    			   success: function (ajaxData){
      			   $("#ModalEdit").html(ajaxData);
      			   $("#ModalEdit").modal('show',{backdrop: 'true'});
      		   }
    		   });
        });
      });
</script>

<!-- Javascript untuk popup modal Delete--> 
<script type="text/javascript">
    function confirm_modal(delete_url)
    {
      $('#modal_delete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>

</body>
</html>

  



