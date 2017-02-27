<template>
<ul class="weekdays">
    <li>Su</li>
    <li>Mo</li>
    <li>Tu</li>
    <li>We</li>
    <li>Th</li>
    <li>Fr</li>
    <li>Sa</li>
  </ul>
</template>

<script>
export default {

  name: 'CalendarDayTitle',

  data () {
    return {

    };
  }
};
</script>

<style lang="css" scoped>
.weekdays {
    margin: 0;
    padding: 10px 0;
    background-color: #ddd;
}

.weekdays li {
    display: inline-block;
    width: 13.6%;
    color: #666;
    text-align: center;
}
</style>