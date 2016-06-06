<template>
    <div class="form-group">
        <label for="select_input">{{label}}</label>
        <select class="form-control" name="select_input" id="select_input" v-model="value">
            <option v-if="value == '' " value="" selected disabled>{{optionLabel}}</option>
            <option v-if="!options.valueField" :value="item" v-for="item in data" track-by="$index">{{ item }}</option>
            <option v-if="options.valueField.length" value="{{getId(item)}}" v-for="item in data" track-by="$index">{{ getDescription(item) }} </option>
        </select>
    </div>
</template>
<style>

</style>
<script>

    export default{
        /*
        data(){
            return{
                label: 'Etiqueta',
                value:'',
                data:[],
                optionLabel: '--Seleccione--',
                options:{
                    valueField:'',
                    displayField:'',
                    url:'',
                    method: 'GET'//POST or GET
                }
            }
        },
        */
        props:{
            options:{
                type:Object,
                default: function(){
                    return{
                        valueField:'',
                        displayField:'',
                        url:'',
                        method: 'GET'//POST or GET
                    }
                },
                required: false
            },
            data:{
                type: Array,
                default: [],
                required: false
            },
            label:{
                type: String,
                required: false,
                default: 'Etiqueta'
            },
            value:{
                type: String,
                required: true,
                default: ''
            },
            optionLabel:{
                type:String,
                required: false,
                default:'--Seleccione--'
            }
        },

        ready:function(){
            const {url , method} = this.options;
            if (url) {
                this.$http({url: url, method: method}).then(function (response) {
                    // success callback
                    this.data = response.data.data;
                }, function (err) {
                    // error callback
                    console.log(err);
                });
            }
        },

        methods:{
            getId: function(item){
                return item[this.options.valueField];
            },
            getDescription: function(item){
                return item[this.options.displayField];
            }
        }
    }
</script>