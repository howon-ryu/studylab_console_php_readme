<?php 

    require_once('media_header.php');


      session_start();
      
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
                      지점학습현황
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
                          >학습관리</a
                        >
                      </li>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                      </li>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <li class="breadcrumb-item text-muted">지점학습현황</li>
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
                              <ul class="nav mb-2 mb-sm-0 card__left_tab" hidden>
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
                                <li class="nav-item m-0">
                                  <button
                                    class="btn btn-sm btn-icon btn-light-primary me-4 btn__wight_sq"
                                    type="button"
                                  >
                                    <i class="bi bi-upload fs-3"></i>
                                  </button>
                                </li>
                                <li class="nav-item m-0">
                                  <button
                                    class="btn btn-sm btn-icon btn-light-primary btn__wight_sq"
                                    type="button"
                                  >
                                    <i class="bi bi-download fs-3"></i>
                                  </button>
                                </li>
                              </ul>
                              <!--end::Tab nav-->

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
                                      <span>원장명</span>
                                        <select
                                          id = "InFilterOwner"
                                          class="form-select form-select-solid mb-4"
                                          data-kt-select2="true"
                                          data-placeholder="원장 선택"
                                          data-dropdown-parent="#kt_menu_631f0553006ad"
                                          data-allow-clear="true"

                                          disabled
                                        >
                                         
                                        </select>
                                      </div>
                                      <!--end::Input-->
                                      <!--begin::Input-->
                                      
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
                                        onclick = "resetClick()"
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
                                      <th class="ps-4 min-w-25px">NO.</th>
                                      <th class="min-w-25px n_empty"></th>
                                      <th class="min-w-70px">지점명</th>
                                      
                                      <th class="min-w-50px text-end">상태</th>
                                    </tr>
                                  </thead>
                                  <!--end::Head-->
                                  <!--begin::Body-->
                                  <tbody class="fs-6" id="branchesList">
                                  
                                    
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
                                                <div
                                                    id="kt_app_content"
                                                    class="app-content flex-column-fluid stdy_w_rpt_content">
                                                    <!--begin::Content container-->
                                                    <div id="kt_app_content_container" class="app-container">
                                                        <!--begin::Main column-->
                                                        <div class="d-flex flex-column flex-lg-row-fluid gap-7 gap-lg-10">
                                                            <!--begin::Order details-->
                                                            <div class="card card-flush">
                                                                <!--begin::Header-->
                                                                <div class="card-header border-0 pt-5 stdy_w_rpt_top2">
                                                                    <div class="stdy_w_rpt_date d-flex align-items-center">
                                                                        
                                                                        <div class="date_div me-6">
                                                                            <input
                                                                                class="form-control input__date"
                                                                                type="date"
                                                                                name="date"
                                                                                id="example-date"/>
                                                                        </div>

                                                                        <div class = "boardGroup">
                                                                          <!-- <span>관리그룹</span> -->
                                                                            <select
                                                                              id = "InFilterGroup"
                                                                              class="form-select form-select-solid mb-4"
                                                                              data-kt-select2="true"
                                                                              data-placeholder="관리그룹 선택"
                                                                              
                                                                              data-allow-clear="true"
                                                                            
                                                                            >
                                                                              
                                                                              <option value = " "> 관리그룹 전체</option>
                                                                            </select>
                                                                        </div>

                                                                        <div class = "boardRoom">
                                                                          <!-- <span>학습실</span> -->
                                                                            <select
                                                                              id = "InFilterRoom"
                                                                              class="form-select form-select-solid mb-4"
                                                                              data-kt-select2="true"
                                                                              data-placeholder="학습실 선택"
                                                                              
                                                                              data-allow-clear="true"
                                                                             
                                                                            >
                                                                              
                                                                              <option value = " "> 학습실 전체</option>
                                                                            </select>
                                                                        </div>












                                                                        <button type="button" class="btn btn-primary btn__slim boardBtn" onclick = "searchClick()">
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen016.svg-->
                                                                            <span class="svg-icon svg-icon-3">
                                                                                <svg
                                                                                    width="24"
                                                                                    height="24"
                                                                                    viewbox="0 0 24 24"
                                                                                    fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M15.43 8.56949L10.744 15.1395C10.6422 15.282 10.5804 15.4492 10.5651 15.6236C10.5498 15.7981 10.5815 15.9734 10.657 16.1315L13.194 21.4425C13.2737 21.6097 13.3991 21.751 13.5557 21.8499C13.7123 21.9488 13.8938 22.0014 14.079 22.0015H14.117C14.3087 21.9941 14.4941 21.9307 14.6502 21.8191C14.8062 21.7075 14.9261 21.5526 14.995 21.3735L21.933 3.33649C22.0011 3.15918 22.0164 2.96594 21.977 2.78013C21.9376 2.59432 21.8452 2.4239 21.711 2.28949L15.43 8.56949Z"
                                                                                        fill="currentColor"></path>
                                                                                    <path
                                                                                        opacity="0.3"
                                                                                        d="M20.664 2.06648L2.62602 9.00148C2.44768 9.07085 2.29348 9.19082 2.1824 9.34663C2.07131 9.50244 2.00818 9.68731 2.00074 9.87853C1.99331 10.0697 2.04189 10.259 2.14054 10.4229C2.23919 10.5869 2.38359 10.7185 2.55601 10.8015L7.86601 13.3365C8.02383 13.4126 8.19925 13.4448 8.37382 13.4297C8.54839 13.4145 8.71565 13.3526 8.85801 13.2505L15.43 8.56548L21.711 2.28448C21.5762 2.15096 21.4055 2.05932 21.2198 2.02064C21.034 1.98196 20.8409 1.99788 20.664 2.06648Z"
                                                                                        fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                            검색
                                                                        </button>

                                                                    </div>
                                                                    <!--begin::Search-->

                                                                    <!--end::Search-->
                                                                </div>
                                                                <!--end::Header-->
                                                                <!--begin::Card body-->
                                                                <div class="card-body pt-0">
                                                                    <div class="d-flex flex-column gap-6 mt-4">

                                                                        <!--begin::Table-->
                                                                        <table
                                                                            class="table align-middle table-row-dashed fs-6 gy-5 stdy_w_rpt_table t__center studentDayReport"
                                                                            id="studentDayReport">
                                                                            <!--begin::Table head-->
                                                                            <thead>
                                                                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                                                    <th class="w-25px sorting_none">
                                                                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                type="checkbox"
                                                                                                value="1"
                                                                                                data-kt-check="true"
                                                                                                data-kt-check-target=".widget-9-check"/>
                                                                                        </div>
                                                                                    </th>
                                                                                    <th class="min-w-80px">구분</th>
                                                                                    <th class="min-w-50px">관리그룹</th>
                                                                                    <th class="min-w-50px">이름 </th>
                                                                                    <th class="min-w-25px">학습실</th>
                                                                                    <th class="min-w-80px">좌석번호</th>
                                                                                    
                                                                                    <th class="min-w-50px">학습시작<br/>일일누적</th>
                                                                                    
                                                                                    <th class="min-w-80px">현재학습</th>
                                                                                    <th class="min-w-50px">실행/계획</th>
                                                                                    
                                                                                    
                                                                                </tr>
                                                                            </thead>
                                                                            <!--end::Table head-->
                                                                            <!--begin::Table body-->
                                                                            <!-- <tbody class="fw-semibold text-gray-600 stdy_w_rpt_tbody" id = "studentDayReport"> -->
                                                                                <!--begin::Table row-->
                                                                            
                                                                                <!--end::Table row-->
                                                                                <!--begin::Table row-->
                                                                                
                                                                                <!--end::Table row-->
                                                                            </tbody>
                                                                            <!--end::Table body-->
                                                                        </table>
                                                                        <!--end::Table-->
                                                                    </div>
                                                                </div>
                                                                <!--end::Card header-->
                                                            </div>
                                                            <!--end::Order details-->
                                                        </div>
                                                        <!--end::Main column-->
                                                    </div>
                                                </div>

                                                <!--begin::Card footer-->

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
                        <div class = "modal_student hidden">
                          <div class="bg"></div>


                          <div class = "modalBox_student">
                          <div class="modal-header">
                            <h2 class="fw-bold " data-kt-calendar="title">
                              <span id = "tab_text1"> 학생정보<span> 
                            </h2>

                            <div
                            class="btn btn-icon btn-sm btn-active-icon-primary closeBtn"
                              id="kt_modal_add_event_close"
                              
                            >
                              <span class="svg-icon svg-icon-1">
                                <svg
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <rect
                                    opacity="0.5"
                                    x="6"
                                    y="17.3137"
                                    width="16"
                                    height="2"
                                    rx="1"
                                    transform="rotate(-45 6 17.3137)"
                                    fill="currentColor"
                                  />
                                  <rect
                                    x="7.41422"
                                    y="6"
                                    width="16"
                                    height="2"
                                    rx="1"
                                    transform="rotate(45 7.41422 6)"
                                    fill="currentColor"
                                  />
                                </svg>
                              </span>
                            </div>
                          </div>

                          <div class="fv-row mb-9 modal_content">
                          <div class="card-body pt-1 card_right_body right__tab_con right__tab01_con on">
                          <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row ">
                              <!--begin::Label-->
                              <label class="required fs-5 fw-semibold mb-2"
                                >본사명</label
                              >
                              <input
                                type="text"
                                class="form-control"
                                value=""
                                name="brand"
                                id = "brand"
                                disabled
                              />
                            
                            
                            </select>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                              <!--end::Label-->
                              <label class="required fs-5 fw-semibold mb-2"
                                >지점명</label
                              >
                              <input
                                type="text"
                                class="form-control"
                                value=""
                                name="branch"
                                id = "branch"
                                disabled
                              />
                              
                            
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
                                disabled
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
                                disabled
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
                                disabled
                                
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
                                disabled
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
                                disabled
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
                                disabled
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
                                disabled
                                
                              />
                              
                              
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
                                disabled
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
                                disabled
                              />
                            </div>
                            <div class="col-md-6 fv-row ">
                              <!--begin::Label-->
                              <label class="required fs-5 fw-semibold mb-2"
                                >학년</label
                              >
                              <!--end::Label-->
                              <!--begin::Input-->

                              <input
                                type="text"
                                class="form-control "
                                value=""
                                name="grade"
                                id="grade"
                                disabled
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
                                >학습실</label
                              >
                              <input
                                type="text"
                                class="form-control "
                                value=""
                                name="room"
                                id="room"
                                disabled
                              />
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
                                disabled
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
                              
                              <input
                                type="text"
                                class="form-control "
                                value=""
                                name="group"
                                id="group"
                                disabled
                              />
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
                                  disabled
                                  
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
                                  disabled
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
                                  disabled
                                />
                                <label class="form-check-label">삭제</label>
                              </div>
                            </div>
                          </div>
                        <div>
                           

                          </div>
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

      let branchList;
      let branchId = 0;
      var today = new Date();
      let idx;
      var year = today.getFullYear();
      var month = ('0' + (today.getMonth() + 1)).slice(-2);
      var day = ('0' + today.getDate()).slice(-2);

      var dateString = year + '-' + month  + '-' + day;
      console.log("to",dateString);
      var brandId = ""
      
      var ownerId = ""
      var managerId = ""
      var roomId = ""
      var groupId = ""
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
      getDayPlanIdNone = 1
      $(document).ready(function(){

        console.log("쿠키",getCookie('dayPlanId'));
        getDayPlanId = getCookie('dayPlanId')
        const data_t ={
            "brandId": brandId,
            "ownerId": ownerId,
            "managerId": managerId,
            "status":"사용"}
        console.log("data_t",data_t)
        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/branches",
          type: "get",
          contentType:"application/json",
          data:data_t,
          datatype: "JSON",
          success: function(obj){
            branchList = obj
            console.log("branchList",branchList);
            getDayPlanIdNone = branchList[0].id
            make_table(obj);
            
          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
        })
        $('#example-date').val(dateString)
        nav = document.getElementById('menu-study');
        nav.classList.add('show');
        nav.classList.add('here');
        nav_suv = document.getElementById('study_day_plan');
        nav_suv.classList.add('active');


        if(<?=$_SESSION['roleid']?> == 1){
        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/brands",
          type: "get",
          contentType:"application/json",
          // data:studentData,
          datatype: "JSON",
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
          url: "https://farm01.bitlworks.co.kr/api/v1/users/owners",
          type: "get",
          contentType:"application/json",
          // data:studentData,
          datatype: "JSON",
          success: function(obj){
            console.log("ddd",obj);
            makeFilterOwnerList(obj)
          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
        })
        
        }else{

          console.log("???",brandId,ownerId);
          $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/brands/"+brandId,
          type: "get",
          contentType:"application/json",
          // data:studentData,
          datatype: "JSON",
          success: function(obj){
            console.log("one",obj);
            makeFilterBrandOne(obj)
          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
          })
          // 매니저나 원장으로 로그인한 경우
          // 매니저에서 타겟 원장이 없는 경우
          
          
          
        }


      }
      
      
      
      )
      function make_table(data){
        newDiv = document.getElementById('branchesList');
        console.log("nD",newDiv);
        
        newDiv.innerHTML = ``;
        for (row in data){
          row_data = data[row];

        //   newDiv.innerHTML += `
        //     <tr class="student_${parseInt(row) + 1}" id = ${row_data.id}>
        //       <td> ${parseInt(row) + 1} </td>
        //       <td class="n_empty"></td>
        //       <td class="text-muted fw-semibold">
        //         <div class="d-flex flex-stack">
        //           <div class="d-flex align-items-center flex-row-fluid flex-wrap">
        //             <div class="flex-grow-1 me-2">
        //               <a
        //                 href="/metronic8/demo1/../demo1/pages/user-profile/overview.html"
        //                 class="text-gray-800 text-hover-primary fs-6 fw-bold"
        //                 >${row_data.branch.name}</a
        //               >
                      
        //             </div>
        //           </div>
        //         </div>
        //       </td>
        //       <td>
        //                                 <!--begin::Section-->
        //                                 <div
        //                                 class="d-flex align-items-center flex-row-fluid flex-wrap"
        //                               >
        //                                 <!--begin:Author-->
        //                                 <div class="flex-grow-1 me-2">
        //                                   <a
        //                                     href="/metronic8/demo1/../demo1/pages/user-profile/overview.html"
        //                                     class="text-gray-800 text-hover-primary fs-6 fw-bold"
        //                                     >${row_data.realName}</a
        //                                   >
        //                                   <span
        //                                     class="text-muted fw-semibold d-block fs-7"
        //                                     >${row_data.school} <span>${row_data.grade}</span></span
        //                                   >
        //                                 </div>
        //                                 <!--end:Author-->
        //                               </div>
        //                               <!--end::Section-->
        //                               </td>
              
        //       <td class="text-end" id ="statusUse" >
        //         <span class="badge badge-light-success fw-bold px-4 py-3">${row_data.status}</span>
        //       </td>
              
        //     </tr>`

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
                        >${row_data.name}</a
                      >
                      
                    </div>
                  </div>
                </div>
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
                        >${row_data.name}</a
                      >
                      
                    </div>
                  </div>
                </div>
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
                        >${row_data.name}</a
                      >
                      
                    </div>
                  </div>
                </div>
              </td>
              
              
              <td class="text-end" id ="statusStop" >
                <span class="badge badge-light-danger fw-bold px-4 py-3">${row_data.status}</span>
              </td>
              
            </tr>`
          }
          





        }
        // 만약 '대기' 상태에서 클릭후  '사용' 상태로 온다면 실제쿠키에는 대기 에서 클릭한 dayplan가 저장되어있겠지만, getDayPlanId 변수에는 .ready에서 정의한 변수만 있을것임으로 
        // 다시 한번 getDayPlanId 를 최신화 시키고 현재 리스트에 해당 dayplan 가 없을 경우 리스트의 첫번째 dayplan 선택하도록 함
        getDayPlanId = getCookie('dayPlanId')
        if(getDayPlanId != undefined){
          
          console.log(document.getElementById(getDayPlanId))
          if(document.getElementById(getDayPlanId)==null){
            document.getElementById(getDayPlanIdNone).click();
          }else{
            
            document.getElementById(getDayPlanId).click();
          }
        }else{
          console.log("undef!!!!!!")
          console.log(getDayPlanIdNone )
          document.getElementById(getDayPlanIdNone).click();
        }
        
        call();
      }

      function filterClick(){
        console.log("필터 클릭");
        var fiterBrandId = ""
        var fiterOwnerId = ""
        
        
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
        }else if(document.getElementById("InFilterBrand").value == ""){
          fiterBrandId = brandId
        }
        if(document.getElementById("InFilterOwner").value != ""){
          fiterOwnerId = document.getElementById("InFilterOwner").value
        }else if(document.getElementById("InFilterOwner").value == ""){
          fiterOwnerId = ownerId
        }
        
        const data_t ={
            "brandId": fiterBrandId,
            "ownerId": fiterOwnerId,
            "managerId" : managerId,
            "status":cu
        }
        console.log("dt",data_t)
        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/branches",
          type: "get",
          contentType:"application/json",
          data:data_t,
          datatype: "JSON",
          success: function(obj){
            
            
            console.log(obj);
            branchList = obj;
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
      function resetClick(){
        console.log("reset 클릭");

        document.getElementById("InFilterBrand").value="";

        //document.getElementsByClassName("select2-selection__clear")[0].classList.add("hidden")
        console.log(document.getElementsByClassName("select2-selection__clear"))
        
        
        
        document.getElementById("InFilterOwner").value="";
       // document.getElementsByClassName("select2-selection__clear")[1].classList.add("hidden")
        
        
       // document.getElementsByClassName("select2-selection__clear")[3].classList.add("hidden")
        document.getElementsByName("InFilterStatus")[0].value = ""

        for (i = 0; i<document.getElementsByClassName("select2-selection__clear").length;i++){
         document.getElementsByClassName("select2-selection__clear")[i].classList.add("hidden")
        }
        
        console.log(document.getElementsByName("InFilterStatus"))
        
        $(".select2-selection__rendered").text("상태 선택");
        $("#select2-InFilterBrand-container").text("본사 선택");
        $("#select2-InFilterOwner-container").text("원장 선택");
        
        $('#InFilterOwner').prop('disabled',true);
        

        
        
        
       
      }
      
      function makeFilterBrandList(data){
        
        InFilterNewDiv = document.getElementById('InFilterBrand');
        console.log("data",data)
        console.log("InFilterNewDiv",InFilterNewDiv)
        
        
        InFilterNewDiv.innerHTML = ``;
        InFilterNewDiv.innerHTML = `<option value="">Select a position...</option>`;
        for (row in data){
          row_data = data[row];
          InFilterNewDiv.innerHTML += `<option value="${row_data.id}">${row_data.name}</option>`
        }
        
      }
      function makeFilterBrandOne(data){
        
        InFilterNewDiv = document.getElementById('InFilterBrand');
        
        InFilterNewDiv.innerHTML = ``;
        InFilterNewDiv.innerHTML = `<option value="">Select a position...</option>`;
        InFilterNewDiv.innerHTML += `<option value="${data.id}">${data.name}</option>`
      }
      function makeFilterOwnerOne(data){
        
        InFilterNewDiv = document.getElementById('InFilterOwner');
        
        InFilterNewDiv.innerHTML = ``;
        InFilterNewDiv.innerHTML = `<option value="">Select a position...</option>`;
        InFilterNewDiv.innerHTML += `<option value="${data.id}">${data.realName}</option>`
      }

      function handleOnChangeBrand(prop){
        console.log("brandchange",prop.value);
        
        
        $('#InFilterOwner').prop('disabled',false);
        
        
        if(<?=$_SESSION['roleid']?> == 3){
            $.ajax({
              url: "https://farm01.bitlworks.co.kr/api/v1/users/"+ownerId,
              type: "get",
              contentType:"application/json",
              // data:studentData,
              datatype: "JSON",
              success: function(obj){
                console.log("one",obj);
                makeFilterOwnerOne(obj)
              },
              error: function(xhr, status, error){
                console.log(`error: ${error}`)
                console.log(`status: ${status}`)
                return
              }
            })
          }else if(<?=$_SESSION['roleid']?> == 4){
            $.ajax({
              url: "https://farm01.bitlworks.co.kr/api/v1/users/"+ownerId,
              type: "get",
              contentType:"application/json",
              // data:studentData,
              datatype: "JSON",
              success: function(obj){
                console.log("one",obj);
                makeFilterOwnerOne(obj)
              },
              error: function(xhr, status, error){
                console.log(`error: ${error}`)
                console.log(`status: ${status}`)
                return
              }
            })
          }else{
            makeOwnerList(prop.value);
          }
        



      }
      

      function makeOwnerList(prop){
        let res;
        console.log("makeOwnerList",prop)
        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/users/owners?brandId="+prop,
          type: "GET",
          contentType:"application/json",
          async: false, 
          datatype: "JSON",
          success: function(obj){
            console.log("owner",obj)
            res = obj
          },
          error: function(xhr, status, error){
            console.log("xhr: ", xhr);
            return
          }
        })
        InFilterNewDiv = document.getElementById('InFilterOwner');
        InFilterNewDiv.innerHTML = ``;
        InFilterNewDiv.innerHTML = `<option value="">Select a position...</option>`;
        for (row in res){
          row_data = res[row];
          InFilterNewDiv.innerHTML += `<option type="button" value="${row_data.id}">${row_data.realName}</option>`;
        }
      }
      $(document).on('click','#branchesList > tr',function(){
        
        let num;
        // let td_val = $(this).parents().find().prevObject[0].className;
        // let td_val_2 = $(this).parents().find().prevObject[0].id;
        let tr_button = $(this).find().prevObject[0];
        // console.log("tr_val",tr_button);
        // console.log("tr_id",tr_button.className);
        $("#submit").addClass("submit");
        $("#submit").removeClass("add_submit");
        tr_button.classList.add('on');
        num = tr_button.id
        setCookie('dayPlanId',num,1)
        listunclick(num);
        branchId = num;
        // console.log("dateString",dateString);
        let dailyProgressesData = {
            "branchId" : branchId,
            "date" : dateString
        }


        console.log("select branch id:",branchId);
        makeRoomFilter(branchId)
        makeGroupFilter(branchId)
        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/branches/"+branchId+"/daily-progresses",
          type: "get",
          contentType:"application/json",
          data:dailyProgressesData,
          datatype: "JSON",
          success: function(obj){
            
            
            console.log("obj",obj)
            
            makeReprot(obj);
        

          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
        })
          
      })

      function makeRoomFilter(prop){
        let res;
        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/branches/"+prop+"/rooms",
          type: "GET",
          contentType:"application/json",
          async: false, 
          datatype: "JSON",
          success: function(obj){
            console.log("room_obj",obj)
            res = obj
          },
          error: function(xhr, status, error){
            console.log("xhr: ", xhr);
            return
          }
        })
        InFilterNewDiv = document.getElementById('InFilterRoom');
        
        InFilterNewDiv.innerHTML = ``;
        InFilterNewDiv.innerHTML = `<option value=" ">학습실 전체</option>`;
        for (row in res){
          row_data = res[row];
          InFilterNewDiv.innerHTML += `<option type="button" value="${row_data.id}">${row_data.name}</option>`;
        }
      }
      function makeGroupFilter(prop){
        let res;
        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/branches/"+prop+"/groups",
          type: "GET",
          contentType:"application/json",
          async: false, 
          datatype: "JSON",
          success: function(obj){
            console.log("group_obj",obj)
            res = obj
          },
          error: function(xhr, status, error){
            console.log("xhr: ", xhr);
            return
          }
        })
        InFilterNewDiv = document.getElementById('InFilterGroup');
        
        InFilterNewDiv.innerHTML = ``;
        InFilterNewDiv.innerHTML = `<option value=" ">관리그룹 전체 </option>`;
        for (row in res){
          row_data = res[row];
          InFilterNewDiv.innerHTML += `<option type="button" value="${row_data.id}">${row_data.name}</option>`;
        }
      }

      function listunclick(value){
        //console.log("unclick_v", value);
        // console.log("unclick", brandList);
        branchList.forEach((currentElement, index, array) => {
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
          
        });
      }

      function searchClick(){
      
        let dateValue = $('#example-date').val();
        let roomValue = $('#InFilterRoom').val();
        let groupValue = $('#InFilterGroup').val();
        // console.log(dateValue);
        dateString = dateValue;
        let dailyProgressesData = {
            "branchId" : branchId,
            "date" : dateString,
            "roomId"  : roomValue,
            "groupId" : groupValue,
        }
        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/branches/"+branchId+"/daily-progresses",
          type: "get",
          contentType:"application/json",
          data:dailyProgressesData,
          datatype: "JSON",
          success: function(obj){
            
            
            console.log("search",obj)
            
            makeReprot(obj);

          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
        })


      }

      
      function studentPop(prop){
          console.log("prop",prop)
          document.querySelector(".modal_student").classList.remove("hidden");



          $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/users/"+prop,
          type: "get",
          contentType:"application/json",
          // data:studentData,
          datatype: "JSON",
          success: function(obj){
            
            
            console.log(obj)
            specStudentInfo = obj;
            
            
            make_pop(specStudentInfo);

          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
        })
        }
      $(document).on("click", ".closeBtn", function(){
        document.querySelector(".modal_student").classList.add("hidden");
      })
      $(document).on("click", ".bg", function(){
        document.querySelector(".modal_student").classList.add("hidden");
      })
      function make_pop(data){
        console.log("make_pop_data",data)
        let address = data.address.split('//')
        
        // $('#brand').val(data.brand.id).prop("selected",true);
        $('#address').val(address[0])
        $('#detailAddress').val(address[1])
        // $('#address').val(data.address)
        $('#brand').val(data.brand.id)
        
        $('#branch').val(data.branch.id)
        
        $('#school').val(data.school)
        $('#grade').val(data.grade)
        
        
        $('#realName').val(data.realName)
        $('#password').val(data.password)
        $('#passwordC').val(data.password)
        console.log("sss data:",data.room)
        if(data.room==null){
          console.log("ss")
          $("#select2-room-container").text("학습실 선택");
        }else{
          $('#room').val(data.room.id)
        
        }
        if(data.group==null){
          console.log("no group")
          $("#select2-group-container").text("관리 그룹 선택");
        }else{
          $('#group').val(data.group.id)
        
        }
        
        $('#seatNumber').val(data.seatNumber)
        $('#phone').val(data.phone)
        $('#email').val(data.email)
        $('#userName').val(data.username)

        
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
      function makeReprot(data){
        console.log("makeReprot",data)
        let kk = reviseData(data)
        console.log(kk)
        
        newDayDiv = document.getElementById('studentDayReport');
        console.log("nD",newDayDiv);
        idx = 1;
          let tableColum = [
            { targets: 0, data: "id" },
            { targets: 1, data: "nowStatus" },
            { targets: 2, data: "user.groupList[0].name" },
            { targets: 3, data: "user.realName" },
            { targets: 4, data: "user.room.name"},
            { targets: 5, data: "user.seatNumber" },
            { targets: 6, data: "studyStartTime" },
            { targets: 7, data: "nowStudyTime" },
            { targets: 8, data: "doneCount" },
          ];
          let tableColumnDefs = [
            { targets: 0, render: noRendering},
            { targets: 1, className: "text-gray-800 fw-bold"},
            { targets: 2, className: "" },
            { targets: 3, render: nameRendering,className: "text-gray-800 fw-bold" },
            { targets: 4, className: "" },
            { targets: 5, className: "text-gray-800 fw-bold" },
            { targets: 6, render: startTimeRendering,className: "fw-semibold text-gray-600" },
            { targets: 7, render: nowTimeRendering, className: "fw-semibold text-gray-600" },
            { targets: 8, className: "fw-semibold text-gray-600" },

          ];

          var table = $("#studentDayReport").DataTable({
            destroy: true,
            data: kk,
            dataSrc: "",
            columns : tableColum,
            columnDefs: tableColumnDefs,
            ordering: true,
          });
        
        
        
        
        
        
        ///-------------------------------------------------------------------------------------------------------
        
        // newDayDiv.innerHTML = ``;
        // for (row in data){
          
        //   row_data = data[row];
        //   nst =row_data.nowStudyTime.split(':')
          
        //   var hour = parseInt(nst[0])*3600
        //   var min = parseInt(nst[1])*60
        //   var sec = parseInt(nst[2])
        //   sumNowTime = hour+min+sec
        //   console.log("nst",hour+min+sec)
        //   if ( sumNowTime>= 3000){
        //     nowTime = "nowTimeBlue";
        //   }else{
        //     nowTime = "nowTimeGrey";
        //   }
        //   if(row_data.user.groupList[0]==null){
        //     newDayDiv.innerHTML += 
        //                                                                         `<tr>
                                                                                    
        //                                                                             <td>
        //                                                                                 <div class="form-check form-check-sm form-check-custom form-check-solid">
        //                                                                                     <input class="form-check-input widget-9-check" type="checkbox" value="1"/>
        //                                                                                 </div>
        //                                                                             </td>
                                                                                    
        //                                                                             <td class="text-gray-800 fw-bold">${row_data.nowStatus}</td>
        //                                                                             <td></td>
        //                                                                             <td class="text-gray-800 fw-bold">${row_data.user.realName}</td>
        //                                                                             <td>${row_data.user.room.name}</td>
        //                                                                             <td class="text-gray-800 fw-bold">${row_data.user.seatNumber}</td>
                                                                                    
        //                                                                             <td>${row_data.studyStartTime} <br/>${row_data.totalStudyTime}</td>
                                                                                    
        //                                                                             <td class = ${nowTime}>${row_data.nowStudyTime}</td>
        //                                                                             <td>${row_data.doneCount}/${row_data.toDoCount}/${row_data.progressRate}</td>
                                                                                    
                                                                                    
                                                                                    
                                                                                    
        //                                                                         </tr>`
        //   }else{
        //     newDayDiv.innerHTML += 
        //                                                                         `<tr>
                                                                                    
        //                                                                             <td>
        //                                                                                 <div class="form-check form-check-sm form-check-custom form-check-solid">
        //                                                                                     <input class="form-check-input widget-9-check" type="checkbox" value="1"/>
        //                                                                                 </div>
        //                                                                             </td>
                                                                                    
        //                                                                             <td class="text-gray-800 fw-bold">${row_data.nowStatus}</td>
        //                                                                             <td>${row_data.user.groupList[0].name}</td>
        //                                                                             <td class="text-gray-800 fw-bold">${row_data.user.realName}</td>
        //                                                                             <td>${row_data.user.room.name}</td>
        //                                                                             <td class="text-gray-800 fw-bold">${row_data.user.seatNumber}</td>
                                                                                    
        //                                                                             <td>${row_data.studyStartTime} <br/>${row_data.totalStudyTime}</td>
                                                                                    
        //                                                                             <td class = ${nowTime}>${row_data.nowStudyTime}</td>
        //                                                                             <td>${row_data.doneCount}/${row_data.toDoCount}/${row_data.progressRate}</td>
                                                                                    
                                                                                    
                                                                                    
        //                                                                           </tr>`
        //   }
          
        // //  if(row_data.nowStudyTime >="00:00:00"){
        // //   nowStudy = document.getElementById('nowStudyTime');
        // //   // nowStudy.classList.add('nowStudy');
        // //   console.log(nowStudy)
        // //  }
        // }
        
     

        ///-------------------------------------------------------------------------------------------------------
    
        function noRendering(data, type, row){
              return`<div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input widget-9-check" type="checkbox" value="1"/>
                    </div>`
          // return `<div class="form-check form-check-sm form-check-custom form-check-solid" id = ${data} >
          //           <span class="text-gray-600 text-hover-primary ms-4">${idx++}</span>
          //         </div>`;
        } 

        function startTimeRendering(data, type, row){
          // console.log("nowtime",data)
          tt =data.split('/')
          
          

          return `<div>${tt[0]}<br/>${tt[1]}</div>`
        } 

        function nameRendering(data, type, row){
          // console.log("nowtime",data)
          console.log("row",row.user.id)
          let bb = row.user.id
          

          return `<div class = "namePop" onclick="studentPop(${bb})">${data}</div>`
        } 
        

        function nowTimeRendering(data, type, row){
          // console.log("nowtime",data)
          nst =data.split(':')
          
          var hour = parseInt(nst[0])*3600
          var min = parseInt(nst[1])*60
          var sec = parseInt(nst[2])
          sumNowTime = hour+min+sec
          // console.log("nst",hour+min+sec)
          if ( sumNowTime>= 3000){
            nowTime = "nowTimeBlue";
          }else{
            nowTime = "nowTimeGrey";
          }

          return `<div class = ${nowTime}>${data}</div>`
        } 

        

        function reviseData(data){
          // 7번열과 9번열의 데이터를 바꾸어줌
          let temp = []
          
          
          for (row in data){
            row_data = data[row];
            // console.log("row_data",row_data)
            row_data.studyStartTime = row_data.studyStartTime+"/"+row_data.totalStudyTime
            
            row_data.doneCount = row_data.doneCount+"/"+row_data.toDoCount+"("+row_data.progressRate+")"
            console.log("row_data",row_data)
            if(row_data.user.room==null){
              row_data.user.room = {
                name : ""
              }
            }
            
            temp.push(row_data)
          }
          
          return temp
          
        }
      

      
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
