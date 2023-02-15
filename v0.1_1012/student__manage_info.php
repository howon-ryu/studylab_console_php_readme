<?php
  require_once('media_header.php');



  session_start();
  // 세션에 있는 정보 가져오기
  $roleId = $_SESSION['roleid'];
  
  if($_SESSION['brand_id']!=null){
    $brandId = $_SESSION['brand_id'];
  }else{
    $brandId = 0;
  }
  
  $today = date("Y-m-d");
  if($_SESSION['ownerId']!=null){
    
    $ownerId = $_SESSION['ownerId'];
    error_log("oi:$ownerId");
  }else{
    if(!isset($_SESSION['targetUserId'])){
      $ownerId = 0;
      
    }else{
      $ownerId = $_SESSION['targetUserId'];
    }
  }
  
  if(!isset($_SESSION['managerId'])){
    $managerId = 0;
    
  }else{
    $managerId = $_SESSION['managerId'];
  }
  if(!isset($_SESSION['branchId'])){
    $branchId = 0;
    
  }else{
    $branchId = $_SESSION['branchId'];
  }
?>

<!DOCTYPE html>
<html lang="ko">
  <!--begin::Head-->
  <head>
    <base href="" />
    
    <meta charset="utf-8" />
    <meta name="description" content="학원관리 솔루션" />`
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
    <link rel="stylesheet" href="assets/css/new_css/common.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used by this page)-->
    <link
      href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/plugins/custom/datatables/datatables.bundle.css"
      rel="stylesheet"
      type="text/css"
    />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link
      href="assets/plugins/global/plugins.bundle.css"
      rel="stylesheet"
      type="text/css"
    />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/layout.css" rel="stylesheet" type="text/css" />
    <?php
      require_once('head.php');
    ?>
    <!--end::Global Stylesheets Bundle-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/common.js"></script>
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
    <!--begin::Theme mode setup on page load-->
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
    <!--end::Theme mode setup on page load-->
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
      <!--begin::Page-->
      <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        <!--begin::Header-->
        <?php require_once('header.php')?>
        <!--end::Header-->
        <!--begin::Wrapper-->
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
          <!--begin::Sidebar-->
          <?php require_once('sidebar.php')?>
          <!--end::Sidebar-->
          <!--begin::Main-->
          <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">
              <!--begin::Toolbar-->
              <div id="spot_heado_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div
                  id="spot_heado_container"
                  class="app-container d-flex flex-stack"
                >
                  <!--begin::Page title-->
                  <div
                    class="page-title d-flex flex-column justify-content-center flex-wrap me-3"
                  >
                    <!--begin::Title-->
                    <h1
                      class="page-heading d-flex text-dark fw-bold fs-2 flex-column justify-content-center my-0"
                    >
                      학생정보
                    </h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul
                      class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1"
                    >
                      <!--begin::Item-->
                      <li class="breadcrumb-item text-muted">
                        <a
                          href="#"
                          class="text-muted text-hover-primary"
                          >학생관리</a
                        >
                      </li>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                      </li>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <li class="breadcrumb-item text-muted">학생정보</li>
                      <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                  </div>
                  <!--end::Page title-->
                </div>
                <!--end::Toolbar container-->
              </div>
              <!--end::Toolbar-->
              <!--begin::Content-->
              <div
                id="kt_app_content"
                class="app-content flex-column-fluid std_manage_info_content"
              >
                <div
                  id="kt_app_content_container"
                  class="app-container"
                >
                  <!--begin::Row-->
                  <div class="row gy-5 g-xl-10">
                    <!--begin::Col-->
                    <div class="col-xl-12 col-xxl-4">
                      <!--begin::Row-->
                      <div class="row gy-5 g-xl-10">
                        <!--begin::Col-->
                        <div class="col-md-6 col-xl-12 mb-xl-10">
                          <!--begin::List widget 3-->
                          <div class="card card-flush h-xl-100 card__left">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5 card_l_h">
                              <!--begin::Tab nav-->
                              <ul class="nav mb-2 mb-sm-0 card__left_tab">
                              <li class = "arrayFilter">
                                <div class="card-toolbar">
                                <!--begin::Menu-->
                                
                                <button
                                  type="button"
                                  class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                  data-kt-menu-trigger="click"
                                  data-kt-menu-placement="bottom-end"
                                  id = "studentFilter"
                                  
                                >
                                  <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                  <span class="svg-icon svg-icon-2">
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24px"
                                      height="24px"
                                      viewBox="0 0 24 24"
                                    >
                                      <g
                                        stroke="none"
                                        stroke-width="1"
                                        fill="none"
                                        fill-rule="evenodd"
                                      >
                                        <rect
                                          x="5"
                                          y="5"
                                          width="5"
                                          height="5"
                                          rx="1"
                                          fill="currentColor"
                                        />
                                        <rect
                                          x="14"
                                          y="5"
                                          width="5"
                                          height="5"
                                          rx="1"
                                          fill="currentColor"
                                          opacity="0.3"
                                        />
                                        <rect
                                          x="5"
                                          y="14"
                                          width="5"
                                          height="5"
                                          rx="1"
                                          fill="currentColor"
                                          opacity="0.3"
                                        />
                                        <rect
                                          x="14"
                                          y="14"
                                          width="5"
                                          height="5"
                                          rx="1"
                                          fill="currentColor"
                                          opacity="0.3"
                                        />
                                      </g>
                                    </svg>
                                  </span>
                                  <!--end::Svg Icon-->
                                </button>
                                
                                <!--begin::Menu 1-->
                                <div
                                  class="menu menu-sub menu-sub-dropdown w-250px w-md-300px"
                                  data-kt-menu="true"
                                  id="kt_menu_631f0553006ad"
                                >
                                
                                  <!--begin::Header-->
                                  <div class="px-7 py-5">
                                    <div class="fs-5 text-dark fw-bold">
                                      필터 옵션
                                    </div>
                                  </div>
                                  <!--end::Header-->
                                  <!--begin::Menu separator-->
                                  <div class="separator border-gray-200"></div>
                                  <!--end::Menu separator-->
                                  <!--begin::Form-->
                                  <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                      <!--begin::Input-->
                                      <div class = "infilter_nonestatus">
                                        <span>본사명</span>
                                        <select
                                          id = "InFilterBrand"
                                          class="form-select form-select-solid mb-4"
                                          data-kt-select2="true"
                                          data-placeholder="본사 선택"
                                          data-dropdown-parent="#kt_menu_631f0553006ad"
                                          data-allow-clear="true"
                                          onchange = "handleOnChangeBrand(this)"
                                        >
                                          <!-- <option></option>
                                          <option value="1">
                                            동백점
                                          </option>
                                          <option value="2">
                                            코스모스점
                                          </option>
                                          <option value="3">
                                            벚꽃점
                                          </option> -->
                                        </select>
                                      </div>
                                      <!--end::Input-->
                                      <!--begin::Input-->
                                      <div class = "infilter_nonestatus">
                                      <span>지점명</span>
                                        <select
                                          id = "InFilterBranch"
                                          class="form-select form-select-solid mb-4"
                                          data-kt-select2="true"
                                          data-placeholder="지점 선택"
                                          data-dropdown-parent="#kt_menu_631f0553006ad"
                                          data-allow-clear="true"
                                          onchange = "handleOnChangeBranch(this)"
                                          disabled
                                        >
                                         
                                        </select>
                                      </div>


                                      
                                     
                                      

                                      <!--end::Input-->
                                      <!--begin::Input-->
                                      <div class = "infilter_nonestatus">
                                      <span>학습관</span>
                                        <select
                                          id = "InFilterRoom"
                                          class="form-select form-select-solid mb-4"
                                          data-kt-select2="true"
                                          data-placeholder="학습실 선택"
                                          data-dropdown-parent="#kt_menu_631f0553006ad"
                                          data-allow-clear="true"
                                          disabled
                                        >
                                        
                                        </select>
                                      </div>
                                      <!--end::Input-->
                                      <!--begin::Input-->
                                      <div class = "infilter_nonestatus">
                                      <span>관리그룹</span>
                                        <select
                                          id = "InFilterGroup"
                                          class="form-select form-select-solid mb-4"
                                          data-kt-select2="true"
                                          data-placeholder="관리그룹 선택"
                                          data-dropdown-parent="#kt_menu_631f0553006ad"
                                          data-allow-clear="true"
                                          disabled
                                        >
                                      
                                        </select>
                                      </div>
                                      <div>
                                        <span>상태</span>
                                        <select   
                                          class="form-select form-select-solid"
                                          data-kt-select2="true"
                                          data-placeholder="학생 상태 선택"
                                          data-dropdown-parent="#kt_menu_631f0553006ad"
                                          data-allow-clear="true"
                                          name = "InFilterStatus"
                                        >
                                          <option></option>
                                          <option value="1" selected>
                                            사용중인 학생
                                          </option>
                                          <option value="2">
                                            대기중인 학생
                                          </option>
                                          <option value="3">
                                            삭제된 학생
                                          </option>
                                        </select>
                                      </div>
                                      <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                      <button
                                        type="reset"
                                        class="btn btn-sm btn-light btn-active-light-primary me-2"
                                        onclick="resetClick()"
                                      >
                                      
                                        리셋
                                      </button>
                                      <button
                                        type="submit"
                                        class="btn btn-sm btn-primary"
                                        data-kt-menu-dismiss="true"
                                        onclick="filterClick()"
                                      >
                                        적용
                                      </button>
                                    </div>
                                    <!--end::Actions-->
                                  </div>
                                
                                  <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Menu-->
                              </div>
                              </li>
                                <li class="nav-item m-0">
                                  <a
                                    id = "add_student"
                                    class="btn btn-sm btn-icon btn-bg-light btn-primary me-4"
                                    data-bs-toggle="tab"
                                    href="#kt_project_users_table_pane"
                                  >
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                    <span class="svg-icon svg-icon-2">
                                      <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <rect
                                          opacity="0.5"
                                          x="11.364"
                                          y="20.364"
                                          width="16"
                                          height="2"
                                          rx="1"
                                          transform="rotate(-90 11.364 20.364)"
                                          fill="currentColor"
                                        ></rect>
                                        <rect
                                          x="4.36396"
                                          y="11.364"
                                          width="16"
                                          height="2"
                                          rx="1"
                                          fill="currentColor"
                                        ></rect>
                                      </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                  </a>
                                </li>
                                
                              </ul>
                              <!--end::Tab nav-->

                              
                            </div>
                            <!--end::Header-->
                            <!--begin::Search-->
                            <div
                              class="d-flex align-items-center position-relative my-1 card_l_h_sch"
                              hidden
                            >
                              <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                              <span
                                class="svg-icon svg-icon-3 position-absolute ms-3"
                                hidden
                              >
                                <svg
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <rect
                                    opacity="0.5"
                                    x="17.0365"
                                    y="15.1223"
                                    width="8.15546"
                                    height="2"
                                    rx="1"
                                    transform="rotate(45 17.0365 15.1223)"
                                    fill="currentColor"
                                  />
                                  <path
                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                    fill="currentColor"
                                  />
                                </svg>
                              </span>
                              <!--end::Svg Icon-->
                              <input
                                type="text"
                                id="kt_filter_search"
                                class="form-control form-control-solid border-body w-100px ps-14 input__slim"
                                placeholder="Search"
                                hidden
                              />
                            </div>
                            <!--end::Search-->
                            <!--begin::Body-->
                            <div class="card-body py-3">
                              <!--begin::Table container-->
                              <div class="table-responsive">
                                <!--begin::Table-->
                                <table
                                  id="kt_ecommerce_edit_order_product_table"
                                  class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold admin_left_table"
                                >
                                  <!--begin::Head-->
                                  <thead
                                    class="fs-7 text-gray-400 text-uppercase"
                                  >
                                    <tr class="fw-bold text-muted">
                                      <th class="ps-4 min-w-25px"  data-orderable="false">NO.</th>
                                      <th class="min-w-25px n_empty"></th>
                                      <th class="min-w-70px">지점명</th>
                                      <th class="min-w-100px">학생명/학교/학년</th>
                                      <th class="min-w-50px text-end">상태</th>
                                    </tr>
                                  </thead>
                                  <!--end::Head-->
                                  <!--begin::Body-->
                                  <tbody class="fs-6" id="studentsList">
                                  
                                    
                                  </tbody>
                                  <!--end::Body-->
                                  
                                </table>
                                <!--end::Table-->
                                
                              </div>
                              <!--end::Table container-->
                              
                            </div>
                            
                            <!--end::Body-->
                          </div>
                          <!--end::List widget 3-->
                        </div>
                        <!--end::Col-->
                      </div>
                      <!--end::Row-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-12 col-xxl-8 mb-5 mb-xl-10 card__right_wrap">
                      <!--begin::Table Widget 3-->
                      <div class="card card-flush h-xl-100 card__right">
                        <!--begin::Card header-->
                        <div class="card-header py-7">
                          <!--begin::Tabs-->
                          <div
                            class="card-title mb-0 gap-4 gap-lg-8 gap-xl-10 nav nav-tabs border-bottom-0"
                            data-kt-table-widget-3="tabs_nav"
                          >
                            <!--begin::Tab item-->
                            <div
                              class="fs-4 fw-bold pb-3 border-3 border-primary cursor-pointer right__tab_btn right__tab01_btn on"
                              data-kt-table-widget-3="tab"
                              data-kt-table-widget-3-value="Show All"
                            >
                              상세정보 
                            </div>
                            <!--end::Tab item-->
                            <!--begin::Tab item-->
                            <div class="fs-4 fw-bold text-muted pb-3 cursor-pointer right__tab_btn right__tab02_btn on" data-kt-table-widget-3="tab" data-kt-table-widget-3-value="Pending" hidden>학부모정보</div>
                            <!--end::Tab item-->
                          </div>
                          <!--end::Tabs-->
                        </div>
                        <!--end::Card header-->
                        <div class="card-body pt-1 card_right_body right__tab_con right__tab01_con on">
                          <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row ">
                              <!--begin::Label-->
                              <label class="required fs-5 fw-semibold mb-2"
                                >본사명</label
                              >
                              <!--end::Label-->
                              <!--begin::Input-->
                              <!-- <input
                                type="text"
                                class="form-control"
                                value=""
                                name="brandName"
                                id = "brandName"
                              /> -->
<!--                               
                              <select
                              name="position"
                              id="brand"
                              data-control="select2"
                              
                              class="form-select form-select-solid"
                              >
                            </select> -->
                            <select
                              name="position"
                              id="brand"
                              data-control="select2"
                              data-placeholder="본사를 선택해주세요"
                              class="form-select form-select-solid"
                              onchange = "handleOnChangeBrand(this)"
                            >
                            <option value="">Select a position...</option>
                            </select>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                              <!--end::Label-->
                              <label class="required fs-5 fw-semibold mb-2"
                                >지점명</label
                              >
                              <!--end::Label-->
                              <!--end::Input-->
                              <!-- <input
                                type="text"
                                class="form-control"
                                value=""
                                name="branchName"
                                id = "branchName"
                              /> -->
                              <select
                              name="position"
                              id="branch"
                              data-control="select2"
                              data-placeholder="지점을 선택해주세요"
                              class="form-select form-select-solid"
                              onchange = "handleOnChangeBranch(this)"
                            >
                            </select>
                              <!--end::Input-->
                            </div>
                            <!--end::Col-->
                          </div>
                          <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                              <!--begin::Label-->
                              <label class="required fs-5 fw-semibold mb-2"
                                >학생명</label
                              >
                              <!--end::Label-->
                              <!--begin::Input-->
                              <input
                                type="text"
                                class="form-control"
                                value=""
                                name="realName"
                                id = "realName"
                              />
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                              <!--end::Label-->
                              <label class="required fs-5 fw-semibold mb-2"
                                >아이디</label
                              >
                              <!--end::Label-->
                              <!--end::Input-->
                              <input
                                type="text"
                                class="form-control "
                                value=""
                                name="userName"
                                id = "userName"
                              />
                              <!--end::Input-->
                            </div>
                            <!--end::Col-->
                          </div>
                          <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                              <!--begin::Label-->
                              <label class="required fs-5 fw-semibold mb-2"
                                >비밀번호</label
                              >
                              <!--end::Label-->
                              <!--begin::Input-->
                              <input
                                type="password"
                                id="password"
                                name="password"
                                class="form-control"
                                value=""
                                
                              />
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                              <!--end::Label-->
                              <label class="required fs-5 fw-semibold mb-2"
                                >비밀번호 확인</label
                              >
                              <!--end::Label-->
                              <!--end::Input-->
                              <input
                                type="password"
                                class="form-control"
                                placeholder=""
                                name=""
                                id="passwordC"
                                name="passwordC"
                              />
                              <!--end::Input-->
                            </div>
                            <!--end::Col-->
                          </div>
                          <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                              <!--begin::Label-->
                              <label class="fs-5 fw-semibold mb-2"
                                >전화번호</label
                              >
                              <!--end::Label-->
                              <!--begin::Input-->
                              <input
                                type="text"
                                class="form-control "
                                name="phone"
                                id="phone"
                              />
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                              <!--end::Label-->
                              <label class="fs-5 fw-semibold mb-2"
                                >이메일</label
                              >
                              <!--end::Label-->
                              <!--end::Input-->
                              <input
                                type="text"
                                class="form-control "
                                name="email"
                                id = "email"
                              />
                              <!--end::Input-->
                            </div>
                            <!--end::Col-->
                          </div>
                          <div class="row mb-5 ">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row input_50">
                              <!--begin::Label-->
                              <label class="required fs-5 fw-semibold mb-2"
                                >주소</label
                              >
                              <!--end::Label-->
                              <!--begin::Input-->
                              <input
                                type="text"
                                class="form-control input_75"
                                placeholder=""
                                name="address"
                                id= "address"
                                
                              />
                              
                              <button
                                type="button"
                                onclick="findAddress()"
                                class="btn btn-primary addressbtn"
                              >
                                주소 찾기
                              </button>
                              <!--end::Input-->
                            </div>
                            <div class="col-md-6 fv-row">
                              <!--end::Label-->
                              <label class="fs-5 fw-semibold mb-2"
                                >상세주소</label
                              >
                              <!--end::Label-->
                              <!--end::Input-->
                              <input
                                type="text"
                                class="form-control "
                                name="detailAddress"
                                id = "detailAddress"
                              />
                              <!--end::Input-->
                            </div>
                            
                            <!--end::Col-->
                            <!--begin::Col-->
                            
                            <!--end::Col-->
                          </div>
                          <div class="row mb-5 ">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                              <!--begin::Label-->
                              <label class="fs-5 fw-semibold mb-2"
                                >학교</label
                              >
                              <!--end::Label-->
                              <!--begin::Input-->
                              <input
                                type="text"
                                class="form-control "
                                value=""
                                name="school"
                                id="school"
                              />
                            </div>
                            <div class="col-md-6 fv-row ">
                              <!--begin::Label-->
                              <label class="required fs-5 fw-semibold mb-2"
                                >학년</label
                              >
                              <!--end::Label-->
                              <!--begin::Input-->

                              <select
                                
                                id = "grade"
                                name="position"                               
                                data-control="select2"
                                data-placeholder="Select a grade..."
                                class="form-select form-select-solid form_color"
                              >

                                  <option value="중1">중1</option>
                                  <option value="중2">중2</option>
                                  <option value="중3">중3</option>
                                  <option value="고1">고1</option>
                                  <option value="고2">고2</option>

                                  <option value="고3">고3</option>
                                  
                                  <option value="재수">재수</option>
                                  <option value="삼수">삼수</option>
                                  <option value="사수">사수</option>
                                  <option value="n수">n수</option>
                                  <option value="공시">공시</option>
                                  <option value="기타">기타</option>
                              </select>
                              
                              
                            
                              <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            
                            <!--end::Col-->
                          </div>
                          <div class="row mb-5 ">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                              <!--begin::Label-->
                              <label class="fs-5 fw-semibold mb-2"
                                >학습실</label
                              >
                              <select
                                
                                id = "room"
                                name="position"
                                
                                data-control="select2"
                                data-placeholder="학습실을 선택해주세요"
                                class="form-select form-select-solid form_color"
                              >
                              </select>
                              <!--end::Label-->
                              <!--begin::Input-->
                              
                            </div>
                            <div class="col-md-6 fv-row ">
                              <!--begin::Label-->
                              <label class="required fs-5 fw-semibold mb-2"
                                >좌석번호</label
                              >
                              <input
                                type="text"
                                class="form-control "
                                value=""
                                name="seatNumber"
                                id="seatNumber"

                              />
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            
                            <!--end::Col-->
                          </div>
                          <div class="row mb-5 ">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row ">
                              <!--begin::Label-->
                              <label class="fs-5 fw-semibold mb-2"
                                >관리그룹</label
                              >
                              <select
                                
                                id = "group"
                                name="position"
                                
                                data-control="select2"
                                data-placeholder="관리그룹을 선택해주세요"
                                class="form-select form-select-solid form_color"
                              >
                              </select>
                              <!--end::Label-->
                              <!--begin::Input-->
                              
                            </div>
                            
                            <!--end::Col-->
                            <!--begin::Col-->
                            
                            <!--end::Col-->
                          </div>
                          <div class="col-md-4 fv-row">
                            <label class="fs-5 fw-semibold mb-2">상태</label>

                            <div class="d-flex check__use_wrap">
                              <div class="form-check form-check-custom form-check-solid me-5 ">
                                <input
                                  class="form-check-input check__use_input"
                                  type="radio"
                                  value="사용"
                                  name="choice_use"
                                  id = "status_active"
                                  
                                />
                                <label class="form-check-label">사용</label>
                              </div>
                              <div class="form-check form-check-custom form-check-solid me-5 ">
                                <input
                                  class="form-check-input check__hold_input"
                                  type="radio"
                                  value="대기"
                                  name="choice_use"
                                  id = "status_stop"
                                />
                                <label class="form-check-label">대기</label>
                              </div>
                              <div class="form-check form-check-custom form-check-solid  use">
                                <input
                                  class="form-check-input check__delet_input"
                                  type="radio"
                                  value="삭제"
                                  name="choice_use"
                                  id = "status_delete"
                                />
                                <label class="form-check-label">삭제</label>
                              </div>
                            </div>
                          </div>
                        <div>












                        <!--begin::Card body-->
                        <div class="card-body pt-1 card_right_body right__tab_con right__tab02_con " hidden>
                          <!--begin::bt__tab02_table group-->
                          <div class="right__tab02_table tab02 mb-20">
                            <!--begin::Select-->
                            <select
                              name="status"
                              data-control="select2"
                              data-hide-search="true"
                              data-placeholder="Filter"
                              class="form-select form-select-solid form-select-sm fw-bold w-100px"
                            >
                              <option value="1" selected="selected">
                                사용중인 학부모
                              </option>
                              <option value="2">대기중인 학부모</option>
                              <option value="3">삭제된 학부모</option>
                            </select>
                            <!--end::Select-->
                            <!--begin::Table-->
                            <table
                                class="table align-middle table-row-dashed fs-6 gy-5"
                                id="kt_ecommerce_edit_order_product_table"
                              >
                                <!--begin::Table head-->
                                <thead class="text-gray-400">
                                  <tr
                                    class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0"
                                  >
                                    <th class="min-w-25px"></th>
                                    <th class="min-w-70px">학부모명</th>
                                    <th class="min-w-50px">관계</th>
                                    <th class="min-w-125px">학부모 연락처</th>
                                    <th class="min-w-50px">대표부모</th>
                                    <th class="min-w-100px">최초 입력</th>
                                    <th class="min-w-40px pe-5 text-end">
                                      사용여부
                                    </th>
                                  </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="fw-semibold text-gray-600">
                                  <!--begin::Table row-->
                                  <tr>
                                    <td>
                                      <div
                                        class="form-check form-check-sm form-check-custom form-check-solid"
                                      >
                                        <span
                                          class="text-gray-600 text-hover-primary ms-4"
                                          >1</span
                                        >
                                      </div>
                                    </td>
                                    <td data-order="Invalid date">김엄마</td>
                                    <td data-order="Invalid date">엄마</td>
                                    <td data-order="Invalid date">
                                      010-1234-4567
                                    </td>
                                    <td data-order="Invalid date t__center">
                                      <input
                                        class="form-check-input widget-13-check"
                                        type="checkbox"
                                        value="1"
                                        checked
                                        disabled
                                      />
                                    </td>
                                    <td data-order="Invalid date">
                                      2022-08-14
                                    </td>
                                    <td class="text-muted fw-semibold text-end">
                                      <span class="badge badge-light-success"
                                        >사용</span
                                      >
                                    </td>
                                  </tr>
                                  <!--end::Table row-->
                                  <!--begin::Table row-->
                                  <tr>
                                    <td>
                                      <div
                                        class="form-check form-check-sm form-check-custom form-check-solid"
                                      >
                                        <span
                                          class="text-gray-600 text-hover-primary ms-4"
                                          >2</span
                                        >
                                      </div>
                                    </td>
                                    <td data-order="Invalid date">홍아빠</td>
                                    <td data-order="Invalid date">아빠</td>
                                    <td data-order="Invalid date">
                                      010-1234-4567
                                    </td>
                                    <td data-order="Invalid date t__center">
                                      <input
                                        class="form-check-input widget-13-check"
                                        type="checkbox"
                                        value="1"
                                        checked
                                        disabled
                                      />
                                    </td>
                                    <td data-order="Invalid date">
                                      2022-08-14
                                    </td>
                                    <td class="text-muted fw-semibold text-end">
                                      <span class="badge badge-light-warning"
                                        >대기</span
                                      >
                                    </td>
                                  </tr>
                                  <!--end::Table row-->
                                </tbody>
                                <!--end::Table body-->
                              </table>
                            <!--end::Table-->
                          </div>
                          <!--end::bt__tab02_table group-->

                          
                          <!--begin::Input group-->
                          <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                              <!--begin::Label-->
                              <label class="required fs-5 fw-semibold mb-2"
                                >학부모명</label
                              >
                              <!--end::Label-->
                              <!--begin::Input-->
                              <input type="text" class="form-control" value="김엄마" name="">
                              <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                              <!--begin::Label-->
                              <label class="fs-5 fw-semibold mb-2"
                                >관계</label
                              >
                              <!--end::Label-->
                              <!--begin::Select-->
                              <select
                              name="position"
                              data-control="select2"
                              data-placeholder="Select a position..."
                              class="form-select form-select-solid"
                              >
                                <option value="Web Developer">
                                  엄마
                                </option>
                                <option value="Web Designer">아빠</option>
                                <option value="Art Director">형제/자매</option>
                                <option value="Finance Manager">
                                  기타
                                </option>
                              </select>
                              <!--end::Select-->
                            </div>
                            <!--end::Col-->
                          </div>
                          <!--end::Input group-->
                          <!--begin::Input group-->
                          <div class="row mb-5 row__line">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                              <!--begin::Label-->
                              <label class="required fs-5 fw-semibold mb-2"
                                >연락처</label
                              >
                              <!--end::Label-->
                              <!--begin::Input-->
                              <input type="text" class="form-control" value="010-1234-5678" name="">
                              <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                              <!--begin::Label-->
                              <label class="fs-5 fw-semibold mb-2"
                                >대표부모</label
                              >
                              <!--end::Label-->
                              <div class="d-flex align-items-center check_box_input">
                                <!--begin::Select-->
                                <input class="form-check-input widget-13-check me-4" type="checkbox" value="1" checked="">
                                <span>대표부모</span>
                                <!--end::Select-->
                              </div>  
                            </div>
                            <!--end::Col-->
                          </div>
                          <!--end::Input group-->
                          <!--begin::Input group-->
                          <!--begin::Col-->
                          <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-4 fv-row">
                              <!--begin::Label-->
                              <label class="fs-5 fw-semibold mb-2"
                                >최종 수정자 ID</label
                              >
                              <!--end::Label-->
                              <!--begin::Input-->
                              <input
                                type="text"
                                class="form-control form-control-solid"
                                value="wintergreen"
                                name=""
                                readonly
                              />
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-4 fv-row">
                              <!--end::Label-->
                              <label class="fs-5 fw-semibold mb-2"
                                >최종 수정 일시</label
                              >
                              <!--end::Label-->
                              <!--end::Input-->
                              <input
                                type="date"
                                class="form-control form-control-solid"
                                value="2019-09-22"
                                name=""
                                readonly
                              />
                              <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-4 fv-row">
                              <!--begin::Label-->
                              <label class="fs-5 fw-semibold mb-2">사용</label>
                              <!--end::Label-->
                              <!--begin::Input-->
                              <div class="d-flex check__use_wrap">
                                  <!--begin::Radio-->
                                  <div
                                    class="form-check form-check-custom form-check-solid me-5 check__use"
                                  >
                                    <input
                                      class="form-check-input check__use_input"
                                      type="radio"
                                      value=""
                                      name="choice_use"
                                      id="product_tax_yes"
                                      checked="checked"
                                    />
                                    <label
                                      class="form-check-label"
                                      for="product_tax_yes"
                                      >사용</label
                                    >
                                  </div>
                                  <div
                                    class="form-check form-check-custom form-check-solid me-5 check__hold"
                                  >
                                    <input
                                      class="form-check-input check__hold_input"
                                      type="radio"
                                      value=""
                                      name="choice_use"
                                    />
                                    <label
                                      class="form-check-label"
                                      for="product_tax_no"
                                      >대기</label
                                    >
                                  </div>
                                  <div
                                    class="form-check form-check-custom form-check-solid check__delet"
                                  >
                                    <input
                                      class="form-check-input check__delet_input"
                                      type="radio"
                                      value=""
                                      name="choice_use"
                                    />
                                    <label
                                      class="form-check-label"
                                      for="product_tax_no"
                                      >삭제</label
                                    >
                                  </div>
                                  <!--end::Radio-->
                                </div>
                            </div>
                            <!--end::Col-->
                          </div>
                          <!--end::Col-->
                        </div>
                        <!--end::Card body-->
                        <!--begin::Card footer-->
                        <div class="card-footer d-flex justify-content-end py-6">
                          <button type="reset" class="btn btn-light btn-active-light-primary me-2">취소</button>
                          
                          <button id="submit" class="btn btn-primary">변경사항 저장</button>
                          
                        </div>
                        <!--end::Card footer-->
                      </div>
                    </div>
                    <!--end::Table Widget 3-->
                    </div>
                    <!--end::Col-->
                  </div>
                  <!--end::Row-->
                </div>
              </div>
              <!--end::Content-->
            </div>
            <!--end::Content wrapper-->
            <!--begin::Footer-->
            <div id="kt_app_footer" class="app-footer">
              <!--begin::Footer container-->
              <div
                class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3"
              >
                <!--begin::Copyright-->
                <div class="text-dark order-2 order-md-1">
                  <span class="text-muted fw-semibold me-1">2022&copy;</span>
                  <a
                    href="#"
                    target="_blank"
                    class="text-gray-800 text-hover-primary"
                    >Keenthemes</a
                  >
                </div>
                <!--end::Copyright-->
                <!--begin::Menu-->
                <ul
                  class="menu menu-gray-600 menu-hover-primary fw-semibold order-1"
                >
                  <li class="menu-item">
                    <a href="#" target="_blank" class="menu-link px-2">About</a>
                  </li>
                  <li class="menu-item">
                    <a href="#" target="_blank" class="menu-link px-2"
                      >Support</a
                    >
                  </li>
                  <li class="menu-item">
                    <a href="#" target="_blank" class="menu-link px-2"
                      >Purchase</a
                    >
                  </li>
                </ul>
                <!--end::Menu-->
              </div>
              <!--end::Footer container-->
            </div>
            <!--end::Footer-->
          </div>
          <!--end:::Main-->
        </div>
        <!--end::Wrapper-->
      </div>
      <!--end::Page-->
    </div>
    <!--end::App-->
    <!--begin::Engage drawers-->
    <!--end::Engage drawers-->

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
      <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
      <span class="svg-icon">
        <svg
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <rect
            opacity="0.5"
            x="13"
            y="6"
            width="13"
            height="2"
            rx="1"
            transform="rotate(90 13 6)"
            fill="currentColor"
          />
          <path
            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
            fill="currentColor"
          />
        </svg>
      </span>
      <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->

    <!--begin::Javascript-->
    <script>

      let studentList;
      let studentId = 0;
      let obj_arr =[]
      let tempBranchList = []
      // data_t 를 위한  변수 -start
      var brandId = ""
      var branchId = ""
      var ownerId = ""
      var managerId = ""
      var roomId = ""
      var groupId = ""
      let getStudentIdNone =1

      if(<?=$brandId?>!=0){
        brandId = <?=$brandId?>;
      }else{
        brandId = ""
      }
      if(<?=$ownerId?>!=0){
        ownerId = <?=$ownerId?>
      }else{
        ownerId = ""
      }
      if(<?=$managerId?>!=0){
        managerId = <?=$managerId?>
      }else{
        managerId = ""
      }
      if(<?=$branchId?>!=0){
        branchId = <?=$branchId?>
      }else{
        branchId = ""
      }
      // data_t 를 위한  변수 -end


      $(document).ready(function(){
        // 원장이 갖고 있는 branchid 먼저 얻기






        console.log("쿠키",getCookie('studentId'));
        getStudentId = getCookie('studentId')

        const data_t ={
            "brandId": brandId,
            "branchId": branchId,
            "roomId": roomId,
            "groupId": groupId,
            "status":"사용"
        }
        
        
        if(<?=$_SESSION['roleid']?> == 3){
          
          console.log("roleid",<?=$_SESSION['roleid']?>);

          const data_branch ={
              "brandId": brandId,
              "ownerId": ownerId,
              "managerId": managerId,
              "status":""}
          $.ajax({
            url: "https://farm01.bitlworks.co.kr/api/v1/branches",
            type: "get",
            contentType:"application/json",
            data:data_branch,
            async: false, 
            datatype: "JSON",
            success: function(obj){
              console.log(obj)
              //res = obj
              obj.forEach((data)=>(tempBranchList.push(data.id)))
              console.log("tempBranchList",tempBranchList)
            },
            error: function(xhr, status, error){
              console.log("xhr: ", xhr);
              return
            }
          })



          
          
          tempBranchList.forEach((bi)=>{
            console.log("bi!!",bi);
            let data_g ={
              "brandId": brandId,
              "branchId": bi,
              "roomId": roomId,
              "groupId": groupId,
              "status":"사용"
            }
            console.log("data_t",data_g);
            $.ajax({
            url: "https://farm01.bitlworks.co.kr/api/v1/users/students",
            type: "get",
            contentType:"application/json",
            data:data_g,
            async: false, 
            datatype: "JSON",
            success: function(obj){
              studentList = obj

              getStudentIdNone = studentList[0].id




              setting()






              console.log("studentList",studentList);
              
              obj.forEach((data)=>(obj_arr.push(data)))
              console.log("obj_arr",obj_arr)
              $('#kt_ecommerce_edit_order_product_table').DataTable().destroy();
              make_table(obj_arr);
              
            },
            error: function(xhr, status, error){
              console.log(`error: ${error}`)
              console.log(`status: ${status}`)
              return
            }
          })

          }
          )
        

          

          console.log("???",brandId,ownerId);
          $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/brands/"+brandId,
          type: "get",
          contentType:"application/json",
          // data:studentData,
          async: false, 
          datatype: "JSON",
          success: function(obj){
            console.log("ddd",obj);
            makeFilterBrandOne(obj)
          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
        })

        


      }else if(<?=$_SESSION['roleid']?> == 4){
        console.log("roleid",<?=$_SESSION['roleid']?>);
        const data_branch ={
              "brandId": brandId,
              "ownerId": ownerId,
              "managerId": managerId,
              "status":""}
              console.log(data_branch)
          $.ajax({
            url: "https://farm01.bitlworks.co.kr/api/v1/branches",
            type: "get",
            contentType:"application/json",
            data:data_branch,
            async: false, 
            datatype: "JSON",
            success: function(obj){
              console.log(obj)
              //res = obj
              obj.forEach((data)=>(tempBranchList.push(data.id)))
              console.log("tempBranchList",tempBranchList)
            },
            error: function(xhr, status, error){
              console.log("xhr: ", xhr);
              return
            }
          })



          
          
          tempBranchList.forEach((bi)=>{
            console.log("bi!!",bi);
            let data_g ={
              "brandId": brandId,
              "branchId": bi,
              "roomId": roomId,
              "groupId": groupId,
              "status":"사용"
            }
            console.log("data_t",data_g);
            $.ajax({
            url: "https://farm01.bitlworks.co.kr/api/v1/users/students",
            type: "get",
            contentType:"application/json",
            data:data_g,
            async: false, 
            datatype: "JSON",
            success: function(obj){
              studentList = obj
              

              getStudentIdNone = studentList[0].id

              setting()



              console.log("studentList",studentList);
              
              obj.forEach((data)=>(obj_arr.push(data)))
              console.log("obj_arr",obj_arr)
              $('#kt_ecommerce_edit_order_product_table').DataTable().destroy();
              make_table(obj_arr);
            },
            error: function(xhr, status, error){
              console.log(`error: ${error}`)
              console.log(`status: ${status}`)
              return
            }
            })

          })
          
        

          

          console.log("???",brandId,ownerId);
          $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/brands/"+brandId,
          type: "get",
          contentType:"application/json",
          // data:studentData,
          async: false, 
          datatype: "JSON",
          success: function(obj){
            console.log("rolde_4",obj);
            makeFilterBrandOne(obj)
          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
        })
      }
      else{
        console.log("roleid",<?=$_SESSION['roleid']?>);
        console.log("data_t",data_t);
        
        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/users/students",
          type: "get",
          contentType:"application/json",
          data:data_t,
          datatype: "JSON",
          success: function(obj){
            studentList = obj
            console.log("studentList",studentList);
            
            getStudentIdNone = studentList[0].id




            setting()









            make_table(obj);
            
          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
        })
      }














      





        nav = document.getElementById('menu-student');
        nav.classList.add('show');
        nav.classList.add('here');
        nav_suv = document.getElementById('student__manage_info');
        nav_suv.classList.add('active');
        


      




        
      }
      
      
      
      )


      function setting(){
        console.log("!!!!!!");
        if(<?=$_SESSION['roleid']?> == 1){
          console.log("2@@@2");
        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/brands",
          type: "get",
          contentType:"application/json",
          // data:studentData,
          datatype: "JSON",
          async: false, 
          success: function(obj){
            console.log("ddd",obj);
            console.log("234")
            
            makeFilterBrandList(obj)
          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
        })
        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/branches",
          type: "get",
          contentType:"application/json",
          // data:studentData,
          async: false, 
          datatype: "JSON",
          success: function(obj){
            console.log("ddd",obj);
            makeFilterBranchList(obj)
          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
        })
        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/branches/rooms",
          type: "get",
          contentType:"application/json",
          // data:studentData,
          datatype: "JSON",
          async: false, 
          success: function(obj){
            console.log("ddd",obj);
            // makeFilterRoomList(obj)
          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
        })
        }else{

          console.log("setting_else",brandId,ownerId);
          $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/brands/"+brandId,
          type: "get",
          async: false, 
          contentType:"application/json",
          // data:studentData,
          datatype: "JSON",
          success: function(obj){
            console.log("ddd",obj);
            makeFilterBrandOne(obj)
          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
        })
          
        }
      }

      function make_table(data){

        newDiv = document.getElementById('studentsList');
        console.log("nD",newDiv);
        
        newDiv.innerHTML = ``;
        for (row in data){
          row_data = data[row];

          // newDiv.innerHTML += `
          //   <tr class="student_${parseInt(row) + 1}" id = ${row_data.id}>
          //     <td> ${parseInt(row) + 1} </td>
          //     <td class="n_empty"></td>
          //     <td class="text-muted fw-semibold">
          //       <div class="d-flex flex-stack">
          //         <div class="d-flex align-items-center flex-row-fluid flex-wrap">
          //           <div class="flex-grow-1 me-2">
          //             <a
          //               href="/metronic8/demo1/../demo1/pages/user-profile/overview.html"
          //               class="text-gray-800 text-hover-primary fs-6 fw-bold"
          //               >${row_data.branch.name}</a
          //             >
                      
          //           </div>
          //         </div>
          //       </div>
          //     </td>
          //     <td>
          //                               <!--begin::Section-->
          //                               <div
          //                               class="d-flex align-items-center flex-row-fluid flex-wrap"
          //                             >
          //                               <!--begin:Author-->
          //                               <div class="flex-grow-1 me-2">
          //                                 <a
          //                                   href="/metronic8/demo1/../demo1/pages/user-profile/overview.html"
          //                                   class="text-gray-800 text-hover-primary fs-6 fw-bold"
          //                                   >${row_data.realName}</a
          //                                 >
          //                                 <span
          //                                   class="text-muted fw-semibold d-block fs-7"
          //                                   >${row_data.school} <span>${row_data.grade}</span></span
          //                                 >
          //                               </div>
          //                               <!--end:Author-->
          //                             </div>
          //                             <!--end::Section-->
          //                             </td>
              
          //     <td class="text-end" id ="statusUse" >
          //       <span class="badge badge-light-success fw-bold px-4 py-3">${row_data.status}</span>
          //     </td>
              
          //   </tr>`

          if(row_data.status == "사용"){
            newDiv.innerHTML += `
            <tr class="student_${parseInt(row) + 1}" id = ${row_data.id}>
              <td> ${parseInt(row) + 1} </td>
              <td class="n_empty"></td>
              <td class="text-muted fw-semibold">
                <div class="d-flex flex-stack">
                  <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                    <div class="flex-grow-1 me-2">
                      <a
                        
                        class="text-gray-800 text-hover-primary fs-6 fw-bold"
                        >${row_data.branch.name}</a
                      >
                      
                    </div>
                  </div>
                </div>
              </td>
              <td>
                                        <!--begin::Section-->
                                        <div
                                        class="d-flex align-items-center flex-row-fluid flex-wrap"
                                      >
                                        <!--begin:Author-->
                                        <div class="flex-grow-1 me-2">
                                          <a
                                            
                                            class="text-gray-800 text-hover-primary fs-6 fw-bold"
                                            >${row_data.realName}</a
                                          >
                                          <span
                                            class="text-muted fw-semibold d-block fs-7"
                                            >${row_data.school} <span>${row_data.grade}</span></span
                                          >
                                        </div>
                                        <!--end:Author-->
                                      </div>
                                      <!--end::Section-->
                                      </td>
              
              <td class="text-end" id ="statusUse" >
                <span class="badge badge-light-success fw-bold px-4 py-3">${row_data.status}</span>
              </td>
              
            </tr>`
          }else if(row_data.status == "대기"){
            newDiv.innerHTML += `
            <tr class="student_${parseInt(row) + 1}" id = ${row_data.id}>
              <td> ${parseInt(row) + 1} </td>
              <td class="n_empty"></td>
              <td class="text-muted fw-semibold">
                <div class="d-flex flex-stack">
                  <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                    <div class="flex-grow-1 me-2">
                      <a
                        
                        class="text-gray-800 text-hover-primary fs-6 fw-bold"
                        >${row_data.branch.name}</a
                      >
                      
                    </div>
                  </div>
                </div>
              </td>
              <td>
                                        <!--begin::Section-->
                                        <div
                                        class="d-flex align-items-center flex-row-fluid flex-wrap"
                                      >
                                        <!--begin:Author-->
                                        <div class="flex-grow-1 me-2">
                                          <a
                                            
                                            class="text-gray-800 text-hover-primary fs-6 fw-bold"
                                            >${row_data.realName}</a
                                          >
                                          <span
                                            class="text-muted fw-semibold d-block fs-7"
                                            >${row_data.school} <span>${row_data.grade}</span></span
                                          >
                                        </div>
                                        <!--end:Author-->
                                      </div>
                                      <!--end::Section-->
                                      </td>
              
              <td class="text-end" id ="statusWait" >
                <span class="badge badge-light-warning fw-bold px-4 py-3">${row_data.status}</span>
              </td>
              
            </tr>`
          }else{
            newDiv.innerHTML += `
            <tr class="student_${parseInt(row) + 1}" id = ${row_data.id}>
              <td> ${parseInt(row) + 1} </td>
              <td class="n_empty"></td>
              <td class="text-muted fw-semibold">
                <div class="d-flex flex-stack">
                  <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                    <div class="flex-grow-1 me-2">
                      <a
                        
                        class="text-gray-800 text-hover-primary fs-6 fw-bold"
                        >${row_data.branch.name}</a
                      >
                      
                    </div>
                  </div>
                </div>
              </td>
              <td>
                                        <!--begin::Section-->
                                        <div
                                        class="d-flex align-items-center flex-row-fluid flex-wrap"
                                      >
                                        <!--begin:Author-->
                                        <div class="flex-grow-1 me-2">
                                          <a
                                            
                                            class="text-gray-800 text-hover-primary fs-6 fw-bold"
                                            >${row_data.realName}</a
                                          >
                                          <span
                                            class="text-muted fw-semibold d-block fs-7"
                                            >${row_data.school} <span>${row_data.grade}</span></span
                                          >
                                        </div>
                                        <!--end:Author-->
                                      </div>
                                      <!--end::Section-->
                                      </td>
              
              <td class="text-end" id ="statusStop" >
                <span class="badge badge-light-danger fw-bold px-4 py-3">${row_data.status}</span>
              </td>
              
            </tr>`
          }
          





          // if(row_data.status == "사용"){
          //   console.log("1")
          //   document.getElementById("statusUse").style.display = "";
          //   document.getElementById("statusWait").style.display = "none";
          //   document.getElementById("statusStop").style.display = "none";
          // }else if(row_data.status == "대기"){
          //   console.log("2")
          //   document.getElementById("statusUse").style.display = "none";
          //   document.getElementById("statusWait").style.display = "";
          //   document.getElementById("statusStop").style.display = "none";
          // }else if (row_data.status == "삭제"){
          //   console.log("3")
          //   document.getElementById("statusUse").style.display = "none";
          //   document.getElementById("statusWait").style.display = "none";
          //   document.getElementById("statusStop").style.display = "";
          // }
        }

        if(getStudentId != undefined){
          document.getElementById(getStudentId).click();
          console.log(document.getElementById(getStudentId))
        }else{
          console.log("undef!!!!!!")
          document.getElementById(getStudentIdNone).click();
        }
        call();
      }




      $(document).on('click','#studentsList > tr',function(){
        
        let num;
        // let td_val = $(this).parents().find().prevObject[0].className;
        // let td_val_2 = $(this).parents().find().prevObject[0].id;
        let tr_button = $(this).find().prevObject[0];
        // console.log("tr_val",tr_button);
        // console.log("tr_id",tr_button.className);
        newDiv = document.getElementById('submit');
        newDiv.innerHTML = `변경사항 저장`;
        $("#submit").addClass("submit");
        $("#submit").removeClass("add_submit");
        tr_button.classList.add('on');
        num = tr_button.id
        setCookie('studentId',num,1)
        listunclick(num);
        studentId = num;
        console.log("select student id:",studentId);

        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/users/"+studentId,
          type: "get",
          contentType:"application/json",
          // data:studentData,
          datatype: "JSON",
          success: function(obj){
            
            
            console.log(obj)
            specStudentInfo = obj;
            
            let forManager = {
              brandId : specStudentInfo.brand.id,
              branchId : specStudentInfo.branch.id,
            }
            makeBoardManager(forManager);
            make_board(specStudentInfo);

          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
        })

      })

      function listunclick(value){
        //console.log("unclick_v", value);
        // console.log("unclick", brandList);
        studentList.forEach((currentElement, index, array) => {
          //console.log("currentElement", currentElement);
          //console.log("value", value);
          if (currentElement.id != value) {
            const untempbtn = document.getElementsByClassName(
              `student_` + (index+1)
            );
            //console.log(untempbtn)
            untempbtn[0].classList.remove("on");
            //console.log("tempbtn", untempbtn[0].classList);
          }
          //console.log("array", array);


          // if(index+1 != value){
          //   //console.log(index+1)
          //     // const untempbtn = document.getElementsByClassName(`brand_` + index+1);
          //     const untempbtn = document.getElementsByClassName(`brand_`+(index+1));
          //     //console.log("un",untempbtn[0]);
          //   untempbtn[0].classList.remove("on");
          // }
        });
      }
      function make_board(data){
        // console.log(data.brand.id);
        console.log("make_board_data",data)
        let address = data.address.split('//')
        
        // $('#brand').val(data.brand.id).prop("selected",true);
        $('#address').val(address[0])
        $('#detailAddress').val(address[1])
        // $('#address').val(data.address)
        $('#brand').val(data.brand.id).prop("selected",true);
        $("#select2-brand-container").text(data.brand.name);
        $('#branch').val(data.branch.id).prop("selected",true);
        $("#select2-branch-container").text(data.branch.name);
        $('#school').val(data.school)
        $('#grade').val(data.grade).prop("selected",true);
        $("#select2-grade-container").text(data.grade);
        // $('#branchName').val(data.branch.name)
        // $('#brandName').val(data.brand.name)
        $('#realName').val(data.realName)
        $('#password').val(data.password)
        $('#passwordC').val(data.password)
        console.log("sss data:",data.room)
        if(data.room==null){
          console.log("ss")
          $("#select2-room-container").text("학습실 선택");
        }else{
          $('#room').val(data.room.id).prop("selected",true);
        $("#select2-room-container").text(data.room.name);
        }
        if(data.group==null){
          console.log("no group")
          $("#select2-group-container").text("관리 그룹 선택");
        }else{
          $('#group').val(data.group.id).prop("selected",true);
        $("#select2-group-container").text(data.group.name);
        }
        
        $('#seatNumber').val(data.seatNumber)
        $('#phone').val(data.phone)
        $('#email').val(data.email)
        $('#userName').val(data.username)

        $('#brand').prop('disabled',true);
        $('#branch').prop('disabled',true);
        //$('#room').prop('disabled',true);
        
        if(data.status =="사용"){
          $('#status_active').val(data.status).prop("checked",true)
        }
        else if(data.status =="대기"){
          $('#status_stop').val(data.status).prop("checked",true)
        }
        else{
          $('#status_stop').val(data.status).prop("checked",true)
        }
        
      }


      function filterClick(){
        console.log("필터 클릭");
        var fiterBrandId = ""
        var fiterBranchId = ""
        var fiterRoomId = ""
        var fiterGroupId = ""
        let obj_arr2 =[]
        console.log("status:",document.getElementsByName("InFilterStatus"));
        let cu = ""

        
          
        if(document.getElementsByName("InFilterStatus")[0].value=="1"){
          cu = "사용"
        }else if(document.getElementsByName("InFilterStatus")[0].value=="2"){
          cu = "대기"
        }else if(document.getElementsByName("InFilterStatus")[0].value=="3"){
          cu = "삭제"
        }else{
          cu = ""
        }

        if(document.getElementById("InFilterBrand").value != ""){
          fiterBrandId = document.getElementById("InFilterBrand").value
        }else{
          fiterBrandId = brandId

        }
        if(document.getElementById("InFilterBranch").value != ""){
          fiterBranchId = document.getElementById("InFilterBranch").value
        }else{
          fiterBranchId = ""

        }
        if(document.getElementById("InFilterRoom").value != ""){
          fiterRoomId = document.getElementById("InFilterRoom").value
        }else{
          fiterRoomId = ""

        }
        if(document.getElementById("InFilterGroup").value != ""){
          fiterGroupId = document.getElementById("InFilterGroup").value
        }else{
          fiterGroupId = ""

        }
        const data_t ={
            "brandId": fiterBrandId,
            "branchId": fiterBranchId,
            "roomId": fiterRoomId,
            "groupId": fiterGroupId,
            "status":cu
        }
        console.log("dt",data_t)
        if((<?=$_SESSION['roleid']?> == 3 || <?=$_SESSION['roleid']?> == 4 )&&fiterBranchId==""){
          tempBranchList.forEach((bi)=>{
            console.log("bi!!",bi);
            let data_g ={
              "brandId": brandId,
              "branchId": bi,
              "roomId": fiterRoomId,
              "groupId": fiterGroupId,
              "status":cu
            }
            console.log("data_t",data_g);
            $.ajax({
            url: "https://farm01.bitlworks.co.kr/api/v1/users/students",
            type: "get",
            contentType:"application/json",
            data:data_g,
            async: false, 
            datatype: "JSON",
            success: function(obj){
              studentList = obj
              console.log("studentList",studentList);
              
              obj.forEach((data)=>(obj_arr2.push(data)))
              console.log("obj_arr",obj_arr2)
              $('#kt_ecommerce_edit_order_product_table').DataTable().destroy();
              make_table(obj_arr2);
              
            },
            error: function(xhr, status, error){
              console.log(`error: ${error}`)
              console.log(`status: ${status}`)
              return
            }
          })
          })
      
        }else{
          $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/users/students",
          type: "get",
          contentType:"application/json",
          data:data_t,
          datatype: "JSON",
          success: function(obj){
            
            studentList = obj
            console.log(obj);
            // Datatable 의 reinitialize 를 없애기 위해 destroy
            $('#kt_ecommerce_edit_order_product_table').DataTable().destroy();
            make_table(obj);
            

          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
        })
        }
       
      }


      function resetClick(){
        console.log("reset 클릭");

        document.getElementById("InFilterBrand").value="";

        //document.getElementsByClassName("select2-selection__clear")[0].classList.add("hidden")
        console.log(document.getElementsByClassName("select2-selection__clear"))
        
        
        
        document.getElementById("InFilterBranch").value="";
       // document.getElementsByClassName("select2-selection__clear")[1].classList.add("hidden")
        
        document.getElementById("InFilterRoom").value="";
        
        
        //document.getElementsByClassName("select2-selection__clear")[2].classList.add("hidden")
        document.getElementById("InFilterGroup").value="";
        
        console.log(document.getElementsByName("InFilterStatus"))
       // document.getElementsByClassName("select2-selection__clear")[3].classList.add("hidden")
        document.getElementsByName("InFilterStatus")[0].value = ""

        for (i = 0; i<document.getElementsByClassName("select2-selection__clear").length;i++){
         document.getElementsByClassName("select2-selection__clear")[i].classList.add("hidden")
        }
        
        console.log(document.getElementsByName("InFilterStatus"))
        
        $(".select2-selection__rendered").text("상태 선택");
        $("#select2-InFilterBrand-container").text("본사 선택");
        $("#select2-InFilterBranch-container").text("지점 선택");
        $("#select2-InFilterGroup-container").text("학습실 선택");
        $("#select2-InFilterRoom-container").text("관리그룹 선택");
        $('#InFilterBranch').prop('disabled',true);
        $('#InFilterRoom').prop('disabled',true);
        $('#InFilterGroup').prop('disabled',true);

        
        
        
       
      }
      


      function makeFilterBrandList(data){
        newDiv = document.getElementById('brand');
        InFilterNewDiv = document.getElementById('InFilterBrand');
        console.log("data",data)
        console.log("InFilterNewDiv",InFilterNewDiv)
        console.log("newDiv",newDiv);
        newDiv.innerHTML = ``;
        for (row in data){
          row_data = data[row];
          newDiv.innerHTML += `<option value="${row_data.id}">${row_data.name}</option>`
        }
        InFilterNewDiv.innerHTML = ``;
        InFilterNewDiv.innerHTML = `<option value="">본사를 선택해주세요</option>`;
        for (row in data){
          row_data = data[row];
          InFilterNewDiv.innerHTML += `<option value="${row_data.id}">${row_data.name}</option>`
        }
        
      }
      function makeFilterBrandOne(data){
        newDiv = document.getElementById('brand');
        InFilterNewDiv = document.getElementById('InFilterBrand');
        newDiv.innerHTML = ``;
        newDiv.innerHTML = `<option value="">본사를 선택해주세요</option>`;
        newDiv.innerHTML += `<option value="${data.id}">${data.name}</option>`
        InFilterNewDiv.innerHTML = ``;
        InFilterNewDiv.innerHTML = `<option value="">본사를 선택해주세요</option>`;
        InFilterNewDiv.innerHTML += `<option value="${data.id}">${data.name}</option>`
      }
      function makeFilterBranchList(data){
        newDiv = document.getElementById('branch');
        newDiv.innerHTML = ``;
        for (row in data){
          row_data = data[row];
          newDiv.innerHTML += `<option value="${row_data.id}">${row_data.name}</option>`
        }
      }
      function makeFilterBranchOne(data){
        newDiv = document.getElementById('branch');
        newDiv.innerHTML = ``;
        
        newDiv.innerHTML += `<option value="${data.id}">${data.name}</option>`
        
      }
      function makeFilterRoomList(data){
        newDiv = document.getElementById('room');
        newDiv.innerHTML = ``;
        
        
        for (row in data){
          row_data = data[row];
          newDiv.innerHTML += `<option value="${row_data.id}">${row_data.name}</option>`
        }
      }
      function makeFilterRoomOne(data){
        newDiv = document.getElementById('room');
        newDiv.innerHTML = ``;
        newDiv.innerHTML += `<option value="${data.id}">${data.name}</option>`
        
      }
      function handleOnChangeBrand(prop){
        console.log("brandchange",prop.value);
        
        $('#branch').prop('disabled',false);
        $('#InFilterBranch').prop('disabled',false);
        
        makeBranchList(prop.value);
      }
      function handleOnChangeBranch(prop){
        console.log("branchchange",prop.value);
        $('#room').prop('disabled',false);
        $('#InFilterRoom').prop('disabled',false);
        $('#InFilterGroup').prop('disabled',false);
        makeRoomList(prop.value);
        
        makeGroupList(prop.value);
      }
      function makeBranchList(prop){
        let res;
        const data_t ={
            "brandId": prop,
            "ownerId": ownerId,
            "managerId": managerId,
            "status":""}
        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/branches",
          type: "get",
          contentType:"application/json",
          data:data_t,
          async: false, 
          datatype: "JSON",
          success: function(obj){
            console.log(obj)
            res = obj
            
          },
          error: function(xhr, status, error){
            console.log("xhr: ", xhr);
            return
          }
        })
        InFilterNewDiv = document.getElementById('InFilterBranch');
        newDiv = document.getElementById('branch');
        newDiv.innerHTML = ``;
        console.log("res",res);
        for (row in res){
          row_data = res[row];
          newDiv.innerHTML += `<option type="button" value="${row_data.id}">${row_data.name}</option>`;
        }
        InFilterNewDiv.innerHTML = ``;
        InFilterNewDiv.innerHTML = `<option value="">지점을 선택해주세요</option>`;
        for (row in res){
          
          row_data = res[row];
          InFilterNewDiv.innerHTML += `<option type="button" value="${row_data.id}">${row_data.name}</option>`;
        }
      }
      function makeRoomList(prop){
        let res;
        console.log("%%%%%%%%%");
        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/branches/"+prop+"/rooms",
          type: "GET",
          contentType:"application/json",
          async: false, 
          datatype: "JSON",
          success: function(obj){
            
            res = obj
            console.log("resroom",res)
          },
          error: function(xhr, status, error){
            console.log("xhr: ", xhr);
            return
          }
        })
        InFilterNewDiv = document.getElementById('InFilterRoom');
        newDiv = document.getElementById('room');
        newDiv.innerHTML = ``;
        for (row in res){
          row_data = res[row];
          newDiv.innerHTML += `<option type="button" value="${row_data.id}">${row_data.name}</option>`;
        }
        InFilterNewDiv.innerHTML = ``;
        InFilterNewDiv.innerHTML = `<option value="">학습실을 선택해주세요</option>`;
        for (row in res){
          row_data = res[row];
          InFilterNewDiv.innerHTML += `<option type="button" value="${row_data.id}">${row_data.name}</option>`;
        }
      }
      function makeGroupList(prop){
        let res;
        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/branches/"+prop+"/groups",
          type: "GET",
          contentType:"application/json",
          async: false, 
          datatype: "JSON",
          success: function(obj){
            console.log(obj)
            res = obj
            console.log("resgroup",res)
          },
          error: function(xhr, status, error){
            console.log("xhr: ", xhr);
            return
          }
        })
        InFilterNewDiv = document.getElementById('InFilterGroup');
        newDiv = document.getElementById('group');
        newDiv.innerHTML = ``;
        for (row in res){
          row_data = res[row];
          newDiv.innerHTML += `<option type="button" value="${row_data.id}">${row_data.name}</option>`;
        }
        
        InFilterNewDiv.innerHTML = ``;
        InFilterNewDiv.innerHTML = `<option value="">관리그룹을 선택해주세요</option>`;
        for (row in res){
          row_data = res[row];
          InFilterNewDiv.innerHTML += `<option type="button" value="${row_data.id}">${row_data.name}</option>`;
        }
      }
      function makeBoardManager(data){
        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/branches/"+data.branchId+"/rooms",
          type: "get",
          async: false, 
          contentType:"application/json",
          data:data.branchId,
          datatype: "JSON",
          success: function(obj){
            
            
            m_data = obj
            console.log("m_data",m_data)

          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
        })




        newDiv = document.getElementById('room');
        newDiv.innerHTML = ``;
        
        
        for (row in m_data){
          row_data = m_data[row];
          newDiv.innerHTML += `<option value="${row_data.id}">${row_data.name}</option>`
        }


        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/branches/"+data.branchId+"/groups",
          type: "get",
          async: false, 
          contentType:"application/json",
          data:data.branchId,
          datatype: "JSON",
          success: function(obj){
            
            
            g_data = obj
            console.log("g_data",g_data)

          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
        })




        newDiv = document.getElementById('group');
        newDiv.innerHTML = ``;
        newDiv.innerHTML = `<option value=" ">관리그룹 없음</option>`;
        
        
        for (row in g_data){
          row_data = g_data[row];
          newDiv.innerHTML += `<option value="${row_data.id}">${row_data.name}</option>`
        }
      };
     // '변경사항 저장' 버튼 클릭 시,
     $(document).on('click', '.submit', function(){
        console.log("변경사항 저장");
        submit_data();
        location.reload();
      })
      
      // '추가' 버튼 클릭 시,
      $(document).on('click', '.add_submit', function(){
        console.log("추가");
        add_student();
        location.reload();
      })

      $(document).on('click', '#add_student', function(){
        listunclick(-1);
        $('#brand').prop('disabled',false);
        // $('#branch').prop('disabled',false);
        // $('#room').prop('disabled',false);
        
        newDiv = document.getElementById('submit');
        newDiv.innerHTML = `추가`;

        $("#submit").addClass("add_submit");
        $("#submit").removeClass("submit");

        $("#select2-brand-container").text("본사를 선택해주세요");
        $("#select2-branch-container").text("지점을 선택해주세요");
        $("#select2-room-container").text("학습실을 선택해주세요");
        $("#select2-group-container").text("학습실을 선택해주세요");
        $("#select2-grade-container").text("학년을 선택해주세요");


        $('#phone').val("");
        $('#passwordC').val("");
        $('#email').val("");
        $('#password').val("");
        $('#school').val(""); 
        $('#grade').val("");   
             
        $('#room').val("");     
        $('#group').val("");        
        $('#address').val("");        
        $('#seatNumber').val("");        
        $('#realName').val("");        
        $('#userName').val("");        
             
      })


      function add_student(){
        let cu = "사용"
        // alert(document.getElementById('brand'))
        // alert(document.getElementById('branch'))
        console.log(document.getElementById('brand').value)
        let allAddress = document.getElementsByName("address")[0].value +" //"+ document.getElementsByName("detailAddress")[0].value
        let tempRoom = $('#room').val();
        let tempGroup = $('#group').val();
        let tempGrade = $('#grade').val();
        console.log(tempGrade);
        console.log(tempRoom);
        console.log("사용?",document.getElementsByName("choice_use")[0].checked);
        console.log("대기?",document.getElementsByName("choice_use")[1].checked);
        console.log("삭제?",document.getElementsByName("choice_use")[2].checked);
        if(document.getElementsByName("choice_use")[2].checked==true){
          cu = "삭제"
        }
        else if(document.getElementsByName("choice_use")[1].checked==true){
          cu = "대기"
        }
        else{
          cu = "사용"
        }
        const data_t = {
          "username": document.getElementsByName("userName")[0].value,
          "password": document.getElementsByName("password")[0].value,
          "password2": document.getElementsByName("password")[0].value,
          "realName": document.getElementsByName("realName")[0].value,
          "phone": document.getElementsByName("phone")[0].value,
          "email": document.getElementsByName("email")[0].value,
          "address": allAddress,
          "birthDate": "1999-05-01",
          "status": cu,
          "school": document.getElementsByName("school")[0].value,
          "grade": tempGrade,
          "roomId": tempRoom,
          "groupId":tempGroup,
          "seatNumber": document.getElementsByName("seatNumber")[0].value,
          "brandId": document.getElementById('brand').value,
          "branchId": document.getElementById('branch').value,
        }
        
      console.log("dt",data_t)
    
        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/users/students/",
          type: "post",
          contentType:"application/json",
          data:JSON.stringify(data_t),
          datatype: "JSON",
          success: function(obj){
            
            
            console.log(obj)
            

          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
        })

      }

      function submit_data(){
        let cu = "사용"
        let tempRoom = $('#room').val();
        let tempGroup = $('#group').val();
        let tempGrade = $('#grade').val();
        let allAddress = document.getElementsByName("address")[0].value +" //"+ document.getElementsByName("detailAddress")[0].value
        console.log(tempGrade);
        console.log(tempRoom);
        console.log("사용?",document.getElementsByName("choice_use")[0].checked);
        console.log("대기?",document.getElementsByName("choice_use")[1].checked);
        console.log("삭제?",document.getElementsByName("choice_use")[2].checked);
        if(document.getElementsByName("choice_use")[2].checked==true){
          cu = "삭제"
        }
        else if(document.getElementsByName("choice_use")[1].checked==true){
          cu = "대기"
        }
        else{
          cu = "사용"
        }
        const data_t = {
          "username": document.getElementsByName("userName")[0].value,
          "password": document.getElementsByName("password")[0].value,
          "password2": document.getElementsByName("password")[0].value,
          "realName": document.getElementsByName("realName")[0].value,
          "phone": document.getElementsByName("phone")[0].value,
          "email": document.getElementsByName("email")[0].value,
          "address": allAddress,
          "birthDate": "1999-05-01",
          "status": cu,
          "school": document.getElementsByName("school")[0].value,
          "grade": tempGrade,
          "groupId" : tempGroup,
          "roomId": tempRoom,
          "seatNumber": document.getElementsByName("seatNumber")[0].value,
        }
        
        console.log("dt",data_t)
      
          $.ajax({
            url: "https://farm01.bitlworks.co.kr/api/v1/users/students/"+studentId,
            type: "put",
            contentType:"application/json",
            data:JSON.stringify(data_t),
            datatype: "JSON",
            success: function(obj){
              
              
              console.log(obj)
              

            },
            error: function(xhr, status, error){
              console.log(`error: ${error}`)
              console.log(`status: ${status}`)
              return
            }
          })


      }
      

      
      

    </script>



    <script>
      var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used by this page)-->
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script src="assets/plugins/custom/formrepeater/formrepeater.bundle.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used by this page)-->
    <script src="assets/js/custom/apps/ecommerce/sales/save-order.js"></script>
    <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script>
      function findAddress(){
        new daum.Postcode({
            oncomplete: function(data) {
                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분입니다.
                // 예제를 참고하여 다양한 활용법을 확인해 보세요.
                 // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                var addr = ''; // 주소 변수
                var extraAddr = ''; // 참고항목 변수

                //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                    addr = data.roadAddress;
                } else { // 사용자가 지번 주소를 선택했을 경우(J)
                    addr = data.jibunAddress;
                }

                // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
                if(data.userSelectedType === 'R'){
                    // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                    // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                    if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                        extraAddr += data.bname;
                    }
                    // 건물명이 있고, 공동주택일 경우 추가한다.
                    if(data.buildingName !== '' && data.apartment === 'Y'){
                        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                    }
                    // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                    if(extraAddr !== ''){
                        extraAddr = ' (' + extraAddr + ')';
                    }
                    // 조합된 참고항목을 해당 필드에 넣는다.
                    document.getElementById("address").value = extraAddr;
                
                } else {
                    document.getElementById("address").value = '';
                }

                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                document.getElementById('address').value = data.zonecode;
                document.getElementById("address").value = addr;
                // 커서를 상세주소 필드로 이동한다.
                document.getElementById("address").focus();
            }
        }).open();
      }
        
    </script>
    <script src="assets/js/custom/apps/projects/list/list.js"></script>
    <script src="assets/js/custom/apps/projects/users/users.js"></script>
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="assets/js/custom/utilities/modals/users-search.js"></script>
    <script src="assets/js/custom/utilities/modals/new-target.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
  </body>
  <!--end::Body-->
</html>
