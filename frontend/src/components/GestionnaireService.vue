<template>
<div class="gestionnaire">
  <h1>Liste des parents</h1>
  <section class="section-parents">
    <div class="liste-parents" v-for="(userlist, index) in allUserlist" :key="index">
      <span class="info-parents" v-for="(value, key, index) in userlist" :key="index">
        {{key === 'address' ? value.city : key === 'company' ? value.name : value}}
      </span>
      <input type="button" @click="afficherModal(user.id , user.username)" class="btn-supr" value="Supprimer">
      <Teleport to="body">
        <modal :show="showModal" :userId="activeUserId" :userName="activeUserName" @cancel="showModal = false" @confirm="removeUser"></modal>
      </Teleport>
    </div>
  </section>
  <hr>
  <h2>Demandes d'inscription</h2>
    <section class="section-parents">
    <div class="liste-parents" v-for="(user, index) in allUsers" :key="index">
      <span class="info-parents" v-for="(value, key, index) in user" :key="index">
        {{key === 'address' ? value.city : key === 'company' ? value.name : value}}
      </span>
      <div class="btn-box">
        <input type="button"  @click="ajouterUser()" value="Valider" class="btn-valider">
              <input type="button" @click="afficherModal(user.id , user.username)" class="btn-refuser" value="Supprimer">
      <Teleport to="body">
        <modal :show="showModal" :userId="activeUserId" :userName="activeUserName" @cancel="showModal = false" @confirm="removeUser"></modal>
      </Teleport>
      </div>
    </div>
  </section>
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
      userlist:[],
      allUsers:[],
      allUserlist: [],
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
    ajouterUser() {
      this.$store.commit("validateUser", this.newUser)
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
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-size: 18px;
  }

.section-parents{
  display: flex;
  flex-wrap: wrap;
}
.liste-parents{
  display: flex;
  flex-direction: column;
  padding: 0.5rem;
  margin: 1rem;
  box-shadow: 5px 5px 5px 5px rgb(218, 218, 218);
  border-radius: 30px;
  background-color: rgb(232, 230, 230);
  width: 15rem;
}

h1, h2{
  text-align: start;
  font-size: 1.5rem;
  font-weight: 900;

}

hr{
  border: 5px solid whitesmoke;
  border-radius: 30px;
  box-shadow: 5px 5px 5px;
  color: rgb(212, 211, 211);
  margin: 2rem;
}

.btn-supr{
  background-color: #FF3838;
  color: white;
  padding: 0.2rem;
  border-radius: 30px;
  width: 80%;
  margin: auto;
  font-weight: 700;
  border: none
}
.btn-valider{
  background-color:#2DFF35;
  color: white;
  padding: 0.2rem;
  border-radius: 30px;
  width: 45%;
  margin: auto;
  font-size: 1rem;
  font-weight: 700;
  border: none
}
.btn-refuser{
  background-color: #FF3838;
  color: white;
  padding: 0.2rem;
  border-radius: 30px;
  width: 45%;
  margin: auto;
  font-size: 1rem;
  font-weight: 700;
  border: none
}
</style>
