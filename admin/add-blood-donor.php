<?php include ("./header.php"); ?>

    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">Donor Registration Form</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="dashboard.php"><i class="la la-home font-20"></i></a>
                </li>
               <!-- <li class="breadcrumb-item"></li>-->
            </ol>
        </div>

        <!--    Enter Your Content Here-->

        <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-md-12">
                    <div class="ibox">
                        <!-- Do you work here-->
                        
                      <div class="ibox-body"> 
                         <form>
                            <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text" placeholder="Name">
                                        </div>
                                        
                                        <div class="col-sm-6 form-group">
                                        <label>Blood Group</label>
                                        <select name="blood group" id="blood group" class="form-control">
                                        <option value="">--SELECT BLOOD GROUP--</option>
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
                                        <div class="col-sm-6 form-group">
                                        <label for="dob">DOB</label>
                                        <input type="date" class="form-control"  name="dob" id="dob">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                        <label for="division">Division</label>
                                        <select name="division" id="division"class="form-control">
                                            <option value="">--SELECT DIVISION--</option>
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
                                        <label for="District">Discrict</label>
                                        <select name="district" id="district" class="form-control">
                                        <option value="">--SELECT YOUR DISCRICT--</option>
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
                                    
                                    <div class="col-sm-6 form-group">
                                        <label>Thana/Upzila</label>
                                        <select name="thana" id="thana" class="form-control">
                                            <option value="">--SELECT THANA--</option>
                                            <option value="banani">Banani</option>
                                            <option value="pallabi">Pallabi</option>
                                            <option value="badda">Badda</option>
                                        </select>
                                    </div>
                                    
                                    <div class="col-sm-6 form-group">
                                        <label>Area</label>
                                        <input class="form-control" type="text" placeholder="area">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="email" placeholder="Email address">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Phone</label>
                                        <input class="form-control" type="text" placeholder="">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Password</label>
                                        <input class="form-control" type="password" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <button class="btn btn-default" type="submit">Submit</button>
                                    </div>
                                </div> 
                              </form>
                        </div>
                    </div>        
                </div>
            </div>
        </div>

        <!-- END PAGE CONTENT-->

<?php include ("./footer.php"); ?>