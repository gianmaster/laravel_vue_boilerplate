<template>
    <div class="col-xs-12">
        <combo-list :value.sync="icono" :data="lista" :options="config" label="Paises"></combo-list>

        <icon-list :icon-class.sync="currentIcon"></icon-list>

    </div>
</template>
<style>

</style>
<script>

    import Select from '../components/SelectInput.vue';
    import IconList from '../app/listaIconos.vue';

    export default{
        data(){
            return{
                icono:'3',
                currentIcon:'database',
                //lista:['Ecuador', 'Brazil', 'Venezuela', 'Peru', 'Panama', 'Colombia']

                lista:[
                    {
                        id:1,
                        text: 'Ecuador'
                    },
                    {
                        id:2,
                        text: 'Peru'
                    },
                    {
                        id:3,
                        text: 'Brazil'
                    },
                    {
                        id:4,
                        text: 'Alemania'
                    }
                ],
                config:{
                    valueField: 'id',
                    displayField: 'text',
                    url:'/api/test'
                }
            }
        },

        components:{
            comboList: Select,
            iconList: IconList
        }

    }
</script>