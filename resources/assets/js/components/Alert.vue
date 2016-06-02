<template>
    <div class="animated" transition="fade"></div>
    <div class="alert alert-{{ type }}">
        <button type="button" class="close">&times;</span></button>
        <slot>Alerta a la vista</slot>
    </div>
</template>
<style>

</style>
<script>

    export default{
        props:{
            type: {default: 'info'}
        },

    }
</script>