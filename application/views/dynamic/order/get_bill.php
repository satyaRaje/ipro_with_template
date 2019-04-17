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
                                                <th>Address</th>
                                                <th>Order Id</th>
                                                <th>Amount</th>
                                                <th>Print Bill</th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Address</th>
                                            <th>Order Id</th>
                                            <th>Amount</th>
                                            <th>Print Bill</th>

                                        </tr>
                                        </tfoot>
                                        <tbody>
                                      <?php $i=1; foreach ($data as $d){?>

                                            <form method="post" action="<?php echo base_url()."index.php/dynamic/product/ci_bill_delivery/print_bill"; ?>" target="_blank">
                                                <input type="hidden" value="<?php echo $d->bid;?>" name="bid">
                                           <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $d->billing_add;?></td>
                                                <td><?php echo $d->bid;?></td>
                                                <td><?php echo $d->tot;?></td>
                                                <td>
                                                    <?php if($d->flag==1){
                                                        echo "PENDING";
                                                    }else{
                                                        echo "<input type=\"submit\" class=\"btn btn-primary btn-sm\" value=\"print\">";
                                                    }?>
                                                     </td>
                                            </tr>
                                            </form>

                                     <?php $i++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
    </div>
</div>