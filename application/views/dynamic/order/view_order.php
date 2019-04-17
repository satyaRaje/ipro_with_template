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
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Order Id</th>
                                                <th>Amount</th>
                                                <th>Payment Mode</th>
                                                <th>Delivery Status</th>
                                                <th>Payment Status</th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Order Id</th>
                                            <th>Amount</th>
                                            <th>Payment Mode</th>
                                            <th>Delivery Status</th>
                                            <th>Payment Status</th>

                                        </tr>
                                        </tfoot>
                                        <tbody>
                                      <?php $i=1; foreach ($data as $d){?>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $d->email;?></td>
                                                <td><?php echo $d->mobile;?></td>

                                                <td><?php echo $d->billing_add;?></td>
                                                <td><?php echo $d->bid;?></td>
                                                <td><?php echo $d->tot;?></td>
                                                <td><?php if($d->payment_mode==0){
                                                        echo "CASH";
                                                    }else{
                                                        echo "ONLINE";
                                                    }?></td>
                                                <td><?php if($d->payment_mode==0){
                                                        echo "PENDING";
                                                    }else{
                                                        echo "DELIVERED";
                                                    }?></td></td>
                                                <td><?php if($d->flag==0){
                                                        echo "PENDING";
                                                    }else{
                                                        echo "DELIVERED";
                                                    }?></td>
                                            </tr>
                                     <?php $i++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
    </div>
</div>