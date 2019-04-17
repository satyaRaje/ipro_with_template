<div class="page-wrapper">
    <div class="col-12">

        <div class="row" style="padding-left: 20%;padding-right: 20%;">
            <div class="col-lg-12"><br>
                <div class="card">
                    <div class="card-body" style="background-color: #F5F5F5F5">

                 <form action='<?php echo base_url()."index.php/dynamic/product/ci_upload_product/update_company_quotation"?>' method="post">
                     <div class="form-group" style="display: none;">
                         <label>User Id</label>
                         <input class="form-control" id="pname" name="loop_count" value='<?php echo $_POST['loop_count'];?>' readonly>
                     </div>

                     <div class="form-group">
                        <label>User Id</label>
                        <input class="form-control" id="pname" name="uid" value='<?php echo $_POST['uploaded_by'];?>' readonly>
                    </div>


                    <div class="form-group">
                         <label>Product Id</label>
                             <input class="form-control" id="pid" name="pid" value='<?php echo $_POST['product_id'];?>' readonly>
                     </div>

                     <div class="form-group">
                         <label>Product Name</label>
                         <input class="form-control" id="pname" name="pname" value='<?php echo $_POST['product_name'];?>' readonly>
                     </div>

                     <div class="form-group">
                         <label>Message</label>
                         <textarea class="form-control" name="message">

                                </textarea>
                     </div>

                     <div class="form-group">
                         <label>Company Price</label>
                         <input class="form-control" onchange="includegst(this)"  value="">
                     </div>

                     <div class="form-group">
                         <label>Price With GST</label>
                         <input class="form-control" id="price" name="price" value="" readonly>
                     </div>

<script>
    function includegst(a) {
        var t = Number(a.value);
        t=t+t*0.185;
        document.getElementById("price").value = t;

    }

</script>
                     <div class="form-group">
                         <button type="submit" class="btn btn-primary pull-right" >Quote</button>
                     </div>
                 </form>

                </div>
                <div class="col-lg-3">
                </div>

            </div>
                <div class="col-lg-12">

                </div>

            </div>


        </div>
        <br>
