 <center>
     <h1>laporan penjualan</h1>
 </center>
 <hr>
                            <div class="table-responsive">
                                <table border="1" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No Penjualan</th>
                                            <th>Tgl Penjualan</th>
                                            <th>Costumer</th>
                                            <th>total</th>
                                            <th>berbayar</th>
                                            <th>sisa</th>
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
                                             
                                            
                                        </tr>
                                             <?php
                                            }
                                         ?>

                                    </tbody>
                                </table>
                           