<template>
    <div class="row">
        <!-- Titulo -->
        <div class="col-xs-12">
            <validator name="validacion">
                <form novalidate>
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input class="form-control" name="titulo" id="titulo" v-model="model.titulo" type="text" v-validate:model.titulo="['required']">
                    </div>

                    <!-- Icono -->
                    <lista-iconos :iconClass="model.icono" :v-model="model.icono"></lista-iconos>

                    <!-- Titulo -->
                    <div class="form-group">
                        <label for="ruta">URL</label>
                        <input class="form-control" name="ruta" id="ruta" type="text" v-model="model.ruta">
                    </div>

                    <!-- Titulo -->
                    <div class="form-group">
                        <label for="tipo_menu">Tipo Menu</label>
                        <select name="tipo_menu" id="tipo_menu" :v-model="model.tipo_menu" class="form-control">
                            <option value="PARENT" selected>PADRE</option>
                            <option value="CHILDREN">HIJO</option>
                        </select>

                    </div>

                    <!-- Orden -->
                    <div class="form-group">
                        <label for="orden">Orden</label>
                        <input class="form-control" name="orden" id="orden" type="number" number min="0" v-model="model.orden">
                    </div>

                    <!-- Padre -->
                    <div class="form-group">
                        <label for="id_padre">Padre</label>
                        <input class="form-control" name="id_padre" id="id_padre" type="text" v-model="model.id_padre">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Guardar" :disabled="!$validacion.valid" @click.prevent="save" />
                    </div>

                    <div class="alert alert-danger" v-if="!$validacion.valid">
                        <p>Título es requerido</p>
                    </div>

                    <!--
                    <alert v-if="!$validacion.valid" type="danger">
                        <p v-if="$validacion.titulo.required">Título es requerido.</p>
                        <p v-if="$validacion.tipo_menu.maxlength">Tipo de menu es requerido.</p>
                    </alert>
                    -->

                    
                </form>
            </validator>

        </div>

    </div>

</template>
<style>

</style>
<script>

    import Alert from '../components/Alert.vue';
    import ListaIconos from './listaIconos.vue';

    export default{
        data(){
            return{
                model: {}
            }
        },

        components: {
            alert: Alert,
            listaIconos:ListaIconos
        },

        ready(){
            //this.model = this.modelInit();
        },

        methods: {
            save: function(){
                console.log(this.model);
                this.model = this.modelInit();
            },
            modelInit: function(){
                return {
                    titulo: '',
                            icono: '',
                            ruta: '',
                            tipo_menu: '',
                            orden: 0,
                            id_padre: null
                }
            }
        }
    }
</script>