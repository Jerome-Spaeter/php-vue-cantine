<template>
    <body>
        <div class="inscription">
            <div class="image">
            </div>
            <section class="login">
                <h1>Créer un nouveau compte</h1>
                <p>Vous n'êtes pas encore inscrit ? Cliquez sur Inscription dans la barre de navigation.</p>
                <form>
                    <div class="user-info">
                        <label for="last_name">VEUILLEZ SAISIR VOTRE NOM
                            <input type="text" name="nom" placeholder="Nom" required>
                        </label>
                        <label for="first_name">VEUILLEZ SAISIR VOTRE PRENOM
                            <input type="text" name="prenom" placeholder="Prenom">
                        </label>
                        <label for="mail">VEUILLEZ SAISIR VOTRE E-MAIL
                            <input type="text" name="mail" placeholder="Mail">
                        </label>
                        <label for="tel ">VEUILLEZ SAISIR VOTRE NUMERO DE TELEPHONE
                            <input type="text" name="telephone" placeholder="Téléphone">
                        </label>
                        <label for="rue_name">VEUILLEZ SAISIR VOTRE ADRESSE
                            <input type="text" name="adresse" placeholder="Adresse">
                        </label>
                        <label for="tel">VEUILLEZ SAISIR VOTRE NUMERO DE TELEPHONE
                            <input type="text" name="telephone" placeholder="Téléphone">
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
};
</script>

<style>

.inscription {
    height: 100vh;
    display: flex;
    justify-content: space-evenly;
    margin-top: 1rem;
}

.image {
    width: 50%;
    background-image: url("@/assets/img/menu-cantine.jpg");
    height: 100vh;
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
</style>