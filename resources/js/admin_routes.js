import AdminContent from './admin_components/AdminContent';

export default {
    mode: 'history',
    linkActiveClass: 'font-bold',
    routes:[
        {
            path: '/admin/:resource',
            component: AdminContent,
        },
    ]
}
