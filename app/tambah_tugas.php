<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Aplikasi Helpdesk</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


<style>
      ul{
        background-color:#eee;
        cursor:pointer;
        position: relative;
        width: 95%;
      }
      li{
        padding:12px;
        border:thin solid red;
      }
      li:hover{
        background-color:#f52c2c;
        opacity: 80%;
      }
    </style>


</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Helpdesk</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">

                    </div>

                </div>
                <div class="navbar-nav w-100">
                    <button class="btn btn-primary" onclick="history.back()">Go Back</button>
                    

                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


       <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Account</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->



   <?php


    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";
  
    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }



    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {


        $id_form=input($_POST["id_form"]);
        $tanggal_buat=input($_POST["tanggal_buat"]);
        $customer=input($_POST["customer"]);
        $team=input($_POST["team"]);
        $pic=input($_POST["pic"]);
        $status=input($_POST["status"]);
        $category=input($_POST["category"]);
        $product_name=input($_POST["product_name"]);
        $site_location=input($_POST["site_location"]);
        $status2=input($_POST["status2"]);
        $problem=input($_POST["problem"]);
        $action=input($_POST["action"]);
        //Query input menginput data kedalam tabel anggota

        $sql="insert into t_kendala (id_form,tanggal_buat,customer,team,pic,status,category,product_name,site_location,status2,problem,action) values ('id_form','$tanggal_buat','$customer','$team','$pic','$status','$category','$product_name','$site_location','$status2','$problem','$action')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            echo "<div class='alert alert-success'> Data berhasil disimpan</div>";        }

        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }  
    
}
    ?>

                        <div class="container-fluid pt-4 px-4">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Tambah Tugas</h6>

                        

        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

                       <div class="form-floating mb-3">
                            <input type="hidden" class="form-control" name="id_form">
                            </div>
                            
                            <div class="form-floating mb-3">
                                <input  type="text" name="tanggal_buat" class="form-control" value = "<?php  date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d');?>" readonly="readonly">

                                <label for="floatingInput">Tanggal</label>
                            </div>

                            <div class="form-floating mb-3">
                                <select class="form-select" name="customer" 
                                    aria-label="Floating label select example" required>
                                    <option value="BRIS">BRIS</option>
                                    <option value="BCA">BCA</option>
                                    <option value="BSI">BSI</option>
                                    <option value="BNI">BNI</option>
                                    <option value="ILCS">ILCS</option>
                                    <option value="IPC">IPC</option>
                                    <option value="BSI">BSI</option>
                                    <option value="BTN">BTN</option>
                                </select>
                                <label for="customer">Customer</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="team" id="team"/>
                                <label for="team">Team</label>
                                  <div id="teamlist"></div>


                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="pic" required>
                                <label for="pic">PIC</label>
                            </div>


                                <label class="form-check-label" for="flexCheckDefault">
                                    Status
                                </label>
                                <br>


                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="inlineRadio1"
                                    value="Open">
                                <label class="form-check-label" for="inlineRadio1">Open</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="inlineRadio2"
                                    value="Pending">
                                <label class="form-check-label" for="inlineRadio2">Pending</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="inlineRadio3"
                                    value="Pending">
                                <label class="form-check-label" for="inlineRadio3">Pending</label>
                            </div>

<br>
<hr>


                                <label class="form-check-label" for="flexCheckDefault">
                                    Category
                                </label>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="category"
                                    id="flexRadioDefault1" value="Incident">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Incident
                                </label>
                            
                            <br>
                                <input class="form-check-input" type="radio" name="category"
                                    id="flexRadioDefault2" value="Request">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Request
                                </label>
                            </div>

<br>




                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="product_name" required>
                                <label for="product_name">Product Name</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="site_location" required>
                                <label for="site_location">Site Location</label>
                            </div>


                                <label class="form-check-label" for="flexCheckDefault">
                                    Status
                                </label>
                                <br>


                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status2" id="inlineRadio1"
                                    value="S1">
                                <label class="form-check-label" for="inlineRadio1">S1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status2" id="inlineRadio2"
                                    value="S2">
                                <label class="form-check-label" for="inlineRadio2">S2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status2" id="inlineRadio3"
                                    value="S3">
                                <label class="form-check-label" for="inlineRadio3">S3</label>
                            </div>
<br>
<br>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Problem Description"
                                    name="problem" style="height: 150px;" required></textarea>
                                <label for="problem">Problem Desc</label>
                            </div>
                            <br>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Action"
                                    name="action" style="height: 150px;" required></textarea>
                                <label for="action">Action</label>
                            </div>
                            <br>
                             <div class="form-floating">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </form>

                        </div>

                    </div>
                
            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Helpdesk</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">Dicodean</a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>


 <script>  
 $(document).ready(function(){  
      $('#team').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"search.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#teamlist').fadeIn();  
                          $('#teamlist').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#team').val($(this).text());  
           $('#teamlist').fadeOut();  
      });  
 });  
 </script>