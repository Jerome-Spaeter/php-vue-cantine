<template>
    <main>
        <section class="image-enfant">  
            <label for="photo"></label>
            <img src="../assets/img/2e43dd8c6eadd971b818debcbef67a69.jpg">
            <input type="file" class="photo" name="photo" accept="image/png, image/jpeg">
            <!-- <h1>Enfant</h1> -->
        </section>  
        <section class="enfant">
            <h2>Demande d'inscription d'un enfant</h2>
            <form @submit.prevent="submitForm">
                <label>NOM<input id="nom" name="nom" type="text" placeholder="Nom" required v-model="nom"></label>
                <label>PRENOM<input id="prenom" name="prenom" type="text" placeholder="Prénom" required v-model="prenom"></label>
                <label>DATE DE NAISSANCE<input id="date" name="date" type="date" min="1950-01-01" max="2022-07-18" v-model="date"></label>
                <label>REGIME CANTINE</label>
                    <select name="regime" id="regime" v-model="regime">
                        <option value="">--Choisissez un régime de cantine svp--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>                                   
                <label for="allergie">ALLERGIES</label>
                <textarea rows="3" cols="47" v-model="allergie">Gluten, Lactose, Arachide...</textarea>
                <button type="submit">Valider</button>
                <button type="submit">Annuler</button>
            </form>
        </section>
    </main>
</template>

<script>
export default {
    data() {
        return {
            nom: '',
            prenom: '',
            date: '',
            regime: '',
            allergie: '',
        }
    },
    methods: {
        submitForm () {
            alert("Formulaire envoyé")
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
    font-size: 1.2rem;
    margin-bottom: 1rem;
}

.enfant {
    margin: 5px;
    text-align: start;
    width: 22rem;
    margin-bottom: 3rem;
}

label {
    color: #636363;
}

input, select {
    padding: 5px;
    width: 20rem;
    background-color: #F0F0F0;
    border: none;
    border-radius: 20px;
    color: #636363;
}

textarea {
    background-color: #F0F0F0;
    border: none;
    border-radius: 5px;
    color: #636363;
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

.photo {
    border: none;
    background-color: white;
}

</style>
