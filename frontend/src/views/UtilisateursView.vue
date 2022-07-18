<template>
    <main>
        <section class="image-enfant">  
            <img src="../assets/img/depositphotos_70020661-stock-photo-beautiful-blonde-girl.jpg">
            <h1>Prénom enfant</h1>
        </section>  
        <section class="enfant">
            <h2>Information Enfant</h2>
            <form method="POST">
                <label>NOM<input class="nom" name="nom" type="text" placeholder="Nom" value=""></label>
                <label>PRENOM<input class="prenom" name="prenom" type="text" placeholder="Prénom" value=""></label>
                <label>DATE DE NAISSANCE<input class="date" name="date" type="date" min="1950-01-01" max="2022-07-18"></label>
                <label>REGIME CANTINE<input class="regime" name="regime" type="number" value=""></label>
                <label>ALLERGIES<input class="allergie" name="allergie" type="text" placeholder="Gluten, Lactose..." value=""></label>
                <label>INSCRIT(E) LE<input class="inscrit" name="inscrit" type="date" value=""></label>
                <button type="submit"><a href="../views/InscrireenfantView.vue#/child">Inscrire un autre enfant</a></button>
                <button type="submit">Désinscrire cet enfant</button>
            </form>
        </section>
        <section class="image-parent">  
            <img src="../assets/img/2e43dd8c6eadd971b818debcbef67a69.jpg">
            <h1>Prénom parent</h1>
        </section>   
        <section class="parent">
            <h2>Information Parent</h2>
            <form method="POST">
                <label>NOM<input class="nom" name="nom" type="text" placeholder="Nom" disabled="disabled" value=""></label>
                <label>PRENOM<input class="prenom" name="prenom" type="text" placeholder="Prénom" disabled="disabled" value=""></label>
                <label>NUMERO DE TELEPHONE<input class="tel" name="tel" type="tel" placeholder="0102030405" value=""></label>
                <label>E-MAIL<input class="mail" name="mail" type="email" placeholder="@id-formation.fr" value=""></label>
                <label>ADRESSE<input class="rue" name="rue" type="text" value="Rue">
                <input class="ville" name="ville" type="text" value="Ville">
                <input class="code" name="code" type="text" value="Code postal"></label>
                <button type="submit">Modifier</button>
            </form>
        </section>         
    </main>
</template>


<style scoped>

* {
    margin: auto;
    padding: auto;
    font-family: "Poppins";
    src: url('../assets/font/Poppins-Regular.ttf');
    color:black;
}

main {
    display: grid;
    grid-template-columns: 1fr 1fr;
}

img {
    display: flex;
    width: 250px;
    height: auto;
    border-radius: 50%;
}

h1 {
    color:#FFBF38;
    font-size: 2rem;

}

h2 {
    font-size: xx-large;
    margin-bottom: 1rem;
}

.enfant {
    margin: 5px;
    text-align: start;
    width: 20rem;
    margin-bottom: 3rem;
}

.parent {
    margin: 5px;
    text-align: start;
    width: 20rem;
}

label {
    color: #636363;
}

input {
    width: 20rem;
    background-color: #F0F0F0;
    border: none;
    border-radius: 20px;
    color: #636363;
}

a {
    color:#F0F0F0;
    text-decoration: none;
}

button {
    background-color: #FFBF38;
    border: none;
    color: white;
    margin-top: 20px;
    border-radius: 20px;
    cursor: pointer;
    padding: 5px;
    margin-left: 3rem;
    width: 12rem;
}

button:hover {
    background-color: #FFDC92;
}

</style>
