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
        <form action="" method="post">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label>Name</label>
                    <input name="name" class="form-control" type="text" placeholder="Name">
                </div>
                <div class="col-sm-6 form-group">
                    <label>email</label>
                    <input name="email" class="form-control" type="email" placeholder="Phone">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label>Feedback</label>
                    <textarea class="form-control" name="feedback" id="feedback" cols="5" rows="2"></textarea>
                </div>
                <div class="col-sm-12 form-group">
                    <input name="submit" class="form-control btn btn-default" type="submit" placeholder="Phone">
                </div>
            </div>
        </form>



<?php include ("./footer.php"); ?>