<template>

<ul class="days">
	<li v-for="date of prevMonth">&nbsp;</li>
	<li v-for="date of currentMonth" :class="color(date.meetings)">{{ date.date.split("/")[1] }}</li>
	<li v-for="date of nextMonth">&nbsp;</li>
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
  background: #eee;
  margin: 0;
  display: flex;
  flex-wrap: wrap;
}

.days li {
  list-style-type: none;
  display: inline-block;
  width: calc(100%/7);
  text-align: center;
  font-size:16px;
  padding: 20px;
  color: #777;
}

.days li:before {
  content: "";
  display: block;
  padding-top: calc(100% - 24px);
}
</style>