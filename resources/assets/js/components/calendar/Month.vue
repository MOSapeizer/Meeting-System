<template>
<div class="month">      
	<ul>
		<li @click="decrementMonth" class="prev">❮</li>
		<li @click="incrementMonth" class="next">❯</li>
		<li style="text-align:center">
		{{ monthText }}<br>
		<span style="font-size:18px">{{ year }}</span>
		</li>
	</ul>
</div>
</template>

<script>
export default {

  name: 'CalendarMonth',

  props: ["year", "month"],

  data () {
    return {
        monthLiteral: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],

    };
  },

  methods: {
    decrementMonth() {
        this.$emit('prev');
    },

    incrementMonth() {
        this.$emit('next');
    },
  },

  computed: {
    monthText() {
        return this.monthLiteral[this.month-1];
    },
  },
};
</script>

<style lang="css" scoped>

.month {
    padding: 25px 25px;
    width: 100%;
    background: #1abc9c;
}

.month ul {
    margin: 0;
    padding: 0;
}

.month ul li {
    color: white;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
}

.month .prev {
    float: left;
    padding-top: 10px;
}

.month .next {
    float: right;
    padding-top: 10px;
}

.month .prev, .month .next  {
    cursor: pointer;
}
</style>