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
    validateUser(state,requestId){
      let user = state.usersrequest[requestId];
      console.log(user)
      state.userlist.splice(state.userlist.length, 0, user);
    },
  },
  actions: {
  },
  modules: {
  }
})
