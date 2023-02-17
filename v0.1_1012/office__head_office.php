<?php
  require_once('media_header.php');
?>


<!DOCTYPE html>
<html lang="ko">
  <!--begin::Head-->
  <head>
    <base href="" />
    
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
    <!--begin::Vendor Stylesheets(used by this page)-->
    <link
      href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css"
      rel="stylesheet"
      type="text/css"
    />
    <link rel="stylesheet" href="assets/css/new_css/common.css" />
    <link
      href="assets/plugins/custom/datatables/datatables.bundle.css"
      rel="stylesheet"
      type="text/css"
    />
    <?php
      require_once('head.php');
    ?>
    <!--end::Vendor Stylesheets-->
    
    
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
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
      <!--begin::Page-->
      <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        <?php require_once('header.php')?>
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
                      본사관리
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
                          >학원관리</a
                        >
                      </li>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                      </li>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <li class="breadcrumb-item text-muted">본사관리</li>
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
                class="app-content flex-column-fluid head_ofc_content"
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
                              <ul class="nav mb-2 mb-sm-0 card__left_tab filter_ul">
                              <li class = "arrayFilter">
                                <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button
                                  type="button"
                                  class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                  data-kt-menu-trigger="click"
                                  data-kt-menu-placement="bottom-end"
                                  
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
                                <form>
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
                                      <div>
                                        <select
                                          class="form-select form-select-solid"
                                          data-kt-select2="true"
                                          data-placeholder="학원본사 상태 선택"
                                          data-dropdown-parent="#kt_menu_631f0553006ad"
                                          data-allow-clear="true"
                                          name = "brandStatusSelect"
                                          id = "InFilterStatus"
                                        >
                                          <option></option>
                                          <option value="1" selected>
                                            사용중인 학원본사
                                          </option>
                                          <option value="2">
                                            대기중인 학원본사
                                          </option>
                                          <option value="3">
                                            삭제된 학원본사
                                          </option>
                                        </select>
                                      </div>
                                      <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                      <button
                                        type="button"
                                        class="btn btn-sm btn-light btn-active-light-primary me-2"
                                        onclick = "resetClick()"
                                      >
                                        리셋
                                      </button>
                                      <button
                                        type="button"
                                        class="btn btn-sm btn-primary"
                                        data-kt-menu-dismiss="true"
                                        onclick = "filterClick()"
                                      >
                                        적용
                                      </button>
                                      
                                    </div>
                                    <!--end::Actions-->
                                  </div>
                                  <!--end::Form-->
                                </form>
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Menu-->
                              </div>
                                </li>
                                <li class="nav-item m-0" >
                                  <a
                                    class="btn btn-sm btn-icon btn-bg-light btn-primary me-4 addBtn"
                                    data-bs-toggle="tab"
                                    onclick = "addClick()"                                    

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
                            <!-- begin::개발요청 필터옵션선택내용 표시되는 부분 -->
                            <div class="selected__txt_wrap" hidden>
                              <!-- 1.필터 옵션 선택시 : 선택된 내용 span태그(.selected__txt) 생김 택스트로 표시되게 해주세요. -->
                              <!-- 2.필터 옵션 선택없을때 : span태그(.selected__txt) 태그 자체가 모두 없어지면 됩니다. -->
                              <!-- 없는경우는 office_branch_office.html 파일에 되어있습니다. -->
                              <span class="d-flex align-items-center fs-7 fw-bold text-gray-600 mb-2 selected__txt">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                    <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"></path>
                                  </svg>
                                </span>
                                <!--end::Svg Icon-->
                                사용중인 학원본사
                              </span>
                           
                            </div>
                            <!-- end::개발요청 필터옵션선택내용 표시되는 부분 -->
                            <!--begin::Search-->
                            <div
                              class="d-flex align-items-center position-relative my-1 card_l_h_sch"
                              hidden
                            >
                              <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                              <span
                                hidden
                                class="svg-icon svg-icon-3 position-absolute ms-3"
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
                              <input type="text" data-kt-ecommerce-edit-order-filter="search" class="form-control form-control-solid w-100 w-lg-50 ps-14 input__slim" placeholder="Search"  hidden/>
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
                                      <th class="min-w-150px">본사명/대표자명</th>
                                      <th class="min-w-25px n_empty"></th>
                                      <th class="min-w-50px text-end me-4">상태</th>
                                    </tr>
                                  </thead>
                                  <!--end::Head-->
                                  <!--begin::Body-->
                                  <tbody class="fs-6" id="brandsList">
                                   
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
                      <form method = "PUT" id = "form1" name = "form1">
                      <div class="card card-flush h-xl-100 card__right">
                        <!--begin::Card header-->
                        <div class="card-header py-7">
                          <!--begin::Tabs-->
                          <div
                            class="card-title mb-0 gap-4 gap-lg-10 gap-xl-15 nav nav-tabs border-bottom-0"
                            data-kt-table-widget-3="tabs_nav"
                          >
                            <!--begin::Tab item-->
                            <div
                              class="fs-4 fw-bold pb-3 border-bottom border-3 border-primary cursor-pointer right__tab_btn right__tab01_btn on"
                              data-kt-table-widget-3="tab"
                              data-kt-table-widget-3-value="Show All"
                            >
                              상세정보
                            </div>
                            <!--end::Tab item-->
                          </div>
                          <!--end::Tabs-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-1 card_right_body right__tab_con right__tab01_con on">
                          <!--begin::Input group-->
                          <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row ">
                              <!--begin::Label-->
                              <label class="required fs-5 fw-semibold mb-2"
                                >본사명</label
                              >
                              <!--end::Label-->
                              <!--begin::Input-->
                              <input
                                type="text"
                                class="form-control"
                                value=""
                                name="brandName"
                                id = "brandName"
                              />
                              
                              
                              <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                              <!--end::Label-->
                              <label class="required fs-5 fw-semibold mb-2"
                                >사업자등록증</label
                              >
                              <!--end::Label-->
                              <!--end::Input-->
                              <input
                                type="text"
                                class="form-control"
                                value=""
                                name="businessRegistrationNumber"
                                id = "businessRegistrationNumber"
                              />
                              <!--end::Input-->
                            </div>
                            <!--end::Col-->
                          </div>
                          <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row ">
                              <!--begin::Label-->
                              <label class="required fs-5 fw-semibold mb-2"
                                >본사전화번호</label
                              >
                              <!--end::Label-->
                              <!--begin::Input-->
                              <input
                                type="text"
                                class="form-control"
                                value=""
                                name="phone"
                                id = "phone"
                              />
                              
                              
                              <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                              <!--end::Label-->
                              <label class="required fs-5 fw-semibold mb-2"
                                >본사이메일</label
                              >
                              <!--end::Label-->
                              <!--end::Input-->
                              <input
                                type="text"
                                class="form-control"
                                value=""
                                name="email"
                                id = "email"
                              />
                              <!--end::Input-->
                            </div>
                            <!--end::Col-->
                          </div>
                          <!--end::Input group-->
                          <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                              <!--begin::Label-->
                              <label class="required fs-5 fw-semibold mb-2"
                                >대표자명</label
                              >
                              <!--end::Label-->
                              <!--begin::Input-->
                              <input
                                type="text"
                                class="form-control"
                                value=""
                                name="headRealName"
                                id = "headRealName"
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
                                name="headUserName"
                                id = "headUserName"
                              />
                              <!--end::Input-->
                            </div>
                            <!--end::Col-->
                          </div>
                          <!--begin::Input group-->
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
                          <!--end::Input group-->
                          <!--begin::Input group-->
                          
                          <!--end::Input group-->
                          <!--begin::Input group-->
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
                                name="headPhone"
                                id="headPhone"
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
                                name="headEmail"
                                id = "headEmail"
                              />
                              <!--end::Input-->
                            </div>
                            <!--end::Col-->
                          </div>
                          <div class="row mb-5 ">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row input_50 ">
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
                          <!--end::Input group-->
                          <!--begin::Input group-->
                          
                          <!--end::Input group-->
                          <!--begin::Input group-->
                          <div class="row mb-5 ">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                              <!--begin::Label-->
                              <label class="fs-5 fw-semibold mb-2"
                                >홈페이지</label
                              >
                              <!--end::Label-->
                              <!--begin::Input-->
                              <input
                                type="text"
                                class="form-control "
                                value=""
                                name="homePageUrl"
                                id="homePageUrl"
                              />
                            </div>
                            <div class="col-md-6 fv-row input_50">
                              <!--begin::Label-->
                              <label class="required fs-5 fw-semibold mb-2"
                                >도메인</label
                              >
                              <!--end::Label-->
                              <!--begin::Input-->
                              <input
                                type="text"
                                class="form-control"
                                value=""
                                name="domain"
                                id = "domain"
                              />
                              <span class="me-3">.here.study</span>
                              <button
                                type="button"
                                data-kt-ecommerce-settings-type="cancel"
                                class="btn btn-primary doubleCheck"
                                onclick = "duplicateCheck()"
                                style = "display : none;"
                                id="doubleCheck"
                              >
                                중복확인
                              </button>
                              <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row check__use_wrap" hidden>
                              <!--end::Label-->
                              <label class="fs-5 fw-semibold mb-2"
                                >학습관리</label
                              >
                              <!--end::Label-->
                              <!--end::Input-->
                              <div
                                class="form-check form-check-custom form-check-solid"
                              >
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  value=""
                                  id="same_as_billing"
                                  checked="checked"
                                />
                                <label
                                  class="form-check-label"
                                  for="same_as_billing"
                                  >학습관리 사용</label
                                >
                              </div>
                              <!--end::Input-->
                            </div>
                            <!--end::Col-->
                          </div>
                          <div class="row mb-5 ">
                            <!--begin::Col-->
                            
                              <div class="col-md-6 fv-row">
                                <!--begin::Label-->
                                <label class="fs-5 fw-semibold mb-2"
                                  >본사 로고 이미지 (권장 사이즈 120px*30px)</label
                                ><br/>
                                <input class="input_file" type="file" id="logo_img" name="logo_img" />
                                <!--end::Label-->
                                <!--begin::Input-->
                                
                              </div>
                              <div class="col-md-6 fv-row ">
                                <!--begin::Label-->
                                <label class="required fs-5 fw-semibold mb-2"
                                  >본사로고 파비콘</label
                                ><br/>
                                <input class="input_file" type="file" id="favicon_img" name="favicon_img" />
                                <!--end::Label-->
                                <!--begin::Input-->
                                
                                
                                <!--end::Input-->
                              </div>
                            
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row check__use_wrap" hidden>
                              <!--end::Label-->
                              <label class="fs-5 fw-semibold mb-2"
                                >학습관리</label
                              >
                              <!--end::Label-->
                              <!--end::Input-->
                              <div
                                class="form-check form-check-custom form-check-solid"
                              >
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  value=""
                                  id="same_as_billing"
                                  checked="checked"
                                />
                                <label
                                  class="form-check-label"
                                  for="same_as_billing"
                                  >학습관리 사용</label
                                >
                              </div>
                              <!--end::Input-->
                            </div>
                            <!--end::Col-->
                          </div>
                          <!--end::Input group-->
                          <!--begin::Input group-->
                          <!--begin::Col-->
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
                          <!--end::Col-->
                          </div>
                          <!--end::Input group-->
                          <!--begin::Card footer-->
                          <div class="card-footer d-flex justify-content-end py-6">
                            <button type="reset" class="btn btn-light btn-active-light-primary me-2">취소</button>
                            <button type="button" onclick ="brandput()" class="btn btn-primary" id = "putFlag" >변경사항 저장</button>
                            <button type="button" onclick ="brandpost()" class="btn btn-primary" id = "postFlag" style = "display : none;">추가</button>
                          </div>
                          <!--end::Card footer-->
                        </div>
                        <!--end::Card body-->
                      </div>
                    </form>
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
      var hostUrl = "assets/";
    </script>
    <!--begin::Vendors Javascript(used by this page)-->
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script src="assets/plugins/custom/formrepeater/formrepeater.bundle.js"></script>
    
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used by this page)-->
		
    <script src="assets/js/custom/apps/projects/list/list.js"></script>
    <script src="assets/js/custom/apps/projects/users/users.js"></script>
    <script src="assets/js/custom/apps/projects/users/users.js"></script>
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="assets/js/custom/utilities/modals/users-search.js"></script>
    <script src="assets/js/custom/utilities/modals/new-target.js"></script>
    <script>

    let brandList; // list 에 표시될 브랜드 list
    let brandId = 0; 
    let specBrandInfo;
    let mode = "modifyMode";
    let getBrandIdNone = 1;
    var doubleCheckFlag = false;
    
      $(document).ready(function(){
        let data_init = {
          status:"사용" //  처음 표시될 리스트의 기본 상태:  "사용"
        }
        //getCookie('brandId')



        
        
        getBrandId = getCookie('brandId'); //이전에 선택된 brand의 자동 선택을 위해, 쿠키에서 브랜드 저장
        



        // brandlist 가져오기
        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/brands",
          type: "get",
          contentType:"application/json",
          data:data_init,
          datatype: "JSON",
          success: function(obj){
            brandList = obj
            console.log("initbrandList",brandList);
            getBrandIdNone = brandList[0].id // '+' 등으로 인해 선택이 없어질 경우 가장 첫번째 브랜드를 자동선택하기 위해서 변수에 넣어둠
            make_table(obj); //  테이블 만들기

          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
        })


        //  사이드바 페이지별 show here active 설정
        nav = document.getElementById('menu-academy');
        nav.classList.add('show');
        nav.classList.add('here');
        nav_suv = document.getElementById('office__head_office');
        nav_suv.classList.add('active');
        console.log(nav)
      })
      

      // brandlist 테이블을 만드는 함수
      function make_table(data){
        newDiv = document.getElementById('brandsList');
        
        
        newDiv.innerHTML = ``;

        for (row in data){
          
          row_data = data[row];
          // 상태에 따라 달라지는 클래스 구분
          if (row_data.status == "사용"){
            status_color = "success";
          } else if (row_data.status == "대기"){
            status_color = "warning";
          } else{
            status_color = "danger";
          }
          newDiv.innerHTML += `
            <tr class="brand_${parseInt(row) + 1}" id = ${row_data.id}>
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
                      <span class = 'text-muted fw-semibold d-block fs-7' >${row_data.head.realName}</span>
                    </div>
                  </div>
                </div>
              </td>
              <td class="n_empty"></td>
              <td class="text-end">
              <span class="badge badge-light-${status_color} fw-bold px-4 py-3">${row_data.status}</span>
              </td>
            </tr>`
        }





        
        //console.log("getBrandId",getBrandId)
        // 선택했던 브랜드가 쿠키에 있다면 해당 브랜드를 강제 선택
        if(getBrandId != undefined){
          document.getElementById(getBrandId).click();
          
        }else{
          
          document.getElementById(getBrandIdNone).click();
          
        }
        call(); // save-order.js 에 정의된 테이블 만드는 함수 호출
        
      }



      

      // 브랜드 리스트 안에 있는 브랜드들을 선택하였을때,
      $(document).on('click','#brandsList > tr',function(){
        
        let num;
        
        let tr_button = $(this).find().prevObject[0]; // 클릭한 tr
        
        tr_button.classList.add('on'); // 클릭상태(파란색)
        if(mode == "addMode"){ // 이전 상태가 추가 모드 였으면 다시 변경 모드로 바꾸어 주기
          tt = document.getElementsByClassName("addBtn")[0]
          //tt.classList.add("");
          mode = "modifyMode";
          document.getElementById("putFlag").style.display = "";
		      document.getElementById("postFlag").style.display = "none";
          document.getElementById("doubleCheck").style.display = "none";
          
          //console.log(tt);
          // console.log(mode);
        }
        num = tr_button.id 
        setCookie('brandId',num,1) // 클릭한 브랜드 쿠키 저장
        listunclick(num); // 클릭한 브랜드를 제외한 다른 브랜드 클랙 해제
        brandId = num; 
        console.log("select brand id:",brandId);
        
        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/brands/"+brandId,
          type: "get",
          contentType:"application/json",
          // data:studentData,
          datatype: "JSON",
          success: function(obj){
            
            
            console.log(obj)
            specBrandInfo = obj;
            make_board(specBrandInfo); //  보드 만들기

          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
        })

      })
      // 도메인 중복확인
      function duplicateCheck(){
        tt = document.getElementById("domain").value;
        // console.log(tt)
        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/auth/check/"+tt,
          type: "get",
          contentType:"application/json",
          
          datatype: "JSON",
          success: function(obj){
            
            
            console.log(obj);
            doubleCheckFlag = true;
            alert("사용가능한 도메인입니다")
            // Datatable 의 reinitialize 를 없애기 위해 destroy
            

          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
        })
      }
      
      // 보드 생성
      // 각 input 에 맞는 data 넣어주기
      function make_board(data){
        // console.log(data.brand.id);
        console.log("make_board_data",data)
        let address = data.address.split('//') // 주소와 상세주소의 분리
        
        // $('#brand').val(data.brand.id).prop("selected",true);
        $('#address').val(address[0])
        $('#detailAddress').val(address[1])
        $('#businessRegistrationNumber').val(data.businessRegistrationNumber)
        $('#homePageUrl').val(data.homePageUrl)
        $('#brandName').val(data.name)
        $('#headRealName').val(data.head.realName)
        $('#password').val(data.head.password)
        $('#passwordC').val(data.head.password)
        $('#domain').val(data.serviceDomain)
        $('#phone').val(data.phone)
        $('#email').val(data.email)
        $('#headPhone').val(data.head.phone)
        $('#headEmail').val(data.head.email)
        $('#headUserName').val(data.head.username)
        $('#homePageUrl').val(data.homePageUrl)
        if(data.status =="사용"){
          $('#status_active').val(data.status).prop("checked",true)
        }
        else if(data.status =="대기"){
          $('#status_stop').val(data.status).prop("checked",true)
        }
        else{
          $('#status_delete').val(data.status).prop("checked",true)
        }
        
      }


      // 클릭한 브랜드 제외 다른 브랜드 클릭 해제
      function listunclick(value){
        //console.log("unclick_v", value);
        // console.log("unclick", brandList);
        brandList.forEach((currentElement, index, array) => { // 브랜드 리스트 순회
          //console.log("currentElement", currentElement);
          //console.log("value", value);
          if (currentElement.id != value) { 
            const untempbtn = document.getElementsByClassName(
              `brand_` + (index+1)
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
      // 브랜드 추가
      function addClick(){
        listunclick(-1); // 모든 클릭 제거

        // 전부 공백으로 바꾸어주기
        $('#headRealName').val("");
        $('#headUserName').val("");
        
        $('#brandName').val("");
        $('#businessRegistrationNumber').val("");
        
        $('#password').val("");
        $('#passwordC').val("");

        $('#phone').val("");
        $('#email').val("");

        $('#headPhone').val("");
        $('#headEmail').val("");

        $('#address').val("");
        $('#homePageUrl').val("");

        $('#domain').val("");
        $("input:radio[name ='choice_use']")[0].checked = false
        $("input:radio[name ='choice_use']")[1].checked = false
        $("input:radio[name ='choice_use']")[2].checked = false
        
        
        // 변경 모드의 경우 추가 모드로 바꾸어주기
        if(mode == "modifyMode"){

          tt = document.getElementsByClassName("addBtn")[0]
          //tt.classList.add("");
          mode = "addMode";
          //console.log(tt);
          console.log(mode);
          document.getElementById("putFlag").style.display = "none";
		      document.getElementById("postFlag").style.display = "";
          document.getElementById("doubleCheck").style.display = "";
          
        }
        // else if(mode == "addMode"){
        //   tt = document.getElementsByClassName("addBtn")[0]
        //   //tt.classList.add("");
        //   mode = "modifyMode";
        //   document.getElementById("putFlag").style.display = "";
		    //   document.getElementById("postFlag").style.display = "none";
        //   document.getElementById("doubleCheck").style.display = "none";
          
        //   //console.log(tt);
        //   console.log(mode);
        // }
      }

      // 필터에서 리셋이 클릭될경우 
      function resetClick(){
        

        document.getElementsByName("brandStatusSelect")[0].value = ""        // value 를 "" 로 바꿈으로써 전체 선택


        // 존재하는 모든 form을 돌면서, 'x' 표시가 있는 경우 hidden 처리
        for (i = 0; i<document.getElementsByClassName("select2-selection__clear").length;i++){
         document.getElementsByClassName("select2-selection__clear")[i].classList.add("hidden")
        }
        
        
        // form 안의 글자를 바꾸어줌
        $(".select2-selection__rendered").text("상태 선택");
        

       
      }


      // 필터 설정
      function filterClick(){
        // console.log("필터 클릭");
        
        // console.log("status:",document.getElementsByName("brandStatusSelect"));

        let cu = ""

        
        // status 에 따라서 넣을 status 변수 정의
        if(document.getElementsByName("brandStatusSelect")[0].value=="1"){
          cu = "사용"
        }else if(document.getElementsByName("brandStatusSelect")[0].value=="2"){
          cu = "대기"
        }else if(document.getElementsByName("brandStatusSelect")[0].value=="3"){
          cu = "삭제"
        }else{
          cu = ""
        }

        const data_t = {
          "status": cu
        }
        console.log("dt",data_t)
        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/brands",
          type: "get",
          contentType:"application/json",
          data:data_t,
          datatype: "JSON",
          success: function(obj){
            
            
            brandList = obj; // 리스트를 바꾸어 주어야 브랜드 클릭 이슈가 안생김
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


      // 브랜드 변경사항 저장
      function brandput(){


        let logo_img_file = document.getElementById('logo_img'); // 로고 이미지
        let favicon_img_file = document.getElementById('favicon_img'); // 파비콘 이미지
          
        
          const selectedLogoFile = logo_img_file.files[0];
          const selectedFaviFile = favicon_img_file.files[0];
          var formData = new FormData() // 이미지 파일임으로 formdata에 넣어서 한번에 보내야함
          formData.append("logo_img",selectedLogoFile)
          formData.append("favicon_img",selectedFaviFile)
          formData.append("brand_id",brandId)
          formData.append("brand_name",document.getElementsByName("brandName")[0].value)
          formData.append("mode","modify")
          
        


        // var formData = $('#form1').serialize()
        let cu = "사용"
        
        // status 정의
        if(document.getElementsByName("choice_use")[2].checked==true){
          cu = "삭제"
        }
        else if(document.getElementsByName("choice_use")[1].checked==true){
          cu = "대기"
        }
        else{
          cu = "사용"
        }
        // 주소, 상세 주소  구분
        let allAddress = document.getElementsByName("address")[0].value +" //"+ document.getElementsByName("detailAddress")[0].value
        // const studentData ={
        //     "studentId":<?=$_SESSION['id']?>,
        //     "fromDate": year+"-"+month+"-"+date,
        //     "toDate":year+"-"+month+"-"+date}
        const data_t = {
        "name": document.getElementsByName("brandName")[0].value,
        "serviceDomain": document.getElementsByName("domain")[0].value,
        "homePageUrl": document.getElementsByName("homePageUrl")[0].value,
        "isManagement": false,
        "businessRegistrationNumber":document.getElementsByName("businessRegistrationNumber")[0].value ,
        "status": cu,
        "phone": document.getElementsByName("phone")[0].value,
        "email": document.getElementsByName("email")[0].value,
        "address": allAddress,
        "head": {
          "password": document.getElementsByName("password")[0].value,
          "password2": document.getElementsByName("password")[0].value,
          "realName": document.getElementsByName("headRealName")[0].value,
          "phone": document.getElementsByName("headPhone")[0].value,
          "email": document.getElementsByName("headEmail")[0].value,
          "username": document.getElementsByName("headUserName")[0].value,
          "address": document.getElementsByName("address")[0].value,
          "status": cu,
          "birthDate": "1999-05-01",
        },
      };
      console.log("dt",data_t)


        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/brands/"+brandId,
          type: "put",
          contentType:"application/json",
          data:JSON.stringify(data_t),
          datatype: "JSON",
          async: false, 
          success: function(obj){
            
            
            console.log("put brand",obj)


            // 파일 저장 ajax 
            $.ajax({
                	url: "office__head_office_action.php",
                	type: "POST",
                	data: formData,
                  contentType: false,
                  processData: false,
                  async: false, 
               	 	success: function(data){
                    	console.log("파일 ajax")
                	},
                	error: function(request,status,error){
                    	alert(error);
               	 	}
            	});




            location.reload();

          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
        })
        
      }
        
      // 브랜드 추가
      function brandpost(){
        
        let logo_img_file = document.getElementById('logo_img'); // 로고 이미지
        let favicon_img_file = document.getElementById('favicon_img'); // 파비콘 이미지
          
        
          const selectedLogoFile = logo_img_file.files[0];
          const selectedFaviFile = favicon_img_file.files[0];
          var formData = new FormData() // 이미지 파일임으로 formdata에 넣어서 한번에 보내야함
          formData.append("logo_img",selectedLogoFile)
          formData.append("favicon_img",selectedFaviFile)
          formData.append("brand_id",brandId)
          
          formData.append("brand_name",document.getElementsByName("brandName")[0].value)
          formData.append("mode","add")
          formData.append("domain",document.getElementsByName("domain")[0].value);
          
        






// 주소, 상세 주소  구분

          let allAddress = document.getElementsByName("address")[0].value +" //"+ document.getElementsByName("detailAddress")[0].value

        // status 정의
        
        let cu = "사용"
        
        if(document.getElementsByName("choice_use")[2].checked==true){
          cu = "삭제"
        }
        else if(document.getElementsByName("choice_use")[1].checked==true){
          cu = "대기"
        }
        else{
          cu = "사용"
        }
        // const studentData ={
        //     "studentId":<?=$_SESSION['id']?>,
        //     "fromDate": year+"-"+month+"-"+date,
        //     "toDate":year+"-"+month+"-"+date}
        const data_t = {
        "name": document.getElementsByName("brandName")[0].value,
        "serviceDomain": document.getElementsByName("domain")[0].value,
        "homePageUrl": document.getElementsByName("homePageUrl")[0].value,
        "isManagement": false,
        "businessRegistrationNumber":document.getElementsByName("businessRegistrationNumber")[0].value ,
        "status": cu,
        "phone": document.getElementsByName("phone")[0].value,
        "email": document.getElementsByName("email")[0].value,
        "address": allAddress,
        "head": {
          "password": document.getElementsByName("password")[0].value,
          "password2": document.getElementsByName("password")[0].value,
          "realName": document.getElementsByName("headRealName")[0].value,
          "phone": document.getElementsByName("headPhone")[0].value,
          "email": document.getElementsByName("headEmail")[0].value,
          "username": document.getElementsByName("headUserName")[0].value,
          "address": document.getElementsByName("address")[0].value,
          "status": cu,
          "birthDate": "1999-05-01",
        },
      };
      console.log("dt",data_t)
      if(doubleCheckFlag == true){ // 중복확인이 통과이면
        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/brands",
          type: "post",
          contentType:"application/json",
          data:JSON.stringify(data_t),
          datatype: "JSON",
          success: function(obj){
            
            
            console.log("post brand",obj)

            $.ajax({
                	url: "office__head_office_action.php",
                	type: "POST",
                	data: formData,
                  contentType: false,
                  processData: false,
                  async: false, 
               	 	success: function(data){
                    	console.log("파일 ajax")
                	},
                	error: function(request,status,error){
                    	alert(error);
               	 	}
            	});

            
            location.reload();
          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
        })
      }else{
        alert("도메인 중복확인을 진행해주세요!")
      }
      }




    </script>
    <script src="assets/js/custom/apps/ecommerce/sales/save-order.js"></script>
    
    <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script>
      // 카카오 주소 찾기 api
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

    <!--end::Custom Javascript-->
    <!--end::Javascript-->
  </body>
  <!--end::Body-->
</html>
