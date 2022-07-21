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

.login{
    width: 50%;
    display: flex;
    flex-direction:column;    
}

h1 {
    margin-top: 2rem;
    text-align: center;
    font-size: 40px;
}

p {
    margin-bottom: 2rem;
    text-align: center;
}

label {
    display: flex;
    flex-direction: column;
}

 input[type="text"] {
    width: 100%;
    border-radius: 1rem;
    padding: 0.5rem;
    margin: 0.5rem auto;
    border: rgb(216, 216, 216) solid 1px;
    background-color: #F0F0F0;
}

 input[type="password"] {
    width: 100%;
    border-radius: 1rem;
    padding: 0.5rem;
    margin: 0.5rem auto;
    border: rgb(216, 216, 216) solid 1px;
    background-color: #F0F0F0;
}

input[type="submit"] {
    background: linear-gradient(#fbc31e, #fba31e) ;
    border-radius: 1rem;
    color: white;
    border: none;
    margin: 0.5rem auto;
    padding: 0.5rem;
    width: 30%;
    cursor: pointer;
}
</style>
