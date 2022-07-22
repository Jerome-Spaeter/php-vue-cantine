<template>
  <div class="accueil-super-admin">
    <section class="inscription-gestionnaire">
      <h1>Inscrire un gestionnaire de service</h1>
      <form>
        <label>
          <input type="text" placeholder="Nom">
        </label>
        <label>
          <input type="text" placeholder="Prénom">
        </label>
        <label>
          <input type="text" placeholder="Email">
        </label>
        <label>
          <input type="password" placeholder="Mot de passe">
        </label>
        <label>
          <input type="password" placeholder="Comfirmation du mot de passe">
        </label>
        <button type="submit" value="Valider"></button>
      </form>
    </section>
    <section class="liste-gestionnaire">
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
