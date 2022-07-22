<template>
    <main>
        <section class="image-parent"> 
            <div v-for="(perso, index) in allUsers" :key="index">  
            <img src="../assets/img/2e43dd8c6eadd971b818debcbef67a69.jpg">
            <h1>{{ perso.username }}</h1>
            </div>
        </section>   
        <section class="parent">
            <h2>Information Parent</h2>
            <form method="POST">
                <div v-for="(perso, index) in allUsers" :key="index"> 
                    <label>NOM<input class="nom" name="nom" type="text" placeholder="Nom" disabled="disabled" v-bind:value="perso.name"></label>
                    <label>PRENOM<input class="prenom" name="prenom" type="text" placeholder="Prénom" disabled="disabled" v-bind:value="perso.username"></label>
                    <label>NUMERO DE TELEPHONE<input class="tel" name="tel" type="tel" placeholder="0102030405" v-bind:value="perso.phone"></label>
                    <label>E-MAIL<input class="mail" name="mail" type="email" placeholder="@id-formation.fr" v-bind:value="perso.email"></label>
                    <label>ADRESSE
                        <input class="rue" name="rue" type="text" value="Rue">
                        <input class="ville" name="ville" type="text" value="Ville">
                        <input class="code" name="code" type="text" value="Code postal"></label>
                    <button type="submit">Modifier</button>
                </div>
            </form>
        </section>
        <section class="image-enfant">  
            <div v-for="(perso, index) in allUsers" :key="index">  
            <img src="../assets/img/depositphotos_70020661-stock-photo-beautiful-blonde-girl.jpg">
            <h1>{{ perso.username }}</h1>
            </div>
        </section>  
        <section class="enfant">
            <h2>Information Enfant</h2>
            <form method="POST">     
                <div v-for="perso in allUsers" :key="index">    
                    <label>NOM<input class="nom" name="nom" type="text" placeholder="Nom" v-bind:value="perso.name"  disabled="disabled"></label>
                    <label>PRENOM<input class="prenom" name="prenom" type="text" placeholder="Prénom" v-bind:value="perso.username"  disabled="disabled"></label>
                    <label>DATE DE NAISSANCE<input class="date" name="date" type="date" min="1950-01-01" max="2022-07-18"  disabled="disabled"></label>
                    <label>REGIME CANTINE<input class="regime" name="regime" type="number" v-bind:value="perso.id"  disabled="disabled"></label>
                    <label>ALLERGIES<input class="allergie" name="allergie" type="text" placeholder="Gluten, Lactose..."  disabled="disabled"></label>
                    <label>INSCRIT(E) LE<input class="inscrit" name="inscrit" type="date"  disabled="disabled"></label>
                    <button type="submit"><a href="../views/InscrireenfantView.vue#/child">Inscrire un autre enfant</a></button>
                    <input class="supprimer" @click="deleteUser(index)" type="button" value="Désinscire cet enfant"/>
                </div>   
            </form>
        </section>         
    </main>
</template>

<script>
import axios from "axios"

export default {
    name: 'App',
    data: function () {
        return {
            allUsers: [],
        }
    },
    beforeMount() {
            axios
        .get("https://jsonplaceholder.typicode.com/users")
        .then((reponse) => {
            this.allUsers = reponse.data;
            // console.log(this.allUsers);
            console.log(this.allUsers[0]);
        });
    },
    methods: {
        deleteUser(index) {
            this.allUsers.splice(index, 1);
        }
    }
}
</script>

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
}

.parent {
    margin: 5px;
    text-align: start;
    width: 20rem;
    margin-bottom: 3rem;
}

label {
    color: #636363;
}

input {
    padding: 5px;
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

button, .supprimer{
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

.supprimer:hover {
    background-color: #FFDC92;
}
</style>
