
import Vue from 'vue'
import VueResouce from 'vue-resource'
// import fullCalendar from 'vue-fullcalendar'
import calendar from './components/Calendar.vue'
import appNavbar from './components/Navbar.vue'
import appFooter from './components/Footer.vue'

Vue.use(VueResouce);

// Vue 2
const app = new Vue({
  el : '#app',
  components : {
    calendar,
    appNavbar,
    appFooter,
  }
})