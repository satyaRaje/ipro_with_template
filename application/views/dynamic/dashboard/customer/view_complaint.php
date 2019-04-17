<div class="page-wrapper">
    <div class="col-12">
                                <h2 class="card-title" align="center">Complaint</h2>
                                <!--<h6 class="card-subtitle"></h6>-->
                   <div class="card card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Complaint</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Complaint</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                      <?php $i=1; foreach ($data as $d){?>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $d->email;?></td>
                                                <td><?php echo $d->mobile;?></td>
                                                <td><?php echo $d->complaint_text;?></td>

                                            </tr>
                                     <?php $i++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
    </div>
</div>