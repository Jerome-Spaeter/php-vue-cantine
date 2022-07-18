<template>
  <nav>
    <router-link to="/">Home</router-link> |
    <router-link to="/about">About</router-link>
  </nav>
  <router-view/>
</template>

<script>
export default{
  name: "App",
  beforeMount() {
    fetch('https://jsonplaceholder.typicode.com/todos/10/users/')
    .then(response => response.json())
    .then(json => {
      this.data = json ;
      console.log(this.data);
      this.$store.commit("setColumns", Object.keys(this.data[0]));
      this.allColumns = Object.keys(this.data[0]);
      this.$store.commit("setUsers", this.data);  
    })
  }
}
</script>

<style lang="scss">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

nav {
  padding: 30px;

  a {
    font-weight: bold;
    color: #2c3e50;

    &.router-link-exact-active {
      color: #42b983;
    }
  }
}
</style>
