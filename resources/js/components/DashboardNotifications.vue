<template>

<li class="dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle" :class="{ 'text-danger': unreadnotifications.length > 0 }" title="Notifications" data-toggle="dropdown" role="button" @click="markAsRead">
                <i class="zmdi" :class="{ 'zmdi-notifications': unreadnotifications.length < 1, 'zmdi-notifications-active animated infinite pulse': unreadnotifications.length > 0   }"></i>
                <div class="notify text-danger"><span class="text-danger" :class="{ 'heartbit': unreadnotifications.length > 0 }"></span><span :class="{ 'point': unreadnotifications.length > 0 }"></span></div>
            </a>
            <ul class="dropdown-menu slideUp2">
                <li class="header">Notifications <span v-if="unreadnotifications.length > 0" class="badge badge-danger">{{ unreadnotifications.length }} New</span></li>
                <li class="body">
                    <ul class="menu list-unstyled">
                        <li v-for="notification in notifications">
                            <a href="void(0);">
                                <div class="icon-circle bg-blue"><i class="zmdi zmdi-account"></i></div>
                                <div class="menu-info">
                                    <h4>{{ notification.data[0].subject }}</h4>
                                    <small>{{ notification.data[0].body }}</small>
                                    <p><i class="zmdi zmdi-time"></i> 14 mins ago </p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="footer text-center"> <a href="javascript:void(0);">View All Notifications</a> </li>
            </ul>
        </li>


</template>




<script>

    /*
        1. on create fetch all notifications sort by date asc
        2. set timer to check for new notifications only and if found toast msg()
        3. on click mark all notifications as read
        3. on template show unread notifications


    */

    import toastr from 'toastr';
    export default {
        name: 'dashboardnotifications',
        data() {
            return {
                notifications: [],
                untoastednotifications: [],
                unreadnotifications: [],
                timer: '',

                options:{
                    height:'400px',
                    size:5,
                    distance: '2px',
                    alwaysVisible: true,
                    railVisible: true,
                    position: 'left',
                    wheelStep: 10,
                }

            }
        },
        watch:
        {
            notifications(val)
            {

               function checkUnread(notification) {
                    return notification.read_at == null;
                }

                function checkToasted(notification) {
                    return notification.toasted_at == null;
                }
                this.untoastednotifications =  this.notifications.filter(checkToasted);
                this.unreadnotifications =  this.notifications.filter(checkUnread);

                if (this.untoastednotifications.length > 0 ) {
                    //console.log('toast toast toast!!!!');
                    toastr.info(
                            'You have new notification', 'New Notification',
                            {
                                timeOut:5e3,
                                closeButton:!0,
                                debug:!1,
                                newestOnTop:!0,
                                progressBar:!0,
                                positionClass:"toast-bottom-right",
                                preventDuplicates:!0,
                                onclick:null,
                                showDuration:"300",
                                hideDuration:"1000",
                                extendedTimeOut:"1000",
                                showEasing:"swing",
                                hideEasing:"linear",
                                showMethod:"fadeIn",
                                hideMethod:"fadeOut",
                                tapToDismiss:!1
                            }
                        );
                }
            },



        },

        mounted() {
            this.fetchNotificationsList();
            //check new unread notifications
            this.timer = setInterval(this.fetchNotificationsList, 10000)
        },

        methods: {

            fetchNotificationsList()
            {
                axios.get('/dashboard/notifications')
                .then( ({data}) => this.notifications = data);

                this.markAllToasted();
            },

            markAllToasted()
            {
                axios.get('/dashboard/notifications/markalltoasted');
                this.untoastednotifications = [];
            },

            markAsRead() {
                setTimeout(() => {
                    axios.get("/dashboard/notifications/markallread").then(response=>{
                    this.unreadnotifications = [];
                    });
                }, 5000);
            },

            cancelAutoUpdate () {
                clearInterval(this.timer)
            },

        },
        beforeDestroy () {
            clearInterval(this.timer)
        }

    }
</script>
