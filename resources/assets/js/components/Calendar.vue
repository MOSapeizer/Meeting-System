<template>

<div>
  <calendar-month></calendar-month>
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

    };
  },

  components: {
      calendarMonth,
      calendarDay,
      calendarDayTitle,
  }
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