"use strict";

var KTAppCalendar = function() { 
    // Shared variables    
    // Calendar variables    
    var calendar;
    var data = {
        id: '',
        eventName: '',
        eventDescription: '',
        eventLocation: '',
        startDate: '',
        endDate: '',
        allDay: false
    };
    var popover;
    var popoverState = false; 
    // Add event variables    
    var eventName;
    var eventDescription;
    var eventLocation;
    var startDatepicker;
    var startFlatpickr;
    var endDatepicker;
    var endFlatpickr;
    var startTimepicker;
    var startTimeFlatpickr;
    var endTimepicker
    var endTimeFlatpickr;
    var modal;
    var modalTitle;
    var form;
    var validator;
    var addButton;
    var submitButton;
    var cancelButton;
    // View event variables    
    var viewEventName;
    var viewAllDay;
    var viewEventDescription;
    var viewEventLocation;
    var viewStartDate;
    var viewEndDate;
    var viewModal;
    var viewEditButton;
    var viewDeleteButton;
    // Private functions   
    var initCalendarApp = function() {
        // Define variables        
        var calendarEl = document.getElementById('kt_calendar_app');
        var todayDate = moment().startOf('day');
        var YM = todayDate.format('YYYY-MM');
        var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
        var TODAY = todayDate.format('YYYY-MM-DD');
        var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');
        // Init calendar --- more info: https://fullcalendar.io/docs/initialize-globals      
        calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            initialView: "timeGridWeek",
            locale: "ko",
            initialDate: TODAY,
            navLinks: true,
            // can click day/week names to navigate views           
            selectable: true,
            selectMirror: true,
            selectLongPressDelay: 250,
            // Select dates action --- more info: https://fullcalendar.io/docs/select-callback            
            select: function(arg) {
                hidePopovers();
                formatArgs(arg);
                handleNewEvent();
            }, // Click event --- more info: https://fullcalendar.io/docs/eventClick          
            eventClick: function(arg) {
                hidePopovers();
                formatArgs({
                    id: arg.event.id,
                    title: arg.event.title,
                    description: arg.event.extendedProps.description,
                    location: arg.event.extendedProps.location,
                    startStr: arg.event.startStr,
                    endStr: arg.event.endStr,
                    allDay: arg.event.allDay
                });
                handleViewEvent();
            }, // MouseEnter event --- more info: https://fullcalendar.io/docs/eventMouseEnter         
            eventMouseEnter: function(arg) {
                formatArgs({
                    id: arg.event.id,
                    title: arg.event.title,
                    description: arg.event.extendedProps.description,
                    location: arg.event.extendedProps.location,
                    startStr: arg.event.startStr,
                    endStr: arg.event.endStr,
                    allDay: arg.event.allDay
                }); // Show popover preview           
                initPopovers(arg.el);
            },
            allDaySlot: false,
            editable: false,
            dayMaxEvents: true,
            // allow \"more\" link when too many events           
            events: 
                function event_cal(info, successCallback, failureCallback) {
                    $.ajax({
                    url:
                        "https://farm01.bitlworks.co.kr/api/v1/users/students/" +
                        user_id +
                        "/study-plans",
                    type: "get",
                    contentType: "application/json",
                    data: {
                        fromDate: info.startStr.substr(0, 10),
                        toDate: info.endStr.substr(0, 10),
                    },
                    datatype: "JSON",
                    success: function (obj) {
                        console.log("student res: ", obj);
                        var arr = [];
                        // event 에 맞는 양식으로 변경
                        obj.forEach((item, value) => {
                        arr.push({
                            id: item.id,
                            title: item.title,
                            start: item.startTime,
                            end: item.endTime,
                            description: item.description,
                            location: item.place,
                        });
                        });
                        // return
                        successCallback(arr);
                    },
                    error: function (xhr, status, error) {
                        console.log(`error: ${error}`);
                        console.log(`status: ${status}`);
                        return;
                    },
                    });
                },
            datesSet: function() {
                hidePopovers();
            }
        });
        calendar.render();
    }
    // Initialize popovers --- more info: https://getbootstrap.com/docs/4.0/components/popovers/   
    const initPopovers = (element) => {
        console.log("call initPopovers")
        hidePopovers();
        // Generate popover content        
        const startDate = data.allDay ? moment(data.startDate).format('Do MMM,YYYY ') : moment(data.startDate).format('Do MMM,YYYY - h: mm a ');
        const endDate = data.allDay ? moment(data.endDate).format('Do MMM,YYYY ') : moment(data.endDate).format('Do MMM,YYYY - h: mm a ');
        const popoverHtml = ' < div class = \"fw-bolder mb-2\">' + data.eventName + '</div><div class=\"fs-7\"><span class=\"fw-bold\">Start:</span> ' + startDate + '</div><div class=\"fs-7 mb-4\"><span class=\"fw-bold\">End:</span> ' + endDate + '</div><div id=\"kt_calendar_event_view_button\" type=\"button\" class=\"btn btn-sm btn-light-primary\">View More</div>';
        // Popover options        
        var options = {
            container: 'body',
            trigger: 'manual',
            boundary: 'window',
            placement: 'auto',
            dismiss: true,
            html: true,
            title: 'Event Summary',
            content: popoverHtml,
        } // Initialize popover      
        popover = KTApp.initBootstrapPopover(element, options);
        // Show popover     
        popover.show();
        // Update popover state      
        popoverState = true;
        // Open view event modal       
        handleViewButton();
    }
    // Hide active popovers   
    const hidePopovers = () => {
        if (popoverState) {
            popover.dispose();
            popoverState = false;
        }
    }
    // Init validator  
    const initValidator = () => {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/     
        validator = FormValidation.formValidation(form, {
            fields: {
                'calendar_event_name': {
                    validators: {
                        notEmpty: {
                            message: '학습 항목이 필요합니다.'
                        }
                    }
                },
                'calendar_event_start_date': {
                    validators: {
                        notEmpty: {
                            message: '시작 날짜가 필요합니다.'
                        }
                    }
                },
                'calendar_event_end_date': {
                    validators: {
                        notEmpty: {
                            message: '종료 날짜가 필요합니다.'
                        }
                    }
                }
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap5({
                    rowSelector: '.fv-row',
                    eleInvalidClass: '',
                    eleValidClass: ''
                })
            }
        });
    }
    // Initialize datepickers --- more info: https://flatpickr.js.org/    
    const initDatepickers = () => {
        startFlatpickr = flatpickr(startDatepicker, {
            enableTime: false,
            dateFormat: "Y-m-d",        
        });
        endFlatpickr = flatpickr(endDatepicker, {
            enableTime: false,
            dateFormat: "Y-m-d",     
        });
        startTimeFlatpickr = flatpickr(startTimepicker, {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",     
        });
        endTimeFlatpickr = flatpickr(endTimepicker, {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",       
        });
    }
    
    function addnewevent(e)
    {
        console.log("call addEventListener");
        // Prevent default button action         
        e.preventDefault();
        // Validate form before submit        
        if (validator) {
            validator.validate().then(function(status) {
                console.log('validated!');
                if (status == 'Valid') {
                    // Show loading indication          
                    submitButton.setAttribute('data-kt-indicator', 'on');
                    // Disable submit button whilst loading           
                    submitButton.disabled = true;
                    // Simulate form submission              
                    setTimeout(function() {
                        // Simulate form submission              
                        submitButton.removeAttribute('data-kt-indicator');
                        var addNewEventData = {
                            title: eventName.value,
                            description: eventDescription.value,
                            location: eventLocation.value,
                            start: startDatepicker.value+"T"+startTimepicker.value,
                            end: endDatepicker.value+"T"+endTimepicker.value,
                            allDay: data.allDay,
                        };
                        addplan(addNewEventData);
                        // Show popup confirmation                
                        Swal.fire({
                            text: "새로운 항목이 추가되었습니다!",
                            icon:  "success",                       
                            buttonsStyling: false,
                            confirmButtonText: "확인",
                            customClass: {
                                confirmButton:  "btn btn-primary"                     
                            }
                        }).then(function(result) {
                            if (result.isConfirmed) {
                                modal.hide();
                                return;
                            }   
                        }); 
                        //form.submit(); 
                        // Submit form                  
                    }, 2000);
                } else {
                    // Show popup warning                
                    Swal.fire({
                        text:  "문제가 발생했습니다. 다시 시도 해주세요..",           
                        icon:  "error",                  
                        buttonsStyling: false,
                        confirmButtonText:  "확인",           
                        customClass: {
                            confirmButton:  "btn btn-primary"                  
                        }
                    });
                }
            });
        }
    }

    // Handle add new event    
    const handleNewEvent = () => {
        console.log("call handleNewEvent");
        // Update modal title       
        modalTitle.innerText = "학습 계획 추가";    
        modal.show();
        // Select datepicker wrapper elements       
        const datepickerWrappers = form.querySelectorAll('[data-kt-calendar="datepicker"]');
        // Handle all day toggle  
        const allDayToggle = form.querySelector('#kt_calendar_datepicker_allday');
        allDayToggle.addEventListener('click', e => {
            if (e.target.checked) {
                datepickerWrappers.forEach(dw => {
                    dw.classList.add('d-none');
                });
            } else {
                endFlatpickr.setDate(data.startDate, true, 'Y-m-d');
                datepickerWrappers.forEach(dw => {
                    dw.classList.remove('d-none');
                });
            }
        });
        populateForm(data);
        // Handle submit form       
        submitButton.removeEventListener('click', addnewevent);
        submitButton.addEventListener('click', addnewevent);
    }
    // Handle edit event    
    const handleEditEvent = () => {
        // Update modal title   
        modalTitle.innerText = "항목 수정";        
        modal.show();
        // Select datepicker wrapper elements   
        const datepickerWrappers = form.querySelectorAll('[data-kt-calendar=\"datepicker\"]');
        // Handle all day toggle      
        const allDayToggle = form.querySelector('#kt_calendar_datepicker_allday');
        allDayToggle.addEventListener('click', e => {
            if (e.target.checked) {
                datepickerWrappers.forEach(dw => {
                    dw.classList.add('d-none');
                });
            } else {
                endFlatpickr.setDate(data.startDate, true, 'Y-m-d');
                datepickerWrappers.forEach(dw => {
                    dw.classList.remove('d-none');
                });
            }
        });
        console.log("data", data);
        populateForm(data);
        // Handle submit form     
        submitButton.addEventListener('click', function(e) {
            // Prevent default button action        
            e.preventDefault();
            // Validate form before submit            
            if (validator) {
                validator.validate().then(function(status) {
                    console.log('validated!');
                    if (status == 'Valid') {
                        // Show loading indication         
                        submitButton.setAttribute('data-kt-indicator', 'on');
                        // Disable submit button whilst loading         
                        submitButton.disabled = true;
                        // Simulate form submission              
                        setTimeout(function() {
                            // Simulate form submission          
                            var editEventData = {
                                id: data.id,
                                title: eventName.value,
                                description: eventDescription.value,
                                location: eventLocation.value,
                                start: startDatepicker.value+"T"+startTimepicker.value,
                                end: endDatepicker.value+"T"+endTimepicker.value,
                                allDay: data.allDay,
                            };
                            modifyplan(editEventData);
                            // Show popup confirmation                  
                            Swal.fire({
                                text:  "항목이 수정되었습니다!",       
                                icon:  "success",                
                                buttonsStyling: false,
                                confirmButtonText:  "확인",      
                                customClass: {
                                    confirmButton:  "btn btn-primary"            
                                }
                            }).then(function(result) {
                                if (result.isConfirmed) {                                
                                    modal.hide();
                                }
                            }); //form.submit(); 
                            // Submit form                       
                        }, 2000);
                    } else {
                        // Show popup warning                       
                        Swal.fire({
                            text:  "Sorry, looks like there are some errors detected, please try again.",
                            icon:  "error",          
                            buttonsStyling: false,
                            confirmButtonText:  "Ok, got it!",     
                            customClass: {
                                confirmButton:  "btn btn-primary"                 
                            }
                        });
                    }
                });
            }
        });
    }
    // Handle view event   
    const handleViewEvent = () => {
        viewModal.show();
        // Detect all day event      
        var eventNameMod;
        var startDateMod;
        var endDateMod;
        // Generate labels       
        if (data.allDay) {
            eventNameMod = 'All Day';
            startDateMod = moment(data.startDate).format('Do MMM, YYYY');
            endDateMod = moment(data.endDate).format('Do MMM, YYYY');
        } else {
            eventNameMod = '';
            startDateMod = moment(data.startDate).format('Do MMM, YYYY - h:mm a');
            endDateMod = moment(data.endDate).format('Do MMM, YYYY - h:mm a');
        }
        console.log(data,startDateMod,endDateMod)
        let temp_start = data.startDate.substr(0,10)+"  "+data.startDate.substr(11,8)
        let temp_end = data.endDate.substr(0,10)+"  "+data.endDate.substr(11,8)
        console.log(temp_start,temp_end)
        // Populate view data       
        viewEventName.innerText = data.eventName;
        viewAllDay.innerText = eventNameMod;
        viewEventDescription.innerText = data.eventDescription ? data.eventDescription : '--';
        viewEventLocation.innerText = data.eventLocation ? data.eventLocation : '--';
        viewStartDate.innerText = temp_start;
        viewEndDate.innerText = temp_end;
    }
    // Handle delete event  
    const handleDeleteEvent = () => {
        viewDeleteButton.addEventListener('click', e => {
            e.preventDefault();
            Swal.fire({
                text:  "해당 학습 목록을 삭제하시겠습니까?",             
                icon:  "warning",            
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText:  "네",    
                cancelButtonText:  "아니요",           
                customClass: {
                    confirmButton:  "btn btn-primary",        
                    cancelButton:  "btn btn-active-light"       
                }
            }).then(function(result) {
                if (result.value) {
                    deleteplan(data.id);
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text:  "학습 현황 삭제에 실패했습니다.",             
                        icon:  "error",                
                        buttonsStyling: false,
                        confirmButtonText:  "확인",     
                        customClass: {
                            confirmButton:  "btn btn-primary",     
                        }
                    });
                }
            });
        });
    }
    // Handle edit button  
    const handleEditButton = () => {
        console.log("call handleEditButton");
        viewEditButton.addEventListener('click', e => {
            console.log("handleEditButton e", e);
            e.preventDefault();
            viewModal.hide();
            handleEditEvent();
        });
    }
    // Handle cancel button   
    const handleCancelButton = () => {
        // Edit event modal cancel button      
        cancelButton.addEventListener('click', function(e) {
            e.preventDefault();
            Swal.fire({
                text:  "취소하시겠습니까?",  
                icon:  "warning",           
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText:  "예",     
                cancelButtonText:  "아니요",     
                customClass: {
                    confirmButton:  "btn btn-primary",          
                    cancelButton:  "btn btn-active-light"     
                }
            }).then(function(result) {
                if (result.value) {
                    form.reset();
                    // Reset form\t       
                    modal.hide();
                    // Hide modal\t\t\t\t      
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text:  "취소되었습니다.",       
                        icon:  "error",              
                        buttonsStyling: false,
                        confirmButtonText:  "확인",            
                        customClass: {
                            confirmButton:  "btn btn-primary",        
                        }
                    });
                }
            });
        });
    }

    // Handle view button  
    const handleViewButton = () => {
        const viewButton = document.querySelector('#kt_calendar_event_view_button');
        viewButton.addEventListener('click', e => {
            e.preventDefault();
            hidePopovers();
            handleViewEvent();
        });
    }
    // Helper functions   
    // Reset form validator on modal close   
    const resetFormValidator = (element) => {
        // Target modal hidden event --- For more info: https://getbootstrap.com/docs/5.0/components/modal/#events     
        element.addEventListener('hidden.bs.modal', e => {
            if (validator) {
                // Reset form validator. For more info: https://formvalidation.io/guide/api/reset-form     
                validator.resetForm(true);
            }
        });
    }
    // Populate form   
    const populateForm = () => {
        eventName.value = data.eventName ? data.eventName : '';
        eventDescription.value = data.eventDescription ? data.eventDescription : '';
        eventLocation.value = data.eventLocation ? data.eventLocation : '';
        startFlatpickr.setDate(data.startDate, true, 'Y-m-d');
        // Handle null end dates      
        const endDate = data.endDate ? data.endDate : moment(data.startDate).format();
        endFlatpickr.setDate(endDate, true, 'Y-m-d');
        const allDayToggle = form.querySelector('#kt_calendar_datepicker_allday');
        const datepickerWrappers = form.querySelectorAll('[data-kt-calendar=\"datepicker\"]');
        if (data.allDay) {
            allDayToggle.checked = true;
            datepickerWrappers.forEach(dw => {
                dw.classList.add('d-none');
            });
        } else {
            startTimeFlatpickr.setDate(data.startDate, true, 'Y-m-d H:i');
            endTimeFlatpickr.setDate(data.endDate, true, 'Y-m-d H:i');
            endFlatpickr.setDate(data.startDate, true, 'Y-m-d');
            allDayToggle.checked = false;
            datepickerWrappers.forEach(dw => {
                dw.classList.remove('d-none');
            });
        }
    } // Format FullCalendar reponses   
    const formatArgs = (res) => {
        data.id = res.id;
        data.eventName = res.title;
        data.eventDescription = res.description;
        data.eventLocation = res.location;
        data.startDate = res.startStr;
        data.endDate = res.endStr;
        data.allDay = res.allDay;
    } // Generate unique IDs for events    
    const uid = () => {
        return Date.now().toString() + Math.floor(Math.random() * 1000).toString();
    }
    return {
        // Public Functions   
        init: function() {
            // Define variables           
            // Add event modal          
            const element = document.getElementById('kt_modal_add_event');
            form = element.querySelector('#kt_modal_add_event_form');
            eventName = form.querySelector('[name="calendar_event_name"]');
            eventDescription = form.querySelector('[name=\"calendar_event_description\"]');
            eventLocation = form.querySelector('[name=\"calendar_event_location\"]');
            startDatepicker = form.querySelector('#kt_calendar_datepicker_start_date');
            endDatepicker = form.querySelector('#kt_calendar_datepicker_end_date');
            startTimepicker = form.querySelector('#kt_calendar_datepicker_start_time');
            endTimepicker = form.querySelector('#kt_calendar_datepicker_end_time');
            addButton = document.querySelector('[data-kt-calendar="add"]');
            submitButton = form.querySelector('#kt_modal_add_event_submit');
            cancelButton = form.querySelector('#kt_modal_add_event_cancel');
            modalTitle = form.querySelector('[data-kt-calendar=\"title\"]');
            modal = new bootstrap.Modal(element);
            // View event modal            
            const viewElement = document.getElementById('kt_modal_view_event');
            viewModal = new bootstrap.Modal(viewElement);
            viewEventName = viewElement.querySelector('[data-kt-calendar=\"event_name\"]');
            viewAllDay = viewElement.querySelector('[data-kt-calendar=\"all_day\"]');
            viewEventDescription = viewElement.querySelector('[data-kt-calendar=\"event_description\"]');
            viewEventLocation = viewElement.querySelector('[data-kt-calendar=\"event_location\"]');
            viewStartDate = viewElement.querySelector('[data-kt-calendar=\"event_start_date\"]');
            viewEndDate = viewElement.querySelector('[data-kt-calendar=\"event_end_date\"]');
            viewEditButton = viewElement.querySelector('#kt_modal_view_event_edit');
            viewDeleteButton = viewElement.querySelector('#kt_modal_view_event_delete');
            initCalendarApp();
            initValidator();
            initDatepickers();
            handleEditButton();
            handleDeleteEvent();
            handleCancelButton();
            resetFormValidator(element);
        }
    };
}();
// On document
KTUtil.onDOMContentLoaded(function() {
    KTAppCalendar.init();
});
function calendarcall() {
    console.log("123");
    KTAppCalendar.init();
    //console.log(e);
}
  