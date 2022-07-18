import { createStore } from 'vuex'

export default createStore({
  state: {
    columns:[],
    users: [],
    usersRequest: [],
  },
  getters: {
  },
  mutations: {
    setUsers(state,newValue){
      state.users=newValue;
    },
    setUsersRequest(state,newValue){
      state.usersRequest=newValue;
    },
    deleteUser(state, id){
      state.users.splice(state.users.findIndex(user => user.id == id), 1);
    },
    validateUser(state, validateUserValue){
      state.usersRequest.splice(state.users.length, 0, validateUserValue);
    }
  },
  actions: {
  },
  modules: {
  }
})
