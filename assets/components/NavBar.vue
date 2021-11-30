<template>
<div>
    <v-card class="mx-auto overflow-hidden"></v-card>
    <v-app-bar color="deep-purple" dark="dark">
        <v-app-bar-nav-icon id="mobile" @click="drawer = true" v-if="navItems.length !== 0"></v-app-bar-nav-icon>
        <v-toolbar-title id="title" @click="test(user)" style="cursor:pointer">TODOList</v-toolbar-title>
        <v-spacer></v-spacer>
        <v-toolbar-items id="nav">
            <v-btn v-for="navItem in navItems" :key="navItem.name" :href="navItem.route">
                <v-icon>{{ navItem.icon }}</v-icon>{{ navItem.name }}
            </v-btn>
        </v-toolbar-items>
    </v-app-bar>
    <v-navigation-drawer v-model="drawer" absolute="absolute" temporary="temporary" height="100vh" dark="dark" @open="drawer = true">
        <v-list nav="nav" dense="dense">
            <v-list-item-group v-model="group" active-class="deep-purple--text text--accent-4">
                
                
                <v-btn v-for="navItem in navItems" :key="navItem.name" :href="navItem.route">
                    <v-list-item>
                        <v-list-item-icon>
                            <v-icon>{{ navItem.icon }}</v-icon>
                        </v-list-item-icon>
                        <v-list-item-title>{{ navItem.name }}</v-list-item-title>
                    </v-list-item>
                </v-btn>
                
            </v-list-item-group>
        </v-list>
    </v-navigation-drawer>
</div>
</template>

<script>
export default {
    name: 'NavBar',
    
    data: () => ({
        drawer: false,
        group: null,
        navItems: [
            {name:"Home", icon :"mdi-home", route:"/"},
            {name:"Todo", icon: "mdi-file-tree", route:"/TODO"},


        ]
    }),
    props:{
        user: String
    },
    methods : {
      goto(route){
        window.location.href=route
      },
      test(user){
            console.log(user=="")
        }
    },
    
}
</script>

<style lang="css" scoped>
.v-card {
  background: darkgray; }

@media only screen and (min-width: 900px) {
  #mobile {
    visibility: hidden; }
  #title {
    margin-left: -2vw; } }

@media only screen and (max-width: 901px) {
  #nav {
    visibility: hidden; } }
  
</style>