export default {
    endpoints: [
        {
            endpoint: 'events',
            createRecord: true,
            listComponents:{
                title: 'title',
                subtitle: 'subtitle',
            },
            listTabs:[
                {
                    name: 'Future',
                    queryParameter: '?subset=future'
                },
                {
                    name: 'Past',
                    queryParameter: '?subset=past'
                }
            ],
            recordTabs: [
              {
                name: 'Basic Info',
                component: 'AdminEventsBasics'
              },
              {
                name:'Ticket Sales Stats',
                component: 'AdminEventsTicketsales'
              }
            ]
        },
        {
            endpoint: 'projects',
            createRecord: true,
            listComponents:{
                title: 'name',
                subtitle: 'year'
            },
            listTabs:[
                {
                    name: 'Future',
                    queryParameter: ''
                },
                {
                    name: 'Past',
                    queryParameter: ''
                }
            ],
            recordTabs: [
              {
                name: 'Basic Info',
                component: 'AdminProjectsBasics'
              },
              {
                name:'Cast & Crew',
                component: 'AdminProjectsCast'
              },
              {
                name:'PR',
                component: 'AdminProjectsAssets'
              },
              {
                name:'Audition Info',
                component: 'AdminProjectsPhotographs'
              },
              {
                name:'Photos',
                component: 'AdminProjectsPhotographs'
              },
              {
                name:'Documents',
                component: 'AdminProjectsPhotographs'
              },
              {
                name:'Videos',
                component: 'AdminProjectsPhotographs'
              },
              {
                name:'Budget & Accounts',
                component: 'AdminProjectsPhotographs'
              },
              {
                name:'Ticket Stats',
                component: 'AdminProjectsPhotographs'
              }
            ]
        },
        {
            endpoint: 'plays',
            createRecord: true,
            listComponents:{
                title: 'title',
                subtitle: null
            },
            recordTabs: [
              {
                name: 'Basic Info',
                component: 'AdminPlaysBasics'
              },
            ]
        },
        {
            endpoint: 'eventtypes',
            createRecord: true,
            listComponents:{
                title: 'name',
            },
            recordTabs: [
              {
                name: 'Basic Info',
                component: 'AdminEventtypesBasics'
              },
            ]
        },
        {
            endpoint: 'venues',
            createRecord: true,
            listComponents:{
                title: 'name',
                subtitle: null
            },
            listTabs:[
                {
                    name: 'Active',
                    queryParameter: '?subset=active'
                },
                {
                    name: 'Inactive',
                    queryParameter: '?subset=inactive'
                }
            ],
            recordTabs: [
              {
                name: 'Basic Info',
                component: 'AdminVenuesBasics'
              },
            ]
        },
    ]
}
