
        <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           FORM INPUT STOK
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                         
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="master/proses_add_stok" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Kode</label>
                                            <input type="text" name="no_penjualan" class="form-control"> 
                                        </div>
                                        <div class="form-group">
                                            <label>Item</label>
                                            <select name="id_item" class="form-control">
                                                <?php 

                                                    $sql= $this->db->query("SELECT * FROM tbl_item ");
                                                    foreach ($sql->result() as $row) {
                                                        ?>

                                                            <option value="<?php echo $row->id_item ?>"><?php echo $row->nama ?></option>

                                                        <?php
                                                    }
                                                 ?>
                                            </select>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input type="text" name="jumlah" class="form-control"> 
                                        </div>
                                          

 
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        <button type="reset" class="btn btn-danger">Reset </button>
                                    </form>
                                </div>
                            </div>
                        </div>
 
