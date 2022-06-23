<?php
include("config.php");
if(isset($_POST['submit'])){
$placename	=$_POST['placename'];
$categories	=$_POST['categories'];
$keyword=$_POST['keyword'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$website=$_POST['website'];
$designation=$_POST['designation'];
$company=$_POST['company'];
$facebook=$_POST['facebook'];
$twitter=$_POST['twitter'];
$linkedin=$_POST['linkedin'];
$skype=$_POST['skype'];
$img=$_FILES['img']['name'];
$imgi=$_FILES['imgi']['name'];
$imgii=$_FILES['imgii']['name'];  
$vid=$_FILES['vid']['name'];
$vidv=$_FILES['vidv']['name'];
$mon_am=$_POST['mon_am'];
$mon_pm=$_POST['mon_pm'];
$tue_am=$_POST['tue_am'];
$tue_pm=$_POST['tue_pm'];
$wed_am=$_POST['wed_am'];
$wed_pm=$_POST['wed_pm'];
$thu_am=$_POST['thu_am'];
$thu_pm=$_POST['thu_pm'];
$fri_am=$_POST['fri_am'];
$fri_pm=$_POST['fri_pm'];
$sat_am=$_POST['sat_am'];
$sat_pm=$_POST['sat_pm'];
$sun_am=$_POST['sun_am'];
$sun_pm=$_POST['sun_pm'];

$extension=substr($img,strlen($img)-4,strlen($img));
$all_extension = array(".jpg","jpeg",".png",".gif");
if(!in_array($extension,$all_extension)){
    $msg="Invalid File Format. Only jpg,jpeg,png,gif format allowed";
}else{
    $img=md5($img).$extension;
    $dnk=$_FILES['img']['tmp_name'];
    $loc="img/".$img;
    move_uploaded_file($dnk,$loc);
}

if(!in_array($extension,$all_extension)){
    $msg="Invalid File Format. Only jpg,jpeg,png,gif format allowed";
}else{
    $imgi=md5($imgi).$extension;
    $dnk=$_FILES['imgi']['tmp_name'];
    $loc="img/".$imgi;
    move_uploaded_file($dnk,$loc);
}

if(!in_array($extension,$all_extension)){
    $msg="Invalid File Format. Only jpg,jpeg,png,gif format allowed";
}else{
    $imgii=md5($imgii).$extension;
    $dnk=$_FILES['imgii']['tmp_name'];
    $loc="img/".$imgii;
    move_uploaded_file($dnk,$loc);
}

if(!in_array($extension,$all_extension)){
    $msg="Invalid File Format. Only mp3,mp4 format allowed";
}else{
    $vid=md5($vid).$extension;
    $dnk=$_FILES['vid']['tmp_name'];
    $loc="img/".$vid;
    move_uploaded_file($dnk,$loc);
}

if(!in_array($extension,$all_extension)){
    $msg="Invalid File Format. Only mp3,mp4 format allowed";
}else{
    $vidv=md5($vidv).$extension;
    $dnk=$_FILES['vidv']['tmp_name'];
    $loc="img/".$vidv;
    move_uploaded_file($dnk,$loc);
}

$sql=mysqli_query($conn,"INSERT INTO `vendor`(`placename`, `categories`, `keyword`, `name`, `email`, `phone`, `website`, `designation`, `company`, `facebook`, `twitter`, `linkedin`, `skype`, `img`, `imgi`, `imgii`, `vid`, `vidv`, `mon_am`, `mon_pm`, `tue_am`, `tue_pm`, `wed_am`, `wed_pm`, `thu_am`, `thu_pm`, `fri_am`, `fri_pm`, `sat_am`, `sat_pm`, `sun_am`, `sun_pm`) VALUES ('$placename','$categories','$keyword','$name','$email','$phone','$website','$designation','$company','$facebook','$twitter','$linkedin','$skype','$img','$imgi','$imgii','$vid','$vid','$mon_am','$mon_pm','$tue_am','$tue_pm','$wed_am','$wed_pm','$thu_am','$thu_pm','$fri_am','$fri_pm','$sat_am','$sat_pm','$sun_am','$sun_pm')");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>T| Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <?php include("pages\include\header.php"); ?>
        <?php include("pages\include\sidebar.php"); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">vendor-registration</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Vendor Registration</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Info boxes -->
                    <!-- /.row -->
                    <form method="post" enctype="multipart/form-data">    
                        <div class="row">
                            <!-- /.col (left) -->
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h2 class="card-title"><b>General Informartion</b></h2>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="row my-3">
                                            <div class="col-lg-12">
                                                <label>Place Name<b style="color:red;"> * </b></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="placename" placeholder="Place Name" >
                                                </div>
                                                <!-- /input-group -->
                                            </div>

                                            <!-- /.col-lg-6 -->
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label>Categories<b style="color:red;"> * </b></label>
                                                <div class="input-group">
                                                    <select class="form-control select2" data-plcaeholer="select a state" id="cat" name="categories" style="width: 100%;">
                                                        <option selected="selected" value="Not Selected">Select Categories</option>
                                                        <option value="Restaurant">Restaurant</option>
                                                        <option value="Party Center">Party Center</option>
                                                        <option value="fitness Zone">fitness Zone</option>
                                                        <option value="Game Field">Game Field</option>
                                                        <option value="Job & Feeds">Job & Feeds</option>
                                                        <option value="Shopping">Shopping</option>
                                                        <option value="Art Gallary">Art Gallary</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Keyword<b style="color:red;"> * </b></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="keyword"
                                                        placeholder="Keyword" name="keyword">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="summary" style="margin-top:10px">Description<span class="text-danger"></span></label>
                                                    <textarea class="form-control" placeholder="Description" name="description" cols="30" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /input-group -->
                                    </div><hr>
                                    <!-- /.card-body -->
                                    <div class="card-header">
                                        <h2 class="card-title"><b>Details Information</b></h2>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="row my-3">
                                            <div class="col-lg-6">
                                                <label> Name<b style="color:red;"> * </b></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="name" placeholder="Enter Your Name"><span></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Email<b style="color:red;"> * </b></label>
                                                <div class="input-group">
                                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <!-- /input-group -->
                                        </div>
                                        <div class="row my-3">
                                            <div class="col-lg-6">
                                                <label>Phone<b style="color:red;"> * </b></label>
                                                <div class="input-group">
                                                    <input type="tel" maxlength="10" class="form-control" name="phone" placeholder="Phone Number" pattern="[7-9]{1}[0-9]{9}" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Website<b style="color:red;"> * </b></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="website" placeholder="Website">
                                                </div>
                                            </div>
                                            <!-- /input-group -->
                                        </div>
                                        <div class="row my-3">
                                            <div class="col-lg-6">
                                                <label>Desgination<b style="color:red;"> * </b></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="designation" placeholder="Desgination" >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Company<b style="color:red;"> * </b></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="company" placeholder="Company">
                                                </div>
                                            </div>
                                            <!-- /input-group -->
                                        </div>
                                        <div class="row my-3">
                                            <div class="col-lg-6">
                                                <label>Facebook<b style="color:red;"> * </b></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="facebook" placeholder="Facebook (Optional)" >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Twitter</label><b style="color:red;"> * </b></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="twitter" placeholder="Twitter (Optional)" >
                                                </div>
                                            </div>
                                            <!-- /input-group -->
                                        </div>
                                        <div class="row my-3">
                                            <div class="col-lg-6">
                                                <label>LinkedIn<b style="color:red;"> * </b></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="linkedin" placeholder="Linked (Optional)" >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Skype<b style="color:red;"> * </b></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="skype" placeholder="Skype (Optional)" >
                                                </div>
                                            </div>

                                            <!-- /input-group -->
                                        </div>
                                        <!-- /.col-lg-6 -->
                                    </div><hr>
                                    <!-- /.img -->
                                    <div class="card-header">
                                        <h2 class="card-title"><b>Gallary Images</b></h2>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="row my-3">
                                            <div class="col-lg-12">
                                                <label>Click here or drope files to upload<b style="color:red;"> * </b></label>    
                                                <!-- /input-group -->
                                            </div>
                                            <!-- /.col-lg-6 -->
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="img"
                                                        accept="image/png, image/gif, image/jpeg, image/jpg">
                                                    <label class="custom-file-label">Choose file....</label>
                                                    <small class="text-muted">Upload files only: gif,png,jpg,jpeg</small>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="imgi"
                                                        accept="image/png, image/gif, image/jpeg, image/jpg">
                                                    <label class="custom-file-label">Choose file....</label>
                                                    <small class="text-muted">Upload files only: gif,png,jpg,jpeg</small>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="imgii"
                                                        accept="image/png, image/gif, image/jpeg, image/jpg">
                                                    <label class="custom-file-label">Choose file....</label>
                                                    <small class="text-muted">Upload files only: gif,png,jpg,jpeg</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-lg-12">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="vid"
                                                        accept="image/png, image/gif, image/jpeg, image/jpg">
                                                    <label class="custom-file-label">Choose file....</label>
                                                    <small class="text-muted">Upload files only: Video</small>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mt-4">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="vidv"
                                                        accept="image/png, image/gif, image/jpeg, image/jpg">
                                                    <label class="custom-file-label">Choose file....</label>
                                                    <small class="text-muted">Upload files only: Video</small>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /input-group -->
                                    </div><hr>
                                    <!---/img end-->
                                    <!-- opening hr -->
                                    <div class="card-header">
                                        <h2 class="card-title"><b>Opening Hours</b></h2>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="row">
                                            <label style="font-size:20px">Monday</label>
                                        </div>
                                        <div class="row my-3">
                                            <div class="col-lg-6">
                                                <label>AM<b style="color:red;"> * </b></label>
                                                <div class="input-group">
                                                    <input type="time" class="form-control" name="mon_am" >
                                                </div>
                                                <!-- /input-group -->
                                            </div>
                                            <div class="col-lg-6">
                                                <label>PM<b style="color:red;"> * </b></label>
                                                <div class="input-group">
                                                    <input type="time" class="form-control" name="mon_pm" >
                                                </div>
                                                <!-- /input-group -->
                                            </div>
                                            <!-- /.col-lg-6 -->
                                        </div>
                                        <div class="row">
                                            <label style="font-size:20px">Tuesday</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label>AM<b style="color:red;"> * </b></label>
                                                <div class="input-group">
                                                    <input type="time" class="form-control" name="tue_am" >
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <label>PM<b style="color:red;"> * </b></label>
                                                <div class="input-group">
                                                    <input type="time" class="form-control" name="tue_pm"
                                                        placeholder="Keyword" >
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row mt-3">
                                            <label style="font-size:20px;">Wednesday</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label>AM<b style="color:red;"> * </b></label>
                                                <div class="input-group">
                                                    <input type="time" class="form-control" name="wed_am" >

                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>PM<b style="color:red;"> * </b></label>
                                                <div class="input-group">
                                                    <input type="time" class="form-control" name="wed_pm"
                                                        placeholder="Keyword" >
                                                </div>
                                            </div>

                                            <!-- /input-group -->
                                        </div>
                                        <div class="row mt-3">
                                            <label style="font-size:20px">Thursday</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label>AM<b style="color:red;"> * </b></label>
                                                <div class="input-group">
                                                    <input type="time" class="form-control" name="thu_am" >

                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>PM<b style="color:red;"> * </b></label>
                                                <div class="input-group">
                                                    <input type="time" class="form-control" name="thu_pm"
                                                        placeholder="Keyword" >
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <div class="row mt-3">
                                            <label style="font-size:20px">Friday</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label>AM<b style="color:red;"> * </b></label>
                                                <div class="input-group">
                                                    <input type="time" class="form-control" name="fri_am" >

                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>PM<b style="color:red;"> * </b></label>
                                                <div class="input-group">
                                                    <input type="time" class="form-control" name="fri_pm"
                                                        placeholder="Keyword" >
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <div class="row mt-3">
                                            <label style="font-size:20px">Saturday</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label>AM<b style="color:red;"> * </b></label>
                                                <div class="input-group">
                                                    <input type="time" class="form-control" name="sat_am" >

                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>PM<b style="color:red;"> * </b></label>
                                                <div class="input-group">
                                                    <input type="time" class="form-control" name="sat_pm"
                                                        placeholder="Keyword" >
                                                </div>
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                        <div class="row mt-3">
                                            <label style="font-size:20px">Sunday</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label>AM<b style="color:red;"> * </b></label>
                                                <div class="input-group">
                                                    <input type="time" class="form-control" name="sun_am" >

                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>PM<b style="color:red;"> * </b></label>
                                                <div class="input-group">
                                                    <input type="time" class="form-control" name="sun_pm"
                                                        placeholder="Keyword" >
                                                </div>
                                            </div>
                                            <!-- /.col (right) -->
                                        </div>

                                        <!-- /.row -->

                                        <!-- Main row -->

                                        <!-- /.row -->
                                    </div><hr>
                                    <!-- opening hr cls -->
                                    <div class="card-footer"style="text-align:end;background-color:white;">
                                         <button type="submit" class="btn btn-outline-primary" name="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside>
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->


    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
     <script src="plugins/select2/js/select2.full.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Initialize Select2 Elements
        $(".select2bs4").select2({
          theme: "bootstrap4",
        });
    });
    function validatePhone(){
       if($(".phone").val() == ""){
      phoneerror = "Please enter phone number";
          } else if ($(".phone").val().length !== 10){
        phoneerror = "Must be 10 Digits";
        } else if(!($.isNumeric($(".phone").val())) && $(".phone").val() != ""){
            phoneerror = "this field cannot contain letters";

        }else {
            phoneerror = "";
        }
        console.log(phoneerror);
        return phoneerror;
    }
    </script>
</body>

</html>