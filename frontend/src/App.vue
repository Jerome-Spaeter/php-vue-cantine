<template>
  <nav>
    <div class="liens">
      <router-link to="/">Accueil</router-link>
      <router-link to="/connexion">Connexion</router-link>
      <router-link to="/inscription">Inscription</router-link>
    </div>
  </nav>
  <router-view/>
</template>

<script>
</script>

<style>
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-size: 16px;
  }

  @font-face {
    font-family: "Poppins";
    src: url("@/assets/font/Poppins-Regular.ttf");
}

* {
    font-family: Poppins;
}

nav{
  display: flex;
  justify-content: flex-end;
}

.liens{
  width: 35%;
  display: flex;
  justify-content: space-evenly;
}

a{
  text-decoration: none;
  color: black ;
}

a.router-link-exact-active {
  color: #FFBF38;
}

</style>
