import VueRouter from 'vue-router';

//Declare Routes of Application
let routes = [
    {
        path: '/',
        name: 'home',
        component: require('./views/Home').default
    }, {
        path: '/about',
        name: 'about',
        component: require('./views/About').default
    }, {
        path: '/tour',
        name: 'tour',
        component: require('./views/Tour').default
    }, {
        path: '/contact',
        name: 'contact',
        component: require('./views/Contact').default
    }
];

export default new VueRouter({
    routes,
    linkActiveClass: 'is-active',
});
