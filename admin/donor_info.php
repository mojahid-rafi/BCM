<?php include ("./header.php"); ?>
    <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Donor Information</h1>
                <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item">
                        <a href="dashboard.php"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item"></li> -->
                </ol>
            </div>
  <!--    Enter Your Content Here-->
        <!-- form start -->
                <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Basic form</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item">option 1</a>
                                        <a class="dropdown-item">option 2</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text" placeholder="Name">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Phone</label>
                                            <input class="form-control" type="email" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="email" placeholder="Phone">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Blood Group</label>
                                                <select class="form-control">
                                                    <option value="">---SELECT BLOOD GROUP---</option>
                                                    <option value="A positive">A Positive (A+)</option>
                                                    <option value="A  negative">A Negative (A-)</option>
                                                    <option value="B positive">B Positive (B+)</option>
                                                    <option value="B negative">B Negative (B-)</option>
                                                    <option value="O positive">O Positive (O+)</option>
                                                    <option value="O negative">O Negative (O-)</option>
                                                    <option value="AB positive">AB Positive (AB+)</option>
                                                    <option value="AB negative">AB Negative (AB-)</option>
                                                </select>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                                <label for="division">Division</label>
                                                    <select name="division" id="division"class="form-control">
                                                        <option value="">---SELECT DIVISION---</option>
                                                        <option value="Dhaka">Dhaka</option>
                                                        <option value="Barisal">Barisal</option>
                                                        <option value="Chittagong">Chittagong</option>
                                                        <option value="Khulna">Khulna</option>
                                                        <option value="Mymensingh">Mymensingh</option>
                                                        <option value="Rajshahi">Rajshahi</option>
                                                        <option value="Rangpur">Rangpur</option>
                                                        <option value="Sylhet">Sylhet</option>
                                                    </select>
                                            </div>


                                        <div class="col-sm-6 form-group">
                                            <label>District</label>
                                                <select name="district" id="district" class="form-control">
                                                    <option value="">---SELECT YOUR DISCRICT---</option>
                                                    <option value="Bagerhat">Bagerhat</option>
                                                    <option value="Bandarban">Bandarban</option>
                                                    <option value="Barguna">Barguna</option>
                                                    <option value="Barisal">Barisal</option>
                                                    <option value="Bhola">Bhola</option>
                                                    <option value="Bogra">Bogra</option>
                                                    <option value="Brahmanbaria">Brahmanbaria</option>
                                                    <option value="Chandpur">Chandpur</option>
                                                    <option value="Chittagong">Chittagong</option>
                                                    <option value="Chuadanga">Chuadanga</option>
                                                    <option value="Comilla">Comilla</option>
                                                    <option value="Cox'sBazar">Cox'sBazar</option>
                                                    <option value="Dhaka">Dhaka</option>
                                                    <option value="Dinajpur">Dinajpur</option>
                                                    <option value="Faridpur">Faridpur</option>
                                                    <option value="Feni">Feni</option>
                                                    <option value="Gaibandha">Gaibandha</option>
                                                    <option value="Gazipur">Gazipur</option>
                                                    <option value="Gopalganj">Gopalganj</option>
                                                    <option value="Habiganj">Habiganj</option>
                                                    <option value="Jaipurhat">Jaipurhat</option>
                                                    <option value="Jamalpur">Jamalpur</option>
                                                    <option value="Jessore">Jessore</option>
                                                    <option value="Jhalokati">Jhalokati</option>
                                                    <option value="Jhenaidah">Jhenaidah</option>
                                                    <option value="Khagrachari">Khagrachari</option>
                                                    <option value="Khulna">Khulna</option>
                                                    <option value="Kishoreganj">Kishoreganj</option>
                                                    <option value="Kurigram">Kurigram</option>
                                                    <option value="Kushtia">Kushtia</option>
                                                    <option value="Lakshmipur">Lakshmipur</option>
                                                    <option value="Lalmonirhat">Lalmonirhat</option>
                                                    <option value="Madaripur">Madaripur</option>
                                                    <option value="Magura">Magura</option>
                                                    <option value="Manikganj">Manikganj</option>
                                                    <option value="Maulvibazar">Maulvibazar</option>
                                                    <option value="Meherpur">Meherpur</option>
                                                    <option value="Munshiganj">Munshiganj</option>
                                                    <option value="Mymensingh">Mymensingh</option>
                                                    <option value="Naogaon">Naogaon</option>
                                                    <option value="Narail">Narail</option>
                                                    <option value="Narayanganj">Narayanganj</option>
                                                    <option value="Narsingdi">Narsingdi</option>
                                                    <option value="Natore">Natore</option>
                                                    <option value="Nawabganj">Nawabganj</option>
                                                    <option value="Netrokona">Netrokona</option>
                                                    <option value="Nilphamari">Nilphamari</option>
                                                    <option value="Noakhali">Noakhali</option>
                                                    <option value="Pabna">Pabna</option>
                                                    <option value="Panchagarh">Panchagarh</option>
                                                    <option value="Patuakhali">Patuakhali</option>
                                                    <option value="Pirojpur">Pirojpur</option>
                                                    <option value="Rajbari">Rajbari</option>
                                                    <option value="Rajshahi">Rajshahi</option>
                                                    <option value="Rangamati">Rangamati</option>
                                                    <option value="Rangpur">Rangpur</option>
                                                    <option value="Satkhira">Satkhira</option>
                                                    <option value="Shariatpur">Shariatpur</option>
                                                    <option value="Sherpur">Sherpur</option>
                                                    <option value="Sirajganj">Sirajganj</option>
                                                    <option value="Sunamganj">Sunamganj</option>
                                                    <option value="Sylhet">Sylhet</option>
                                                    <option value="Tangail">Tangail</option>
                                                    <option value="Thakurgaon">Thakurgaon</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                                <label for="division">Thana</label>
                                                <select name="thana" id="thana" class="form-control">
                                                    <option value="">---SELECT THANA---</option>
                                                    <option value="banani">Banani</option>
                                                    <option value="pallabi">Pallabi</option>
                                                    <option value="badda">Badda</option>
                                                </select>
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label>Area</label>
                                                <input class="form-control" type="password" placeholder="Your location">
                                            </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label for="">Date Of Birth</label>
                                            <input type="date" class="form-control"  name="dob" id="dob">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label for="">Last Donation Date</label>
                                            <input type="date" class="form-control"  name="lastdob" id="lastdob" disabled>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="">Current Situation</label>
                                            <SELect class="form-control" name="situation">
                                                <option value="Ready">---Current Situation---</option>
                                                <option value="Ready">Ready</option>
                                                <option value="Not Ready">Not Ready</option>
                                            </SELect>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="">Gender</label>
                                            <SELect class="form-control" name="gender">
                                                <option value="Ready">---Select Gender---</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </SELect>
                                        </div>
                                       
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <button class="form-control btn btn-default" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
        <!-- form end -->

<?php include ("./footer.php"); ?>