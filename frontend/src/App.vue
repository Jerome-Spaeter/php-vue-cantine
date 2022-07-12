<template>
  <nav>
    <img src="./assets/img/logo.jpg" alt="">
    <div class="liens">
      <router-link to="/">Accueil</router-link>
      <router-link to="/connexion">Connexion</router-link>
      <router-link to="/inscription">Inscription</router-link>
    </div>
  </nav>
  <router-view/>
</template>

<style lang="scss">
/* Reset css début*/
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-size: 18px;
}
/* Reset css fin*/

nav{
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.liens{
  width: 70%;
  display: flex;
  justify-content: space-evenly;
}
img{
  width: 8%;
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
