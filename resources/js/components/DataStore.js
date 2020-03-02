import Vue from 'vue';
import Vuex from 'vuex';
import todos from './datastore/module_todos';

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        todos
    }
});



