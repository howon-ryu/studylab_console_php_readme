<?php
require_once('header_session.php');
$roleId=$_SESSION['roleid'];
?>

<!DOCTYPE html>
<html lang="ko">
  <!--begin::Head-->
  <head>
  <link rel="stylesheet" href="../assets/css/new_css/common.css" />
  </head>
  <!--end::Head-->
  <body>
    <div
      id="kt_app_sidebar"
      class="app-sidebar flex-column"
      data-kt-drawer="true"
      data-kt-drawer-name="app-sidebar"
      data-kt-drawer-activate="{default: true, lg: false}"
      data-kt-drawer-overlay="true"
      data-kt-drawer-width="225px"
      data-kt-drawer-direction="start"
      data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle"
    >
      <!--begin::Logo-->
      <div class="header__navi_logo logo_css">
              <img
                alt="Logo"
                src="<?=$logo_img?>"
                class="h-25px app-sidebar-logo-default"
              /><span class="fw-normal fs-5 ver_txt">ADMIN</span>
            </div>
      <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo" hidden>
        <!--begin::Logo image-->
        <a href="../../demo1/dist/index.php">
          <img
            alt="Logo"
            src="assets/media/logos/default-dark.svg"
            class="h-25px app-sidebar-logo-default"
          />

          <img
            alt="Logo"
            src="assets/media/logos/default-small.svg"
            class="h-20px app-sidebar-logo-minimize"
          />
        </a>
        <!--end::Logo image-->
        <!--begin::Sidebar toggle-->
        <div
          id="kt_app_sidebar_toggle"
          class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
          data-kt-toggle="true"
          data-kt-toggle-state="active"
          data-kt-toggle-target="body"
          data-kt-toggle-name="app-sidebar-minimize"
        >
          <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
          <span class="svg-icon svg-icon-2 rotate-180">
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                opacity="0.5"
                d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                fill="currentColor"
              />
              <path
                d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                fill="currentColor"
              />
            </svg>
          </span>
          <!--end::Svg Icon-->
        </div>
        <!--end::Sidebar toggle-->
      </div>
      <!--end::Logo-->
      <!--begin::sidebar menu-->
      <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <!--begin::Menu wrapper-->
        <div
          id="kt_app_sidebar_menu_wrapper"
          class="app-sidebar-wrapper hover-scroll-overlay-y my-5"
          data-kt-scroll="true"
          data-kt-scroll-activate="true"
          data-kt-scroll-height="auto"
          data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
          data-kt-scroll-wrappers="#kt_app_sidebar_menu"
          data-kt-scroll-offset="5px"
          data-kt-scroll-save-state="true"
        >
          <!--begin::Menu-->
          <div
            class="menu menu-column menu-rounded menu-sub-indention px-3"
            id="#kt_app_sidebar_menu"
            data-kt-menu="true"
            data-kt-menu-expand="false"
          >
            <!--begin:Menu item-->
            <!-- <div
              data-kt-menu-trigger="click"
              class="menu-item here show menu-accordion"
            > -->
            <div
              data-kt-menu-trigger="click"
              class="menu-item menu-accordion"
              id ="menu-academy"
            >
              <!--begin:Menu link-->
              <span class="menu-link">
                <span class="menu-icon">
                  <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                  <span class="svg-icon svg-icon-2">
                    <svg
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z"
                        fill="currentColor"
                      ></path>
                      <path
                        opacity="0.3"
                        d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z"
                        fill="currentColor"
                      ></path>
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </span>
                <span class="menu-title">학원관리</span>
                <span class="menu-arrow"></span>
              </span>
              <!--end:Menu link-->
              <!--begin:Menu sub-->
              <div class="menu-sub menu-sub-accordion">
                <!--begin:Menu item-->
                <?php if($roleId == 1) : ?>
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link " href="office__head_office.php" id = "office__head_office" >
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">본사관리</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <?php endif; ?>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <?php if($roleId == 1 or $roleId == 2) : ?>
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link office__branch_office" href="office__branch_office.php" id = "office__branch_office">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">원장관리</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <?php endif; ?>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <?php if($roleId != 4) : ?>
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link " href="office__manage_office.php" id = "office__manage_office">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">매니저관리</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link " href="office__branch_info.php" id = "office__branch_info">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">지점관리</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <?php endif; ?>
                <!--end:Menu item-->
              </div>
              <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div
              data-kt-menu-trigger="click"
              class="menu-item menu-accordion"
              id ="menu-student"
            >
              <!--begin:Menu link-->
              <span class="menu-link">
                <span class="menu-icon">
                  <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                  <span class="svg-icon svg-icon-2">
                    <svg
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z"
                        fill="currentColor"
                      />
                      <path
                        opacity="0.3"
                        d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z"
                        fill="currentColor"
                      />
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </span>
                <span class="menu-title">학생관리</span>
                <span class="menu-arrow"></span>
              </span>
              <!--end:Menu link-->
              <!--begin:Menu sub-->
              <div class="menu-sub menu-sub-accordion">
                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a class="menu-link " href="student__manage_info.php" id = "student__manage_info">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">학생정보</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
              </div>
              <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div
              data-kt-menu-trigger="click"
              class="menu-item menu-accordion"
              id ="menu-study"
            >
              <!--begin:Menu link-->
              <span class="menu-link">
                <span class="menu-icon">
                  <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                  <span class="svg-icon svg-icon-2">
                    <svg
                      width="24"
                      height="25"
                      viewBox="0 0 24 25"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        opacity="0.3"
                        d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z"
                        fill="currentColor"
                      ></path>
                      <path
                        d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z"
                        fill="currentColor"
                      ></path>
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </span>
                <span class="menu-title">학습관리</span>
                <span class="menu-arrow"></span>
              </span>
              <!--end:Menu link-->
              <!--begin:Menu sub-->
              <div class="menu-sub menu-sub-accordion">


              <div class="menu-item">
                  <!--begin:Menu link-->
                  <a
                    class="menu-link "
                    href="study_day_plan.php"
                    id = "study_day_plan"
                  >
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">지점학습현황</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a
                    class="menu-link study_weekly_plan"
                    href="study_weekly_plan.php"
                    id = "study_weekly_plan"
                  >
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">학생학습계획</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a
                    class="menu-link "
                    href="study_weekly_report.php"
                    id = "study_weekly_report"
                  >
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">학생학습이력</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
              </div>
              <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div
              data-kt-menu-trigger="click"
              class="menu-item menu-accordion"
              hidden
            >
              <!--begin:Menu link-->
              <span class="menu-link">
                <span class="menu-icon">
                  <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                  <span class="svg-icon svg-icon-2">
                    <svg
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z"
                        fill="currentColor"
                      ></path>
                      <path
                        opacity="0.3"
                        d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z"
                        fill="currentColor"
                      ></path>
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </span>
                <span class="menu-title">운영 관리</span>
                <span class="menu-arrow"></span>
              </span>
              <!--end:Menu link-->
              <!--begin:Menu sub-->
              <div class="menu-sub menu-sub-accordion">
                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a
                    class="menu-link"
                    href="../../demo1/dist/account/overview.php"
                  >
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">메뉴 관리</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a
                    class="menu-link"
                    href="../../demo1/dist/account/settings.php"
                  >
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">권한 관리</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                  <!--begin:Menu link-->
                  <a
                    class="menu-link"
                    href="../../demo1/dist/account/security.php"
                  >
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">코드 관리</span>
                  </a>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
              </div>
              <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->
          </div>
          <!--end::Menu-->
        </div>
        <!--end::Menu wrapper-->
      </div>
      <!--end::sidebar menu-->
      <!--begin::Footer-->
      <div
        class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6"
        id="kt_app_sidebar_footer"
      >
        <a
          href="https://preview.keenthemes.com/html/metronic/docs"
          class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100"
          data-bs-toggle="tooltip"
          data-bs-trigger="hover"
          data-bs-dismiss-="click"
          title="200+ in-house components and 3rd-party plugins"
        >
          <span class="btn-label">겨울신록 학습관</span>
          <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
          <span class="svg-icon svg-icon-2 ms-2">
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                opacity="0.3"
                d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z"
                fill="currentColor"
              ></path>
              <rect
                x="21.9497"
                y="3.46448"
                width="13"
                height="2"
                rx="1"
                transform="rotate(135 21.9497 3.46448)"
                fill="currentColor"
              ></rect>
              <path
                d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z"
                fill="currentColor"
              ></path>
            </svg>
          </span>
          <!--end::Svg Icon-->
        </a>
      </div>
      <!--end::Footer-->
    </div>
    <script>
      var defaultThemeMode = "light";
      var themeMode;
      if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-theme-mode")) {
          themeMode = document.documentElement.getAttribute("data-theme-mode");
        } else {
          if (localStorage.getItem("data-theme") !== null) {
            themeMode = localStorage.getItem("data-theme");
          } else {
            themeMode = defaultThemeMode;
          }
        }
        if (themeMode === "system") {
          themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches
            ? "dark"
            : "light";
        }
        document.documentElement.setAttribute("data-theme", themeMode);
      }
    </script>
      <!--begin::Javascript-->
    <script>
      var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--end::Javascript-->
  </body>
</html>