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
            
<div class="page-heading">
    <h3>Dashboard</h3>
</div>
<div class="page-content">

    <section class="row">
        <div class="col-12 col-lg-12">



            <div class="row">
                <div class="col-6 col-lg-4 col-md-6">
                    <a href="management.php"><div class="card" style="background: #9694ff; padding-top: 60px; padding-bottom: 60px;">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4" >
                                    <div class="stats-icon purple">
                                        <i class="iconly-boldDocument" style="font-size: 6em;"></i>
                                    </div>
                                </div>
                                <div class="col-md-8" >
                                    <h4 style="margin-top: -10px;">Management Reports</h4>
                                </div>
                            </div>
                        </div>
                    </div></a>
                </div>
                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card" style="background: #57caeb; padding-top: 60px; padding-bottom: 30px;">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class="iconly-boldDocument" style="font-size: 6em;"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h5 style="margin-top: -10px;">Audited Financial Statement</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card" style="background: #5ddab4; padding-top: 60px; padding-bottom: 60px;">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class="iconly-boldDocument" style="font-size: 6em;"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h5 style="margin-top: -10px;">Accountability Reports</h5>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6 col-lg-4 col-md-6">
                    <a href="activityreports.php"><div class="card" style="background: #ff7976; padding-top: 60px; padding-bottom: 60px;">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon red">
                                        <i class="iconly-boldDocument" style="font-size: 6em;"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h5 style="margin-top: -10px;">Activity<br> Reports</h5>
                                </div>
                            </div>
                        </div>
                    </div></a>
                </div>
                <div class="col-6 col-lg-4 col-md-6">
                    <a href="monthlyrep.php"><div class="card" style="background: #9694ff; padding-top: 60px; padding-bottom: 60px;">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4" >
                                    <div class="stats-icon purple">
                                        <i class="iconly-boldDocument" style="font-size: 6em;"></i>
                                    </div>
                                </div>
                                <div class="col-md-8" >
                                    <h5 style="margin-top: -10px;">Monthly<br> Reports</h5>
                                </div>
                            </div>
                        </div>
                    </div></a>
                </div>
                <div class="col-6 col-lg-4 col-md-6">
                    <a href="annualrep.php"><div class="card" style="background: #57caeb; padding-top: 60px; padding-bottom: 60px;">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class="iconly-boldDocument" style="font-size: 6em;"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h5 style="margin-top: -10px;">Annual <br>Reports</h5>
                                </div>
                            </div>
                        </div>
                    </div></a>
                </div>
            </div>





        </div>
    </section>
</div> 

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; RCDNET</p>
                    </div>
                    <div class="float-end">
                        <p>Created by <a href="http://julybrands.co.ug">JulyBrands Digital</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
<?php include "includes/scripts.php"; ?>
</body>

</html>
