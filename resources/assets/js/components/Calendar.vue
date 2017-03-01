<template>

<div>
  <calendar-month @prev="prevMonth"
                  @next="nextMonth"
                  :year="currentYear"
                  :month="currentMonth">                  
  </calendar-month>
  <calendar-day-title></calendar-day-title>
  <calendar-day></calendar-day>

</div>
</template>

<script>

import calendarMonth from './calendar/Month.vue'
import calendarDayTitle from './calendar/DayTitle.vue'
import calendarDay from './calendar/Day.vue'

export default {

  name: 'Calendar',

  data () {
    return {
      currentYear: 2017,
      currentMonth: 2,
    };
  },

  components: {
      calendarMonth,
      calendarDay,
      calendarDayTitle,
  },

  methods: {
    nextMonth() {
      let isNextYear = (this.currentMonth + 1) / 13 == 1;
      let nextMonth = (this.currentMonth + 1) % 13; // 0~12

      if( isNextYear || nextMonth <= 0 )
        nextMonth = 1;

      if( isNextYear )
        this.currentYear++;

      this.currentMonth = nextMonth;
    },

    prevMonth() {
      let isPrevYear = (this.currentMonth - 1) == 0;
      let prevMonth = (this.currentMonth - 1) % 13; // 0~12

      if( isPrevYear || prevMonth <= 0 )
        prevMonth = 12;

      if( isPrevYear )
        this.currentYear--;

      this.currentMonth = prevMonth;
    }
  },
};
</script>

<style lang="css" scoped>
* {box-sizing:border-box;}
ul {list-style-type: none;}
body {font-family: Verdana,sans-serif;}

/* Add media queries for smaller screens */
@media screen and (max-width:720px) {
    .weekdays li, .days li {width: 13.1%;}
}

@media screen and (max-width: 420px) {
    .weekdays li, .days li {width: 12.5%;}
    .days li .active {padding: 2px;}
}

@media screen and (max-width: 290px) {
    .weekdays li, .days li {width: 12.2%;}
}
</style>