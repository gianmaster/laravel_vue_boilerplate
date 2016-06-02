<template>
    <div class="col-xs-8">
        <div class="form">
            <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo" v-model="model.titulo" class="form-control">
            </div>

            <div class="form-group">
                <label for="ruta">Ruta</label>
                <input type="text" name="ruta" id="ruta" v-model="model.ruta" class="form-control">
            </div>

            <div class="form-group">
                <label for="icono">Icono</label>
                <input type="text" name="icono" id="icono" v-model="model.icono" class="form-control">
            </div>

            <div class="form-group">
                <label for="tipo_menu">Tipo de menu</label>
                <select name="tipo_meny" id="tipo_menu" v-model="model.tipo_menu" class="form-control">
                    <option value="PARENT">PARENT</option>
                    <option value="PARENT">CHILDREN</option>
                </select>
            </div>

            <div class="form-group">
                <label for="orden">Orden</label>
                <input type="number" name="orden" id="orden" v-model="model.orden" class="form-control">
            </div>

            <div class="form-group">
                <label for="id_padre">Padre</label>
                <input type="number" name="id_padre" id="id_padre" v-model="model.id_padre" class="form-control">
            </div>

            <div class="form-group">
                <button class="btn btn-success" @click.prevent="create">Guardar</button>
            </div>
        </div>    
    </div>
    
</template>
<style>

</style>
<script>

    function successCallback(data){
        alert('Se creo el menu correctamente');
        console.log('Este es el menu que se creo', data);
    }

    function errorCallback(err){
        alert('No funco :(');
        console.warn('se presento lo siguiente', err);
    }

    export default{
        data(){
            return{
                model: {
                    orden: 0,
                    icono: '',
                    ruta: '',
                    tipo_menu: '',
                    titulo: 'Titulo',
                    id_padre: null
                }
            }
        },

        methods: {
            create: function(){
                this.$http.post('api/menu', this.model).then(successCallback, errorCallback);
            }
        }
    }
</script>