import Vue from 'vue'
import Reporting from './components/Reporting'

Vue.mixin({ methods: { t, n } })

export default new Vue({
	el: '#' + appid + 'content',
	render: h => h(Reporting),
})
