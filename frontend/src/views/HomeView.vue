<template>
  <div class="accueil-super-admin">
    <section class="inscription-gestionnaire">
      <h1>Inscrire un gestionnaire de service</h1>
      <form>
        <label>
          <input type="text" name="user_firstname" placeholder="Nom">
        </label>
        <label>
          <input type="text" name="user_surname" placeholder="Prénom">
        </label>
        <label>
          <input type="text" name="user_email" placeholder="Email">
        </label>
        <label>
          <input type="password" name="user_password" placeholder="Mot de passe">
        </label>
        <label>
          <input type="password" name="re_user_password" placeholder="Comfirmation du mot de passe">
        </label>
        <button type="submit">Valider</button>
      </form>
    </section>
    <section class="liste-gestionnaires">
      <h1>Liste des gestionnaires de service</h1>
    </section>
  </div>
</template>

<script>
// @ is an alias to /src
import HelloWorld from '@/components/HelloWorld.vue'

export default {
  name: 'HomeView',
  components: {
    HelloWorld
  }
}
</script>

<style scoped>
h1{
  text-align: start;
  font-size: 1.7rem;
} 
.accueil-super-admin{
  width: 70%;
  margin: auto;
}
form{
  width: 90%;
  margin: auto;
  box-shadow: 10px 5px 5px 5px #F0F0F0;
  border-radius: 30px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
}
input{
  border-radius: 30px;
  background-color: #F0F0F0;
  width: 20rem;
  padding: 0.8rem;
  margin: 1rem;
  text-align: center;
  font-size: 1rem;
  border: none;
}
button{
  width: 20%;
  border-radius: 30px;
  margin: 1rem; 
  border:none;
  color: white;
  background-color: #FFBF38;
  font-size: 1.4rem;
  font-weight: 700;
}
button:hover{
  background-color: #FFDC92
}
</style>