"use strict";

var KTAppCalendar = (function () {
  var e,
    t,
    n,
    a,
    o,
    r,
    i,
    l,
    d,
    c,
    s,
    m,
    u,
    v,
    f,
    p,
    y,
    D,
    k,
    _,
    g,
    b,
    S,
    h,
    T,
    Y,
    w,
    L,
    E,
    M = {
      id: "",
      eventName: "",
      eventDescription: "",
      eventLocation: "",
      startDate: "",
      endDate: "",
      allDay: !1,
    };

  const x = (new_e) => {
      console.log("ne:", new_e);
      (v.innerText = "학습 계획 추가"), u.show();
      const o = f.querySelectorAll('[data-kt-calendar="datepicker"]'),
        i = f.querySelector("#kt_calendar_datepicker_allday");
      i.addEventListener("click", (e) => {
        e.target.checked
          ? o.forEach((e) => {
              e.classList.add("d-none");
            })
          : (l.setDate(M.startDate, !0, "Y-m-d"),
            o.forEach((e) => {
              e.classList.remove("d-none");
            }));
      }),
        C(M),
        D.addEventListener("click", function (o) {
          //o.preventDefault(),
          if (c.selectedDates[0] > m.selectedDates[0]) {
            Swal.fire("시작 시간이 종료시간보다 클 수 없습니다.");
            return;
          }
          p &&
            p.validate().then(function (o) {
              console.log("validated!"),
                "Valid" == o
                  ? (D.setAttribute("data-kt-indicator", "on"),
                    (D.disabled = !0),
                    setTimeout(function () {
                      D.removeAttribute("data-kt-indicator");

                      if (1) {
                        u.hide(), (D.disabled = !1);
                        let o = !1;
                        i.checked && (o = !0),
                          0 === c.selectedDates.length && (o = !0);
                        var d = moment(r.selectedDates[0]).format(),
                          s = moment(
                            l.selectedDates[l.selectedDates.length - 1]
                          ).format();
                        if (!o) {
                          const e = moment(r.selectedDates[0]).format(
                              "YYYY-MM-DD"
                            ),
                            t = e;
                          (d =
                            e +
                            "T" +
                            moment(c.selectedDates[0]).format("HH:mm:ss")),
                            (s =
                              t +
                              "T" +
                              moment(m.selectedDates[0]).format("HH:mm:ss"));
                        }
                        console.log(M);
                        console.log("en:", t.value);
                        console.log("des:", n.value);
                        console.log("lo:", a.value);
                        console.log("st:", d);
                        console.log("end:", s);
                        var addNewEventData = {
                          title: t.value,
                          description: n.value,
                          location: a.value,
                          start: d,
                          end: s,
                          allDay: o,
                        };

                        // 230207 --------------------------------------------------------------------------------------------------

                        if (t.value == "") {
                          deleteplan(M.id);
                        } else {
                          addplan(addNewEventData);
                        }

                        Swal.fire({
                          text: "새로운 항목이 추가되었습니다!",
                          confirmButtonText: "확인",
                          customClass: { confirmButton: "btn btn-primary" },
                        }).then(new_e.refetchEvents());

                        // Swal.fire({
                        //   text: "새로운 항목이 추가되었습니다!",
                        //   confirmButtonText: "확인",
                        //   customClass: { confirmButton: "btn btn-primary" },
                        // }).then(
                        //   function (o) {
                        //     if (o.isConfirmed) {
                        //       addplan(addNewEventData);
                        //     }
                        //   }

                        ////new_e.refetchEvents(),

                        ////addplan(addNewEventData)
                        //);

                        // 230207 --------------------------------------------------------------------------------------------------
                        // popup();
                        // popup();
                        // e.addEvent({
                        //   id: A(),
                        //   title: t.value,
                        //   description: n.value,
                        //   location: a.value,
                        //   start: d,
                        //   end: s,
                        //   allDay: 0,
                        // }),
                        // e.render(),
                        console.log("tehh");
                        f.reset();
                      }

                      // D.removeAttribute("data-kt-indicator"),
                      //   Swal.fire({
                      //     text: "새로운 항목이 추가되었습니다.",
                      //     icon: "success",
                      //     // buttonsStyling: !1,
                      //     // confirmButtonText: "확인",
                      //     // customClass: { confirmButton: "btn btn-primary" },
                      //   }).then(function (o) {
                      //     alert(o);
                      //     console.log("o:",o);
                      //     if (o.isConfirmed) {
                      //       u.hide(), (D.disabled = !1);
                      //       let o = !1;
                      //       i.checked && (o = !0),
                      //         0 === c.selectedDates.length && (o = !0);
                      //       var d = moment(r.selectedDates[0]).format(),
                      //         s = moment(
                      //           l.selectedDates[l.selectedDates.length - 1]
                      //         ).format();
                      //       if (!o) {
                      //         const e = moment(r.selectedDates[0]).format(
                      //             "YYYY-MM-DD"
                      //           ),
                      //           t = e;
                      //         (d =
                      //           e +
                      //           "T" +
                      //           moment(c.selectedDates[0]).format(
                      //             "HH:mm:ss"
                      //           )),
                      //           (s =
                      //             t +
                      //             "T" +
                      //             moment(m.selectedDates[0]).format(
                      //               "HH:mm:ss"
                      //             ));
                      //       }
                      //       console.log(M);
                      //       console.log("en:",t.value);
                      //       console.log("des:",n.value);
                      //       console.log("lo:",a.value);
                      //       console.log("st:",d);
                      //       console.log("end:",s);
                      //       var addNewEventData = {
                      //         title : t.value,
                      //         description : n.value,
                      //         location : a.value,
                      //         start : d,
                      //         end : s,
                      //         allDay: o
                      //       }
                      //       addplan(addNewEventData);

                      //       // popup();
                      //       // popup();
                      //       e.addEvent({
                      //         id: A(),
                      //         title: t.value,
                      //         description: n.value,
                      //         location: a.value,
                      //         start: d,
                      //         end: s,
                      //         allDay: 0,
                      //       }),
                      //       e.render(),
                      //          f.reset();
                      //     }
                      //   });
                    }, 2e3))
                  : Swal.fire({
                      text: "문제가 발생했습니다. 다시 시도 해주세요..",
                      icon: "error",
                      buttonsStyling: !1,
                      confirmButtonText: "확인",
                      customClass: { confirmButton: "btn btn-primary" },
                    });
            });
        });
    },
    B = () => {
      var e, t, n;
      w.show(),
        M.allDay
          ? ((e = "All Day"),
            (t = moment(M.startDate).format("h:mm a")), //Do MMM, YYYY
            (n = moment(M.endDate).format("h:mm a"))) //Do MMM, YYYY
          : ((e = ""),
            (t = moment(M.startDate).format("h:mm a")),
            (n = moment(M.endDate).format("h:mm a"))),
        (g.innerText = M.eventName),
        (b.innerText = e),
        (S.innerText = M.eventDescription ? M.eventDescription : "--"),
        (h.innerText = M.eventLocation ? M.eventLocation : "--"),
        (T.innerText = t),
        (Y.innerText = n);
    },
    q = (new_e) => {
      console.log("new", new_e);
      L.addEventListener("click", (o) => {
        o.preventDefault(),
          w.hide(),
          (() => {
            (v.innerText = "항목 수정"), u.show();
            const o = f.querySelectorAll('[data-kt-calendar="datepicker"]'),
              i = f.querySelector("#kt_calendar_datepicker_allday");
            i.addEventListener("click", (e) => {
              e.target.checked
                ? o.forEach((e) => {
                    e.classList.add("d-none");
                  })
                : (l.setDate(M.startDate, !0, "Y-m-d"),
                  o.forEach((e) => {
                    e.classList.remove("d-none");
                  }));
            }),
              C(M),
              D.addEventListener("click", function (o) {
                //console.log("M",M.id);
                //o.preventDefault(),
                p &&
                  p.validate().then(function (o) {
                    console.log("validated!"),
                      "Valid" == o
                        ? (D.setAttribute("data-kt-indicator", "on"),
                          (D.disabled = !0),
                          setTimeout(function () {
                            D.removeAttribute("data-kt-indicator");

                            if (1) {
                              u.hide(),
                                (D.disabled = !1),
                                e.getEventById(M.id).remove();

                              let o = !1;
                              i.checked && (o = !0),
                                0 === c.selectedDates.length && (o = !0);
                              var d = moment(r.selectedDates[0]).format(),
                                s = moment(
                                  l.selectedDates[l.selectedDates.length - 1]
                                ).format();
                              if (!o) {
                                const e = moment(r.selectedDates[0]).format(
                                    "YYYY-MM-DD"
                                  ),
                                  t = e;
                                (d =
                                  e +
                                  "T" +
                                  moment(c.selectedDates[0]).format(
                                    "HH:mm:ss"
                                  )),
                                  (s =
                                    t +
                                    "T" +
                                    moment(m.selectedDates[0]).format(
                                      "HH:mm:ss"
                                    ));
                              }
                              console.log(M);
                              console.log("en:", t.value);
                              console.log("des:", n.value);
                              console.log("lo:", a.value);
                              console.log("st:", d);
                              console.log("end:", s);
                              var modifyNewEventData = {
                                id: M.id,
                                title: t.value,
                                description: n.value,
                                location: a.value,
                                start: d,
                                end: s,
                                allDay: o,
                              };
                              //console.log(id)

                              // 230207 --------------------------------------------------------------------------------------------------

                              if (t.value == "") {
                                deleteplan(M.id);
                              } else {
                                modifyplan(modifyNewEventData);
                              }

                              Swal.fire({
                                text: "항목이 수정되었습니다!",
                                confirmButtonText: "확인",
                                customClass: {
                                  confirmButton: "btn btn-primary",
                                },
                              }).then(new_e.refetchEvents());

                              Swal.fire({
                                text: "항목이 수정되었습니다!",
                                confirmButtonText: "확인",
                                customClass: {
                                  confirmButton: "btn btn-primary",
                                },
                              }).then(function (o) {
                                if (o.isConfirmed) {
                                  modifyplan(modifyNewEventData);
                                }
                              });
                              // e.addEvent({
                              //   id: A(),
                              //   title: t.value,
                              //   description: n.value,
                              //   location: a.value,
                              //   start: d,
                              //   end: s,
                              //   allDay: o,
                              // }),
                              //   e.render(),
                              //   f.reset();
                            }

                            // 230207 --------------------------------------------------------------------------------------------------
                            // Swal.fire({
                            //   text: "저장되었습니다.",
                            //   icon: "success",
                            //   buttonsStyling: !1,
                            //   confirmButtonText: "확인",
                            //   customClass: {
                            //     confirmButton: "btn btn-primary",
                            //   },
                            // }).then(function (o) {
                            //   if (o.isConfirmed) {

                            //   }
                            // });
                          }, 2e3))
                        : Swal.fire({
                            text: "문제가 발생했습니다. 다시 시도 해주세요..",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "확인",
                            customClass: { confirmButton: "btn btn-primary" },
                          });
                  });
              });
          })();
      });
    },
    C = () => {
      (t.value = M.eventName ? M.eventName : ""),
        (n.value = M.eventDescription ? M.eventDescription : ""),
        (a.value = M.eventLocation ? M.eventLocation : ""),
        r.setDate(M.startDate, !0, "Y-m-d");
      const e = M.endDate ? M.endDate : moment(M.startDate).format();
      l.setDate(e, !0, "Y-m-d");
      const o = f.querySelector("#kt_calendar_datepicker_allday"),
        i = f.querySelectorAll('[data-kt-calendar="datepicker"]');
      M.allDay
        ? ((o.checked = 0),
          i.forEach((e) => {
            // e.classList.add("d-none");
          }))
        : (c.setDate(M.startDate, 0, "Y-m-d H:i"),
          m.setDate(M.endDate, 0, "Y-m-d H:i"),
          l.setDate(M.startDate, 0, "Y-m-d"),
          (o.checked = !1),
          i.forEach((e) => {
            // e.classList.remove("d-none");
          }));
    },
    N = (e) => {
      (M.id = e.id),
        (M.eventName = e.title),
        (M.eventDescription = e.description),
        (M.eventLocation = e.location),
        (M.startDate = e.startStr),
        (M.endDate = e.endStr),
        (M.allDay = e.allDay);
    },
    A = () =>
      Date.now().toString() + Math.floor(1e3 * Math.random()).toString();
  return {
    init: function () {
      const C = document.getElementById("kt_modal_add_event");
      (f = C.querySelector("#kt_modal_add_event_form")),
        (t = f.querySelector('[name="calendar_event_name"]')),
        (n = f.querySelector('[name="calendar_event_description"]')),
        (a = f.querySelector('[name="calendar_event_location"]')),
        (o = f.querySelector("#kt_calendar_datepicker_start_date")),
        (i = f.querySelector("#kt_calendar_datepicker_end_date")),
        (d = f.querySelector("#kt_calendar_datepicker_start_time")),
        (s = f.querySelector("#kt_calendar_datepicker_end_time")),
        (y = document.querySelector('[data-kt-calendar="add"]')),
        (D = f.querySelector("#kt_modal_add_event_submit")),
        (k = f.querySelector("#kt_modal_add_event_cancel")),
        (_ = C.querySelector("#kt_modal_add_event_close")),
        (v = f.querySelector('[data-kt-calendar="title"]')),
        (u = new bootstrap.Modal(C));
      const H = document.getElementById("kt_modal_view_event");
      var F, O, I, R, V, P;
      (w = new bootstrap.Modal(H)),
        (g = H.querySelector('[data-kt-calendar="event_name"]')),
        (b = H.querySelector('[data-kt-calendar="all_day"]')),
        (S = H.querySelector('[data-kt-calendar="event_description"]')),
        (h = H.querySelector('[data-kt-calendar="event_location"]')),
        (T = H.querySelector('[data-kt-calendar="event_start_date"]')),
        (Y = H.querySelector('[data-kt-calendar="event_end_date"]')),
        (L = H.querySelector("#kt_modal_view_event_edit")),
        (E = H.querySelector("#kt_modal_view_event_delete")),
        (F = document.getElementById("kt_calendar_app")),
        (O = moment().startOf("day")),
        (I = O.format("YYYY-MM")),
        (R = O.clone().subtract(1, "day").format("YYYY-MM-DD")),
        (V = O.format("YYYY-MM-DD")),
        (P = O.clone().add(1, "day").format("YYYY-MM-DD")),
        (e = new FullCalendar.Calendar(F, {
          headerToolbar: {
            left: "prev,next today",
            center: "title",
            right: "dayGridMonth,timeGridWeek",
          },
          initialView: "timeGridWeek",
          locale: "ko",
          initialDate: V,
          navLinks: !0,
          selectable: !0,
          selectMirror: !0,

          selectLongPressDelay: 250,
          select: function (k) {
            N(k), x(e);
          },
          eventClick: function (e) {
            N({
              id: e.event.id,
              title: e.event.title,
              description: e.event.extendedProps.description,
              location: e.event.extendedProps.location,
              startStr: e.event.startStr,
              endStr: e.event.endStr,
              allDay: e.event.allDay,
            }),
              B();
          },
          allDaySlot: false,
          editable: false,
          dayMaxEvents: !0,
          events:
            // [
            //   {
            //     id: A(),
            //     title: "Meeting",
            //     start: V + "T10:30:00",
            //     end: V + "T12:30:00",
            //     description: "Lorem ipsum dolor eiu idunt ut labore",
            //     location: "Meeting Room 11.06",
            //   },
            // ]
            function event_cal(info, successCallback, failureCallback) {
              console.log(info);
              console.log(info.startStr.substr(0, 10));
              console.log(info.endStr.substr(0, 10));
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
                  console.log("@@@@@@@@@@@@@@@@@@@@",obj);
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
          // [
          //   {
          //     id: A(),
          //     title: "All Day Event",
          //     start: I + "-01",
          //     end: I + "-02",
          //     description: "Toto lorem ipsum dolor sit incid idunt ut",
          //     className: "fc-event-danger fc-event-solid-warning",
          //     location: "Federation Square",
          //   },
          //   {
          //     id: A(),
          //     title: "Reporting",
          //     start: I + "-14T13:30:00",
          //     description: "Lorem ipsum dolor incid idunt ut labore",
          //     end: I + "-14T14:30:00",
          //     className: "fc-event-success",
          //     location: "Meeting Room 7.03",
          //   },
          //   {
          //     id: A(),
          //     title: "Company Trip",
          //     start: I + "-02",
          //     description: "Lorem ipsum dolor sit tempor incid",
          //     end: I + "-03",
          //     className: "fc-event-primary",
          //     location: "Seoul, Korea",
          //   },
          //   {
          //     id: A(),
          //     title: "ICT Expo 2021 - Product Release",
          //     start: I + "-03",
          //     description: "Lorem ipsum dolor sit tempor inci",
          //     end: I + "-05",
          //     className: "fc-event-light fc-event-solid-primary",
          //     location: "Melbourne Exhibition Hall",
          //   },
          //   {
          //     id: A(),
          //     title: "Dinner",
          //     start: I + "-12",
          //     description: "Lorem ipsum dolor sit amet, conse ctetur",
          //     end: I + "-13",
          //     location: "Squire's Loft",
          //   },
          //   {
          //     id: A(),
          //     title: "Repeating Event",
          //     start: I + "-09T16:00:00",
          //     end: I + "-09T17:00:00",
          //     description: "Lorem ipsum dolor sit ncididunt ut labore",
          //     className: "fc-event-danger",
          //     location: "General Area",
          //   },
          //   {
          //     id: A(),
          //     title: "Repeating Event",
          //     description: "Lorem ipsum dolor sit amet, labore",
          //     start: I + "-16T16:00:00",
          //     end: I + "-16T17:00:00",
          //     location: "General Area",
          //   },
          //   {
          //     id: A(),
          //     title: "Conference",
          //     start: R,
          //     end: P,
          //     description: "Lorem ipsum dolor eius mod tempor labore",
          //     className: "fc-event-primary",
          //     location: "Conference Hall A",
          //   },
          //   {
          //     id: A(),
          //     title: "Meeting",
          //     start: V + "T10:30:00",
          //     end: V + "T12:30:00",
          //     description: "Lorem ipsum dolor eiu idunt ut labore",
          //     location: "Meeting Room 11.06",
          //   },
          //   {
          //     id: A(),
          //     title: "Lunch",
          //     start: V + "T12:00:00",
          //     end: V + "T14:00:00",
          //     className: "fc-event-info",
          //     description: "Lorem ipsum dolor sit amet, ut labore",
          //     location: "Cafeteria",
          //   },
          //   {
          //     id: A(),
          //     title: "Meeting",
          //     start: V + "T14:30:00",
          //     end: V + "T15:30:00",
          //     className: "fc-event-warning",
          //     description: "Lorem ipsum conse ctetur adipi scing",
          //     location: "Meeting Room 11.10",
          //   },
          //   {
          //     id: A(),
          //     title: "Happy Hour",
          //     start: V + "T17:30:00",
          //     end: V + "T21:30:00",
          //     className: "fc-event-info",
          //     description: "Lorem ipsum dolor sit amet, conse ctetur",
          //     location: "The English Pub",
          //   },
          //   {
          //     id: A(),
          //     title: "Dinner",
          //     start: P + "T18:00:00",
          //     end: P + "T21:00:00",
          //     className: "fc-event-solid-danger fc-event-light",
          //     description: "Lorem ipsum dolor sit ctetur adipi scing",
          //     location: "New York Steakhouse",
          //   },
          //   {
          //     id: A(),
          //     title: "Birthday Party",
          //     start: P + "T12:00:00",
          //     end: P + "T14:00:00",
          //     className: "fc-event-primary",
          //     description: "Lorem ipsum dolor sit amet, scing",
          //     location: "The English Pub",
          //   },
          //   {
          //     id: A(),
          //     title: "Site visit",
          //     start: I + "-28",
          //     end: I + "-29",
          //     className: "fc-event-solid-info fc-event-light",
          //     description: "Lorem ipsum dolor sit amet, labore",
          //     location: "271, Spring Street",
          //   },
          // ]
          // ,datesSet: function () {},
        })).render(),
        (p = FormValidation.formValidation(f, {
          fields: {
            calendar_event_name: {
              validators: { notEmpty: { message: "학습 항목이 필요합니다." } },
            },
            calendar_event_start_date: {
              validators: { notEmpty: { message: "시작 날짜가 필요합니다." } },
            },
            calendar_event_end_date: {
              validators: { notEmpty: { message: "종료 날짜가 필요합니다." } },
            },
          },
          plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap: new FormValidation.plugins.Bootstrap5({
              rowSelector: ".fv-row",
              eleInvalidClass: "",
              eleValidClass: "",
            }),
          },
        })),
        (r = flatpickr(o, { enableTime: !1, dateFormat: "Y-m-d" })),
        (l = flatpickr(i, { enableTime: !1, dateFormat: "Y-m-d" })),
        (c = flatpickr(d, {
          enableTime: !0,
          noCalendar: !0,
          dateFormat: "H:i",
        })),
        ((m = flatpickr(s, {
          enableTime: !0,
          noCalendar: !0,
          dateFormat: "H:i",
        })),
        console.log("종료시간: ", s)),
        q(e),
        // y.addEventListener("click", (e) => {
        //   (M = {
        //     id: "",
        //     eventName: "",
        //     eventDescription: "",
        //     startDate: new Date(),
        //     endDate: new Date(),
        //     allDay: !1,
        //   }),
        //     x();
        // }),
        E.addEventListener("click", (t) => {
          //t.preventDefault(),
          console.log("t", t);
          Swal.fire({
            text: "해당 학습 목록을 삭제하시겠습니까?",
            icon: "warning",
            showCancelButton: !0,
            buttonsStyling: !1,
            confirmButtonText: "네",
            cancelButtonText: "아니요",
            customClass: {
              confirmButton: "btn btn-primary",
              cancelButton: "btn btn-active-light",
            },
          })

            .then(w.hide())
            .then(function (t) {
              t.value
                ? (e.getEventById(M.id).remove(), w.hide())
                : "cancel" === t.dismiss &&
                  Swal.fire({
                    text: "학습 현황 삭제에 실패했습니다.",
                    icon: "error",
                    buttonsStyling: !1,
                    confirmButtonText: "확인",
                    customClass: { confirmButton: "btn btn-primary" },
                  });
              deleteplan(M.id);

              // e.refetchEvents();
            });
        }),
        k.addEventListener("click", function (e) {
          e.preventDefault(), u.hide();
          // Swal.fire({
          //   text: "변경된 내용이 저장되지 않습니다. 정말 취소하시겠습니까?",
          //   icon: "warning",
          //   showCancelButton: !0,
          //   buttonsStyling: !1,
          //   confirmButtonText: "네",
          //   cancelButtonText: "아니요",
          //   customClass: {
          //     confirmButton: "btn btn-primary",
          //     cancelButton: "btn btn-active-light",
          //   },
          // }).then(function (e) {
          //   e.value
          //     ? (f.reset(), u.hide())
          //     : "cancel" === e.dismiss &&
          //       Swal.fire({
          //         text: "Your form has not been cancelled!.",
          //         icon: "error",
          //         buttonsStyling: !1,
          //         confirmButtonText: "확인",
          //         customClass: { confirmButton: "btn btn-primary" },
          //       });
          // });
        }),
        _.addEventListener("click", function (e) {
          e.preventDefault(), u.hide();
          // Swal.fire({
          //   text: "변경된 내용이 저장되지 않습니다. 정말 취소하시겠습니까?",
          //   icon: "warning",
          //   showCancelButton: !0,
          //   buttonsStyling: !1,
          //   confirmButtonText: "네",
          //   cancelButtonText: "아니요",
          //   customClass: {
          //     confirmButton: "btn btn-primary",
          //     cancelButton: "btn btn-active-light",
          //   },
          // }).then(function (e) {
          //   e.value
          //     ? (f.reset(), u.hide())
          //     : "cancel" === e.dismiss &&
          //       Swal.fire({
          //         text: "Your form has not been cancelled!.",
          //         icon: "error",
          //         buttonsStyling: !1,
          //         confirmButtonText: "확인",
          //         customClass: { confirmButton: "btn btn-primary" },
          //       });
          // });
        }),
        ((e) => {
          e.addEventListener("hidden.bs.modal", (e) => {
            p && p.resetForm(!0);
          });
        })(C);
    },
  };
})();
KTUtil.onDOMContentLoaded(function () {
  KTAppCalendar.init();
});
function calendarcall() {
  console.log("123");
  KTAppCalendar.init();
  //console.log(e);
}
