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
                <h3>Projects</h3>
            </div>

        </div>
    </div>

       <!-- Hoverable rows start -->
    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <br>
                        <!-- table hover -->
                        <div class="table-responsive" style="padding-right: 20px; padding-left: 20px;">
                            <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>PROJECT NAME</th>
                            <th>START</th>
                            <th>END</th>
                            <th>OFFICER</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ICT For Girls</td>
                            <td>12/03/2022</td>
                            <td>12/03/2024</td>
                            <td>John</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                            <td><a class="btn btn-primary">VIEW DETAILS</a></td>
                        </tr>
                        <tr>
                            <td>ICT For Girls</td>
                            <td>12/03/2022</td>
                            <td>12/03/2024</td>
                            <td>Agnes</td>
                            <td>
                                <span class="badge bg-danger">Inactive</span>
                            </td>
                            <td><a class="btn btn-primary">VIEW DETAILS</a></td>
                        </tr>
                        <tr>
                            <td>Sanitary Pads for all</td>
                            <td>2/03/2003</td>
                            <td>16/04/2020</td>
                            <td>Mugisha</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                            <td><a class="btn btn-primary">VIEW DETAILS</a></td>
                        </tr>
                        <tr>
                            <td>Tree Planting in Schools</td>
                            <td>12/03/2022</td>
                            <td>12/03/2024</td>
                            <td>Agnes</td>
                            <td>
                                <span class="badge bg-info">Paused</span>
                            </td>
                            <td><a class="btn btn-primary">VIEW DETAILS</a></td>
                        </tr>

                    </tbody>
                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hoverable rows end -->
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
