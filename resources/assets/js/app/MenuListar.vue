<template>
    <div class="row">
        <div class="col-xs-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>Titulo</td>
                    <td>Ruta</td>
                    <td>Icono</td>
                    <td>Tipo Menu</td>
                    <td>Orden</td>
                    <td>Padre</td>
                </tr>
                </thead>
                <tbody>
                <tr v-for="item in items">
                    <td>{{ item.orden }}</td>
                    <td>{{ item.icono }}</td>
                    <td>{{ item.ruta }}</td>
                    <td>{{ item.tipo_menu }}</td>
                    <td>{{ item.titulo }}</td>
                    <td>{{ item.id_padre }}</td>
                </tr>
                </tbody>
            </table>
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
                items:[]
            }
        },

        ready(){
            var _this = this;
            this.$http.get('api/menu', function(resp){
                _this.items = resp.data;
            }, errorCallback);
        }
    }
</script>