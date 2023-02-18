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
        <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Group Mail</h3>
            </div>
            </div>
        </div>

<?php
//Create new beneficiary
if (isset($_POST['post'])){
    $management = $_POST['management'];
    $name = $_POST['name'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $date =  date("d/m/Y");


    include "../includes/connection.php";

    $sql = "INSERT INTO management (reportNote, date, magName, month, year)
    VALUES ('$management', '$date', '$name', '$month', '$year')";

    if(mysqli_query($con, $sql)){
        ?>
    <script type="text/javascript"> 
    alert("Report successfully saved"); 
    window.location.href = "managementreports.php";
    </script>
    <?php 

        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
        }
         
        // Close connection
        mysqli_close($con);

    }else{
       echo "<p style='display: none;'  class='text-subtitle text-muted'>"."Use this form to make a project report"."</p>";
    }
    ?> 
    <section class="section">
        <div class="row"> 
            <div class="col">
                <div class="card">
                    <div class="card-body">

                    <form method="POST" enctype="multipart/form-data">
                        <section class="section">
                        <div class="row" style="z-index: 100;"> 
                            <div class="col-md-12">
                                 <div class="form-group">
                                <label for="basicInput">Recipient *</label>
                                <select class="choices form-select" name="staff" style="z-index: 100 !important;">
                                <?php
                                include "../includes/connection.php";
                                $sql = "SELECT * FROM users WHERE role!='donor'";
                                if($result = mysqli_query($con, $sql)){
                                    if(mysqli_num_rows($result) > 0){
                                        while($row = mysqli_fetch_array($result)){
                                                echo '<option value='.$row['userID'].'>' . $row['fullname'] . '</option>';
                                        }
                                        mysqli_free_result($result);
                                    } else{
                                        echo "No records found.";
                                    }
                                }
                                ?> 
                            </select>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                 <div class="form-group">
                                <label for="basicInput">Subject</label>
                                <input type="text" class="form-control" name="name" required>
                                </div>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group" >
                                        <textarea name="management" id="default"  rows="12"></textarea>
                                    </div>
                                </div>
                            </div>
                        </section>

                        
                        <input type="submit" class="btn btn-primary" name="post" value="Send Message">
                    </form>
                    </div> 
                </div> 
            </div>
        </div>
    </section>

 
</div>
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
<script>
    tinymce.init({ selector: '#default' });
    tinymce.init({ selector: '#dark', toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code', plugins: 'code' });
</script>
</html>
