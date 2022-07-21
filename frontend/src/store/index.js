import { createStore } from 'vuex'

export default createStore({
  state: {
    usersrequest: [],
    userlist: [],
  },
  getters: {
  },
  mutations: {
    setUsersRequest(state,newValue){
      state.usersrequest=newValue;
    },
    deleteUser(state, id){
      state.usersrequest.splice(state.usersrequest.findIndex(usersrequest => usersrequest.id == id), 1);
    },
    validateUser(state, id){
      let user = state.usersrequest[state.usersrequest.findIndex(usersrequest => usersrequest.id == id)];
      console.log(user)
      state.userlist.splice(state.usersrequest.length, 0, user);
    },
  },
  actions: {
  },
  modules: {
  }
})
