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
                <h3>Notice Board</h3>
            </div>
            
        </div> 
    </div>

    <section class="section">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                     <div class="card-body">
                        <div class="alert alert-success">
                            <h4 class="alert-heading">Second quarter report submission</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at mi in odio interdum cursus et eu velit. Nullam nec sagittis tortor. Fusce id placerat tellus. </p>
                            <p> 12/05/2022  |  Posted By: John </p>
                            <br>
                            <a href="#" class="btn btn-success">View Post</a>
                        </div>
                        <div class="alert alert-success">
                            <h4 class="alert-heading">Second quarter report submission</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at mi in odio interdum cursus et eu velit. Nullam nec sagittis tortor. Fusce id placerat tellus. </p>
                            <p> 12/05/2022  |  Posted By: John </p>
                            <br>
                            <a href="#" class="btn btn-success">View Post</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                     <div class="card-body">
                        <div class="alert alert-primary">
                            <h4 class="alert-heading">Second quarter report submission</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at mi in odio interdum cursus et eu velit. Nullam nec sagittis tortor. Fusce id placerat tellus. </p>
                            <p> 12/05/2022  |  Posted By: John </p>
                            <br>
                            <a href="#" class="btn btn-primary">View Post</a>
                        </div>
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
