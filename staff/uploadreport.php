<?php include "includes/head.php"; ?>

    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <a href="index.html"><img src="../assets/images/logo/rcdnetlogo.png" alt="Logo" srcset=""></a>
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>


    <?php 
    include "includes/sidebarmenu.php";
    ?>


    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
<div class="page-content">
    <section class="row">
            <div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>New Document Report </h3>
            </div>

        </div>
    </div> 
<?php
//Create new beneficiary
if (isset($_POST['post'])){
    $name = $_POST['name'];
    $category = $_POST['category'];
    $comment = $_POST['comment'];
    $userid = $_SESSION['userid'];
    $type = $_POST['type'];
    $month = $_POST['month'];
    $year = $_SESSION['year'];
    $photo = $_POST['file']; 
    $date  = date('d/m/Y');


    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../docs/" . $filename;


    include "../includes/connection.php";

    $sql = "INSERT INTO reportdoc (name, category, doc, date, user, type, month, year)
    VALUES ('$name',  '$category', '$filename', '$date', '$userid', '$type', '$month', '$year')";

    if(move_uploaded_file($tempname, $folder) && mysqli_query($con, $sql) ){
       echo '<div class="alert alert-light-success color-success alert-dismissible show fade"><i class="bi bi-exclamation-circle"></i><strong> Your document has been successfully uploaded!! Welldone</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';

    } else{
        echo '<div class="alert alert-light-danger color-danger alert-dismissible show fade"><i class="bi bi-exclamation-circle"></i><strong> Your report has not been submitted, Please form fields</strong><br> <i>ERROR: '. mysqli_error($con).'</i><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    }
     
    // Close connection 
    mysqli_close($con);

}else{
   echo "<p class='text-subtitle text-muted'>"."Use this form to upload already made reports in .PDF"."</p>";

}

?>
    <?php 
    $day = date(d);
    $month = date('M-Y'); 
    if ($day < 27) {
       include ("uploadEmbed.php"); 
    }else{
        echo '<div class="alert alert-light-danger color-danger alert-dismissible show fade"><i class="bi bi-exclamation-circle"></i><strong> You can not submit reports today. Deadline was 27th-'.$month.'</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    }
    ?>
    


</div>
    </section>
</div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>Created by <a href="http://julybrands.co.ug">JulyBrands Digital</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
<?php include "includes/scripts.php"; ?>
</body>

</html>
