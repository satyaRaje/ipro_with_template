<div class="page-wrapper">
    <div class="col-12">
        <!--<h6 class="card-subtitle"></h6>-->
        <div class="card card-body">
            <button id="print" class="btn btn-primary btn-outline" type="button" onclick="print_bill();">   <span><i class="fa fa-print hide"></i> Print</span> </button>

            <p class="text text-center font-weight-bold m-0">IPRO3D Technologies</p>
            <p class="text text-center text-sm m-0">(Reg. No. 85)</p>
            <p class="text text-center text-sm m-0">Workstation-1, MAGIC, CMIA office,
                Bajaj Bhavan, Near MIDC office,
                Railway Station Road, Aurangabad,
                Maharashtra, India.</p>
            <p class="text text-center text-sm m-0">C/O Er. Yogesh Pawar,
                Meridian Status-B, F-7,
                Near Youth Hostel, Kesarsingpura,
                Aurangabad-431005, Maharashtra,
                India.
            </p>


            <script>
                function print_bill() {
                    document.getElementById("print").style.display = "none";
                    window.print();
                }

            </script>

            <p class="text text-center text-sm m-0">Mobile No : 9821413663 Email : hello@ipro3d.io</p>
            <hr>


            <table class="table">
                <tr>
                    <td colspan="2">
                        <h5 class="text-center">Billing Address</h5>
                        <p class="text text-center text-sm m-0">Workstation-1, MAGIC, CMIA office,<br>
                            Bajaj Bhavan, Near MIDC office,<br>
                            Railway Station Road, Aurangabad,<br>
                            Maharashtra, India.</p>
                    </td>

                    <td colspan="2">
                        <h5 class="text-center">Shopping Address</h5>
                        <p class="text text-center text-sm m-0">
                            <?php echo $data[0]->billing_add;?>
                        </p>
                    </td>
                </tr>
            </table>


            <div class="table-responsive">



                <table class="table">
                    <thead>
                    <tr class="text-center">
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Cost</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>


                    <?php $i=1; $tot=0; foreach ($data1 as $d){?>
                        <tr class="text-center">
                           <td><?php echo $i;?></td>
                            <td><?php echo $d->pname;?></td>
                            <td><?php echo $d->qty;?></td>
                            <td><?php echo $d->cost;?></td>
                            <td><?php  $tot+= $d->qty*$d->cost;echo $d->qty*$d->cost ;?></td>
                        </tr>
                 <?php $i++; } ?>
                    <tr class="text-center">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Total : </td>
                        <td><?php echo $tot;?></td>
                    </tr
                     </tbody>
                </table>
            </div>
        </div>
    </div>
</div>