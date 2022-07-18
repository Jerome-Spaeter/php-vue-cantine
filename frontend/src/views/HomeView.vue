<template>
  <div class="home">
    <GestionnaireService/>
  </div>
</template>

<script>
// @ is an alias to /src
import GestionnaireService from '@/components/GestionnaireService.vue'

export default {
  name: 'HomeView',
  components: {
    GestionnaireService
  }
}
</script>