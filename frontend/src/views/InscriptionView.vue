<template>
    <body>
        <div class="inscription">
            <div class="image">
            </div>
            <section class="login">
                <h1>Inscription</h1>
                <p>Vous n'êtes pas encore inscrit ? Cliquez sur Inscription dans la barre de navigation.</p>
                <form id="form-inscription">
                    <div class="coordonnees">
                        <label for="last_name">VEUILLEZ SAISIR VOTRE NOM
                            <input type="text" name="nom" required>
                        </label>
                        <label for="first_name">VEUILLEZ SAISIR VOTRE PRENOM
                            <input type="text" name="prenom" placeholder="Prenom">
                        </label>
                        <label for="mail">VEUILLEZ SAISIR VOTRE E-MAIL
                            <input type="text" name="mail" placeholder="Mail">
                        </label>
                        <label for="genre"> ok
                            <select name="" id="">
                                <option value="">bc</option>
                                <option value="">cd</option>
                            </select>
                        </label>
                        <label for="rue_name">VEUILLEZ SAISIR VOTRE ADRESSE
                            <input type="text" name="adresse" placeholder="Adresse">
                        </label>
                        <label for="tel "> 
                            <input type="text" name="telephone" placeholder="Téléphone">
                        </label>
                        <label for="mdp" >
                            <input type="password" name="mdp">
                        </label>
                        <label for="confirm_mdp">
                            <input type="password" name="confirm_mdp">
                        </label>
                    </div>
                    <div class="buttons">
                        <div class="btns_co">
                            <label for="btn_inscription">
                                <input type="submit" id="btn_inscription" value="Inscrire mon enfant">
                            </label>
                        </div>
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

body{
    height: 100%;
}

.inscription {
    border: 1px solid black;
    height: 100vh;
    display: flex;
    justify-content: space-evenly;
    margin-top: 3rem;
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
    border: solid 1px black;
    width: 50%;
    display: flex;
    flex-direction:column;
}

h1 {
    text-align: center;
}

.coordonnees {
    display: flex;
    flex-direction: column;
    margin-left: 1rem;
}
</style>