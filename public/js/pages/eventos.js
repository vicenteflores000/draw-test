!(function (l) {
    "use strict";
    var e = function () {
        (this.$body = l("body")),
            (this.$modal = l("#event-modal")),
            (this.$event = "#external-events div.external-event"),
            (this.$calendar = l("#calendar")),
            (this.$extEvents = l("#external-events")),
            (this.$calendarObj = null);
    };

    (e.prototype.onDrop = function (e, t) {
        var n = e.data("eventObject"),
            a = e.attr("data-class"),
            o = l.extend({}, n);
        (o.start = t),
            a && (o.className = [a]),
            this.$calendar.fullCalendar("renderEvent", o, !0),
            l("#drop-remove").is(":checked") && e.remove();
    }),
        (e.prototype.onEventClick = function (t, e, n) {
            var a = this,
                o = l("<form></form>");
            o.append("<label>Nombre del Evento</label>"),
                o.append(
                    "<div class='input-group m-b-15'><input class='form-control' type=text value='" +
                        t.title +
                        "' disabled/><span class='input-group-append'></span></div>"
                ),
                a.$modal.modal({ backdrop: "static" }),
                a.$modal
                    .find(".delete-event")
                    .show()
                    .end()
                    .find(".save-event")
                    .hide()
                    .end()
                    .find(".modal-body")
                    .empty()
                    .prepend(o)
                    .end()
                    .find(".delete-event")
                    .unbind("click")
                    .click(function () {
                        a.$calendarObj.fullCalendar("removeEvents", function (
                            e
                        ) {
                            return e._id == t._id;
                        }),
                            a.$modal.modal("hide");
                    }),
                a.$modal.find("form").on("submit", function () {
                    return (
                        (t.title = o.find("input[type=text]").val()),
                        a.$calendarObj.fullCalendar("updateEvent", t),
                        a.$modal.modal("hide"),
                        !1
                    );
                });
        }),
        (e.prototype.init = function () {
            moment.locale("es");
            var e = new Date(),
                t =
                    (e.getDate(),
                    e.getMonth(),
                    e.getFullYear(),
                    new Date(l.now())),
                a = this;
            a.$calendarObj = a.$calendar.fullCalendar({
                defaultView: "agendaWeek",
                height: l(window),
                header: {
                    center: "",
                    left: "prev title next",
                    right: "month,agendaWeek,agendaDay",
                },
                events: "http://draw-test.test/php",
                drop: function (e) {
                    a.onDrop(l(this), e);
                },
                eventClick: function (e, t, n) {
                    a.onEventClick(e, t, n);
                },
            });
        }),
        (l.CalendarApp = new e()),
        (l.CalendarApp.Constructor = e);
})(window.jQuery),
    (function (e) {
        "use strict";
        window.jQuery.CalendarApp.init();
    })();
