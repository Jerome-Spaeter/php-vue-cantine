<template>
    <body>
        <div class="connexion">
            <section class="imageco">
                <div ></div>
            </section>
            <section class="login">
                <h1>Connexion</h1>
                <p>Vous n'êtes pas encore inscrit ? Cliquez sur Inscription dans la barre de navigation.</p>
                <form>
                    <div class="user">
                        <label for="user_mail">
                            <input type="text" id="user-identifiant" name="user_identifiant" placeholder="Identifiant">
                        </label>
                        <label for="password">
                            <input type="text" id="user-mdp" name="user_mdp" placeholder="Mot de passe">
                        </label>
                        <label for="btn_mdp_oublie">
                            <input type="button" id="btn_mdp_oublie" value="Mot de passe oublié?">
                        </label>
                    </div>
                </form>
            </section>
        </div>
    </body>
</template>

<script>
export default {
  name: 'connexion',
};
</script>

<style>

body{
    height: 100%;
}

.connexion {
    height: 100vh;
    display: flex;
    justify-content: space-evenly;
    margin-top: 3rem;
}

.imageco {
    width: 50%;
    background-image: url("@/assets/img/image_connexion.jpg");
    height: 100vh;
    background-position: center right;
    background-repeat: no-repeat;
    background-size: cover;
    }

.login{
    border: solid 1px black;
    width: 50%;
    display: flex;
    flex-direction:column;
}

h1 {
    text-align: center;
}

.user {
    display: flex;
    flex-direction: column;
    margin-left: 1rem;
}

</style>