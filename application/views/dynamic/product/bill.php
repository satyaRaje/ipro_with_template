
<?php
function numberTowords($num)
{
    $ones = array(
        1 => "one",
        2 => "two",
        3 => "three",
        4 => "four",
        5 => "five",
        6 => "six",
        7 => "seven",
        8 => "eight",
        9 => "nine",
        10 => "ten",
        11 => "eleven",
        12 => "twelve",
        13 => "thirteen",
        14 => "fourteen",
        15 => "fifteen",
        16 => "sixteen",
        17 => "seventeen",
        18 => "eighteen",
        19 => "nineteen"
    );
    $tens = array(
        1 => "ten",
        2 => "twenty",
        3 => "thirty",
        4 => "forty",
        5 => "fifty",
        6 => "sixty",
        7 => "seventy",
        8 => "eighty",
        9 => "ninety"
    );
    $hundreds = array(
        "hundred",
        "thousand",
        "million",
        "billion",
        "trillion",
        "quadrillion"
    ); //limit t quadrillion
    $num = number_format($num,2,".",",");
    $num_arr = explode(".",$num);
    $wholenum = $num_arr[0];
    $decnum = $num_arr[1];
    $whole_arr = array_reverse(explode(",",$wholenum));
    krsort($whole_arr);
    $rettxt = "";
    foreach($whole_arr as $key => $i){
        if($i < 20){
            @$rettxt .= $ones[$i];
        }elseif($i < 100){
            $rettxt .= $tens[substr($i,0,1)];
            $rettxt .= " ".$ones[substr($i,1,1)];
        }else{
            @$rettxt .= $ones[substr($i,0,1)]." ".$hundreds[0];
            @$rettxt .= " ".$tens[substr($i,1,1)];
            @$rettxt .= " ".$ones[substr($i,2,1)];
        }
        if($key > 0){
            $rettxt .= " ".$hundreds[$key]." ";
        }
    }
    return $rettxt;
}

?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href='<?php echo base_url()."style/assets/images/favicon.png";?>'>
    <title>Material Pro Admin Template - The Most Complete & Trusted Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href='<?php echo base_url()."style/assets/plugins/bootstrap/css/bootstrap.min.css";?>' rel="stylesheet">
    <!-- Custom CSS -->
    <!-- You can change the theme colors from here -->
    <link href='<?php echo base_url()."style/css/colors/blue.css";?>' id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<div class="page-wrapper">

    <div class="row" style="padding: 10px;">

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="text text-center font-weight-bold m-0">IPRO3D TECHNOLOGIES</p>
                    <p class="text text-center text-sm m-0">(Reg. No. 85)</p>
                    <p class="text text-center text-sm m-0">Chetana Nagar,Aurangabad. Ph: (0240)2336355</p>
                    <p class="text text-center text-sm m-0">Email : chobenursinghome@gmail.com</p>
                    <p class="text text-center font-weight-bold"><u><?php
                            if($base_bill[0]->catageory=="NA")
                                echo "OPD";
                            else
                                echo $base_bill[0]->catageory;
                            ?></u></p>
                    <hr>
                    <table style="width:100%;">
                        <tr>
                            <td>Bill No. : <?php echo $base_bill[0]->bid;?></td>
                            <td>Name : <?php echo $patient[0]->pname;?></td>
                            <td>Data : <?php  echo $base_bill[0]->bill_date;?></td>
                        </tr>
                    </table>
                    <br>
                    <p class="text">Received Ruppees : <?php echo numberTowords($base_bill[0]->tot);?></p>
                    <p class="text ">From  <b><?php echo $patient[0]->pname;?> </b></p>
                    <p class="text text-right">Signature of the Doctor </p>
                    <button id="print" class="btn btn-primary btn-outline" type="button" onclick="print_bill();">   <span><i class="fa fa-print hide"></i> Print</span> </button>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    function print_bill() {
        document.getElementById("print").style.display = "none";
        window.print();
    }

</script>

