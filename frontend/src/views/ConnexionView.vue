<template>
    <body>
        <div class="connexion">
            <div class="imageco">
            </div>
            <section class="login">
                <h1>Connexion</h1>
                <p>Vous n'êtes pas encore inscrit ? Cliquez sur Inscription dans la barre de navigation.</p>
                <form class="user-login">
                    <label for="user_name">VEUILLEZ SAISIR VOTRE IDENTIFIANT
                        <input type="text" id="user_identifiant" name="user_name">
                    </label>
                    <label for="password">VEUILLEZ SAISIR VOTRE MOT DE PASSE
                        <input type="text" id="user_mdp" name="user_mdp">
                    </label>
                    <label for="btn_mdp_oublie">
                        <input type="submit" id="btn_mdp_oublie" value="Se connecter">
                    </label>
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

.connexion {
    height: 100vh;
    display: flex;
    margin-top: 1rem;
}

.imageco {
    width: 50%;
    background-image: url("@/assets/img/image_connexion.jpg");
    height: 100vh;
    background-position: center right;
    background-repeat: no-repeat;
    background-size: cover;
    }

.user-login {
    margin-top: 1rem;
    display: flex;
    flex-direction: column;
    width: 50%;
}

</style>