import AdminEvents from './events/AdminEvents';
import AdminProjects from './projects/AdminProjects';
import AdminPlays from './plays/AdminPlays';

export default {
    mode: 'history',
    linkActiveClass: 'font-bold',
    routes:[
        // {
        //     path: '*',
        //     component: NotFound,
        // // },
        // {
        //     path: '/',
        //     component: AdminEvents,
        //     name: 'home'
        // },
        {
            path: '/admin',
            component: AdminEvents
        },
        {
            path: '/admin/events',
            component: AdminEvents,
            name: 'events'
        },
        {
            path: '/admin/projects',
            component: AdminProjects,
            name: 'projects'
        },
        {
            path: '/admin/plays',
            component: AdminPlays,
            name: 'plays'
        }
    ]
}
