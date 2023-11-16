<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon/t.ico" type="image/x-icon">
    <title>Dashboard - Trafity</title>
</head>
<body>
    <?php include "sidebar.php" ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                  
					<div class="col-md-6">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Email Statistics</h4>
                                <p class="category">Last Campaign Performance</p>
                            </div>
                            <div class="content">
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                                <div class="footer">
                                    
                                    <hr>
                                    <div class="stats">
									
                                        <i class="fa fa-clock-o"></i> Welcome
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					   
                               <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Latest</h4>
                                <p class="category">Reported Offences</p>
                            </div>
                            <div class="content">
                                <div class="table-full-width">
                                    <table class="table">
                                        <tbody>
<?php 
	$result = $db->prepare("SELECT * FROM reported_offence ORDER BY id DESC limit 5");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>                                           
										   <tr>
                                                <td><?php echo $row['offence']; ?></td>
                                                <td class="td-actions text-right">
                                                  <span style="padding:2px; background-color:#1DC7EA; color:#FFF;">  <?php echo $row['date']; ?> </span>
                                                </td>
                                            </tr>
	<?php } ?>
                                          </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
<?php include "footer.php"?>

</body>
</html>
     