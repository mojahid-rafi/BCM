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
                        <div class="ibox-head">

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary align-right" data-toggle="modal" data-target="#DonorAdd">
                                Add Donor
                            </button>
                        </div>
                        
                      <div class="ibox-body">
                          <div class="table-responsive">
                              <table class="table">
                                  <thead>
                                  <tr>
                                      <th width="50px">SL</th>
                                      <th>Donor Name</th>
                                      <th>Blood Group</th>
                                      <th>Phone</th>
                                      <th>Due Day</th>
                                      <th>Status</th>
                                      <th>Actions</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td>Mojahid Rafi</td>
                                      <td>B Positive (+)</td>
                                      <td>01843885002</td>
                                      <td>10 Days</td>
                                      <td>Ready To Donate</td>
                                      <td>
                                          <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                          <button class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td>Mojahid Rafi</td>
                                      <td>B Positive (+)</td>
                                      <td>01843885002</td>
                                      <td>10 Days</td>
                                      <td>Ready To Donate</td>
                                      <td>
                                          <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                          <button class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>3</td>
                                      <td>Mojahid Rafi</td>
                                      <td>B Positive (+)</td>
                                      <td>01843885002</td>
                                      <td>10 Days</td>
                                      <td>Ready To Donate</td>
                                      <td>
                                          <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                          <button class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                      </td>
                                  </tr>
                                  </tbody>
                              </table>
                          </div>

                          <!-- Modal -->
                          <div class="modal fade" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                              <form action="post">
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
                                              </div>
                                          </div>
                                          <div class="modal-footer">
<!--                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                              <button class="btn btn-default px-4" type="submit">Save</button>
                                          </div>
                                      </div>
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