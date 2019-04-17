<div class="page-wrapper">
    <div class="col-12">
                                <h2 class="card-title" align="center">Enquiry</h2>
                                <!--<h6 class="card-subtitle"></h6>-->
                   <div class="card card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Customer Name</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Info</th>
                                                <th>Enquiry</th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Customer Name</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Info</th>
                                            <th>Enquiry</th>

                                        </tr>
                                        </tfoot>
                                        <tbody>
                                      <?php $i=1; foreach ($data as $d){?>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $d->name;?></td>
                                                <td><?php echo $d->mobile;?></td>
                                                <td><?php echo $d->email;?></td>
                                                <td><?php echo $d->info;?></td>
                                                <td><button class="btn btn-info">check</button></td>
                                            </tr>
                                     <?php $i++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
    </div>
</div>