!function (l) {
    "use strict";
    var e = function () {
        this.$body = l("body"),
            this.$modal = l("#event-modal"),
            this.$event = "#external-events div.external-event",
            this.$calendar = l("#calendar"),
            this.$extEvents = l("#external-events"),
            this.$calendarObj = null
    };

    e.prototype.onDrop = function (e, t) {
        var n = e.data("eventObject"),
            a = e.attr("data-class"),
            o = l.extend({}, n);
        o.start = t,
            a && (o.className = [a]),
            this.$calendar.fullCalendar("renderEvent", o, !0),
            l("#drop-remove").is(":checked") && e.remove()
    }

    e.prototype.init = function () {
        moment.locale('es');
        var e = new Date,
            t = (e.getDate(), e.getMonth(), e.getFullYear(), new Date(l.now())),
            n = [
                {
                    title: "Evento 1",
                    start: new Date(l.now() + 158e6),
                    color: '#10c469'
                },
            ],
            a = this;
        a.$calendarObj = a.$calendar.fullCalendar({
            defaultView: "agendaWeek",
            height:l(window),
            header: {
                center: "", left: "prev title next", right: "month,agendaWeek,agendaDay"
            },
            events: n,
            drop: function (e) { a.onDrop(l(this), e) }
        })
    },

        l.CalendarApp = new e, l.CalendarApp.Constructor = e
}

(window.jQuery), function (e) {
    "use strict";
    window.jQuery.CalendarApp.init()
}();