<template>
<div class="gestionnaire">
  <h1>Liste des parents</h1>
  <section class="section-parents">
    <div class="liste-parents" v-for="(user, index) in allUsers" :key="index" v-bind="user.id">
      <span class="info-parents" v-for="(value, key, index) in user" :key="index">
        {{key === 'address' ? value.city : key === 'company' ? value.name : value}}
      </span>
      <input type="button" @click="afficherModal(user.id , user.username)" class="btn-supr" value="Supprimer">
      <Teleport to="body">
        <modal :show="showModal" :userId="activeUserId" :userName="activeUserName" @cancel="showModal = false" @confirm="removeUser"></modal>
      </Teleport>
    </div>
  </section>

  <h2>Demandes d'inscription</h2>
  <div class="demandes-inscription">

  </div>
</div>
</template>

<script>
import Modal from "@/components/Modal.vue"
export default {
  name: 'GestionnaireService',
  components: {
    Modal
  },
  data: function() {
    return {
      user:[],
      allColumns:[],
      allUsers:[],
      showModal: false,
      activeUserId: 0,
      activeUserName: "",
    }
  },
  methods:{
    afficherModal(idUser, usernameUser) {
      this.activeUserId = idUser;
      this.activeUserName = usernameUser;
      this.showModal = true;
    },
    removeUser(userId){
      this.$store.commit("deleteUser", userId);
      this.showModal = false;
    }
  },
  beforeMount() {
    this.allColumns = this.$store.state.columns;
    this.allUsers = this.$store.state.users;
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
.section-parents{
  display: flex;
}
.liste-parents{
  display: flex;
  flex-direction: column;
  padding: 1rem;
  margin: 1rem;
  border: 1px solid black;
  border-radius: 30px;
}
</style>
