<!DOCTYPE html>
<html lang="en">
<?php include "head.php"; ?>
<body>
<!--=================================
header -->
<?php include "header.php"; ?>
<!--=================================
header -->
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    $postid = $_SESSION['pid'] ;
?>
<!--=================================
tab -->
<!--
<section class="space-ptb bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="section-title text-center">
        <h2 class="text-primary">Thank You</h2>
       </div>
      </div>
      <div class="col-md-8">
        <div class=" justify-content-center">
          <ul class="nav nav-tabs nav-tabs-03 justify-content-center d-sm-flex d-block text-center" id="myTab" role="tablist">
            <li class="flex-fill">
              <a class="nav-item" href="post_a_job.php" id="Job-detail-tab"  role="tab" aria-controls="Job-detail" aria-selected="false">
                <div class="feature-info-icon mb-3">
                  <i class="flaticon-suitcase"></i>
                </div>
                <span>Job Detail</span>
              </a>
            </li>
            <li class="flex-fill">
              <a class="nav-item" id="Package-tab"  href="post_job_package.php" role="tab" aria-controls="Package" aria-selected="false">
                <div class="feature-info-icon mb-3">
                  <i class="flaticon-debit-card"></i>
                </div>
                <span>Package &amp; Payments</span>
              </a>
            </li>
            <li class="flex-fill">
              <a class="nav-item active" id="Confirm-tab"  href="post_job_confirm.php" role="tab" aria-controls="Confirm" aria-selected="false">
                <div class="feature-info-icon mb-3">
                  <i class="flaticon-tick"></i>
                </div>
                <span>Confirmation</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
-->
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade active show" id="Job-detail" role="tabpanel" aria-labelledby="Job-detail-tab">
       <section class="space-ptb">
      <div class="container">
        <div class="row text-center">
          <div class="col-12 mb-4">
            <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200" height="200" viewBox="0 0 60 60" version="1.1"><!-- Generator: Sketch 51.3 (57544) - http://www.bohemiancoding.com/sketch --><title>036 - Device Cover</title><desc>Created with Sketch.</desc><defs/><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g fill="#ff8a00" fill-rule="nonzero"><path d="M36.608,26.522 L44.42,32.083 C44.7671643,32.330178 45.2328357,32.330178 45.58,32.083 L53.392,26.523 C55.0192795,25.3702451 55.9904167,23.5031892 56,21.509 L56,9.677 C56.000591,9.27883898 55.7649212,8.91826415 55.4,8.759 L45.4,4.439 C45.1472508,4.33000068 44.8607492,4.33000068 44.608,4.439 L34.608,8.759 C34.2430788,8.91826415 34.007409,9.27883898 34.008,9.677 L34.008,21.509 C34.0158969,23.5014219 34.9839074,25.3678205 36.608,26.522 Z M36,10.334 L45,6.446 L54,10.334 L54,21.509 C53.9910962,22.8566812 53.3323369,24.117224 52.231,24.894 L45,30.042 L37.769,24.894 C36.6675346,24.1173365 36.0087381,22.8567225 36,21.509 L36,10.334 Z"/><path d="M42.4,23.8 C42.8320438,24.1242308 43.4434866,24.0467489 43.781,23.625 L51.781,13.625 C52.1217114,13.1934254 52.0500699,12.5677379 51.6206245,12.2243466 C51.1911792,11.8809554 50.5650579,11.9487006 50.219,12.376 L42.819,21.619 L39.6,19.2 C39.3141875,18.9856406 38.9357266,18.9400436 38.6071797,19.0803848 C38.2786328,19.2207259 38.0499141,19.5256842 38.0071797,19.8803848 C37.9644453,20.2350853 38.1141875,20.5856406 38.4,20.8 L42.4,23.8 Z"/><path d="M5,60 L55,60 C57.7600532,59.9966939 59.9966939,57.7600532 60,55 L60,51 C60,50.4477153 59.5522847,50 59,50 L57,50 L57,28.669 C58.9092563,26.7741494 59.98827,24.1989035 60,21.509 L60,7.047 C60.000591,6.64883898 59.7649212,6.28826415 59.4,6.129 L45.4,0.082 C45.1474495,-0.0279576698 44.8605505,-0.0279576698 44.608,0.082 L30.608,6.129 C30.2430788,6.28826415 30.007409,6.64883898 30.008,7.047 L30.008,12 L6,12 C4.34314575,12 3,13.3431458 3,15 L3,50 L1,50 C0.44771525,50 6.76353751e-17,50.4477153 0,51 L0,55 C0.00330611633,57.7600532 2.23994685,59.9966939 5,60 Z M40,50 L9,50 L9,18 L30,18 L30,21.509 C30.0104682,24.797038 31.6077945,27.8777289 34.289,29.781 L43.965,36.669 C44.5844619,37.1102315 45.4155381,37.1102315 46.035,36.669 L51,33.135 L51,50 L40,50 Z M37.383,54 L31,54 L31,52 L38.382,52 L37.382,54 L37.383,54 Z M22.618,54 L21.618,52 L29,52 L29,54 L22.618,54 Z M53,31.711 L55,30.287 L55,50 L53,50 L53,31.711 Z M32,7.705 L45,2.089 L58,7.705 L58,21.505 C57.9926625,23.8066487 57.0139816,25.9982404 55.305,27.54 L55.29,27.552 C55.0554562,27.7660987 54.8087098,27.9664341 54.551,28.152 L45,34.951 L35.449,28.151 C33.294533,26.6235813 32.010049,24.1499534 32,21.509 L32,7.705 Z M5,15 C5,14.4477153 5.44771525,14 6,14 L30,14 L30,16 L9,16 C7.8954305,16 7,16.8954305 7,18 L7,50 L5,50 L5,15 Z M4,52 L19.382,52 L20.829,54.894 C21.165329,55.5739318 21.8594388,56.0030461 22.618,56 L37.382,56 C38.1391514,56.0039364 38.8328012,55.5774329 39.171,54.9 L40.618,52 L58,52 L58,54 L51,54 C50.4477153,54 50,54.4477153 50,55 C50,55.5522847 50.4477153,56 51,56 L57.816,56 C57.3937454,57.1943509 56.2667854,57.9947486 55,58 L5,58 C3.73321457,57.9947486 2.60625455,57.1943509 2.184,56 L9,56 C9.55228475,56 10,55.5522847 10,55 C10,54.4477153 9.55228475,54 9,54 L2,54 L2,52 L4,52 Z"/><path d="M13,56 L15,56 C15.5522847,56 16,55.5522847 16,55 C16,54.4477153 15.5522847,54 15,54 L13,54 C12.4477153,54 12,54.4477153 12,55 C12,55.5522847 12.4477153,56 13,56 Z"/><path d="M45,56 L47,56 C47.5522847,56 48,55.5522847 48,55 C48,54.4477153 47.5522847,54 47,54 L45,54 C44.4477153,54 44,54.4477153 44,55 C44,55.5522847 44.4477153,56 45,56 Z" /><path d="M12.707,24.707 L15.707,21.707 C16.0859722,21.3146211 16.0805524,20.6909152 15.6948186,20.3051814 C15.3090848,19.9194476 14.6853789,19.9140278 14.293,20.293 L11.293,23.293 C11.0330434,23.5440745 10.9287874,23.9158779 11.0203028,24.2655073 C11.1118183,24.6151368 11.3848632,24.8881817 11.7344927,24.9796972 C12.0841221,25.0712126 12.4559255,24.9669566 12.707,24.707 Z" /><path d="M13.707,30.707 L21.707,22.707 C22.0859722,22.3146211 22.0805524,21.6909152 21.6948186,21.3051814 C21.3090848,20.9194476 20.6853789,20.9140278 20.293,21.293 L12.293,29.293 C12.0330434,29.5440745 11.9287874,29.9158779 12.0203028,30.2655073 C12.1118183,30.6151368 12.3848632,30.8881817 12.7344927,30.9796972 C13.0841221,31.0712126 13.4559255,30.9669566 13.707,30.707 Z"/><path d="M26.293,22.293 L13.293,35.293 C13.0330434,35.5440745 12.9287874,35.9158779 13.0203028,36.2655073 C13.1118183,36.6151368 13.3848632,36.8881817 13.7344927,36.9796972 C14.0841221,37.0712126 14.4559255,36.9669566 14.707,36.707 L27.707,23.707 C28.0859722,23.3146211 28.0805524,22.6909152 27.6948186,22.3051814 C27.3090848,21.9194476 26.6853789,21.9140278 26.293,22.293 Z"/></g></g></svg>
            </div>
          <div class="col-sm-12">
            <h1 class="mb-4">Thank You</h1>
            <h6 class="mb-2 text-light">Your Request has been submitted. </h6>
            <h6 class="mb-0 text-light">Email support@Jobbster.com</h6>
          </div>
          <div class="col-12 text-center mt-4 mt-sm-5">
            <a class="btn btn-outline-primary mb-3 mb-sm-0" href="index.php">Continue</a>
            <a class="btn btn-outline-primary mb-3 mb-sm-0" href="schedule_test.php?pid=<?php echo $postid; ?>">Schedule Test</a>
          </div>
        </div>
      </div>
    </section>  
  </div>
</div>
<!--=================================
feature-info-->

<!--=================================
feature-info-->
<section class="feature-info-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-lg-0 mb-4">
        <div class="feature-info feature-info-02 p-4 p-lg-5 bg-primary">
          <div class="feature-info-icon mb-3 mb-sm-0 text-dark">
            <i class="flaticon-team"></i>
          </div>
          <div class="feature-info-content text-white pl-sm-4 pl-0">
            <p>Jobseeker</p>
            <h5 class="text-white">Looking For Job?</h5>
          </div>
          <a class="ml-auto align-self-center" href="#">Apply now<i class="fas fa-long-arrow-alt-right"></i> </a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="feature-info feature-info-02 p-4 p-lg-5 bg-dark">
          <div class="feature-info-icon mb-3 mb-sm-0 text-primary">
            <i class="flaticon-job-3"></i>
          </div>
          <div class="feature-info-content text-white pl-sm-4 pl-0">
            <p>Recruiter</p>
            <h5 class="text-white">Are You Recruiting?</h5>
          </div>
          <a class="ml-auto align-self-center" href="#">Post a job<i class="fas fa-long-arrow-alt-right"></i> </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
feature-info-->

<!--=================================
footer-->
<?php include "footer.php"; ?>
<!--=================================
footer-->

<!--=================================
Back To Top-->
   <div id="back-to-top" class="back-to-top">
     <i class="fas fa-angle-up"></i>
   </div>
<!--=================================
Back To Top-->

<!--=================================
Signin Modal Popup -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header p-4">
        <h4 class="mb-0 text-center">Login to Your Account</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="login-register">
          <fieldset>
            <legend class="px-2">Choose your Account Type</legend>
            <ul class="nav nav-tabs nav-tabs-border d-flex" role="tablist">
              <li class="nav-item mr-4">
                <a class="nav-link active"  data-toggle="tab" href="#candidate" role="tab" aria-selected="false">
                  <div class="d-flex">
                    <div class="tab-icon">
                      <i class="flaticon-users"></i>
                    </div>
                    <div class="ml-3">
                      <h6 class="mb-0">Candidate</h6>
                      <p class="mb-0">Log in as Candidate</p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  data-toggle="tab" href="#employer" role="tab" aria-selected="false">
                  <div class="d-flex">
                    <div class="tab-icon">
                      <i class="flaticon-suitcase"></i>
                    </div>
                    <div class="ml-3">
                      <h6 class="mb-0">Employer</h6>
                      <p class="mb-0">Log in as Employer</p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </fieldset>
          <div class="tab-content">
            <div class="tab-pane active" id="candidate" role="tabpanel">
              <form class="mt-4">
                <div class="form-row">
                  <div class="form-group col-12">
                    <label for="Email2">Username / Email Address:</label>
                    <input type="text" class="form-control" id="Email22">
                  </div>
                  <div class="form-group col-12">
                    <label for="password2">Password*</label>
                    <input type="password" class="form-control" id="password32">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6">
                    <a class="btn btn-primary btn-block" href="#">Sign In</a>
                  </div>
                  <div class="col-md-6">
                    <div class="ml-md-3 mt-3 mt-md-0 forgot-pass">
                      <a href="#">Forgot Password?</a>
                      <p class="mt-1">Don't have account? <a href="register.html">Sign Up here</a></p>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="tab-pane fade" id="employer" role="tabpanel">
              <form class="mt-4">
                <div class="form-row">
                  <div class="form-group col-12">
                    <label for="Email2">Username / Email Address:</label>
                    <input type="text" class="form-control" id="Email2">
                  </div>
                  <div class="form-group col-12">
                    <label for="password2">Password *</label>
                    <input type="password" class="form-control" id="password2">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6">
                    <a class="btn btn-primary btn-block" href="#">Sign up</a>
                  </div>
                  <div class="col-md-6">
                    <div class="ml-md-3 mt-3 mt-md-0">
                      <a href="#">Forgot Password?</a>
                      <div class="custom-control custom-checkbox mt-2">
                        <input type="checkbox" class="custom-control-input" id="Remember-02">
                        <label class="custom-control-label" for="Remember-02">Remember Password</label>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="mt-4">
            <fieldset>
              <legend class="px-2">Login or Sign up with</legend>
              <div class="social-login">
                <ul class="list-unstyled d-flex mb-0">
                  <li class="facebook text-center">
                    <a href="#"> <i class="fab fa-facebook-f mr-4"></i>Login with Facebook</a>
                  </li>
                  <li class="twitter text-center">
                    <a href="#"> <i class="fab fa-twitter mr-4"></i>Login with Twitter</a>
                  </li>
                  <li class="google text-center">
                    <a href="#"> <i class="fab fa-google mr-4"></i>Login with Google</a>
                  </li>
                  <li class="linkedin text-center">
                    <a href="#"> <i class="fab fa-linkedin-in mr-4"></i>Login with Linkedin</a>
                  </li>
                </ul>
              </div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--=================================
Signin Modal Popup -->

<!--=================================
Javascript -->

  <!-- JS Global Compulsory (Do not remove)-->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper/popper.min.js"></script>
  <script src="js/bootstrap/bootstrap.min.js"></script>

  <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
  <script src="js/select2/select2.full.js"></script>

  <!-- Template Scripts (Do not remove)-->
  <script src="js/custom.js"></script>

</body>
</html>
