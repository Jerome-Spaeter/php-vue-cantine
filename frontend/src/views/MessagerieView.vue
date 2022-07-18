<template>
    <main>
        <section class="icones">  
            <img src="../assets/img/2e43dd8c6eadd971b818debcbef67a69.jpg">
            <img class="logo-msg" src="../assets/img/logo_msg.png">
            <a href="../views/InscrireenfantView.vue#/user"><img class="logo-exit" src="../assets/img/logo_exit.png"></a>
            
        </section>  
        <section class="menu">
            <input class="recherche" onkeyup="search_msg()" type="text" name="recherche" placeholder="Rechercher...">
            <div class="un">
                <img src="../assets/img/2e43dd8c6eadd971b818debcbef67a69.jpg">
                <p class="nom">Brooklyn Simmons</p>
                <p class="role">Gestionnaire de service</p>
            </div>
            <div class="deux">
                <img src="../assets/img/2e43dd8c6eadd971b818debcbef67a69.jpg">
                <p class="nom">Devon Lane</p>
                <p class="role">Super Admin</p>
            </div>
            <div class="trois">
                <img src="../assets/img/2e43dd8c6eadd971b818debcbef67a69.jpg">
                <p class="nom">Kristin Watson</p>
                <p class="role">Super Admin</p>
            </div>
        </section>
        <section class="messagerie">
            <h1>Messagerie</h1>
            <h2>Vous avez 1 nouveau message</h2>
            <form method="POST">
                <div class="admin">
                    <label>04/06/22<textarea class="msg-admin" name="msg" type="text" disabled="disabled">L'administrateur vous souhaite la bienvenue sur l'application cantine</textarea></label>
                </div>
                <div class="user">
                    <label>08/06/22<textarea class="msg-user" name="msg" type="text" rows="1" disabled="disabled">Merci pour votre message de bienvenue</textarea></label>
                    <span>Lu</span>
                    <textarea class="msg">Tapez votre message ici ...</textarea>
                </div>               
                <button type="submit">Répondre</button>
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
    display: flex;
    justify-content: space-between;
}

img {
    margin-top: 15px;
    width: 50px;
    height: auto;
    border-radius: 50%;
}

h1 {
    color:black;
    font-size: 3rem;
}

h2 {
    font-size: 1rem;
}
.recherche {
    background-color: #FFBF38;
    display: flex;
    flex-direction: column;
    padding: 5px 5px 5px 10px;
    margin: 15px 0 0 15px;
}

.icones {
    width: 10%;
    height: 29rem;
    background-color:#FFBF38;
}
.logo-exit {
    display: flex;
    width: 30px;
    margin-top: 250px;
}
.menu {
    width: 50%;
    height: 29rem;
    background-color:#FFDC92;
}
.un, .deux, .trois {
    /* display: flex; */
    padding: 0 10px;
}

.nom {
    color:white;
    font-weight: bold;
}

.role {
    color:#636363;
    font-size: 0.8rem;
}

.messagerie {
    width: 90%;
    height: 25rem;
}

form {
    display: flex;
    flex-direction: column;
    margin-top: 2rem;
}

label, span {
    color: #636363;
    font-style: italic;
    font-size: 0.8rem;
    display: flex;
    flex-direction: column;
}

input {
    background-color: #F0F0F0;
    border: none;
    border-radius: 20px;
}

.admin, .msg-admin {
    text-align: start;
    float: left;
    color:#636363;
    margin-bottom: 1rem;
}

.user, .msg-user {
    text-align: end;
    float: right;
    color:#636363;
}

textarea {
    background-color: #F0F0F0;
    border: none;
    border-radius: 10px;
    color: #aaaaaa;
    padding: 5px;
    width: 20rem;
}

button {
    margin-top: 2rem;
    background-color: #FFBF38;
    border: none;
    color: white;
    border-radius: 20px;
    cursor: pointer;
    padding: 5px;
    width: 10rem;
}

button:hover {
    background-color: #FFDC92;
}


</style>
