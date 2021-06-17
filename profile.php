<?php 
	include("header.php");
	
$fmain = "";
$ftwitter = "";
$finstagram = "";
$fyoutube = "";
$ffacebook = "";
$ftiktok = "";

	if (isset($_POST['submit'])){
		$email = trim($_POST['email']);
		$main = trim($_POST['main']);
		$twitter = trim($_POST['twitter']);
		$instagram = trim($_POST['instagram']);
		$youtube = trim($_POST['youtube']);	
		$facebook = trim($_POST['facebook']);
		$tiktok = trim($_POST['tiktok']);
		/*$uploadedTempFile = $_FILES['pic']['tmp_name'];
		$filename = $_FILES['pic']['name'];
		$destFile = 'passport/'.$filename;
		move_uploaded_file($uploadedTempFile,$destFile);*/
		
		if(($_FILES['pic']['type'] = "image/jpeg") || ($_FILES['pic']['type'] = "image/png") || ($_FILES['pic']['type'] = "image/gif"))
		if($_FILES['pic']['error'] > 0){
			echo "There was an error in file uploading";
		}else{
			$filename = basename($_FILES['pic']['name']);
			if (move_uploaded_file($_FILES['pic']['tmp_name'],"passport/".$filename)){
				$sql = ("INSERT INTO profile(email,main,twitter,instagram,youtube,facebook,tiktok,passport,datereg) VALUES ('$email', '$main', '$twitter','$instagram','$youtube','$facebook','$tiktok','$filename',NOW())");
			$query = mysqli_query($db,$sql);
			}else{
				echo "There was an error in file uploading";
			}
			
		}else{
			echo "There was an error in file uploading";
			exit();
		}
		/*$sql = ("INSERT INTO biodata(address,sex,province,lga,dob,adminID,passport,datereg) VALUES ('$add', '$sex', '$st','$lga','$bday','$userid','$filename',NOW())");
			$query = mysqli_query($db,$sql); */
	}

	$sql = ("SELECT * FROM profile WHERE email='$_SESSION[email]'");
	$query = $db ->query($sql);
	while($row = $query->fetch_array()){
		$fmain = $row['main'];
		$ftwitter = $row['twitter'];
		$finstagram = $row['instagram'];
		$fyoutube = $row['youtube'];
		$ffacebook = $row['facebook'];
		$ftiktok = $row['tiktok'];
		$fpic = $row['passport'];
	}

?>    
<div class="content-wrapper">
         <!-- Container-fluid starts -->
         <div class="container-fluid">
            <!-- Main content starts -->
            <div>
               <!-- Row Starts -->
               <div class="row">
                  <div class="col-sm-12 p-0">
                     <div class="main-header">
                        <h4>General Elements</h4>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                           <li class="breadcrumb-item"><a href="index.html"><i class="icofont icofont-home"></i></a>
                           </li>
                           <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a>
                           </li>
                           <li class="breadcrumb-item"><a href="profile.php">Profile</a>
                           </li>
                        </ol>
                     </div>
                  </div>
               </div>
               <!-- Row end -->

               <!-- Row start -->
               <div class="row">
    <div class="col-lg-12">

                  <!-- Textual inputs starts -->
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header">
                           <h5 class="card-header-text">Update Your Profile</h5>
                           <div class="f-right">
                              <a href="" data-toggle="modal" data-target="#textual-input-Modal"><i class="icofont icofont-code-alt"></i></a>
                           </div>
                        </div>
                        <div class="modal fade modal-flex" id="textual-input-Modal" tabindex="-1" role="dialog">
                           <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true"></span>
                                            </button>
                                    <h5 class="modal-title">This Explains How to fill The Form </h5>
                                 </div>
                                 <!-- end of modal-header -->
                                 <div class="modal-body">
                                    <pre class="brush: html">
                                    You insert in your main account link in the main account space
                                    All other accounts would be used for taking tasks and growing your main account
                      </pre>
                                 </div>
                                 <!-- end of modal-body -->
                              </div>
                              <!-- end of modal-content -->
                           </div>
                           <!-- end of modal-dialog -->
                        </div>
                        <!-- end of modal -->
                        <div class="card-block">
                           <form action="" method="post" enctype="multipart/form-data">
                              <div class="form-group row">
                                 <label for="example-text-input" class="col-xs-2 col-form-label form-control-label">Username</label>
                                 <div class="col-sm-10">
                                    <input class="form-control" type="text" value="<?php echo $_SESSION['username']; ?>" id="example-text-input" readonly>
                                 </div>
                              </div>
                              
                              <div class="form-group row">
                                 <label for="example-email-input" class="col-xs-2 col-form-label form-control-label">Email</label>
                                 <div class="col-sm-10">
                                    <input class="form-control" type="email" value="<?php echo $_SESSION['email']; ?>" readonly name="email">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="example-url-input" class="col-xs-2 col-form-label form-control-label">Main Account Link</label>
                                 <div class="col-sm-10">
                                    <input class="form-control" type="url" value="<?php echo $fmain; ?>"  name="main"  required>
                                 </div>
                              </div>
                              
                              
                              <div class="form-group row">
                                 <label class="col-sm-2 col-form-label form-control-label">Input in Your working Accounts Link Below</label>
                                 
                              </div>
							<div class="form-group row">
                                 <label for="example-url-input" class="col-xs-2 col-form-label form-control-label">Youtube</label>
                                 <div class="col-sm-10">
                                    <input class="form-control" type="url" value="<?php echo $fyoutube; ?>"  name="youtube"required>
                                 </div>
                              </div>    
							<div class="form-group row">
                                 <label for="example-url-input" class="col-xs-2 col-form-label form-control-label">Twitter</label>
                                 <div class="col-sm-10">
                                    <input class="form-control" type="url" value="<?php echo $ftwitter; ?>"  name="twitter"  required>
                                 </div>
                              </div>                          
								<div class="form-group row">
                                 <label for="example-url-input" class="col-xs-2 col-form-label form-control-label">Instagram</label>
                                 <div class="col-sm-10">
                                    <input class="form-control" type="url" value="<?php echo $finstagram; ?>"  name="instagram"  required>
                                 </div>
                              </div>
							<div class="form-group row">
                                 <label for="example-url-input" class="col-xs-2 col-form-label form-control-label">Facebook</label>
                                 <div class="col-sm-10">
                                    <input class="form-control" type="url" value="<?php echo $ffacebook; ?>"  name="facebook"  required>
                                 </div>
                              </div>          
							<div class="form-group row">
                                 <label for="example-url-input" class="col-xs-2 col-form-label form-control-label">Tiktok</label>
                                 <div class="col-sm-10">
                                    <input class="form-control" type="url" value="<?php echo $ftiktok; ?>"  name="tiktok"  required>
                                 </div>
                              </div>      
                                 <div class="col-md-9">
                                 <label for="file" class="col-md-2 col-form-label form-control-label">Upload Profile Picture</label>
                                    <label for="file" class="form-control">
                                                <input type="file"  class="form-control" name="pic" required value="<?php echo $fpic; ?>">
                                            </label>
                                 </div>
                          <?php if($fmain == ""){ ?>
                              <input type="submit" value="Submit" name="submit" class="btn btn-success waves-effect waves-light m-r-30">
                             <?php } ?>

                           </form>
                        </div>
                     </div>
                  </div>
                  <!-- Textual inputs ends -->
               </div>
               </div>
            </div>
            <!-- Main content ends -->
         </div>
         
         <!-- Container-fluid ends -->
      </div>
      
      
   <!-- Required Jqurey -->
   <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
   <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
   <script src="assets/plugins/tether/dist/js/tether.min.js"></script>

   <!-- Required Fremwork -->
   <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

   <!-- waves effects.js -->
   <script src="assets/plugins/Waves/waves.min.js"></script>

   <!-- Scrollbar JS-->
   <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
   <script src="assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

   <!--classic JS-->
   <script src="assets/plugins/classie/classie.js"></script>

   <!-- notification -->
   <script src="assets/plugins/notification/js/bootstrap-growl.min.js"></script>

   <!-- Highliter js -->
   <script type="text/javascript" src="assets/plugins/syntaxhighlighter/scripts/shCore.js"></script>
   <script type="text/javascript" src="assets/plugins/syntaxhighlighter/scripts/shBrushJScript.js"></script>
   <script type="text/javascript" src="assets/plugins/syntaxhighlighter/scripts/shBrushXml.js"></script>
   <script type="text/javascript">
      SyntaxHighlighter.all();
   </script>

   <!-- custom js -->
   <script type="text/javascript" src="assets/js/main.min.js"></script>
   <script type="text/javascript" src="assets/pages/elements.js"></script>
   <script src="assets/js/menu.min.js"></script>
