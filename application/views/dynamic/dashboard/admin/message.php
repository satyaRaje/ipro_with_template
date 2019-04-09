<div class="page-wrapper">
    <div class="col-12">

        <div class="row" style="padding-left: 20%;padding-right: 20%;">
            <div class="col-lg-12"><br>
                <label class="label label-primary">Message Form Customer</label>
                <div class="card">
                 <?php
                 for($i=0;$i<count($data);$i++){?>
                     <p class="text text-primary m-l-5">
                         <?php echo $data[$i]->message;  ?>
                     </p>
                     <hr>
                    <?php }?>
                </div>

                <label class="label label-primary">Administrator Message</label>
                <div class="card">
                    <?php
                    for($i=0;$i<count($data1);$i++){?>
                        <p class="text text-primary m-l-5">
                            <?php echo $data1[$i]->message;  ?>
                        </p>
                        <hr>
                    <?php }?>
                </div>


            </div>


        </div>
    </div>
        <br>
