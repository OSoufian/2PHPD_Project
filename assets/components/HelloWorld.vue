<template>
    <div class="container">
        <h1>Ceci est notre composant de démo !</h1>
        <h1>{{todo}}</h1>
    </div>
</template>

<script>
export default {
  name: "DemoComponent",
  props: {
    todo: Array
  }
};
</script>