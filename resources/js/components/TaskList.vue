<template>

 <li class="dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                <i class="zmdi zmdi-flag"></i>
            <div class="notify"><span class=""></span><span class=""></span></div>
            </a>
            <ul class="dropdown-menu slideUp2">
                <li class="header">Tasks List <small class="float-right"><i class="zmdi zmdi-plus-circle-o"></i></small></li>
                <li class="body">
                    <ul class="menu tasks list-unstyled">

                        <li v-for="todo in alltodos" :key="todo.id">
                            <div class="progress-container progress-primary">
                                <span class="progress-badge">{{ todo.name }}</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                        <span class="progress-value">86%</span>
                                    </div>
                                </div>
                                <ul class="list-unstyled team-info">
                                    <li class="m-r-15"><small>Team</small></li>
                                    <li>
                                        <img src="" alt="Avatar">
                                    </li>

                                </ul>
                            </div>
                        </li>


                    </ul>
                </li>
                <li class="footer text-center"> <a href="javascript:void(0);">View All</a> </li>
            </ul>
        </li>

</template>

<script>

import { mapState, mapGetters, mapActions } from 'vuex';
export default {
    name: 'tasklist',

    computed: {
        ...mapGetters(['alltodos'])
    },

    methods: {
        ...mapActions(['fetchTodos'])
    },

    mounted() {
        this.fetchTodos();
    }



};
</script>
