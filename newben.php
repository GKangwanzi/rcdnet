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
                <h3>New Beneficiary</h3>
            </div>

        </div>
    </div>

    <section class="section">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <p>Beneficiary Particulars</p>
                                <div class="form-group">
                                    <label for="basicInput">Cetgory</label>
                                    <select class="form-control" id="basicInput">
                                        <option>Select Category</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="basicInput">Full Name</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                <label for="basicInput">NIN</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="Enter NIN">
                                </div>
                                <div class="form-group">
                                <label for="basicInput">Date Of Birth</label>
                                <input type="date" class="form-control" id="basicInput" placeholder="Enter email">
                                </div>
                                
                                <div class="form-group">
                                    <label for="basicInput">Gender</label>
                                    <select class="form-control" id="basicInput">
                                        <option>Select Gender</option>
                                        <option>Female</option>
                                        <option>Male</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="basicInput">Marital Status</label>
                                    <select class="form-control" id="basicInput">
                                        <option>Select Status</option>
                                        <option>Married</option>
                                        <option>Single</option>
                                        <option>Divorced</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="basicInput">Disability</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="Name disability">
                                </div>
                                <div class="form-group">
                                <label for="basicInput">Religion</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="Father">
                                </div>
                                
                            </div>



                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="basicInput">Occupation/Course</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="Enter Occupation here">
                                </div>
                                <p>Parent's/Guardian's Particulars</p>
                                <div class="form-group">
                                <label for="basicInput">Father's Name</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="Father">
                                </div>
                                
                                <div class="form-group">
                                <label for="basicInput">Mother's Name</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="Mother">
                                </div>
                                <p>Address</p>
                                <div class="form-group">
                                <label for="basicInput">Village/Cell</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="Enter Village">
                                </div>
                                <div class="form-group">
                                <label for="basicInput">Sub County/Division</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="Sub County">
                                </div>
                                <div class="form-group">
                                <label for="basicInput">District</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="District">
                                </div>
                                <div class="form-group">
                                <label for="basicInput">Beneficiary Photo</label>
                                <input type="file" class="form-control" id="basicInput" placeholder="Father">
                                </div>
                            </div>
                        </div>
                        

                        <input type="submit" class="btn btn-primary" name="post" value="Submit Now">
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
