<?php
   include("connecti.php");
    if (isset($_POST['submit'])) 
    {
        if(isset($_POST['title']) || isset($_POST['company'])) 
        {
            $title=$_POST['title'];
            $company=$_POST['company'];
            header("Location: search_result_by_company.php?company=$company&title=$title");
            exit(0);
        } 
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php include "head.php"; ?>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<!--=================================
header -->
<?php include "header.php"; ?>
<!--=================================
header -->

<?php
//   include("connecti.php");
//    if (isset($_POST['find'])) 
//    {
//        if(isset($_POST['company']) && isset($_POST['title'])) 
//        {
//            $company=$_POST['company'];
//            $title=$title
//                header("job_lising_byCompany.php?")
//            if(isset($_POST['company']))
//            {
//                $company = $_POST['company'];
//                echo $company;
//            }
////            else if(isset($_POST['title']))
//        }
//    }
?>
<!--=================================
search above -->
<section class="pt-5 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="job-search-field job-search-field-02">
          <div class="job-search-item">
            <form class="form-row basic-select-wrapper" action="" method="post" onsubmit="return check();" name="frm1" id="frm1">
<!--            <form class="form-row basic-select-wrapper">-->
              <div class="form-group col-lg col-md-6">
                <div class="form-group-search">
                  <label>Job Title</label>
                  <div class="d-flex align-items-center"><input class="form-control" name="title" id="title" type="text" placeholder="e.g. Sales Executive"></div>
                </div>
              </div>
              <div class="form-group col-lg col-md-6">
                <div class="form-group-search">
                  <label>Company</label>
                  <div class="d-flex align-items-center"><input class="form-control" name="company" id="company" type="text" placeholder="e.g. Wipro" value=""></div>
                </div>
              </div>
<!--
              <div class="form-group col-lg">
                <label>Distance</label>
                <select class="form-control basic-select">
                    <option value="1">up to 1 mile</option>
                    <option value="2">up to 2 miles</option>
                    <option value="5">up to 5 miles</option>
                    <option value="7">up to 7 miles</option>
                    <option value="10">up to 10 miles</option>
                    <option value="15" selected="">up to 15 miles</option>
                    <option value="25">up to 25 miles</option>
                    <option value="35">up to 35 miles</option>
                    <option value="50">up to 50 miles</option>
                    <option value="75">up to 75 miles</option>
                    <option value="100">up to 100 miles</option>
                    <option value="250">up to 250 miles</option>
                    <option value="500">up to 500 miles</option>
                    <option value="750">up to 750 miles</option>
                </select>
              </div>
-->
              <div class="form-group col-lg-2 col-md-4">
                <div class="mt-0">
<!--                    <a href="job_lising_byCompany.php">-->
                            <input type="submit" id="submit" style="padding:10px 40px" name="submit" class="btn btn-primary align-items-center" value="Find jobs">

<!--                  <button class="btn btn-primary align-items-center" name="find" id="find" type="submit"><i class="fas fa-search mr-1"></i>Find Jobs</button></a>-->
                </div>
              </div>
<!--
              <div class="form-group mb-0 col-12">
                <div class="d-md-inline-block advance-search-btn">
                  <a class="more-search p-0 collapsed" data-toggle="collapse" href="#advanced-search" role="button" aria-expanded="false" aria-controls="advanced-search">Advanced search <i class="fas fa-angle-down pl-1"></i></a>
                </div>
              </div>
-->
<!--
              <div class="collapse advanced-search col-lg-12 pt-4" id="advanced-search">
                <div class="card card-body">
                  <div class="form-row">
                    <div class="form-group d-flex col-lg col-md-6">
                      <div class="form-group-search">
                        <label>Salary Min</label>
                        <div class="d-flex align-items-center"><input class="form-control" type="search" placeholder="5,000$"></div>
                      </div>
                    </div>
                    <div class="form-group d-flex col-lg col-md-6">
                      <div class="form-group-search">
                        <label>Salary Max</label>
                        <div class="d-flex align-items-center"><input class="form-control" type="search" placeholder="10,000$"></div>
                      </div>
                    </div>
                    <div class="form-group col-lg col-md-6">
                      <label>Salary Type</label>
                      <select class="form-control basic-select">
                        <option value="annum">Per annum</option>
                        <option value="month">Per month</option>
                        <option value="week">Per week</option>
                        <option value="day">Per day</option>
                        <option value="hour">Per hour</option>
                      </select>
                    </div>
                    <div class="form-group col-lg col-md-6 mb-0">
                      <label>Job Type</label>
                      <select class="form-control basic-select">
                        <option>Any</option>
                        <option value="Permanent">Permanent</option>
                        <option value="Contract">Contract</option>
                        <option value="Part-Time">Part-Time</option>
                        <option value="Temporary">Temporary</option>
                        <option value="Apprenticeship">Apprenticeship</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
-->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
search above -->

<!--=================================
banner -->
<section class="banner bg-holder bg-overlay-black-30" style="background-image: url(images/bg/banner-01.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-white mb-2">Drop <span class="text-primary"> Resume &amp; Get </span> Your Desired Job</h1>
        <p class="lead mb-0 font-weight-normal text-white">Find Jobs, Employment &amp; Career Opportunities</p>
      </div>
    </div>
  </div>
</section>
<!--=================================
banner -->

<!--=================================
Action box & Counter -->
<!--
<section class="bg-light py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 mb-4 mb-sm-5 mb-lg-0">
        <div class="d-sm-flex">
          <div class="align-self-center footer-top-logo"><img class="img-fluid" src="images/logo-dark.svg" alt=""></div>
          <div class="pl-sm-3 ml-sm-3 mt-3 mt-sm-0 border-sm-left ">Create free account to find thousands Jobs, Employment & Career Opportunities around you!</div>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="row">
          <div class="col-sm-6">
            <div class="counter mb-4 mb-sm-0">
              <div class="counter-icon">
                <i class="flaticon-team"></i>
              </div>
              <div class="counter-content">
                <span class="timer mb-1 text-dark" data-to="1562" data-speed="10000">1,562</span>
                <label class="mb-0">Jobs Posted</label>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="counter">
              <div class="counter-icon">
                <i class="flaticon-job-3"></i>
              </div>
              <div class="counter-content">
                <span class="timer mb-1 text-dark" data-to="240" data-speed="10000">240</span>
                <label class="mb-0">Companies</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
-->
<!--=================================
Action box & Counter -->

<!--=================================
Footer-->
<?php include "footer.php"; ?>
<!--=================================
Footer-->

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
    <script src="js/jquery.appear.js"></script>
    <script src="js/counter/jquery.countTo.js"></script>
    <script src="js/select2/select2.full.js"></script>


    <!-- Template Scripts (Do not remove)-->
    <script src="js/custom.js"></script>

</body>
</html>