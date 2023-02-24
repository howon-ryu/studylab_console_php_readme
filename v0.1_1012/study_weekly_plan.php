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
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/new_css/common.css" />
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
                      학생학습계획
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
                      <li class="breadcrumb-item text-muted">학생학습계획</li>
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
                        
                      <div id="kt_app_content" class="app-content flex-column-fluid">
                        <!--begin::Content container-->
                        <div id="kt_app_content_container">
                          <!--begin::Card-->
                          <div class="card card-flush h-xl-100 card__right">
                            <!--begin::Card body-->
                            <div class="card-body">
                              <!--begin::Calendar-->
                              <div id="kt_calendar_app"></div>
                              <!--end::Calendar-->
                            </div>
                            <!--end::Card body-->
                          </div>
                          <!--end::Card-->
                          <!--begin::Modals-->
                          <!--begin::Modal - New Product-->
                          <div class="modal fade" id="kt_modal_add_event" tabindex="-1" aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                              <!--begin::Modal content-->
                              <div class="modal-content">
                                <!--begin::Form-->
                                <form class="form" action="#" id="kt_modal_add_event_form">
                                  <!--begin::Modal header-->
                                  <div class="modal-header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bold" data-kt-calendar="title">Add Event</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary" id="kt_modal_add_event_close" data-bs-dismiss="modal">
                                      <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                      <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                          <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                        </svg>
                                      </span>
                                      <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Close-->
                                  </div>
                                  <!--end::Modal header-->
                                  <!--begin::Modal body-->
                                  <div class="modal-body py-10 px-lg-17">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-9 enen">
                                      <div class = "grid_container">
                                        <!--begin::Label-->
                                        <div class = "grid_item1">
                                          <label class="fs-6 fw-semibold required mb-2">학습분류</label>
                                          <!--end::Label-->
                                          <!--begin::Input-->
                                          <!-- <input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_code" /> -->

                                            <select
                                            id = "eventCode"
                                            name="calendar_event_code"
                                            class="form-select form-select-solid mb-4"
                                            data-kt-select2="true"
                                            data-placeholder="선택"
                                            
                                            data-allow-clear="true"
                                            >
                                            </select>
                                        


                                        </div>
                                        <div class = "grid_item2">
                                          <label class="fs-6 fw-semibold required mb-2">학습항목</label>
                                          <!--end::Label-->
                                          <!--begin::Input-->
                                          <input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_name" />
                                        </div>
                                      </div>
                                      <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-9" hidden>
                                      <!--begin::Label-->
                                      <label class="fs-6 fw-semibold mb-2">Event Description</label>
                                      <!--end::Label-->
                                      <!--begin::Input-->
                                      <input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_description" />
                                      <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-9" hidden>
                                      <!--begin::Label-->
                                      <label class="fs-6 fw-semibold mb-2">Event Location</label>
                                      <!--end::Label-->
                                      <!--begin::Input-->
                                      <input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_location" />
                                      <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-9" hidden>
                                      <!--begin::Checkbox-->
                                      <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" id="kt_calendar_datepicker_allday" />
                                        <span class="form-check-label fw-semibold" for="kt_calendar_datepicker_allday">All Day</span>
                                      </label>
                                      <!--end::Checkbox-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row row-cols-lg-2 g-10">
                                      <div class="col">
                                        <div class="fv-row mb-9">
                                          <!--begin::Label-->
                                          <label class="fs-6 fw-semibold mb-2 required">학습일자</label>
                                          <!--end::Label-->
                                          <!--begin::Input-->
                                          <input class="form-control form-control-solid" name="calendar_event_start_date" placeholder="Pick a start date" id="kt_calendar_datepicker_start_date" />
                                          <!--end::Input-->
                                        </div>
                                      </div>
                                      <div class="col" data-kt-calendar="datepicker">
                                        <div class="fv-row mb-9">
                                          <!--begin::Label-->
                                          <label class="fs-6 fw-semibold mb-2">시작시간</label>
                                          <!--end::Label-->
                                          <!--begin::Input-->
                                          <input class="form-control form-control-solid" name="calendar_event_start_time" placeholder="Pick a start time" id="kt_calendar_datepicker_start_time" />
                                          <!--end::Input-->
                                        </div>
                                      </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row row-cols-lg-2 g-10">
                                      <div class="col">
                                        <div class="fv-row mb-9" hidden>
                                          <!--begin::Label-->
                                          <label class="fs-6 fw-semibold mb-2 required">Event End Date</label>
                                          <!--end::Label-->
                                          <!--begin::Input-->
                                          <input class="form-control form-control-solid" name="calendar_event_end_date" placeholder="Pick a end date" id="kt_calendar_datepicker_end_date" />
                                          <!--end::Input-->
                                        </div>
                                      </div>
                                      <div class="col" data-kt-calendar="datepicker">
                                        <div class="fv-row mb-9">
                                          <!--begin::Label-->
                                          <label class="fs-6 fw-semibold mb-2">종료시간</label>
                                          <!--end::Label-->
                                          <!--begin::Input-->
                                          <input class="form-control form-control-solid" name="calendar_event_end_time" placeholder="Pick a end time" id="kt_calendar_datepicker_end_time" />
                                          <!--end::Input-->
                                        </div>
                                      </div>
                                    </div>
                                    <!--end::Input group-->
                                  </div>
                                  <!--end::Modal body-->
                                  <!--begin::Modal footer-->
                                  <div class="modal-footer flex-center">
                                    <!--begin::Button-->
                                    <button type="reset" id="kt_modal_add_event_cancel" class="btn btn-light me-3">취소</button>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="button" id="kt_modal_add_event_submit" class="btn btn-primary">
                                      <span class="indicator-label">저장</span>
                                      <span class="indicator-progress">잠시만기다려주세요...
                                      <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <!--end::Button-->
                                  </div>
                                  <!--end::Modal footer-->
                                </form>
                                <!--end::Form-->
                              </div>
                            </div>
                          </div>
                          <!--end::Modal - New Product-->
                          <!--begin::Modal - New Product-->
                          <div class="modal fade" id="kt_modal_view_event" tabindex="-1" aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                              <!--begin::Modal content-->
                              <div class="modal-content">
                                <!--begin::Modal header-->
                                <div class="modal-header border-0 justify-content-end">
                                  <!--begin::Edit-->
                                  <div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-primary me-2" data-bs-toggle="tooltip" data-bs-dismiss="click" title="수정하기" id="kt_modal_view_event_edit">
                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                    <span class="svg-icon svg-icon-2">
                                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                                      </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                  </div>
                                  <!--end::Edit-->
                                  <!--begin::Edit-->
                                  <div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-danger me-2" data-bs-toggle="tooltip" data-bs-dismiss="click" title="삭제하기" id="kt_modal_view_event_delete">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                    <span class="svg-icon svg-icon-2">
                                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                        <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                        <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                      </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                  </div>
                                  <!--end::Edit-->
                                  <!--begin::Close-->
                                  <div class="btn btn-icon btn-sm btn-color-gray-500 btn-active-icon-primary" data-bs-toggle="tooltip" title="Hide Event" data-bs-dismiss="modal">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                      </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                  </div>
                                  <!--end::Close-->
                                </div>
                                <!--end::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body pt-0 pb-20 px-lg-17">
                                  <!--begin::Row-->
                                  <div class="d-flex">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-muted me-5">
                                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
                                        <path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
                                        <path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
                                      </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <div class="mb-9">
                                      <!--begin::Event name-->
                                      <div class="d-flex align-items-center mb-2">
                                        <span class="fs-3 fw-bold me-3" data-kt-calendar="event_code"></span>
                                        <span class="fs-3 fw-bold me-3" data-kt-calendar="event_name"></span>
                                        <span class="badge badge-light-success" data-kt-calendar="all_day"></span>
                                      </div>
                                      <!--end::Event name-->
                                      <!--begin::Event description-->
                                      <div class="fs-6" data-kt-calendar="event_description" hidden></div>
                                      <!--end::Event description-->
                                    </div>
                                  </div>
                                  <!--end::Row-->
                                  <!--begin::Row-->
                                  <div class="d-flex align-items-center mb-2">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-success me-5">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <circle fill="currentColor" cx="12" cy="12" r="8" />
                                      </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Event start date/time-->
                                    <div class="fs-6">
                                      <span class="fw-bold">시작시간</span>
                                      <span data-kt-calendar="event_start_date"></span>
                                    </div>
                                    <!--end::Event start date/time-->
                                  </div>
                                  <!--end::Row-->
                                  <!--begin::Row-->
                                  <div class="d-flex align-items-center mb-9">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-danger me-5">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <circle fill="currentColor" cx="12" cy="12" r="8" />
                                      </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Event end date/time-->
                                    <div class="fs-6">
                                      <span class="fw-bold">종료시간</span>
                                      <span data-kt-calendar="event_end_date"></span>
                                    </div>
                                    <!--end::Event end date/time-->
                                  </div>
                                  <!--end::Row-->
                                  <!--begin::Row-->
                                  <div class="d-flex align-items-center" hidden>
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-muted me-5" hidden>
                                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
                                        <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
                                      </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Event location-->
                                    <div class="fs-6" data-kt-calendar="event_location" hidden></div>
                                    <!--end::Event location-->
                                  </div>
                                  <!--end::Row-->
                                </div>
                                <!--end::Modal body-->
                              </div>
                            </div>
                          </div>
                          <!--end::Modal - New Product-->
                          <!--end::Modals-->
                        </div>
                        <!--end::Content container-->
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
      var user_id = 0;
      let studentList;
      let studentId = 0;
      var today = new Date();

      var year = today.getFullYear();
      var month = ('0' + (today.getMonth() + 1)).slice(-2);
      var day = ('0' + today.getDate()).slice(-2);
      
      var dateString = year + '-' + month  + '-' + day;
      
      console.log("to",dateString);
      
      let start = new Date(today.setDate(today.getDate() - 7))
      var year2 = start.getFullYear();
      var month2 = ('0' + (start.getMonth() + 1)).slice(-2);
      var day2 = ('0' + start.getDate()).slice(-2);
      var dateString2 = year2 + '-' + month2  + '-' + day2;
      

      let obj_arr =[]
      let tempBranchList = []

       // data_t 를 위한  변수 -start
       var brandId = ""
      var branchId = ""
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
      if(<?=$branchId?>!=0){
        branchId = <?=$branchId?>
      }else{
        branchId = ""
      }
      let getWeeklyPlanIdNone = 1
      // data_t 를 위한  변수 -end
      $(document).ready(function(){

        console.log("쿠키",getCookie('weeklyPlanId'));
        getWeeklyPlanId = getCookie('weeklyPlanId')
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
              console.log("studentList",studentList);
              getWeeklyPlanIdNone = studentList[0].id
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
              console.log("studentList",studentList);
              getWeeklyPlanIdNone = studentList[0].id
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
            getWeeklyPlanIdNone = studentList[0].id
            make_table(obj);
            
          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
        })
      }




    
        
        $('#startDate').val(dateString2)
        $('#endDate').val(dateString)


        nav = document.getElementById('menu-study');
        nav.classList.add('show');
        nav.classList.add('here');
        nav_suv = document.getElementById('study_weekly_plan');
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
        
       
        }else{

          console.log("???",brandId,ownerId);
          $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/brands/"+brandId,
          type: "get",
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

      })
        
        
        
      
      
      
      
      
      function make_table(data){
        newDiv = document.getElementById('studentsList');
        console.log("nD",newDiv);
        
        newDiv.innerHTML = ``;
        for (row in data){
          row_data = data[row];

         

          if(row_data.status == "사용"){
            newDiv.innerHTML += `
            <tr class="student_${parseInt(row) + 1}" id = ${row_data.id}>
              <td> ${parseInt(row) + 1} </td>
              <td class="n_empty"></td>
              <td class="text-muted fw-semibold studentBranchId" id = ${row_data.branch.id}>
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
          





         
        }


        // 만약 '대기' 상태에서 클릭후  '사용' 상태로 온다면 실제쿠키에는 대기 에서 클릭한 weeklyPlan가 저장되어있겠지만, getWeeklyPlanId 변수에는 .ready에서 정의한 변수만 있을것임으로 
        // 다시 한번 getWeeklyPlanId 를 최신화 시키고 현재 리스트에 해당 weeklyPlan 가 없을 경우 리스트의 첫번째 weeklyPlan를 선택하도록 함
        getWeeklyPlanId = getCookie('weeklyPlanId')


        if(getWeeklyPlanId != undefined){
          
          if(document.getElementById(getWeeklyPlanId)==null){
            document.getElementById(getWeeklyPlanIdNone).click();
          }else{
            document.getElementById(getWeeklyPlanId).click();
          }
        }else{
          console.log("undef!!!!!!")
          document.getElementById(getWeeklyPlanIdNone).click();
        }
        
        call();
        
      }




      $(document).on('click','#studentsList > tr',function(){
        
        let num;
        // let td_val = $(this).parents().find().prevObject[0].className;
        // let td_val_2 = $(this).parents().find().prevObject[0].id;
        let tr_button = $(this).find().prevObject[0];
        let studentBranchId = $(this).find('.studentBranchId')[0].id
        // console.log("tr_val",tr_button);
        // console.log("tr_id",tr_button.className);
        $("#submit").addClass("submit");
        $("#submit").removeClass("add_submit");
        tr_button.classList.add('on');
        num = tr_button.id
        console.log("tb!!",studentBranchId);
        makeCodeList(studentBranchId)
        console.log("시작, 끝:",dateString2,dateString)
        setCookie('weeklyPlanId',num,1)
        listunclick(num);
        studentId = num;
        user_id = studentId;
        console.log("select student id:",studentId);
        calendarcall();

      })

      function makeFilterBrandList(data){
        
        InFilterNewDiv = document.getElementById('InFilterBrand');
        console.log("data",data)
        console.log("InFilterNewDiv",InFilterNewDiv)
        
        
        InFilterNewDiv.innerHTML = ``;
        InFilterNewDiv.innerHTML = `<option value="">본사를 선택해주세요</option>`;
        for (row in data){
          row_data = data[row];
          InFilterNewDiv.innerHTML += `<option value="${row_data.id}">${row_data.name}</option>`
        }
        
      }





      function makeFilterBrandOne(data){
        
        InFilterNewDiv = document.getElementById('InFilterBrand');
        
        InFilterNewDiv.innerHTML = ``;
        InFilterNewDiv.innerHTML = `<option value="">본사를 선택해주세요</option>`;
        InFilterNewDiv.innerHTML += `<option value="${data.id}">${data.name}</option>`
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
        
        
        InFilterNewDiv.innerHTML = ``;
        InFilterNewDiv.innerHTML = `<option value="">Select a position...</option>`;
        for (row in res){
          
          row_data = res[row];
          InFilterNewDiv.innerHTML += `<option type="button" value="${row_data.id}">${row_data.name}</option>`;
        }
      }
      function makeRoomList(prop){
        let res;
        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/branches/"+prop+"/rooms",
          type: "GET",
          contentType:"application/json",
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
        InFilterNewDiv = document.getElementById('InFilterRoom');
        
        InFilterNewDiv.innerHTML = ``;
        InFilterNewDiv.innerHTML = `<option value="">Select a position...</option>`;
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
          },
          error: function(xhr, status, error){
            console.log("xhr: ", xhr);
            return
          }
        })
        InFilterNewDiv = document.getElementById('InFilterGroup');
        
        
        InFilterNewDiv.innerHTML = ``;
        InFilterNewDiv.innerHTML = `<option value="">Select a position...</option>`;
        for (row in res){
          row_data = res[row];
          InFilterNewDiv.innerHTML += `<option type="button" value="${row_data.id}">${row_data.name}</option>`;
        }
      }
      function makeCodeList(prop){
        let res;
        console.log("codeList",prop)
        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/branches/"+prop+"/item-codes",
          type: "GET",
          contentType:"application/json",
          async: false, 
          datatype: "JSON",
          success: function(obj){
            console.log("codes",obj)
            res = obj
          },
          error: function(xhr, status, error){
            console.log("xhr: ", xhr);
            return
          }
        })
        newDiv = document.getElementById('eventCode');
        
        
        newDiv.innerHTML = ``;
        newDiv.innerHTML = `<option value=" ">기타</option>`;
        for (row in res){
          row_data = res[row];
          newDiv.innerHTML += `<option type="button" value="${row_data.id}">${row_data.name}</option>`;
        }
      }

      function listunclick(value){
        //console.log("unclick_v", value);
        // console.log("unclick", brandList);
        studentList.forEach((currentElement, index, array) => {
          //console.log("currentElement", currentElement);
          
          if (currentElement.id != value) {
            const untempbtn = document.getElementsByClassName(
              `student_` + (index+1)
            );
            // console.log("index", index);
            // console.log(untempbtn)
            
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

      function addplan(e){
      console.log("!add!");
      if(e.allDay == true){
        e.start = e.start.substr(0,10)+"T00:00:00";
        e.end = e.start.substr(0,10)+"T23:59:59";
      }
      console.log("e",e);
      $.ajax({
              url: "https://farm01.bitlworks.co.kr/api/v1/items/study-plans",
              type: "post",
              contentType:"application/json",
              data:JSON.stringify({
              
                "studentId": user_id,
                "place": e.location,
                "title": e.title,
                "description": e.description,
                "isAllDay": e.allDay,
                "startTime": e.start,
                "endTime": e.end,
                "itemCodeId": e.itemCode,
              })
              ,
              datatype: "JSON",
              success: function(obj){
                console.log("su:",obj);
                //window.location.reload();
              },
              error: function(xhr, status, error){
                console.log('xhr:', xhr);
                console.log('error:', error);
                console.log('status:', status);
                return
              }
      });
      
      
    }
    function modifyplan(e){
      console.log("!modify!");
      console.log(e);
      $.ajax({
              url: "https://farm01.bitlworks.co.kr/api/v1/items/study-plans/"+e.id,
              type: "put",
              contentType:"application/json",
              data:JSON.stringify({
                "place": e.location,
                "title": e.title,
                "description": e.description,
                "startTime": e.start,
                "endTime": e.end,
                "isAllDay": e.allDay,
                "itemCodeId": e.itemCode,
              })
              ,
              datatype: "JSON",
              success: function(obj){
                console.log("obj: ", obj);
                window.location.reload();
              },
              error: function(xhr, status, error){
                console.log("xhr: ", xhr);
                return;
              }
      });
    }
    function deleteplan(e){
      console.log(e);
      $.ajax({
              url: "https://farm01.bitlworks.co.kr/api/v1/items/study-plans/"+e,
              type: "delete",
              contentType:"application/json",
              data:JSON.stringify({
                "itemId": e
              })
              ,
              datatype: "JSON",
              success: function(obj){
                
                console.log("su:",obj);
                
                window.location.reload();
              },
              error: function(xhr, status, error){
                console.log(`error: ${error}`)
                console.log(`status: ${status}`)
                
                return
              }
      });
      
      
    }
      
    


    function filterClick(){
        console.log("필터 클릭");
        var fiterBrandId = ""
        var fiterBranchId = ""
        var fiterRoomId = ""
        var fiterGroupId = ""
        
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
          fiterBrandId  = brandId
        }
        if(document.getElementById("InFilterBranch").value != ""){
          fiterBranchId = document.getElementById("InFilterBranch").value
        }else{
          fiterBranchId  = ""
        }
        if(document.getElementById("InFilterRoom").value != ""){
          fiterRoomId = document.getElementById("InFilterRoom").value
        }else{
          fiterRoomId  = ""
        }
        if(document.getElementById("InFilterGroup").value != ""){
          fiterGroupId = document.getElementById("InFilterGroup").value
        }else{
          fiterGroupId  = ""
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
    <script src="assets/plugins/custom/fullcalendar/fullcalendar.js"></script>
    <script src="assets/plugins/custom/fullcalendar/locales-all.js"></script>
    <script src="assets/js/custom/apps/ecommerce/sales/save-order.js"></script>
    <script src="assets/js/custom/apps/projects/list/list.js"></script>
    <script src="assets/js/custom/apps/calendar/calendar.js"></script>
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
