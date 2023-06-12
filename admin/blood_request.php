<?php include ("./header.php"); ?>

    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">Blood Request</h1>
            <ol class="breadcrumb">
                <!-- <li class="breadcrumb-item">
                    <a href="dashboard.php"><i class="la la-home font-20"></i></a>
                </li>
                <li class="breadcrumb-item"></li> -->
            </ol>
        </div>

        <!--    Enter Your Content Here-->

        <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-md-12">
                    <div class="ibox">

                        <div>
                        <div class="ibox-body">
                                <form action="" method="POST" >
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Request From : </label>
                                            <input name="reqfrom" class="form-control" type="text" placeholder="Full Name">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label> Patient Name : </label>
                                            <input name="pname" class="form-control" type="text" placeholder="Patient Name">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Blood Group: </label>
                                            <select name="bgroup" id="bgroup" class="form-control">
                                                <option value="">---SELECT YOUR BLOOD GROUP---</option>
                                                <option value="A Positive (A+)">A Positive (A+) </option>
                                                <option value="A Negative (A-)">A Negative (A-) </option>
                                                <option value="B Positive (B+)">B positive (B+) </option>
                                                <option value="B Negative (B-)">B Negative (B-) </option>
                                                <option value="O Positive (O+)">O Positive (O+) </option>
                                                <option value="O Negative (O-)">O Negative (O-) </option>
                                                <option value="AB Positive (AB+)">AB Positive (AB+) </option>
                                                <option value="AB Negative (AB-)">AB Negative (AB-) </option>
                                            
                                            </select>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>No of Unit :</label>
                                            <input name="nfunit" class="form-control" type="number" placeholder="Number of Unit">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Donation Date:</label>
                                            <input name="ddate" class="form-control" type="date" placeholder="Enter Your Date">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Days Left:</label>
                                            <input name="dayleft" class="form-control" type="number" placeholder="Enter Your last Date">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Location:</label>
                                        <textarea name="location" class="form-control" name="location" id="location" cols="10" rows="2" placeholder="Hospital Name & Full Address"></textarea>
                                    </div>
                                    
                            
                                    <div class="form-group">
                                        <button name="submit" class="btn btn-default" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT-->

<?php include ("./footer.php"); ?>

<?php
    $reqfrom = "";
    $pname = "";
    $bgroup = "";
    $nfunit = "";
    $ddate = "";
    $dayleft = "";
    $location = "";

    if(isset($_POST['submit'])){
        $reqfrom = ($_POST['reqfrom']);
        $pname = ($_POST['pname']);
        $bgroup = ($_POST['bgroup']);
        $nfunit = ($_POST['nfunit']);
        $ddate = ($_POST['ddate']);
        $dayleft = ($_POST['dayleft']);
        $location = ($_POST['location']);
    }
    $conn = new mysqli('localhost','root','','bcm');

    $sql = "INSERT INTO `request_blood`(`Request_From`,`Patient_Name`, `Blood_Group`, `No_of_Unit`, `Donation_Date`, `Days_Left`, `Loc_Info`) VALUES ('{$reqfrom}','{$pname}','{$bgroup}','{$nfunit}','{$ddate}','{$dayleft}','{$location}')";

    $result = mysqli_query($conn,$sql);


    $select = "SELECT * FROM request_blood";

    $output = $conn->query($select);

    $fetch = mysqli_fetch_assoc($output);

        echo $fetch['$pname'];

?>