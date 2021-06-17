<?php 
	include("header.php"); 
	
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
      <!-- Sidebar chat end-->
      <div class="content-wrapper">
         <!-- Container-fluid starts -->
         <!-- Main content starts -->
         <div class="container-fluid">
            <div class="row">
               <div class="main-header">
                  <h4>Dashboard</h4>
               </div>
            </div>
            <!-- 4-blocks row start -->
            
            <!-- 4-blocks row end -->

            <!-- 1-3-block row start -->
            <div class="row">
               <div class="col-lg-10">
                  <div class="card">
                     <div class="user-block-2">
                        <img class="img-fluid" src="passport/<?php echo $fpic; ?>" alt="user-header">
                        <h5><?php echo $_SESSION['username']; ?></h5>
                     </div>
                     <div class="card-block">
                        <div class="user-block-2-activities">
                           <div class="user-block-2-active">
                              <i class="icofont icofont-clock-time"></i>Main account link
                            <label class="label label-primary"><?php echo $fmain; ?></label>
                           </div>
                        </div>
                        <div class="user-block-2-activities">
                           <div class="user-block-2-active">
                              <i class="icofont icofont-users"></i> Email
                              <label class="label label-primary"><?php echo $_SESSION['email']; ?></label>
                           </div>
                        </div>

                        
                        
                        <div class="text-center">
                           <button type="button" class="btn btn-warning waves-effect waves-light text-uppercase m-r-30">
                                    Follows
                                </button>
                           <button type="button" class="btn btn-primary waves-effect waves-light text-uppercase">
                                    Message
                                </button>
                        </div>
                     </div>
                  </div>
               </div>
               
               
               
            </div>
            <!-- 1-3-block row end -->

            <!-- 2-1 block start -->
            
            <!-- 2-1 block end -->
         </div>
         <!-- Main content ends -->
         <!-- Container-fluid ends -->
         
      </div>
   </div>


   <!-- Warning Section Starts -->
   <!-- Older IE warning message -->
   <!--[if lt IE 9]>
      <div class="ie-warning">
          <h1>Warning!!</h1>
          <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
          <div class="iew-container">
              <ul class="iew-download">
                  <li>
                      <a href="http://www.google.com/chrome/">
                          <img src="assets/images/browser/chrome.png" alt="Chrome">
                          <div>Chrome</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.mozilla.org/en-US/firefox/new/">
                          <img src="assets/images/browser/firefox.png" alt="Firefox">
                          <div>Firefox</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://www.opera.com">
                          <img src="assets/images/browser/opera.png" alt="Opera">
                          <div>Opera</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.apple.com/safari/">
                          <img src="assets/images/browser/safari.png" alt="Safari">
                          <div>Safari</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                          <img src="assets/images/browser/ie.png" alt="">
                          <div>IE (9 & above)</div>
                      </a>
                  </li>
              </ul>
          </div>
          <p>Sorry for the inconvenience!</p>
      </div>
      <![endif]-->
   <!-- Warning Section Ends -->

   <!-- Required Jqurey -->
   <script src="assets/plugins/Jquery/dist/jquery.min.js"></script>
   <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
   <script src="assets/plugins/tether/dist/js/tether.min.js"></script>

   <!-- Required Fremwork -->
   <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

   <!-- Scrollbar JS-->
   <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
   <script src="assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

   <!--classic JS-->
   <script src="assets/plugins/classie/classie.js"></script>

   <!-- notification -->
   <script src="assets/plugins/notification/js/bootstrap-growl.min.js"></script>

   <!-- Sparkline charts -->
   <script src="assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

   <!-- Counter js  -->
   <script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
   <script src="assets/plugins/countdown/js/jquery.counterup.js"></script>

   <!-- Echart js -->
   <script src="assets/plugins/charts/echarts/js/echarts-all.js"></script>

   <script src="https://code.highcharts.com/highcharts.js"></script>
   <script src="https://code.highcharts.com/modules/exporting.js"></script>
   <script src="https://code.highcharts.com/highcharts-3d.js"></script>

   <!-- custom js -->
   <script type="text/javascript" src="assets/js/main.min.js"></script>
   <script type="text/javascript" src="assets/pages/dashboard.js"></script>
   <script type="text/javascript" src="assets/pages/elements.js"></script>
   <script src="assets/js/menu.min.js"></script>
<script>
var $window = $(window);
var nav = $('.fixed-button');
$window.scroll(function(){
    if ($window.scrollTop() >= 200) {
       nav.addClass('active');
    }
    else {
       nav.removeClass('active');
    }
});
</script>

</body>

</html>
