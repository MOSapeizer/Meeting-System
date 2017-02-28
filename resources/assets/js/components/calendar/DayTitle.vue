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
    color: #666;
    display: inline-block;
    font-size:16px;
    text-align: center;
    width: calc(100%/7 - 8px);
}
</style>