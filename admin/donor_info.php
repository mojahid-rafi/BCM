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
       
        <!-- connect with mysqli start -->
<?php
    $con = new mysqli('localhost','root','','bcm');

    if(isset($_POST['submit'])){

        $name =  $_POST['name'];
        $phone =  $_POST['phone'];
        $email =  $_POST['email'];
        $pwd =  $_POST['pwd'];
        $bgroup =  $_POST['bgroup'];
        $division =  $_POST['division'];
        $district =  $_POST['district'];
        $thana =  $_POST['thana'];
        $area =  $_POST['area'];
        $dob =  $_POST['dob'];
        $situation =  $_POST['situation'];
        $gender =  $_POST['gender'];
        
        $sql = "INSERT INTO donor_info(name,gender,blood_group,dob,division_id,district_id,thana_id,area,email,phone,pwd,sts,club_id) values ('{$name}','{$gender}','{$bgroup}','{$dob}','{$division}','{$district}','{$thana}','{$area}','{$email}','{$phone}','{$pwd}',sts,'');";
        $con->query($sql);
    };


?>
<!-- connect with mysqli end -->
<!-- modal button start -->
<div class="page-content fade-in-up">
            <div class="row">
                <div class="col-md-12">
                    <div class="ibox">
        <!-- modal button -->
        <div class="ibox-head justify-content-end">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DonorAdd">
                Add Donation
            </button>
        </div>
        <!-- modal button end -->

 <!-- form start -->

 <div class="modal fade" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                              <form action="" method="POST">
                                  <div class="modal-dialog modal-lg" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Add New Blood Donor</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Name</label>
                                            <input name="name" class="form-control" type="text" placeholder="Name">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Phone</label>
                                            <input name="phone" class="form-control" type="text" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Email</label>
                                            <input name="email" class="form-control" type="email" placeholder="Email">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Password</label>
                                            <input name="pwd" class="form-control" type="password" placeholder="Password">
                                         </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="">Gender</label>
                                            <SELect class="form-control" name="gender">
                                                <option value="Ready">---Select Gender---</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </SELect>
                                        </div>

                                        <div class="col-sm-6 form-group">
                                            <label>Blood Group</label>
                                                <select name="bgroup" class="form-control">
                                                    <option value="">---SELECT BLOOD GROUP---</option>
                                                    <option value="A Positive (A+)">A Positive (A+)</option>
                                                    <option value="A Negative (A-)">A Negative (A-)</option>
                                                    <option value="B Positive (B+">B Positive (B+)</option>
                                                    <option value="B Negative (B-)">B Negative (B-)</option>
                                                    <option value="O Positive (O+">O Positive (O+)</option>
                                                    <option value="O Negative (O-)">O Negative (O-)</option>
                                                    <option value="AB Positive (AB+)">AB Positive (AB+)</option>
                                                    <option value="AB Negative (AB-)">AB Negative (AB-)</option>
                                                </select>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                                <label for="">Division</label>
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
                                                <label for="">Thana</label>
                                                <select name="thana" id="thana" class="form-control">
                                                        <option value="">---SELECT THANA---</option>
                                                        <option value="banani">Banani</option>
                                                        <option value="pallabi">Pallabi</option>
                                                        <option value="badda">Badda</option>
                                                </select>
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label>Area</label>
                                                <input name="area" class="form-control" type="text" placeholder="Your location" required>
                                            </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label for="">Date Of Birth</label>
                                            <input type="date" class="form-control"  name="dob" id="dob" required>
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
                                        <div class="col-12 form-group">
                                            <!-- <button name="submit" class="form-control btn btn-default" type="submit">Submit</button> -->
                                            <input name="submit" type="submit" class="btn btn-default" value="Submit">
                                            </div>

                                       
                                            </div>
                                         </div>

                                        <div class="row">
                                            
                                    </div>
                                        
                                </div>
                                    <div class="modal-footer">
                              </form>
                             
                          </div>
        <!-- modal end -->
                    </div>   
                      
                </div>
            </div>
            
        </div>
    <?php
        $select = "SELECT * FROM donor_info";
        $data = $con->query($select);
        $donors = $data->fetch_all(MYSQLI_ASSOC);    
    ?>
     <table id="" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>phone</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach($donors as $donor):?>
            <tr>
              <td> <?= $donor['id'];?></td>
              <td> <?= $donor['name'];?></td>
              <td> <?= $donor['phone'];?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
     </table>
        
        
<?php include ("./footer.php"); ?>