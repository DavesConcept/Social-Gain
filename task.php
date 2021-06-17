<?php 
	include("header.php"); 
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
                           <li class="breadcrumb-item"><a href="index.php"><i class="icofont icofont-home"></i></a>
                           </li>
                           <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a>
                           </li>
                           <li class="breadcrumb-item"><a href="task.php">Tasks</a>
                           </li>
                        </ol>
                     </div>
                  </div>
               </div>
        <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
       <?php
    $sql = ("SELECT profile.main FROM profile");
    $query = $db ->query($sql);
    ?>
     <table class="table table-bordered table-hover">
        <tr>
            <th>S/N</th>
            <th>Link</th>
            <th>Instruction</th>
        </tr>
        <tr>
		<?php
				$d = "Follow Account";
        $sn =1;
        while($row = $query->fetch_array()){
            echo "<td>".$sn."</td>";
            echo "<td>".$row['main']."</td>";
			echo "<td>".$d."</td>";
            $sn = $sn +1;
        }
        ?>
        </tr>
        </table>
        </div>
        </div>
    <div class="col-md-2"></div>

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

   <!-- custom js -->
   <script type="text/javascript" src="assets/js/main.min.js"></script>
   <script type="text/javascript" src="assets/pages/elements.js"></script>
   <script src="assets/js/menu.min.js"></script>

