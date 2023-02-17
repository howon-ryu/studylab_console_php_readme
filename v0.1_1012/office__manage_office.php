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
        <!--begin::Header-->
        <?php require_once('header.php');?>
        <!--end::Header-->
        <!--begin::Wrapper-->
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
          <!--begin::Sidebar-->
          <?php 
            require_once('sidebar.php');
          ?>
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
                      매니저관리
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
                      <li class="breadcrumb-item text-muted">매니저관리</li>
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
                class="app-content flex-column-fluid branch_ofc_content"
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
                                            사용중인 매니저
                                          </option>
                                          <option value="2">
                                            대기중인 매니저
                                          </option>
                                          <option value="3">
                                            삭제된 매니저
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
                                    id ="add_manager"
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
                            <!-- begin::개발요청 필터옵션선택내용 표시되는 부분 -->
                            <div class="selected__txt_wrap"  hidden>
                              <!-- 1.필터 옵션 선택시 : 선택된 내용 span태그(.selected__txt) 생김 택스트로 표시되게 해주세요. -->
                              <!-- 2.필터 옵션 선택없을때 : span태그(.selected__txt) 태그 자체가 모두 없어지면 됩니다. -->
                              <!-- 있는경우는 office_head_office.html 파일에 되어있습니다. -->
                              <!-- 없는경우 입니다. -->
                            </div>
                            <!-- end::개발요청 필터옵션선택내용 표시되는 부분 -->
                            <!--begin::Search-->
                            <div
                              class="d-flex align-items-center position-relative my-1 card_l_h_sch"
                              hidden
                            >
                              <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                              <span class="svg-icon svg-icon-3 position-absolute ms-3"  hidden>
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
                              <input type="text" data-kt-ecommerce-edit-order-filter="search" class="form-control form-cntrol-solid w-100 w-lg-50 ps-14 input__slim" placeholder="Search"  hidden/>
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
                                      <th class="min-w-150px">매니저명/본사명</th>
                                      <th class="min-w-25px n_empty"></th>
                                      <th class="min-w-50px text-end">상태</th>
                                    </tr>
                                  </thead>
                                  <!--end::Head-->
                                  <!--begin::Body-->
                                  <tbody id="manager_list" class="fs-6">
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
                          </div>
                          <!--end::Tabs-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-1 card_right_body right__tab_con right__tab01_con on">
                          <!--begin::Input group-->
                          <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                              <!--begin::Label-->
                              <label class="required fs-5 fw-semibold mb-2">본사명</label>
                              <!--end::Label-->
                              <!--begin::Select-->
                              <select
                              name="position"
                              id="brand"
                              data-control="select2"
                              data-placeholder="Select a position"
                              class="form-select form-select-solid"
                            >
                            </select>
                            <!--end::Select-->
                            </div>
                            <div class="col-md-6 fv-row">
                              <!--end::Label-->
                              <label class="required fs-5 fw-semibold mb-2">원장명</label>
                              <!--end::Label-->
                              <!--end::Input-->
                              <select
                                name="position"
                                data-control="select2"
                                data-placeholder="Select a position..."
                                class="form-select form-select-solid"
                                value=""
                                id="owner"
                                >
                              </select>
                              <!--end::Input-->
                            </div>
                            <!--end::Col-->
                          </div>
                          <!--end::Input group-->
                          <!--begin::Input group-->
                          <div class="row mb-5">
                            <!--begin::Col-->
                           
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                              <!--begin::Label-->
                              <label class="required fs-5 fw-semibold mb-2"
                                >매니저명</label
                              >
                              <!--end::Label-->
                              <!--begin::Input-->
                              <input
                                type="text"
                                class="form-control"
                                id="manager"
                                value=""
                              />
                            </div>

                            <div class="col-md-6 fv-row">
                              <!--begin::Label-->
                              <label class="required fs-5 fw-semibold mb-2"
                                >아이디</label
                              >
                              <!--end::Label-->
                              <!--begin::Input-->
                              <input
                                type="text"
                                class="form-control"
                                id="managerUsername"
                                value=""
                              />
                            </div>
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
                              <label class="required fs-5 fw-semibold mb-2"
                                >비밀번호</label
                              >
                              <!--end::Label-->
                              <!--begin::Input-->
                              <input
                                type="password"
                                id="password"
                                class="form-control"
                                id="password"
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
                                id="check_password"
                                placeholder=""
                                name=""
                              />
                              <!--end::Input-->
                            </div>
                            <!--end::Col-->
                          </div>

                          <div class="row mb-5 row__line">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                              <!--begin::Label-->
                              <label class="required fs-5 fw-semibold mb-2"
                                >전화번호</label
                              >
                              <!--end::Label-->
                              <!--begin::Input-->
                              <input
                                type="tel"
                                class="form-control"
                                id="tel"
                                value=""
                              />
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                              <!--end::Label-->
                              <label class="required fs-5 fw-semibold mb-2"
                                >이메일</label
                              >
                              <!--end::Label-->
                              <!--end::Input-->
                              <input
                                type="email"
                                class="form-control"
                                value=""
                                id="email"
                              />
                              <!--end::Input-->
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
                                      value="사용"
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
                                      value="대기"
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
                                      value="삭제"
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
                          <button id="reset" class="btn btn-light btn-active-light-primary me-2">취소</button>
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
      var hostUrl = "assets/";
      let brand_url ="";
      let role_id = '<?=$_SESSION['roleid']?>';
      let brand_id = '<?=$_SESSION['brand_id']?>';
      let done_button = "";
      let manage_list;
      let owner_id = '<?=$_SESSION['owner_id']?>';
      let getManagerIdNone = 1;
      if(role_id == 3){
        owner_id = '<?=$_SESSION['id']?>'
      }

      $(".office__manage_office").addClass("active");

      $(document).ready(function(){


        // 매니저 리스트 ajax
       
        console.log("쿠키",getCookie('managerId'));
        getManagerId = getCookie('managerId')
        if(role_id == 1){
          let data_init = {
            status:"사용"
          }
          $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/users/manager",
          type: "get",
          contentType:"application/json",
          datatype: "JSON",
          async: false, 
          data:data_init,
          success: function(obj){
            manage_list = obj;
            getManagerIdNone = manage_list[0].id
            




        // 브랜드 리스트 ajax
        // 클릭 이수 make_brand_list 함수를 사용하면 본사명이 첫번째 항목으로 바뀌기에 make_brand_list 를 먼저하고 make_table을 하도록함
        if (role_id == 1) brand_url = "https://farm01.bitlworks.co.kr/api/v1/brands";
        else brand_url = "https://farm01.bitlworks.co.kr/api/v1/brands/" + brand_id;
        $.ajax({
          url: brand_url,
          type: "get",
          contentType:"application/json",
          async: false, 
          datatype: "JSON",
          success: function(obj){
            make_brand_list(obj);
          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
        })










            make_table(obj);
          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
          })
        }
        else if(role_id == 2){
          let data_init = {
            status:"사용"
          }
          $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/users/manager?brandId="+brand_id,
          type: "get",
          contentType:"application/json",
          datatype: "JSON",
          async: false, 
          data:data_init,
          success: function(obj){
            manage_list = obj;
            getManagerIdNone = manage_list[0].id



        // 브랜드 리스트 ajax
        // 클릭 이수 make_brand_list 함수를 사용하면 본사명이 첫번째 항목으로 바뀌기에 make_brand_list 를 먼저하고 make_table을 하도록함
        if (role_id == 1) brand_url = "https://farm01.bitlworks.co.kr/api/v1/brands";
        else brand_url = "https://farm01.bitlworks.co.kr/api/v1/brands/" + brand_id;
        $.ajax({
          url: brand_url,
          type: "get",
          contentType:"application/json",
          async: false, 
          datatype: "JSON",
          success: function(obj){
            make_brand_list(obj);
          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
        })










            make_table(obj);
          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
          })
        }else{
          console.log("roi",role_id)
          let data_t ={
            "brandId": brand_id,
            "ownerId": owner_id,
            "status":"사용"
            
        }
          $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/users/manager",
          type: "get",
          contentType:"application/json",
          data:data_t,
          datatype: "JSON",
          async: false, 
          success: function(obj){
            
            console.log("ml",obj)
            manage_list = obj;
            getManagerIdNone = manage_list[0].id



        // 브랜드 리스트 ajax
        // 클릭 이수 make_brand_list 함수를 사용하면 본사명이 첫번째 항목으로 바뀌기에 make_brand_list 를 먼저하고 make_table을 하도록함
        if (role_id == 1) brand_url = "https://farm01.bitlworks.co.kr/api/v1/brands";
        else brand_url = "https://farm01.bitlworks.co.kr/api/v1/brands/" + brand_id;
        $.ajax({
          url: brand_url,
          type: "get",
          contentType:"application/json",
          async: false, 
          datatype: "JSON",
          success: function(obj){
            make_brand_list(obj);
          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
        })









            make_table(obj);
          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
          })
        }


        









        nav = document.getElementById('menu-academy');
        nav.classList.add('show');
        nav.classList.add('here');
        nav_suv = document.getElementById('office__manage_office');
        nav_suv.classList.add('active');
        console.log(nav)
      }
      
      
      )
      
      // 매니저 선택 시,
      $(document).on('click','#manager_list > tr',function(){
        newDiv = document.getElementById('submit');
        newDiv.innerHTML = `변경사항 저장`;
        $("#submit").addClass("submit");
        $("#submit").removeClass("add_submit");

        let td_val = $(this).parents().find().prevObject[0].className;
        let td_val_2 = $(this).parents().find().prevObject[0].id;
        done_button = $(this).find().prevObject[0];

        done_button.classList.add('on')
        num = done_button.id
        setCookie('managerId',num,1)
        
        listunclick(num);
        make_board();
      })

      // '취소' 버튼 클릭 시,
      $(document).on('click', '#reset', function(){
        make_board();
      })

      // '변경사항 저장' 버튼 클릭 시,
      $(document).on('click', '.submit', function(){
        console.log("변경사항 저장");
        submit_data();
        location.reload();
      })
      
      // '추가' 버튼 클릭 시,
      $(document).on('click', '.add_submit', function(){
        console.log("추가");
        add_manager();
        location.reload();
      })

      // 학원본사 선택 시,
      $(document).on('change', '#brand', function(){
        console.log("학원본사 선택");
        make_owner_list();
      })
      $(document).on('change', '#InFilterBrand', function(){
        console.log("필터 본사 선택");
        //make_owner_list();
      })

      // '+' 버튼 클릭 시,
      $(document).on('click', '#add_manager', function(){
        listunclick(-1);
        $('#brand').prop('disabled',false);
        $('#owner').prop('disabled',false);

        newDiv = document.getElementById('submit');
        newDiv.innerHTML = `추가`;

        $("#submit").addClass("add_submit");
        $("#submit").removeClass("submit");

        $("#select2-brand-container").text("본사를 선택하세요.");
        $("#select2-owner-container").text("원장을 선택하세요.");
        console.log("brand_id",brand_id)
        $('#brand').val("").prop("selected",true);
        
        $('#manager').val("");
        $('#managerUsername').val("");
        $('#tel').val("");
        $('#email').val("");
        $('#password').val("");
        $('#check_password').val("");        
      })

      //<-------------- 함수 정의 --------------->

      function listunclick(value){
        manage_list.forEach((currentElement, index, array) => {
          if (currentElement.id != value) {
            const untempbtn = document.getElementsByClassName(`manager_list`)[index];
            untempbtn.classList.remove("on");
          }
        });
      }
      // 좌측 매니저 리스트를 만들어주는 함수
      function make_table(data){
        newDiv = document.getElementById('manager_list');
        newDiv.innerHTML = ``;
        for (row in data){
          row_data = data[row];
          if (row_data.status == "사용"){
            status_color = "success";
          } else if (row_data.status == "대기"){
            status_color = "warning";
          } else{
            status_color = "danger";
          }
          newDiv.innerHTML += `
            <tr id="${row_data.id}" class="manager_list">
              <td> ${parseInt(row) + 1} </td>
              <td class="n_empty"></td>
              <td class="text-muted fw-semibold">
                <div class="d-flex flex-stack">
                  <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                    <div class="flex-grow-1 me-2">
                      <a
                        
                        class="text-gray-800 text-hover-primary fs-6 fw-bold"
                        >${row_data.realName}</a
                      >
                      <span class = 'text-muted fw-semibold d-block fs-7' >${row_data.brand.name}</span>
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
        if(getManagerId != undefined){
          document.getElementById(getManagerId).click();
          console.log(document.getElementById(getManagerId))
        }else{
          console.log("undef!!!!!!")
          document.getElementById(getManagerIdNone).click();
        }
        call();
      }

      // 학원본사 select 리스트 만들어주는 함수
      function make_brand_list(data){
        console.log("makeBrand실행")
        InFilterNewDiv = document.getElementById('InFilterBrand');
        newDiv = document.getElementById('brand');
        newDiv.innerHTML = ``;
        newDiv.innerHTML += `<option type="button" value=""></option>`;
        InFilterNewDiv.innerHTML +=`<option type="button" value=""></option>`;
        if (role_id == 1){
          for (row in data){
            row_data = data[row];
            newDiv.innerHTML += `<option type="button" value="${row_data.id}">${row_data.name}</option>`;
          }
          for (row in data){
            row_data = data[row];
            
            InFilterNewDiv.innerHTML += `<option type="button" value="${row_data.id}">${row_data.name}</option>`;
          }
        }
        else{
          console.log("makeBrand실행2")
          newDiv.innerHTML += `<option type="button" value="${data.id}">${data.name}</option>`;
          //InFilterNewDiv.innerHTML +=`<option type="button" value=""></option>`;
          InFilterNewDiv.innerHTML += `<option type="button" value="${data.id}">${data.name}</option>`;
        }
      }

      // 학원본사 선택시 원장명 select 리스트 만들어주는 함수
      function make_owner_list(){
        let selected_brand_id = $('#brand').val();
        //let selected_brand_id = $('#InFilterBrand').val();
        let res;
        if(role_id != 3){
          $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/users/owners?brandId="+selected_brand_id,
          type: "GET",
          contentType:"application/json",
          async: false, 
          datatype: "JSON",
          success: function(obj){
            res = obj;
          },
          error: function(xhr, status, error){
            console.log("xhr: ", xhr);
            return
          }
        })

        newDiv = document.getElementById('owner');
        newDiv.innerHTML = ``;
        for (row in res){
          row_data = res[row];
          newDiv.innerHTML += `<option type="button" value="${row_data.id}">${row_data.realName}</option>`;
        }
        InFilterNewDiv = document.getElementById('InFilterOwner');
        InFilterNewDiv.innerHTML = ``;
        
          for (row in res){
            row_data = data[row];
            InFilterNewDiv.innerHTML += `<option type="button" value="${row_data.id}">${row_data.name}</option>`;
          }
        
        }else{
          $.ajax({
              url: "https://farm01.bitlworks.co.kr/api/v1/users/"+owner_id,
              type: "get",
              contentType:"application/json",
              // data:studentData,
              datatype: "JSON",
              success: function(obj){
                console.log("one",obj);
                newDiv = document.getElementById('owner');
                
                newDiv.innerHTML = ``;
                newDiv.innerHTML += `<option type="button" value="${obj.id}">${obj.realName}</option>`;
              },
              error: function(xhr, status, error){
                console.log(`error: ${error}`)
                console.log(`status: ${status}`)
                return
              }
            })

        }
        
      }

      // 선택한 매니저 정보 가져오는 ajax
      function make_board_ajax(){
        let manage_id = done_button.id;
        console.log(manage_id);
        var res;
        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/users/"+manage_id,
          type: "get",
          contentType:"application/json",
          datatype: "JSON",
          async: false, 
          success: function(obj){
            res = obj;
          },
          error: function(xhr, status, error){
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)
            return
          }
        })
        return res;
      }

      // 매니저 선택 시 해당 매니저 정보 입력해주는 함수
      function make_board(){
        let data = make_board_ajax();

        $('#brand').prop('disabled',true);
        $('#brand').val(data.brand.id).prop("selected",true);
        $("#select2-brand-container").text(data.brand.name);
        $('#owner').prop('disabled',true);
        $('#owner').val(data.targetUser.id).prop("selected",true);
        $('#select2-owner-container').text(data.targetUser.realName);
        $('#manager').val(data.realName);
        $('#managerUsername').val(data.username);
        $('#tel').val(data.phone);
        $('#email').val(data.email);
        $('#password').val(data.password);
        $('#check_password').val(data.password);
        $("input:radio[name ='choice_use']:input[value='"+data.status+"']").attr("checked", true);
      }

      // 변경사항 저장 버튼 
      function submit_data(){
        let manager_id = done_button.id;
        let before_data = make_board_ajax();
        let manage_data = JSON.stringify({
          "username": $('#managerUsername').val(),
          "password": $('#password').val(),
          "password2": $('#check_password').val(),
          "realName": $('#manager').val(),
          "phone": $('#tel').val(),
          "email": $('#email').val(),
          "address": before_data.address,
          "birthDate": before_data.birthDate,
          "status": $("input[name='choice_use']:checked").val(),
          "brandId": $('#brand').val(),
          "ownerId": before_data.targetUser.id
        });

        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/users/manager/"+manager_id,
          type: "PUT",
          contentType:"application/json",
          data: manage_data,
          datatype: "JSON",
          success: function(obj){
            console.log("저장 성공", obj);
          },
          error: function(xhr, status, error){
            console.log("error", xhr);
            return
          }
        })
      }

      // 새로운 매니저 추가 버튼
      function add_manager(){
        let owner_data = JSON.stringify({
          "username": $('#managerUsername').val(),
          "password": $('#password').val(),
          "password2": $('#check_password').val(),
          "realName": $('#manager').val(),
          "phone": $('#tel').val(),
          "email": $('#email').val(),
          "status": $("input[name='choice_use']:checked").val(),
          "brandId": $('#brand').val(),
          "ownerId": $('#owner').val()
        });

        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/users/manager",
          type: "POST",
          contentType:"application/json",
          data: owner_data,
          datatype: "JSON",
          success: function(obj){
            console.log("추가 성공", obj);
          },
          error: function(xhr, status, error){
            console.log("error", xhr);
            return
          }
        })
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
          fiterBrandId = brand_id
        }
        if(document.getElementById("InFilterOwner").value != ""){
          fiterOwnerId = document.getElementById("InFilterOwner").value
        }else if(document.getElementById("InFilterOwner").value == ""){
          fiterOwnerId = owner_id
        }
        
        const data_t ={
            "brandId": fiterBrandId,
            "ownerId": fiterOwnerId,
            "managerId" : "",
            "status":cu
        }
        console.log("dt",data_t)
        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/users/manager",
          type: "get",
          contentType:"application/json",
          data:data_t,
          datatype: "JSON",
          success: function(obj){
            
            manage_list = obj;
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
      function handleOnChangeBrand(prop){
        console.log("brandchange",prop.value);
        
        
        $('#InFilterOwner').prop('disabled',false);
        console.log("owner_id",owner_id)
        
        if(<?=$_SESSION['roleid']?> == 3){
            $.ajax({
              url: "https://farm01.bitlworks.co.kr/api/v1/users/"+owner_id,
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
      function makeFilterOwnerOne(data){
        
        InFilterNewDiv = document.getElementById('InFilterOwner');
        
        InFilterNewDiv.innerHTML = ``;
        InFilterNewDiv.innerHTML = `<option value="">Select a position...</option>`;
        InFilterNewDiv.innerHTML += `<option value="${data.id}">${data.realName}</option>`
      }
    </script>
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
