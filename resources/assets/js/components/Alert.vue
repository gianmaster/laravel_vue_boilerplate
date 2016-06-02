<template>
        <div v-show="show" class="animated alert alert-{{ type }}" :transition="transitionName">
            <button @click="show = !show" type="button" class="close">&times;</span></button>
            <slot>Alerta a la vista</slot>
        </div>

    <button class="btn btn-danger" @click="show = !show">toggle button</button>
    <select class="form-control" name="efecto" v-model="transitionName" id="efecto">
        <option value="bounce">Bonce</option>
        <option value="flip">Flip</option>
        <option value="lightSpeed">LightSpeed</option>
        <option value="fade">Fade</option>
        <option value="slide">Slide</option>
        <option value="zoom">Zoom</option>
    </select>
</template>
<style>

</style>
<script>

    export default{
        props:{
            type: {default: 'info'},
            transitionName: { default: 'fade'}
        },
        data(){
            return{
                show: false
            }
        }

    }
</script>