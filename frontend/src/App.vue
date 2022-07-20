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

<style>
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-size: 16px;
  }

nav{
  display: flex;
  justify-content: flex-end;
  align-content: center;
}
.liens{
  width: 35%;
  display: flex;
  justify-content: space-evenly;
}

a{
  text-decoration: none;
  font-size: 2rem;
  font-weight: bold;
  color: black ;
}
a.router-link-exact-active {
  color: #FFBF38;
}
</style>
