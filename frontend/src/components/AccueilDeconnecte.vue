<template>
    <div class="accueil">
        <section class="accueil-restauration-scolaire">
            <div class="accueil-titre">
                <h1>ID FORMATION</h1>
                <h2>Restauration Scolaire</h2>
                <span class="accueil-description">Inscrivez votre enfant à la cantine scolaire</span>
            </div>
        </section>
        <section class="accueil-menu">
            <div class="menu-jour">
                <span class="jour-titre">Lundi</span>
                <hr>
                <span>Bettrave au maïs</span>
                <span>Tajine de dinde aux fruits secs</span>
                <span>Semoule Bio</span>
                <span>Fruit</span>
            </div>
            <div class="menu-jour">
                <span class="jour-titre">Mardi</span>
                <hr>
                <span>Bettrave au maïs</span>
                <span>Tajine de dinde aux fruits secs</span>
                <span>Semoule Bio</span>
                <span>Fruit</span>
            </div>
            <div class="menu-jour">
                <span class="jour-titre">Jeudi</span>
                <hr>
                <span>Bettrave au maïs</span>
                <span>Tajine de dinde aux fruits secs</span>
                <span>Semoule Bio</span>
                <span>Fruit</span>
            </div>
            <div class="menu-jour">
                <span class="jour-titre">Vendredi</span>
                <hr>
                <span>Bettrave au maïs</span>
                <span>Tajine de dinde aux fruits secs</span>
                <span>Semoule Bio</span>
                <span>Fruit</span>
            </div>
        </section>
    </div>
</template>

<style scoped>
/* Reset début */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-size: 18px;
}
/* Reset fin */

/* Accueil Deconnecte page global début */
body{
    height: 100%;
}
.accueil{
    height: 100vh;
    display: flex;
}
/* Accueil page Deconnecte global fin */

/* Accueil Deconnecte coté gauche début */
.accueil-restauration-scolaire{
    width: 50%;
    background-image: url("@/assets/img/africa-studio.jpg");
    background-repeat: no-repeat;
    background-position: right;
    object-fit: cover;
    display: flex;
    padding-top: 15rem;
    padding-bottom: 10rem;
}

.accueil-titre{
    background-color: rgba(255, 255, 255, 0.680);
    width: 100%;
    margin: auto;
    text-align: center;
    padding: 2rem;
}

h1{
    font-size: 1.2rem;
    font-weight: 600;
}
h2{
    font-size: 4rem;
    font-weight: 900;
    color: #FFBF38;
}
.accueil-description{
    font-size:1.2rem;
    font-weight: 550;
}
/* Accueil Deconnecte coté gauche fin */

/* Accueil Deconnecte coté droit début */
.accueil-menu{
    width: 40%;
    display: flex;
    flex-direction:column;
    justify-content: space-evenly;
    margin: 3rem;
}
.menu-jour{
    display: flex;
    flex-direction: column;
    text-align: start;
}
.jour-titre{
    font-size: 1.8rem;
    color: #FFBF38;
    font-weight: 800;
}
hr{
    border: 5px solid #FFBF38;
    border-radius: 5px;
    width: 100%;
}
/* Accueil Deconnecte coté droit fin */
</style>