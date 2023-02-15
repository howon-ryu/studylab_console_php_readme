<!DOCTYPE html>
<html lang="ko">
  <!--begin::Head-->
  <head>
    <base href="" />
    <?php
      require_once('media_header.php');
      require_once('head.php');
    ?>
    <meta charset="utf-8" />
    <meta name="description" content="학원관리 솔루션" />
    <meta name="keywords" content="겨울신록, 학원 CRM, 학원운영, 학원관리" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="ko_KR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="겨울신록 ADMIN" />
    <!-- <meta property="og:url" content="https://keenthemes.com/metronic" /> -->
    <meta property="og:site_name" content="겨울신록 ADMIN" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    
    <!-- <link rel="shortcut icon" href="assets/media/logos/favicon.ico" /> -->
    <!--begin::Fonts-->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used by this page)-->
    
    <!--end::Vendor Stylesheets-->
    
    <link
      href="assets/plugins/global/plugins.bundle.css"
      rel="stylesheet"
      type="text/css"
    />
    <link rel="stylesheet" href="assets/css/new_css/login.css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/layout.css" rel="stylesheet" type="text/css" />
    <!-- <link href="assets/css/login.css" rel="stylesheet" type="text/css" /> -->
    <!--end::Global Stylesheets Bundle-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/common.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
    
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body
    id="kt_app_body"
    data-kt-app-layout="dark-sidebar"
    data-kt-app-header-fixed="true"
    data-kt-app-sidebar-enabled="true"
    data-kt-app-sidebar-fixed="true"
    data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-header="true"
    data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true"
    data-kt-app-toolbar-enabled="true"
    class="app-default"
  >
  <div id="login_div" class="login_div">
      <div class="d-flex  flex-lg-row flex-column-fluid h-100">
        <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1 left_side">
          <div class="d-flex flex-center flex-column flex-lg-row-fluid ">
            <div class="w-lg-500px p-10">
              <form
                class="form w-100"
                method = "post"
                action = "login_check.php"
                noValidate
                id="kt_login_signin_form"
              >
              
                <!-- begin::Heading -->
                <div class="text-center mb-11">
                  <h1 class="text-dark fw-bolder mb-3">Sign In</h1>
                  <div class="text-gray-500 fw-semibold fs-6">
                    <!-- Your Social Campaigns -->
                  </div>
                </div>
                <!-- begin::Heading -->

                <!-- begin::Login options -->

                <!-- end::Login options -->

                <!-- begin::Separator -->

                <!-- end::Separator -->


                <!-- begin::Form group -->
                <div class="fv-row mb-8">
                  <label class="form-label fs-6 fw-bolder text-dark">
                    id
                  </label>
                  <br />
                  <input
                    placeholder="id"
                    class="form-control bg-transparent"
                    type="id"
                    name="loginId"
                    autoComplete="off"
                  />

                  <div class="fv-plugins-message-container">
                    <span role="alert"></span>
                  </div>
                </div>
                <!-- end::Form group -->

                <!-- begin::Form group -->
                <div class="fv-row mb-3">
                  <label class="form-label fw-bolder text-dark fs-6 mb-0">
                    Password
                  </label>
                  <br />
                  <input
                    type="password"
                    placeholder="password"
                    autoComplete="off"
                    name = "password"
                    class="form-control bg-transparent"
                  />

                  <div class="fv-plugins-message-container">
                    <div class="fv-help-block">
                      <span role="alert"></span>
                    </div>
                  </div>
                </div>
                <!-- end::Form group -->

                <!-- begin::Wrapper -->
                <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                    
                 
                <!-- end::Wrapper -->

                <!-- begin::Action -->
                <div class="d-grid mb-10">
                  <button
                    type="submit"
                    id="kt_sign_in_submit"
                    class="btn btn-primary continue_btn"
                  >
                  <span class="indicator-label" onclick="clearAllCookies()">Continue</span>
                    <!-- {!loading && (
                      <span class="indicator-label">Continue</span>
                    )}
                    {loading && (
                      <span
                        class="indicator-progress"
                        style={{ display: "block" }}
                      >
                        Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                      </span> -->
                    <!--)}-->
                  </button>
                </div>
                <!-- end::Action -->

                <!-- <div class="text-gray-500 text-center fw-semibold fs-6">
                  Not a Member yet?{" "}
                  <Link to="/registration" class="link-primary">
                    Sign up
                  </Link>
                </div> -->
              </form>
            </div>
          </div>
        </div>
        
      </div>
      <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2 right_side">
          <div class="d-flex flex-column flex-center py-15 px-5 px-md-15 w-100"></div>
      </div>
      <!-- <Link to="/main" hidden>
        <span ref={move}></span>
      </Link> -->
    </div>
  </body>


  <script>
    
    



$(document).ready(function(){
        function clearAllCookies(domain, path) {
          var doc = document,
              domain = domain || doc.domain,
              path = path || '/',
              cookies = doc.cookie.split(';'),
              now = +(new Date);
              console.log("dp",domain,path)
          for (var i = cookies.length - 1; i >= 0; i--) {
            doc.cookie = cookies[i].split('=')[0] + '=; expires=' + now + '; domain=' + domain + '; path=' + path;
          }
        }
        function deleteCookie(cookie_name) {
        document.cookie = cookie_name + '=; expires=Thu, 01 Jan 1999 00:00:10 GMT;';
        }
        deleteCookie("brandId");
        deleteCookie("ownerId");
        deleteCookie("branchId");
        deleteCookie("studentId");
        deleteCookie("managerId");
        deleteCookie("dayPlanId");
        deleteCookie("weeklyPlanId");
        deleteCookie("weeklyReportId");
      
      }
      
      )
    
    
  </script>





</html>