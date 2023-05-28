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
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Request From:</label>
                                            <input class="form-control" type="text" placeholder="Full Name">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Patient Name:</label>
                                            <input class="form-control" type="text" placeholder="Patient Name">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Blood Group:</label>
                                            <select name="bgroup" id="bgroup" class="form-control">
                                                <option value="">---SELECT YOUR BLOOD GROUP---</option>
                                                <option value="aPositive">A Positive (A+) </option>
                                                <option value="aNegative">A negative (A-) </option>
                                                <option value="bPositive">B positive (B+) </option>
                                                <option value="bNegative">B negative (B-) </option>
                                                <option value="oPositive">O positive (O+) </option>
                                                <option value="oNegative">O negative (O-) </option>
                                                <option value="abPositive">AB positive (AB+) </option>
                                                <option value="abNegative">AB negative (AB-) </option>
                                            
                                            </select>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>No of Unit/Bags:</label>
                                            <input class="form-control" type="number" placeholder="Number of Unit">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Donation Date:</label>
                                            <input class="form-control" type="date" placeholder="Enter Your Date">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Days Left:</label>
                                            <input class="form-control" type="number" placeholder="Enter Your last Date">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Location:</label>
                                        <textarea class="form-control" name="location" id="location" cols="10" rows="2" placeholder="Hospital Name & Full Address"></textarea>
                                    </div>
                                    
                            
                                    <div class="form-group">
                                        <button class="btn btn-default" type="submit">Submit</button>
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