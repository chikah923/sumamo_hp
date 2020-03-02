<template>
<div></div>

</template>

<script>
export default {
    name: 'firenotification',
    props: ['type', 'message'],

    mounted() {
        window.EventBus.$emit('notification', {
            message: this.message,
            type: this.type
        });
    }

}
</script>
