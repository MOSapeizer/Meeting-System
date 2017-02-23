<template>
<div class="month">      
	<ul>
		<li class="prev">❮</li>
		<li class="next">❯</li>
		<li style="text-align:center">
		August<br>
		<span style="font-size:18px">2016</span>
		</li>
	</ul>
</div>
</template>

<script>
export default {

  name: 'CalendarMonth',

  data () {
    return {

    };
  }
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
</style>