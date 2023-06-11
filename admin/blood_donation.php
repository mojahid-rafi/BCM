<?php include ("./header.php"); ?>

    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">Blood Donation</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="dashboard.php"><i class="la la-home font-20"></i></a>
                </li>
               <!-- <li class="breadcrumb-item"></li>-->
            </ol>
        </div>

        <!--    Enter Your Content Here-->
        <form action="">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="dob">Donation Date</label>
                    <input type="date" class="form-control"  name="dondate" id="dondate">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="dob">Hospital Name</label>
                    <input type="text" class="form-control"  name="Hospitalname" id="Hospitalname" placeholder="Hospital Name">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="dob">Hospital Address</label>
                    <input type="text" class="form-control"  name="Hospitaladdress" id="Hospitaladdress" placeholder="Address">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <button class="form-control btn btn-default" type="submit">Submit</button>
                </div>
            </div>
        </form>
<?php include ("./footer.php"); ?>