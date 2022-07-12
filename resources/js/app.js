
require('./bootstrap');
window.Vue = require('vue').default;

import VueRouter from 'vue-router';
import routes from './routes';

Vue.use(VueRouter);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('pwd-management-component', require('./components/PwdManagementComponent.vue').default);
Vue.component('account-management-component', require('./components/accountmanagement/AccountManagement.vue').default);
Vue.component('view-account-component', require('./components/accountmanagement/accountmanagementComponent/viewAccountComponent.vue').default);

const app = new Vue({
    el: '#app',
    router: new VueRouter(routes)
});
