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
                <h3>Students</h3>
                <a href="students.php" style="margin-bottom: 10px;" class="btn btn-success">All Students</a><a href="album.php" style="margin-bottom: 10px; margin-left: 10px;" class="btn btn-success">Students Album</a>
            </div>

        </div>
    </div>


    <section class="section">
        <div class="card">
            <div class="card-body">

                 <?php
include "../includes/connection.php";

$id = $_GET['id'];

$sql = "SELECT * FROM beneficiary where benid='$id' "; 
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
                echo "<div class='avatar avatar-lg me-3'>"; 
                echo "<img src='"."../photos"."/".$row['photo']."' class='card-img-top img-fluid student-img'>";
                echo "</div>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>".$row['name']."</h5>";
            echo "<h5 class='card-title'>"."Sponsored By"."</br>".$row['donor']."</h5>";
        /*    echo "<p class='card-text'>"."
                                Chocolate sesame snaps apple pie danish cupcake sweet roll jujubes tiramisu.Gummies
                                bonbon apple pie fruitcake icing biscuit apple pie jelly-o sweet roll.".
                            "</p>";*/
                    echo"</div>";
                    echo"</div>";
        
        // Free result set
        mysqli_free_result($result);

?>
                        

            </div>
        </div>

    </section>



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
