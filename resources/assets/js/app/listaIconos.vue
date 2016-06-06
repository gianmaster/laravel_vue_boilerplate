<template>

    <div class="form-group">
        <label >Icono - Font Awesome: <i class="fa fa-{{iconClass}}"></i></label>
        <select class="form-control" v-model="iconClass">
            <option v-for="item in lista" :value="item">{{ item}}</option>
        </select>
    </div>

</template>
<style>

</style>
<script>

    export default{
        data(){
            return{
                lista: []
            }
        },
        props:{
            iconClass: {
                type: String,
                default: '',
                required: true
            }
        },

        ready(){
            var self = this;
            this.$http({url: 'https://raw.githubusercontent.com/FortAwesome/Font-Awesome/master/src/icons.yml', method: 'GET'}).then(function (resp) {
                // success callback
                resp.data.split('\n').forEach(function(item){
                    if(item.split(':')[0].trim() == 'id'){
                        self.lista.push(item.split(':')[1].trim());
                    }
                });
            }, function (response) {
                // error callback
                console.log('No se pudo acceder al los items, recurso no accesible');
            });
        },



    }
</script>