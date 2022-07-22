<template>
    <body>
        <div class="inscription">
            <div class="image">
            </div>
            <section class="login">
                <h1>Créer un nouveau compte</h1>
                <p>Vous n'êtes pas encore inscrit ? Cliquez sur Inscription dans la barre de navigation.</p>
                <form id="create_user">
                    <div class="user-info">
                        <label for="last_name">NOM :
                            <input type="text" name="nom" placeholder="Nom" required>
                        </label>
                        <label for="first_name">PRENOM :
                            <input type="text" name="prenom" placeholder="Prenom">
                        </label>
                        <label for="mail">E-MAIL :
                            <input type="text" name="mail" placeholder="Mail">
                        </label>
                        <label for="tel ">TELEPHONE :
                            <input type="text" name="telephone" placeholder="Téléphone">
                        </label>
                        <label for="rue_name">ADRESSE :
                            <input type="text" name="adresse" placeholder="Adresse">
                        </label>
                        <label for="mdp">VEUILLEZ SAISIR VOTRE MOT DE PASSE
                            <input type="password" name="mdp" placeholder="********">
                        </label>
                        <label for="confirm_mdp">VEUILLEZ CONFIRMEZ VOTRE MOT DE PASSE
                            <input type="password" name="confirm_mdp" placeholder="********">
                        </label>
                        <label for="btn_inscription">
                            <input type="submit" id="btn_inscription" value="S'inscrire">
                        </label>
                    </div>
                </form>
            </section>
        </div>
    </body>
</template>

<script>

export default {
   name: 'inscription', 
  data() {
    return {
      newUser: {},
    };
  },
  methods: {
    sendForm(e) {
      const formData = new FormData(document.getElementById("create_user"));
      for (let data of formData.entries()) {
        this.newUser[data[0]] = data[1];
      }
      console.log(this.usersList);
      const ids = this.usersList.map((object) => object.id);
      const max = Math.max.apply(null, ids);
      this.newUser.id = max + 1;
      this.usersList.push(this.newUser);
      this.$store.commit("setuserList", this.usersList);
      e.preventDefault();
      router.push("/users");
    },
  },
};
</script>

<style>

.inscription {
    height: 100vh;
    display: flex;
    justify-content: space-evenly;
    margin-top: 0.5rem;
}

.image {
    width: 50%;
    background-image: url("@/assets/img/menu-cantine.jpg");
    height: 115vh;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }

.login{
    width: 50%;
    display: flex;
    flex-direction:column;
}

form {
    display: flex;
    justify-content: center;
}

.user-info{
    width: 50%;
    display: flex;
    flex-direction: column;
}

h1 {
    margin-top: 2rem;
    text-align: center;
    font-size: 30px;
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
    background-color: #ffbf38 ;
    border-radius: 5rem;
    color: white;
    border: none;
    margin: 2rem auto;
    padding: 0.5rem;
    width: 30%;
    cursor: pointer;
}
</style>