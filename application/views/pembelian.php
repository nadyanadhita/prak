
        <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           TABEL PEMBELIAN
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="master/add_pembelian" class="btn btn-success" >TAMBAH</a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No Pembelian</th>
                                            <th>Tgl Pembelian</th>
                                            <th>Suplier</th>
                                            <th>total</th>
                                            <th>terbayar</th>
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
                                            <td><?php echo $row->no_pembelian; ?></td>
                                            <td><?php echo $row->tgl_pembelian; ?></td>
                                            <td><?php echo $row->suplier; ?></td>
                                            <td><?php echo $row->total; ?></td>
                                            <td><?php echo $row->terbayar; ?></td>
                                            <td><?php echo $row->sisa; ?></td>
                                            <td> 
                                                <a href="master/hapus_pembelian/<?php echo $row->id_pembelian ?>" class="btn btn-warning">HAPUS</a>
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
 