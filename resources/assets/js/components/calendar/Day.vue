<template>

<ul class="days">
	<li v-for="date of prevMonth"></li>
	<li v-for="date of currentMonth" :class="color(date.meetings)">{{ date.date.split("/")[1] }}</li>
	<li v-for="date of nextMonth"></li>
</ul>

</template>

<script>
export default {

  name: 'CalendarDay',

  props: ["year", "month"],

  data () {
    return {
    	currentMonth: [{
    		day: 0,
    		date: "",
    		meetings: []
    	}],

    	colorScale: 4,
    };
  },

  watch: {
  	month(newMonth) {
  		this.$http.get("/calendar/" + this.month).then((response) => {
	  		this.currentMonth = response.data;
	  	});
  	}
  },

  mounted () {
  	this.$http.get("/calendar/" + this.month).then((response) => {
  		this.currentMonth = response.data;
  	})
  },

  methods: {
  	color(meetings) {
  		return "color-" + Math.floor(meetings.length/this.colorScale);
  	}
  },

  computed: {
  	prevMonth() {
  		return this.currentMonth[0].day;
  	},

  	nextMonth() {
  		let length = this.currentMonth.length-1;
  		return 6-this.currentMonth[length].day;
  	},

  },
};
</script>

<style lang="css" scoped>
.days {
    padding: 10px 0;
    background: #eee;
    margin: 0;
}

.days li {
    list-style-type: none;
    display: inline-block;
    width: calc(100%/7);
    text-align: center;
    margin-bottom: 5px;
    font-size:16px;
    padding: 20px;
    color: #777;
}

.days li .active {
    /*padding: 5px;*/
    background: #1abc9c;
    color: white !important
}
</style>