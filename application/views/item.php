
        <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           TABEL ITEM
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="master/add_item" class="btn btn-success" >TAMBAH</a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Merek</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no=1;
                                            foreach ($data->result() as $row) {
                                                ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $row->kode; ?></td>
                                            <td><?php echo $row->nama; ?></td>
                                            <td><?php echo $row->merek; ?></td>
                                            <td> 
                                                <a href="master/hapus_item/<?php echo $row->id_item ?>" class="btn btn-warning">HAPUS</a>
                                            </td>
                                            
                                        </tr>
                                             <?php
                                            }
                                         ?>

                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
 