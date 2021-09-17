import './bootstrap'
import Vue from 'vue'
import index from './components/index'

const app = new Vue({
  el: '#app',
  components: {
   index,
  }
})