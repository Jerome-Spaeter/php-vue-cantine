<template>
  <div class="accueil-super-admin">
    <section class="inscription-gestionnaire">
      <h1>Inscrire un gestionnaire de service</h1>
      <form>
        <label>
          <span></span>
          <input>
        </label>
        <button></button>
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
