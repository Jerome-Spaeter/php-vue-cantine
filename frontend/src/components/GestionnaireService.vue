<template>
<div class="gestionnaire">
  <h1>Liste des parents</h1>
  <section class="section-parents">
    <div class="liste-parents" v-for="userlist in allUserslist">
      <span class="info-parents">{{ userlist.id }}</span>
      <span class="info-parents">{{ userlist.name }}</span>
      <span class="info-parents">{{ userlist.email }}</span>
      <span class="info-parents">{{ userlist.phone }}</span>
      <input type="button" @click="afficherModal(userlist.id , userlist.username)" class="btn-supr" value="Supprimer">
      <Teleport to="body">
        <modalSupprimer :show="showModal" :userId="activeUserId" :userName="activeUserName" @cancel="showModal = false" @confirm="removeUser"></modalSupprimer>
      </Teleport>
    </div>
  </section>
  <h2>Demandes d'inscription</h2>
    <section class="section-parents-demandes">
      <div class="liste-parents-demandes" v-for="usersRequest in allUsersRequest">
        <span class="info-parents">{{ usersRequest.id }} </span>
        <span class="info-parents">{{ usersRequest.name }}</span>
        <span class="info-parents">{{ usersRequest.email }}</span>
        <span class="info-parents">{{ usersRequest.phone }}</span>
        <div class="btn-box">
          <input type="button"  @click="ajouterUser(usersRequest.id)" value="Valider" class="btn-valider">
          <input type="button" @click="afficherModal(usersRequest.id , usersRequest.username)" class="btn-refuser" value="Refuser">
          <Teleport to="body">
            <ModalRefus :show="showModal" :userId="activeUserId" :userName="activeUserName" @cancel="showModal = false" @confirm="removeUser"></ModalRefus>
          </Teleport>
        </div>
      </div>
    </section>
</div>
</template>

<script>
import ModalSupprimer from "@/components/ModalSupprimer.vue"
import ModalRefus from "@/components/ModalRefus.vue"
export default {
  name: 'GestionnaireService',
  components: {
    ModalSupprimer,
    ModalRefus,
  },
  data: 
    function() {
    return {
      userlist:[],
      allUserslist:[],
      usersRequest:[],
      allUsersRequest:[],
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
    },
    ajouterUser(userId){
      this.$store.commit("validateUser", userId)
    }
  },
  beforeMount() {
    this.allUsersRequest = this.$store.state.usersrequest;
    this.allUserslist= this.$store.state.userlist;
  },
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

.gestionnaire{
  padding: 2rem;
}
.section-parents{
  display: flex;
  flex-wrap: wrap;
  border: 5px solid whitesmoke;
  border-radius: 30px;
  box-shadow: 5px 5px 5px;
  color: rgb(212, 211, 211);
  margin: 2rem;
}
.section-parents-demandes{
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
  width: 15rem;
}

.liste-parents-demandes{
  display: flex;
  flex-direction: column;
  padding: 0.5rem;
  margin: 1rem;
  box-shadow: 5px 5px 5px 5px rgb(218, 218, 218);
  border-radius: 30px;
  background-color: #F2F2F2;
  width: 15rem;
}

h1, h2{
  text-align: start;
  font-size: 1.5rem;
  font-weight: 900;

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
.btn-valider:hover{
  background-color: #88ff8c;
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

.btn-refuser:hover{
  background-color: #ff6969;
}
</style>
