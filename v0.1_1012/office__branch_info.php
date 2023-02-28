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
    <link
      href="assets/plugins/custom/datatables/datatables.bundle.css"
      rel="stylesheet"
      type="text/css"
    />
    <link rel="stylesheet" href="assets/css/new_css/common.css" />
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
                      지점관리
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
                          >학원 관리</a
                        >
                      </li>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                      </li>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <li class="breadcrumb-item text-muted">지점관리</li>
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
                class="app-content flex-column-fluid branch_info_content"
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
                                                사용중인 지점
                                              </option>
                                              <option value="2">
                                                대기중인 지점
                                              </option>
                                              <option value="3">
                                                삭제된 지점
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
                                    class="btn btn-sm btn-icon btn-bg-light btn-primary me-4"
                                    data-bs-toggle="tab"
                                    
                                    id ="add_branch"
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
                              <input type="text" data-k-ecommerce-edit-order-filter="search" class="form-control form-control-solid w-100 w-lg-50 ps-14 input__slim" placeholder="Search" hidden/>
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
                                  <thead class="fs-7 text-gray-400 text-uppercase">
                                    <tr class="fw-bold text-muted">
                                      <th class="ps-4 min-w-25px">NO.</th>
                                      <th class="min-w-25px n_empty"></th>
                                      <th class="min-w-150px">지점명/본사명</th>
                                      <th class="min-w-25px n_empty"></th>
                                      <th class="min-w-50px text-end">상태</th>
                                    </tr>
                                  </thead>
                                  <!--end::Head-->
                                  <!--begin::Body-->
                                  <tbody class="fs-6" id="branch_list">
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
                    <div class="col-xl-12 col-xxl-8 mb-5 mb-xl-10 card__right_wrap" id = "refreshDiv">
                      <!--begin::Table Widget 3-->
                      <div class="card card-flush h-xl-100 card__right">
                        <!--begin::Card header-->
                        <div class="card-header py-7">
                          <!--begin::Tabs-->
                          <div class= "flex1">
                            <div class="card-title mb-0 gap-4 gap-lg-8 gap-xl-10 nav nav-tabs border-bottom-0" data-kt-table-widget-3="tabs_nav">
                              
                                <div class="fs-4 fw-bold pb-3 border-3 border-primary cursor-pointer right__tab_btn right__tab01_btn on" data-kt-table-widget-3="tab" data-kt-table-widget-3-value="Show All">상세정보</div>
                                <div class="fs-4 fw-bold text-muted pb-3 cursor-pointer right__tab_btn right__tab02_btn" data-kt-table-widget-3="tab" data-kt-table-widget-3-value="Pending">관리그룹</div>
                                <div class="fs-4 fw-bold text-muted pb-3 cursor-pointer right__tab_btn right__tab03_btn" data-kt-table-widget-3="tab" data-kt-table-widget-3-value="Pending">학습실</div>
                                <div class="fs-4 fw-bold text-muted pb-3 cursor-pointer right__tab_btn right__tab04_btn" data-kt-table-widget-3="tab" data-kt-table-widget-3-value="Pending">학습분류코드</div>
                              
                              
                              <!-- <div class="fs-4 fw-bold text-muted pb-3 cursor-pointer right__tab_btn right__tab04_btn" data-kt-table-widget-3="tab" data-kt-table-widget-3-value="Pending">알림톡 설정</div> -->
                            </div>
                          </div>
                          <div class = "flex2">
                              <button class = "btn btn-sm btn-primary openBtn_add" style = "visibility:hidden">추가</button>
                            </div>
                          
                          <!--end::Tabs-->
                        </div>
                        <!--end::Card header-->
                        <!--begin:: TAB01 -Card body--> 
                        <div class="card-body pt-1 card_right_body right__tab_con right__tab01_con on">
                          <!--begin::bt__tab01_table group-->
                          <div class="right__tab01_table tab01 mb-20">
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
                                data-placeholder="Select a position..."
                                class="form-select form-select-solid"
                              >
                              </select>
                              <!--end::Select-->
                              </div>
                              <!--end::Col-->
                              <!--begin::Col-->
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
                              <div class="col-md-6 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-5 fw-semibold mb-2"
                                  >지점명</label
                                >
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input
                                  type="text"
                                  class="form-control"
                                  id="branch"
                                  value=""
                                />
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
                                  id="business_num"
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
                                  >지점전화번호</label
                                >
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input
                                  type="text"
                                  class="form-control"
                                  id="phone"
                                  value=""
                                />
                              </div>
                              <!--end::Col-->
                              <!--begin::Col-->
                              <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-semibold mb-2"
                                  >지점대표이메일</label
                                >
                                <!--end::Label-->
                                <!--end::Input-->
                                <input
                                  type="text"
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
                            <!--end::Input group-->
                             <!--begin::Input group-->
                             <div class="row mb-5">
                              <!--begin::Col-->
                              <div class="col-md-6 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-5 fw-semibold mb-2">매니저명</label>
                                <!--end::Label-->
                                <!--begin::Select-->
                                <select
                                name="position"
                                id="manager"
                                data-control="select2"
                                data-placeholder="Select1 a position..."
                                class="form-select form-select-solid"
                              >
                              </select>
                              <!--end::Select-->
                              </div>
                              <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                          </div>
                          <!--end::bt__tab01_table group-->
                          <!--begin::Col-->
                          <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-4 fv-row">
                              <!--begin::Label-->
                              <label class="fs-5 fw-semibold mb-2">상태</label>
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
                                      id = "status_active"
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
                                      id = "status_stop"
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
                                      id = "status_delete"
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

                        <!--begin:: TAB02 -Card body-->
                        <div class="card-body pt-1 card_right_body right__tab_con right__tab02_con">
                          <!--begin::bt__tab02_table group-->
                          <div class="right__tab02_table tab02 mb-20">
                            <!--begin::Table-->
                            <table
                              class="table align-middle table-row-dashed fs-6 gy-5"
                              id="group_list"
                            >
                              <!--begin::Table head-->
                              <thead class="text-gray-400">
                                <tr
                                  class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0"
                                >
                                  <th class="min-w-25px">NO.</th>
                                  <th class="min-w-150px">관리그룹 이름</th>
                                  <th class="min-w-100px">등록일</th>
                                  <th class="min-w-100px text-end"> 사용여부</th>
                                  <th class="min-w-100px text-end"> 관리</th>
                                </tr>
                              </thead>
                              <!--end::Table head-->
                              <!--begin::Table body-->
                              <!-- <tbody id="group_list" class="fw-semibold text-gray-600">
                              </tbody> -->
                              <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                          </div>
                          <!--end::bt__tab02_table group-->
                        </div>
                        <!--end::Card body-->

                        <!--begin:: TAB03 -Card body--> 
                        <div class="card-body pt-1 card_right_body right__tab_con right__tab03_con">
                          <!--begin::bt__tab03_table group-->
                          <div class="right__tab03_table tab03 mb-20">
                            <!--begin::Table-->
                            <table
                              class="table align-middle table-row-dashed fs-6 gy-5"
                              id="room_list"
                            >
                              <!--begin::Table head-->
                              <thead class="text-gray-400">
                                <tr
                                  class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0"
                                >
                                  <th class="min-w-25px">NO.</th>
                                  <th class="min-w-150px">학습실 이름</th>
                                  <th class="min-w-100px">좌석수</th>
                                  <th class="min-w-100px">좌석시작번호</th>
                                  <th class="min-w-100px text-end"> 사용여부</th>
                                  <th class="min-w-100px text-end"> 관리</th>
                                </tr>
                              </thead>
                              <!--end::Table head-->
                              <!--begin::Table body-->
                              <!-- <tbody id="room_list" class="fw-semibold text-gray-600">
                              </tbody> -->
                              <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                          </div>
                          <!--end::bt__tab03_table group-->
                        </div>
                        <div class="card-body pt-1 card_right_body right__tab_con right__tab04_con">
                          <!--begin::bt__tab02_table group-->
                          <div class="right__tab04_table tab02 mb-20">
                            <!--begin::Table-->
                            <table
                              class="table align-middle table-row-dashed fs-6 gy-5"
                              id="code_list"
                            >
                              <!--begin::Table head-->
                              <thead class="text-gray-400">
                                <tr
                                  class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0"
                                >
                                  <th class="min-w-25px">NO.</th>
                                  <th class="min-w-150px">코드명</th>
                                  
                                  <th class="min-w-100px text-end"> 사용여부</th>
                                  <th class="min-w-100px text-end"> 관리</th>
                                </tr>
                              </thead>
                              <!--end::Table head-->
                              <!--begin::Table body-->
                              <!-- <tbody id="group_list" class="fw-semibold text-gray-600">
                              </tbody> -->
                              <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                          </div>
                          <!--end::bt__tab02_table group-->
                        </div>
                        <!--end::Card body-->
                        <!--begin::Card footer-->
                        <div class="card-footer d-flex justify-content-end py-6 tab_footer">
                          <button type="reset" class="btn btn-light btn-active-light-primary me-2">취소</button>
                          <button id="submit" type="submit" class="btn btn-primary submit">변경사항 저장</button>
                        </div>


                        <div class = "modal_manage hidden">
                          <div class="bg"></div>


                          <div class = "modalBox_manage">
                          <div class="modal-header">
                          <h2 class="fw-bold " data-kt-calendar="title">
                            <span id = "tab_text1"><span> 
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
                      <label class="fs-6 fw-semibold required mb-2">
                      <span id = "tab_text2"><span> 
                      </label>
                      <span  class = "content_id"><span> 
                      <input
                        type="text"
                        id="modal_group_name"
                        class="form-control form-control-solid"
                        
                        name="modal_group_name"
                      />
                      <div class = "available_content">
                        <label class="fs-6 fw-semibold required mb-2">
                        <span id = "tab_text3"><span> 
                        </label>
                        <input
                          type="text"
                          
                          class="form-control form-control-solid"
                          
                          name="modal_availableseat"
                          
                        />
                      </div>
                      <div class = "start_seat">
                        <label class="fs-6 fw-semibold required mb-2">
                        <span id = "tab_text4"><span> 
                        </label>
                        <input
                          type="text"
                          
                          class="form-control form-control-solid"
                          
                          name="modal_startseat"
                          
                        />
                      </div>

                    </div>
                    <div class="d-flex check__use_wrap"
                    
                    
                    >
                      <div class="form-check form-check-custom form-check-solid me-5 check__use" >
                        <input
                        class="form-check-input check__use_input"
                          type="radio"
                          value="사용"
                          name="choice_use"
                          
                        />
                        <label class="form-check-label">사용</label>
                      </div>
                      <div class="form-check form-check-custom form-check-solid me-5 check__hold">
                        <input
                        class="form-check-input check__hold_input"
                          type="radio"
                          value="대기"
                          name="choice_use"
                          
                        />
                        <label class="form-check-label">대기</label>
                      </div>
                      <div class="form-check form-check-custom form-check-solid check__delet use">
                        <input
                        class="form-check-input check__delet_input"
                          type="radio"
                          defaultValue=""
                          name="choice_use"
                          
                        />
                        <label class="form-check-label">삭제</label>
                      </div>
                    </div>

                    <div class="modal-footer flex-center">
                      <button
                        type="reset"
                        id="kt_modal_add_event_cancel"
                        class="btn btn-light me-3"
                        onclick="close_popup()"
                      >
                        취소
                      </button>

                      <button
                        type="submit"
                        id="kt_modal_add_event_submit"
                        class="btn btn-primary"
                        onclick="modal_submit()"
                      >
                        <span
                        class="indicator-label"
                          
                        >
                          제출
                        </span>
                        <span class="indicator-progress">
                          Please wait...
                          <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                      </button>
                    </div>
                            
                          </div>

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
      let branchList;
      let done_button;
      let role_id = '<?=$_SESSION['roleid']?>';
      let tab_info = "상세정보";
      let mode = "";
      let idx;
      let brand_id = '<?=$_SESSION['brand_id']?>';
      let owner_id = '<?=$_SESSION['ownerId']?>'
      let getBranchIdNone = 1;
      $(".office__branch_info").addClass("active");

      $(document).ready(function(){
        // 지점 리스트 ajax

        console.log("쿠키",getCookie('branchId'));
        getBranchId = getCookie('branchId')


        // tab_info_change = getCookie('tab_info_change') //추가쿠키
        // console.log("탭 쿠키",tab_info)
        // console.log("바뀐탭 쿠키",tab_info_change)
        // if(tab_info_change != undefined){
        //   tab_info = tab_info_change;
        //   if(tab_info_change == "관리그룹"){
        //     $("#right__tab01_con ").removeClass("on");
        //     $("#right__tab03_con ").removeClass("on");
        //     $("#right__tab02_con ").addClass("on");
        //   }else if(tab_info_change == "상세정보"){
        //     $("#right__tab02_con ").removeClass("on");
        //     $("#right__tab03_con ").removeClass("on");
        //     $("#right__tab01_con ").addClass("on");
        //   }else{
        //     $("#right__tab01_con ").removeClass("on");
        //     $("#right__tab02_con ").removeClass("on");
        //     $("#right__tab03_con ").addClass("on");
        //   }
        // }
        // console.log("이후탭 쿠키",tab_info)


        
        if(role_id == 2){
          console.log("roi",role_id)
          let data_t ={
            "brandId": brand_id,
            "status":"사용"
            
          }
          $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/branches",
          type: "get",
          contentType:"application/json",
          data:data_t,
          datatype: "JSON",
          async: false, 
          success: function(obj){
            
            
            branchList = obj;
            getBranchIdNone = branchList[0].id
        // 브랜드 리스트 ajax
        if (role_id == 1) brand_url = "https://farm01.bitlworks.co.kr/api/v1/brands";
        else brand_url = "https://farm01.bitlworks.co.kr/api/v1/brands/" + brand_id;
        $.ajax({
          url: brand_url,
          type: "get",
          contentType:"application/json",
          datatype: "JSON",
          async: false, 
          success: function(obj){
            console.log("bil",obj);
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
        else if(role_id == 3){
          console.log("roi",role_id)
          let data_t ={
            "brandId": brand_id,
            "ownerId": owner_id,
            "status":"사용"
            
          }
          $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/branches",
          type: "get",
          contentType:"application/json",
          data:data_t,
          datatype: "JSON",
          async: false, 
          success: function(obj){
            console.log("res:",data_t,obj)
            
            branchList = obj;
            getBranchIdNone = branchList[0].id




        // 브랜드 리스트 ajax
        if (role_id == 1) brand_url = "https://farm01.bitlworks.co.kr/api/v1/brands";
        else brand_url = "https://farm01.bitlworks.co.kr/api/v1/brands/" + brand_id;
        $.ajax({
          url: brand_url,
          type: "get",
          contentType:"application/json",
          datatype: "JSON",
          async: false, 
          success: function(obj){
            console.log("bil",obj);
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

        else{
          let data_t ={
            
            "status":"사용"
            
          }
          $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/branches",
          type: "GET",
          contentType:"application/json",
          datatype: "JSON",
          async: false, 
          data: data_t,
          success: function(obj){
            branchList = obj;
            getBranchIdNone = branchList[0].id

          // 브랜드 리스트 ajax
          if (role_id == 1) brand_url = "https://farm01.bitlworks.co.kr/api/v1/brands";
          else brand_url = "https://farm01.bitlworks.co.kr/api/v1/brands/" + brand_id;
          $.ajax({
            url: brand_url,
            type: "get",
            contentType:"application/json",
            datatype: "JSON",
            async: false, 
            success: function(obj){
              console.log("bil",obj);
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
        nav_suv = document.getElementById('office__branch_info');
        nav_suv.classList.add('active');
        console.log(nav)
      });

      // tab 클릭 시
      $(document).on("click", ".right__tab_btn", function(){
        tab_info = $(".nav-tabs .on").text();
        console.log("tab_info", tab_info);
        // setCookie('tab_info_change',tab_info,1); //추가쿠키
        make_board();
      })

      // 학원본사 선택 시,
      $(document).on('change', '#brand', function(){
        console.log("학원본사 선택");
        $('#owner').prop('disabled',false);
        make_owner_list();
      })

      $(document).on('change', '#owner', function(){
        console.log("원장 선택");
        kkkk =  document.getElementById('owner');
        owner_name = kkkk.options[kkkk.selectedIndex].text
        console.log("kkkk",kkkk.options[kkkk.selectedIndex].text);
        $('#manager').prop('disabled',false);
        make_manager_list(owner_name);
      })

      // 지점 선택 시,
      $(document).on('click','#branch_list > tr',function(){
        newDiv = document.getElementById('submit');
        newDiv.innerHTML = `변경사항 저장`;
        $("#submit").addClass("submit");
        $("#submit").removeClass("add_submit");

        let td_val = $(this).parents().find().prevObject[0].className;
        let td_val_2 = $(this).parents().find().prevObject[0].id;
        done_button = $(this).find().prevObject[0];

        done_button.classList.add('on')
        num = done_button.id
        setCookie('branchId',num,1)
        
        console.log("get_goco",num)
        listunclick(num);
        make_board();
        // 원장에서 onchange 가 안먹어서 make_manager_list 가 실행이 안될수도 잇음으로 한번더 실행
        make_manager_list();

        









        
      })
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
        add_branch();
        location.reload();
      })

      // '+' 버튼 클릭 시,
      $(document).on('click', '#add_branch', function(){
        listunclick(-1);
        newDiv = document.getElementById('submit');
        newDiv.innerHTML = `추가`;
        $("#submit").addClass("add_submit");
        $("#submit").removeClass("submit");
        $('#brand').val("").prop("selected",true);
        $("#select2-brand-container").text("본사를 선택하세요");
        $('#owner').val("").prop("selected",true);
        $("#select2-owner-container").text("원장을 선택하세요");
        $('#manager').val("").prop("selected",true);
        $("#select2-manager-container").text("매니저를 선택하세요");
        $('#branch').val("");
        $('#address').val("");
        $('#detailAddress').val("");   
        $('#business_num').val("");
        $('#manager').val("");  
        $('#phone').val("");
        $('#email').val("");
        //$('#manager').prop('disabled',false);
        $('#brand').prop('disabled',false);
        //$('#owner').prop('disabled',false);
      })
      function submit_data(){
        let branch_id = done_button.id;
        let before_data = make_board_ajax();
        console.log("before_data",before_data)
        let allAddress = document.getElementsByName("address")[0].value +" //"+ document.getElementsByName("detailAddress")[0].value
        let branch_data = JSON.stringify({
          



          "brandId": $('#brand').val(),
          "name":$('#branch').val(),
          "homePageUrl" : "new.branch.study",
          "isManagement" : false,
          "phone" : $('#phone').val(),
          "email" : $('#email').val(),
          "businessRegistrationNumber": $('#business_num').val(),
          "status": $("input[name='choice_use']:checked").val(),
          "managerId": $('#manager').val(),
          "address": allAddress,
          "ownerId": before_data.owner.id
        });
        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/branches/"+branch_id,
          type: "PUT",
          contentType:"application/json",
          data: branch_data,
          datatype: "JSON",
          success: function(obj){
            console.log("branch_data",branch_data)
            console.log("저장 성공", obj);
          },
          error: function(xhr, status, error){
            console.log(branch_data)
            console.log(before_data)
            console.log("error", xhr);
            return
          }
        })
      }
      function add_branch(){
        let allAddress = document.getElementsByName("address")[0].value +" //"+ document.getElementsByName("detailAddress")[0].value
        let branch_data = JSON.stringify({
          "name": $('#branch').val(),
          "homePageUrl": "new.branch.study",
          "isManagement": false,
          "businessRegistrationNumber": $('#business_num').val(),
          "address": allAddress,
          "ownerId": $('#owner').val(),
          "status": $("input[name='choice_use']:checked").val(),
          "brandId": $('#brand').val(),
          "managerId": $('#manager').val(),
          "phone" : $('#phone').val(),
          "email" : $('#email').val(),
        });
        console.log("branch_data",branch_data)
        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/branches",
          type: "POST",
          contentType:"application/json",
          data: branch_data,
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
          url: "https://farm01.bitlworks.co.kr/api/v1/branches",
          type: "get",
          contentType:"application/json",
          data:data_t,
          datatype: "JSON",
          success: function(obj){
            
            branchList = obj;
            
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
      
      //<-------------- 함수 정의 --------------->
      function listunclick(value){
        console.log("unclick",value)
        branchList.forEach((currentElement, index, array) => {
          if (currentElement.id != value) {
            const untempbtn = document.getElementsByClassName(`branch_list`)[index];
            untempbtn.classList.remove("on");
          }
        });
      }

      // 좌측 지점 리스트를 만들어주는 함수
      function make_table(data){
        let status_color;
        newDiv = document.getElementById('branch_list');
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
            <tr id="${row_data.id}" class="branch_list">
              <td>
                ${parseInt(row) + 1}
              </td>
              <td class="n_empty"></td>
              <td class="text-muted fw-semibold">
                <div class="d-flex flex-stack">
                  <div
                    class="d-flex align-items-center flex-row-fluid flex-wrap"
                  >
                    <div class="flex-grow-1 me-2">
                      <a
                        
                        class="text-gray-800 text-hover-primary fs-6 fw-bold"
                        >${row_data.name}</a
                      >
                      <span
                        class="text-muted fw-semibold d-block fs-7"
                        >${row_data.brand.name}</span
                      >
                    </div>
                  </div>
                </div>
              </td>
              <td class="n_empty"></td>
              <td class="text-end">
                  <span class="badge badge-light-${status_color} fw-bold px-4 py-3">${row_data.status}</span>
                </td>
              </tr>`;
        }
        // '대기' 상태에서 클릭후  '사용' 상태로 온다면 실제쿠키에는 대기 에서 클릭한 branch가 저장되어있겠지만, getBranchId 변수에는 .ready에서 정의한 변수만 있을것임으로 
        // 다시 한번 getBranchId 를 최신화 시키고 현재 리스트에 해당 Branch 가 없을 경우 리스트의 첫번째 branch를 선택하도록 함
        getBranchId = getCookie('branchId')
        if(getBranchId != undefined){
          
          if(document.getElementById(getBranchId)==null){
            document.getElementById(getBranchIdNone).click();
          }else{
            document.getElementById(getBranchId).click();
          }
          
          
          console.log(document.getElementById(getBranchId))
        }else{
          console.log("undef!!!!!!")
          document.getElementById(getBranchIdNone).click();
          
        }
        call();
      }

      // 학원본사 select 리스트 만들어주는 함수
      function make_brand_list(data){
        newDiv = document.getElementById('brand');
        InFilterNewDiv = document.getElementById('InFilterBrand');
        console.log("data",data)
        console.log("InFilterNewDiv",InFilterNewDiv)
        InFilterNewDiv.innerHTML = ``;
        InFilterNewDiv.innerHTML = `<option value="">Select a position...</option>`;
        newDiv.innerHTML = ``;
        newDiv.innerHTML += `<option type="button" value="">본사를 선택해주세요</option>`;
        if (role_id == 1){
          for (row in data){
            row_data = data[row];
            newDiv.innerHTML += `<option type="button" value="${row_data.id}">${row_data.name}</option>`;
            InFilterNewDiv.innerHTML += `<option value="${row_data.id}">${row_data.name}</option>`
          }
        }
        else{
          newDiv.innerHTML += `<option type="button" value="${data.id}">${data.name}</option>`;
          InFilterNewDiv.innerHTML += `<option value="${data.id}">${data.name}</option>`
        }



        
        
        
        
        
        
      }
      function handleOnChangeBrand(prop){
        console.log("brandchange",prop.value);
        
        
        $('#InFilterOwner').prop('disabled',false);
        $('#owner').prop('disabled',false);
        
        
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
          }else if(<?=$_SESSION['roleid']?> == 4){
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







      
      // 학원본사 선택시 원장명 select 리스트 만들어주는 함수
      function make_owner_list(){
        let selected_brand_id = $('#brand').val();
        console.log("선택된 브랜드",selected_brand_id)
        let res;

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
        newDiv.innerHTML = `<option value="">Select a position...</option>`;
        for (row in res){
          row_data = res[row];
          newDiv.innerHTML += `<option type="button" value="${row_data.id}">${row_data.realName}</option>`;
        }
      }


      function make_manager_list(prop){
        let data = make_board_ajax();
        console.log("make_boad_data",data,prop)
        var selected_owner_id = $('#owner').val();
        var selected_owner_name = ""
        if(prop==null){
          selected_owner_name = data.owner.realName;
        }else{
          selected_owner_name = prop;
          
        }
        if(selected_owner_id==null){
            selected_owner_id = temp_owner_id;
          }
        var selected_brand_id = $('#brand').val();
        let res;
        console.log("mode",mode)
        
        let data_t = {
               "status": "",
               "ownerId": selected_owner_id,
               "brandId": selected_brand_id
             }
        console.log("0203",data_t)
        $.ajax({
          url: "https://farm01.bitlworks.co.kr/api/v1/users/manager",
          type: "GET",
          data:data_t,
          contentType:"application/json",
          async: false, 
          datatype: "JSON",
          success: function(obj){
            res = obj;
            console.log("!!!!",data_t);
            console.log("!!!!",res);
          },
          error: function(xhr, status, error){
            console.log("xhr: ", xhr);
            return
          }
        })
        console.log("!!res!!",res)
        if(res.length>0){
          console.log("@@@")
          newDiv = document.getElementById('manager');
        newDiv.innerHTML = ``;
        newDiv.innerHTML += `<option type="button" value="${selected_owner_id}">${selected_owner_name}</option>`;
        for (row in res){
          row_data = res[row];
          newDiv.innerHTML += `<option type="button" value="${row_data.id}">${row_data.realName}</option>`;
        }
        }else{
          console.log("!!!",selected_owner_name)
          newDiv = document.getElementById('manager');
          newDiv.innerHTML = ``;
          newDiv.innerHTML += `<option type="button" value="${selected_owner_id}">${selected_owner_name}</option>`;
        }


        if(res.length==0){
            

            $('#manager').val(selected_owner_id).prop("selected",true);
            $('#select2-manager-container').text(selected_owner_name);
          }else{
            $('#manager').val(data.manager.id).prop("selected",true);
            $('#select2-manager-container').text(data.manager.realName);
          }
        
      }

      let tableAjax;
      // 선택한 지점 정보 가져오는 ajax
      function make_board_ajax(){
        let branch_id = done_button.id;
        var res;
        if (tab_info == "상세정보"){
          $.ajax({
            url: "https://farm01.bitlworks.co.kr/api/v1/branches/"+branch_id,
            type: "get",
            contentType:"application/json",
            datatype: "JSON",
            async: false, 
            success: function(obj){
              console.log("mkb",obj)
              if(obj.manager == null){
                obj.manager = {
                  id: "",
                  realName: "",
                  username: ""
                }
                
              }
              res = obj;
            },
            error: function(xhr, status, error){
              console.log(`error: ${error}`)
              console.log(`status: ${status}`)
              return
            }
          })
        }
        else if (tab_info == "관리그룹"){


          $("#submit").addClass("submit");
          $("#submit").removeClass("add_submit");
          tableAjax = $.ajax({
            url: "https://farm01.bitlworks.co.kr/api/v1/branches/"+branch_id+"/groups",
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
        }
        else if (tab_info == "학습실"){
          tableAjax = $.ajax({
            url: "https://farm01.bitlworks.co.kr/api/v1/branches/"+branch_id+"/rooms",
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
        }
        else if (tab_info == "학습분류코드"){
          
          tableAjax = $.ajax({
            url: "https://farm01.bitlworks.co.kr/api/v1/branches/"+branch_id+"/item-codes",
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
        }
        return res;
      }
      
      let temp_owner_id = ""

      // 지점 선택 시 해당 지점 정보 입력해주는 함수
      function make_board(){
        let data = make_board_ajax();


        
        // $('#brand').val(data.brand.id).prop("selected",true);
        $('#address').val(address[0])
        $('#detailAddress').val(address[1])
        
        if (tab_info == "상세정보"){
          let address = data.address.split('//')
          let con = document.querySelector(".openBtn_add").setAttribute("style","visibility:hidden");
          $(".tab_footer").removeClass("hidden");
          // 1. 학원본사
          $('#brand').prop('disabled',true);
          $('#brand').val(data.brand.id).prop("selected",true);
          $("#select2-brand-container").text(data.brand.name);
          // 2. 원장명
          $('#owner').prop('disabled',true);
          
          $('#owner').val(data.owner.id).prop("selected",true);
          $("#select2-owner-container").text(data.owner.realName);
          // 3. 지점명
          $('#branch').val(data.name);
          // 4. 사업자등록증
          $('#business_num').val(data.businessRegistrationNumber);
          // 5. 주소
          $('#address').val(address[0]);
          $('#detailAddress').val(address[1]);
          // 6. 매니저명
          // $('#manager').prop('disabled',true);
          console.log("make_board",data);
          temp_owner_id = data.owner.id
        
          // let vvv = $('#brand').val('500')
          // console.log("vvv",vvv)

          if(data.manager == null){
            data.manager = {
              id: "",
              realName: "",
              username: ""
            }

            $('#manager').val(data.manager.id).prop("selected",true);
            $('#select2-manager-container').text(data.manager.realName);
          }else{
            $('#manager').val(data.manager.id).prop("selected",true);
            $('#select2-manager-container').text(data.manager.realName);
          }
          
          
          // 7. 사용
          
         // $("input:radio[name ='choice_use']:input[value='"+data.status+"']").attr("checked", true);
          
         if(data.status =="사용"){
          $('#status_active').val(data.status).prop("checked",true)
        }
        else if(data.status =="대기"){
          $('#status_stop').val(data.status).prop("checked",true)
        }
        else{
          $('#status_delete').val(data.status).prop("checked",true)
        }

          $('#phone').val(data.phone);


          $('#email').val(data.email);
        }
        else if (tab_info == "관리그룹"){
          idx = 1;
          let con = document.querySelector(".openBtn_add").setAttribute("style","visibility:visible");
          console.log("data:",data);
          let kk = reviseData(data);
          newDiv = document.getElementById('group_list');
          $(".tab_footer").addClass('hidden');
          let tableColum = [
            { targets: 0, data: "idxx" },
            { targets: 1, data: "name" },
            { targets: 2, data: "createdAt" },
            { targets: 3, data: "status" },
            { targets: 4,  data: "status"}
          ];
          let tableColumnDefs = [
            { targets: 0, render: idxRendering},
            { targets: 1, className: "fw-semibold text-gray-600"},
            { targets: 2, render: dateRendering, className: "fw-semibold text-gray-600" },
            { targets: 3, render: statusRendering, className: "text-muted fw-semibold text-end " },
            { targets: 4, render: popupRendering ,className: "text-muted fw-semibold text-end" },
          ];
          
          var table = $("#group_list").DataTable({
            destroy: true,
            data: kk,
            dataSrc: "",
            columns : tableColum,
            columnDefs: tableColumnDefs,
            ordering: true,
          });
        }
        else if (tab_info == "학습실"){
          console.log("학습실 data: ", data);
          let kk = reviseData(data);
          $(".tab_footer").addClass('hidden');
          idx = 1;
          newDiv = document.getElementById('room_list');
          let con = document.querySelector(".openBtn_add").setAttribute("style","visibility:visible");
          let tableColum = [
            { targets: 0, data: "idxx" },
            { targets: 1, data: "name" },
            { targets: 2, data: "availableSeat" },
            { targets: 3, data: "seatStartNumber" },
            { targets: 4, data: "status" },
            { targets: 5,  data: "status"}
          ];
          let tableColumnDefs = [
            { targets: 0, render: idxRendering},
            { targets: 1, className: "fw-semibold text-gray-600"},
            { targets: 2, className: "fw-semibold text-gray-600" },
            { targets: 3, className: "fw-semibold text-gray-600" },
            { targets: 4, render: statusRendering, className: "text-muted fw-semibold text-end " },
            { targets: 5, render: popupRendering ,className: "text-muted fw-semibold text-end" },
          ];
          

          var table = $("#room_list").DataTable({
            destroy: true,
            data: kk,
            dataSrc: "",
            columns : tableColum,
            columnDefs: tableColumnDefs
          });
        }
        else if (tab_info == "학습분류코드"){
          console.log("학습분류코드 data: ", data);
          idx = 1;
          let con = document.querySelector(".openBtn_add").setAttribute("style","visibility:visible");
          console.log("data:",data);
          let kk = reviseData(data);
          newDiv = document.getElementById('code_list');
          $(".tab_footer").addClass('hidden');
          let tableColum = [
            { targets: 0, data: "idxx" },
            { targets: 1, data: "name" },
            
            { targets: 2, data: "status" },
            { targets: 3,  data: "status"}
          ];
          let tableColumnDefs = [
            { targets: 0, render: idxRendering},
            { targets: 1, className: "fw-semibold text-gray-600"},
            
            { targets: 2, render: statusRendering, className: "text-muted fw-semibold text-end " },
            { targets: 3, render: popupRendering ,className: "text-muted fw-semibold text-end" },
          ];
          
          var table = $("#code_list").DataTable({
            destroy: true,
            data: kk,
            dataSrc: "",
            columns : tableColum,
            columnDefs: tableColumnDefs,
            ordering: true,
          });
        }
        //console.log("탭탭탭",tab_info_change);
      }
      
      function idxRendering(data, type, row){
        console.log("dataa", data);
        console.log("data", row);
        // console.log("type", type);
        //console.log("row", row);
        
        return `<div class="form-check form-check-sm form-check-custom form-check-solid id = ${row.id}">
                  <span class="text-gray-600 text-hover-primary ms-4">${data}</span>
                  <input type="text" class="hidden"  value = ${row.id} >
                </div>`;
      } 

      function dateRendering(data, type, row){
        let date = data.split("T");
        return date[0];
      }

      function statusRendering(data, type, row){
        if (data == "사용") return `<span class="badge badge-light-success me-2 m_status">사용</span>`;
        if (data == "대기") return `<span class="badge badge-light-warning me-2 m_status">대기</span>`;
        if (data == "삭제") return `<span class="badge badge-light-danger me-2 m_status">삭제</span>`;
      } 

      function popupRendering(data, type, row){
        
        return `<button type="button" class="btn btn-sm btn-primary openBtn_modify" data-kt-menu-dismiss="true">수정</button>`;
      }
      function reviseData(data){
        let temp=[]
        data.forEach((da, index) => {
            console.log('Index: ' + index + ' Value: ' + da);
            
            da.idxx = index+1
            
            console.log(da)
            temp.push(da)
        });
        console.log(temp)
          // console.log("re",data)
        return temp;
      }


      $(document).on("click", ".openBtn_add", function(){
        mode = "add"
        let bb = document.querySelector(".modal_manage");
        console.log(bb);
        console.log(tab_info)
        document.getElementById("tab_text3").innerText = "좌석수";
        document.getElementById("tab_text4").innerText = "좌석시작번호";
        document.getElementById("tab_text1").innerText = tab_info+" 관리";
        document.getElementById("tab_text2").innerHTML = tab_info+" 이름";


        if(tab_info == "학습실"){
          document.querySelector(".available_content").classList.remove("hidden");
          document.querySelector(".start_seat").classList.remove("hidden");
        }else{
          document.querySelector(".available_content").classList.add("hidden");
          document.querySelector(".start_seat").classList.add("hidden");
        }
        

        
        document.querySelector(".modal_manage").classList.remove("hidden");
        $('input[name=modal_group_name]').attr('value',"");
        $('input[name=modal_group_name]')[0].value=""
        $('input[name=modal_availableseat]').attr('value',"");
        $('input[name=modal_availableseat]')[0].value=""
        $('input[name=modal_startseat]').attr('value',"");
        $('input[name=modal_startseat]')[0].value=""
        $("input:radio[name ='choice_use']").attr("checked", false)
      })
      $(document).on("click", ".closeBtn", function(){
        document.querySelector(".modal_manage").classList.add("hidden");
      })
      $(document).on("click", ".bg", function(){
        document.querySelector(".modal_manage").classList.add("hidden");
      })

      $(document).on("click", ".openBtn_modify", function(){
        mode = "modify"
        let bb = document.querySelector(".modal_manage");
        console.log(bb);
        console.log(tab_info)
        console.log("확인",$(this).parent().parent().find().prevObject[0])
        console.log("확인",$(this).parent().parent().find('.m_status')[0].innerText)
        let temp_id = $(this).parent().parent().find().prevObject[0].children[0].children[0].children[1].value
        let temp_name = $(this).parent().parent().find().prevObject[0].children[1].innerText
        let temp_seat = $(this).parent().parent().find().prevObject[0].children[2].innerText
        let temp_startseat = $(this).parent().parent().find().prevObject[0].children[3].innerText
        let temp_status = $(this).parent().parent().find('.m_status')[0].innerText
        console.log("ti:",temp_id)
        console.log("ti:",temp_name)
        console.log("ti:",temp_status)
        document.querySelector('.content_id').id = temp_id
        console.log("id유무",document.querySelector('.content_id').id)
        
        document.getElementById("tab_text3").innerText = "좌석수";
        document.getElementById("tab_text4").innerText = "좌석시작번호";
        document.getElementById("tab_text1").innerText = tab_info+" 수정";
        document.getElementById("tab_text2").innerHTML = tab_info+" 이름";
        if(tab_info == "학습실"){
          console.log("1")
          
          $('input[name=modal_group_name]').attr('value',temp_name);
          $('input[name=modal_availableseat]').attr('value',temp_seat);
          $('input[name=modal_startseat]').attr('value',temp_startseat);
          $('input[name=modal_group_name]')[0].value = temp_name;
          $('input[name=modal_availableseat]')[0].value = temp_seat;
          $('input[name=modal_startseat]')[0].value = temp_startseat;
          $("input:radio[name ='choice_use']:input[value='"+temp_status+"']").attr("checked", true);
          console.log($('input[name=modal_group_name]').value )
          
          document.querySelector(".available_content").classList.remove("hidden");
          document.querySelector(".start_seat").classList.remove("hidden");
        }else{
          console.log("2")
          $('input[name=modal_group_name]').attr('value',temp_name);
          $('input[name=modal_group_name]')[0].value = temp_name;
          $("input:radio[name ='choice_use']:input[value='"+temp_status+"']").attr("checked", true);
          document.querySelector(".available_content").classList.add("hidden");
          document.querySelector(".start_seat").classList.add("hidden");
        }

        



        document.querySelector(".modal_manage").classList.remove("hidden");
      })
      $(document).on("click", ".closeBtn", function(){
        document.querySelector(".modal_manage").classList.add("hidden");
      })
      $(document).on("click", ".bg", function(){
        document.querySelector(".modal_manage").classList.add("hidden");
      })
      
      function close_popup(){
        document.querySelector(".modal_manage").classList.add("hidden");
      }

      function modal_submit(){
        console.log("mo_su",mode, tab_info)
        
        console.log(document.getElementsByName("modal_group_name")[0].value)
        
        console.log(document.getElementsByName("modal_availableseat")[0].value)
        console.log(document.getElementsByName("modal_startseat")[0].value)
        if(document.getElementsByName("choice_use")[5].checked==true){
          cu = "삭제"
        }
        else if(document.getElementsByName("choice_use")[4].checked==true){
          cu = "대기"
        }
        else{
          cu = "사용"
        }

        
      

        

        let branch_id = done_button.id;

        console.log("branch_id",branch_id)

        console.log("ci",document.querySelector('.content_id').id)



        let data_t = {
              
        }




        let type_var = "put"
        if(tab_info == "관리그룹"){
          console.log("@@@@@@@@")
          console.log("id",document.querySelector('.content_id'))
          console.log("mo_su",mode, tab_info)
          console.log("@@@@@@@@")
          if(mode == "add"){
            url_var = "https://farm01.bitlworks.co.kr/api/v1/users/groups";
            type_var = "POST";
             let data_tt = {
               "status": cu,
               "name": document.getElementsByName("modal_group_name")[0].value,
               "branchId": branch_id
             }
            data_t = data_tt
          }else{
            url_var = "https://farm01.bitlworks.co.kr/api/v1/users/groups/"+document.querySelector('.content_id').id;
            type_var = "PUT";
            let data_tt = {
              "status": cu,
              "name": document.getElementsByName("modal_group_name")[0].value,
              
            }
            data_t = data_tt
          }
          
        }else if(tab_info == "학습실"){
          console.log("@@@@@@@@")
          console.log("mo_su",mode, tab_info)
          console.log("@@@@@@@@")
          if(mode == "add"){
            url_var = "https://farm01.bitlworks.co.kr/api/v1/branches/rooms";
            type_var = "POST";
            let data_tt = {
              "status": cu,
              "name": document.getElementsByName("modal_group_name")[0].value,
              "branchId": branch_id,
              "availableSeat" : document.getElementsByName("modal_availableseat")[0].value,
              "seatStartNumber": document.getElementsByName("modal_startseat")[0].value,
            }
            data_t = data_tt
          }else{
            url_var = "https://farm01.bitlworks.co.kr/api/v1/branches/rooms/"+document.querySelector('.content_id').id;
            type_var = "PUT";
            let data_tt = {
              "status": cu,
              "name": document.getElementsByName("modal_group_name")[0].value,
              
              "availableSeat" : document.getElementsByName("modal_availableseat")[0].value,
              "seatStartNumber": document.getElementsByName("modal_startseat")[0].value,
            }
            data_t = data_tt
          }
        }else if(tab_info == "학습분류코드"){
          console.log("@@@@@@@@")
          console.log("mo_su",mode, tab_info)
          console.log("@@@@@@@@")
          if(mode == "add"){
            url_var = "https://farm01.bitlworks.co.kr/api/v1/items/item-codes";
            type_var = "POST";
            let data_tt = {
              "status": cu,
              "name": document.getElementsByName("modal_group_name")[0].value,
              "branchId": branch_id,
              
            }
            data_t = data_tt
          }else{
            url_var = "https://farm01.bitlworks.co.kr/api/v1/items/item-codes/"+document.querySelector('.content_id').id;
            type_var = "PUT";
            let data_tt = {
              "status": cu,
              "name": document.getElementsByName("modal_group_name")[0].value,
              
              
            }
            data_t = data_tt
          }
        }






        console.log("dt",data_t)
        console.log("url_var",url_var)
        console.log("type_var",type_var)



          


        $.ajax({
          url: url_var,
          type: type_var,
          contentType:"application/json",
          data:JSON.stringify(data_t),
          datatype: "JSON",
          success: function(obj){
            
            console.log("url",url_var)
            console.log("type_var",type_var)
            console.log(obj);
            close_popup();
            make_board();
            //location.reload();
            // Datatable 의 reinitialize 를 없애기 위해 destroy
            // $('#kt_ecommerce_edit_order_product_table').DataTable().destroy();
            // make_table(obj);

          },
          error: function(xhr, status, error){
            
            console.log(`error: ${error}`)
            console.log(`status: ${status}`)

            return
          }
        })



      }
      

      
      
    </script>

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
