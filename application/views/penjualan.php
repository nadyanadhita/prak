
        <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           TABEL PENJUALAN
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="master/add_penjualan" class="btn btn-success" >TAMBAH</a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No Penjualan</th>
                                            <th>Tgl Penjualan</th>
                                            <th>Costumer</th>
                                            <th>total</th>
                                            <th>berbayar</th>
                                            <th>sisa</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no=1;
                                            foreach ($data->result() as $row) {
                                                ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $row->no_penjualan; ?></td>
                                            <td><?php echo $row->tgl_penjualan; ?></td>
                                            <td><?php echo $row->costumer; ?></td>
                                            <td><?php echo $row->total; ?></td>
                                            <td><?php echo $row->berbayar; ?></td>
                                            <td><?php echo $row->sisa; ?></td>
                                            <td> 
                                                <a href="master/hapus_penjualan/<?php echo $row->id_penjualan ?>" class="btn btn-warning">HAPUS</a>
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
 