<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon/t.ico" type="image/x-icon">
    <title>Report - Trafity</title>
</head>
<body>
    <?php include"sidebar.php"; ?>
   <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Report an Offense</h4>
                            </div>
							<?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "Successfully Reported!")?>
                                            </div>
                                            <?php endif;?>
<div class="content">
							    <form  action="save-reported.php" method="post">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Offense ID</label>
                                                <input type="text" name="offence_id" class="form-control" placeholder="Offense ID" value="<?php 
$prefix= md5(time()*rand(1, 2)); echo strip_tags(substr($prefix ,0,6));?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Vehicle Reg. No.</label>
                                                <input type="text" name="vehicle_no" class="form-control" placeholder="Vehicle Reg. No." >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Driver's License</label>
                                                <input type="text" name="driver_license"  class="form-control" placeholder="Driver's License">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Driver's Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Driver's Name">
                                            </div>
                                        </div>
                                     </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address"  class="form-control" placeholder="Address of Incident" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                 <select class="form-control" name="gender" >
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select> 
                                            </div>
                                        </div>
										<?php 
							  $user=$_SESSION['SESS_MEMBER_ID'];
	$result = $db->prepare("SELECT id,username,email,name,address FROM user WHERE id='$user'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
		
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Officer Reporting</label>
                                                <input type="text" name="officer_reporting"  class="form-control" placeholder="Officer Name" value="<?php echo $row['username']; ?>" readonly>
                                            </div>
                                        </div>
	<?php }?>
                                    </div>
 <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Offense</label>
<select class="form-control" name="offence" >
  <option selected disabled>..Choose Offense Type..</option>
                <option value="Attempting to corrupt Marshall on duty">Attempting to corrupt Marshall on duty</option>
            <option value="Drinking & Driving">Drinking & Driving</option>
             <option value="Assaulting Road Marshall">Assaulting Road Marshall</option>
             <option value="Dangerous Driving">Dangerous Driving</option>
            <option value="Driver's License Violation">Driver's License Violation</option>
            <option value="Do not move violation">Do not move violation</option>
            <option value="Driving Under Drug Influence">Driving Under Drug Influence</option>
            <option value="Driving with worn out tyres">Driving with worn out tyres</option>
            <option value="Constantly caught for No seatbelt">Constantly caught for No seatbelt</option>
            <option value="Excessive smoke emission">Excessive smoke emission</option>
            <option value="Failure to fix red flag on projected load">Failure to fix red flag on projected load</option>
            <option value="Fire extinguisher violation">Fire extinguisher violation</option>
            <option value="No Caution">No Caution</option>
            <option value="Holding with forged documents">Holding with forged documents</option>
            <option value="Riding Motorcycle without crash helmet">Riding Motorcycle without crash helmet</option>
            <option value="Road obstruction">Road obstruction</option>
            <option value="Speed Limit violation">Speed Limit violation</option>
            <option value="Under age driving">Under age driving</option>
            <option value="Making calls while driving">Making calls while driving</option>
            <option value="Other offences and violation">Other offences and violation</option>
</select>
</select>                                                 
												</div>
                                        </div>
                                    </div>
                                   <button type="submit" class="btn btn-info btn-fill pull-right">Report Offence</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                     
                    </div>

                </div>
            </div>
        </div>


        <?php include"footer.php"; ?>
</body>
</html>