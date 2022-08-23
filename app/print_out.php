<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Aplikasi Helpdesk</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">



<style>
    .invoice-box {
        max-width: 50%;
        margin: auto;
        padding: 10px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 20px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: left;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 20px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    li.src{
    margin-top: 12px;
    }


table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
td,
th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;

}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: red;
  color: white;
}





    </style>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


</head>

<body>


<?php



        include "koneksi.php";


     if (isset($_GET['id_form'])) {
            $id_form=$_GET['id_form'];


            $sql=mysqli_query($kon, "SELECT * FROM t_kendala WHERE id_form='$id_form'");
            $data = mysqli_fetch_array($sql);

            ?>
<div class="topnav">
  <a><button onclick="history.back()">Go Back</button></a>
<a href="cetak.php" target="_BLANK">Print</a>
</div>

<div id="print" style="margin-top:20px;">
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
                    
                        <tr>
                            <td>
                               <center><b>LAPORAN PENANGANAN</b></center>
                            </td>
                            
                        </tr>
                    <table>
            
            <tr class="heading">
                <td>
                    I. PENANGANAN
                </td>
                
                <td>
                   
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    KODE PENANGANAN : 
                </td>           

                <td>
                    <?php echo "HELP/".$data["id_form"]; ?>
                </td>
            </tr>

            <tr>
                <td>
                    Tanggal :
                </td>
                <td>
                   <?php echo $data["tanggal_buat"];   ?>
                </td>
            </tr>
            <tr>
                <td>
                    Customer :
                </td>
                <td>
                    <?php echo $data["customer"];   ?>
                </td>
            </tr>
            <tr>
                <td>
                    Team :
                </td>
                <td>
                    <?php echo $data["team"];   ?>
                </td>
            </tr>
            <tr>
                <td>
                    PIC :
                </td>
                <td>
                    <?php echo $data["pic"];   ?>
                </td>
            </tr>
            <tr>
                <td>
                    Status :
                </td>
                <td>
                    <?php echo $data["status"];   ?>
                </td>
            </tr>
            <tr>
                <td>
                    Category :
                </td>
                <td>
                    <?php echo $data["category"];   ?>
                </td>
            </tr>
           <tr>
                <td>
                    Product Name :
                </td>
                <td>
                  <?php echo $data["product_name"];   ?>
                </td>
            </tr>
             <tr>
                <td>
                    Site Location :
                </td>
                <td>
                   <?php echo $data["site_location"];   ?>
                </td>
            </tr>

             <tr>
                <td>
                    Status :
                </td>
                <td>
                   <?php echo $data["status2"];   ?>
                </td>
            </tr>


                         <tr>
                <td>
                    Problem :
                </td>
                <td>
                   <?php echo $data["problem"];   ?>
                </td>
            </tr>
             <tr>
                <td>
                    Action :
                </td>
                <td>
                   <?php echo $data["action"]; ?>
                </td>
            </tr>
        </table>


                        <tr>
                            <td>
                               <center><b>COMPANY NAME</b></center>
                            </td>
                            
                        </tr>
<?php

}
?>

    </div>
</div>