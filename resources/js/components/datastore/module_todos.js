import Axios from "axios";


const state = {
    todos: []
};

const getters = {
    alltodos: (state) => state.todos
};

const actions = {
    async fetchTodos({ commit }) {
        const response = await Axios.get('/dashboard/user/todos');

        commit('set_todos', response.data)
    },

    async addTodo({ commit }, name, description){
        const response = await Axios.post('/dashboard/user/todos/add', { name, description });

        commit('newTodo', response.data);
    }
};

const mutations = {
    set_todos: (state, todos) => state.todos = todos,
    newTodo: (state, todo) => state.todos.unshift(todo)
};

export default {
    state,
    getters,
    actions,
    mutations,
}

