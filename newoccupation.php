<?php include "includes/head.php"; ?>

    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <a href="index.html"><img src="assets/images/logo/rcdnetlogo.png" alt="Logo" srcset=""></a>
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
                <h3>New Beneficiary Category</h3>
            </div>

        </div>
    </div>

<?php
//Create new occupation
if (isset($_POST['post'])){
    $name = $_POST['name'];
    $description = $_POST['description'];

    include "includes/connection.php";

    $sql = "INSERT INTO occupation (name, description)
    VALUES ('$name', '$description')";

    if(mysqli_query($con, $sql)){
        ?>
<script type="text/javascript"> 
alert("Your occupation has been successfully created"); 
window.location.href = "occupation.php";
</script>
<?php

    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }
    // Close connection
    mysqli_close($con);

}else{
   echo "<p class='text-subtitle text-muted'>"."Use this form to a new occupation/course."."</p>";
}

?>
    <section class="section">
        <div class="row">
            <div class="col"> 
                <div class="card">
                    <div class="card-body">
                    <form method="POST">
                        <div class="form-group">
                            <label for="basicInput">Occupation/Course Name</label>
                            <input type="text" class="form-control" id="basicInput" placeholder="Enter Occupation" name="name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="description"></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary" name="post" value="Create Now">
                    </form>
                    </div> 
                </div>
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
