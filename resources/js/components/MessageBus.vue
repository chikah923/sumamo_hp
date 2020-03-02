<template>
    <div></div>
</template>

<script>
import Swal from 'sweetalert2';
import toastr from 'toastr';
export default {
    name: 'messagebus',

    data() {
        return {
            notification: false,
        }
    },

    computed: {
        type() {
            return this.notification.type;
        }
    },

    mounted() {
        window.EventBus.$on('notification', (payload) => {
            //console.log('Notification received frm component: '+payload);
            this.notification = payload;

            /*
            Swal.fire({
                icon: payload.type,
                title: payload.type+'!',
                text: payload.message,
            });
            */
           this.toastrsettings = {
                timeOut:5e3,
                closeButton:!0,
                debug:!1,
                newestOnTop:!0,
                progressBar:!0,
                positionClass:"toast-top-right",
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
            };

           if(payload.type == 'success')
           {
               toastr.success(payload.message, payload.type, this.toastrsettings);
           }

           if(payload.type == 'error')
           {
               toastr.warning(payload.message, payload.type, this.toastrsettings);
           }
           if(payload.type == 'swal')
           {
            Swal.fire({
                    icon: 'info',
                    title: 'info',
                    text: payload.message,
                });
           }

        });

    },



}
</script>

<style scoped>

eventbusclass {
    position: fixed;
    right: 20px;
    top: 40px;
    z-index: 1;
}

</style>

