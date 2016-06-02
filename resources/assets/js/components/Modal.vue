<template>
    <div class="animated modal-mask" v-show="show" transition="fade">
        <div class="modal-wrapper" v-show="show" transition="flip">
            <div class="modal-container">

                <div class="modal-header">
                    <slot name="header">
                        <i class="fa fa-close close-x" @click="show = !show"></i>
                    </slot>
                </div>

                <div class="modal-body">
                    <slot>This is a modal</slot>
                </div>

                <div class="modal-footer">
                    <slot name="footer">
                        <button class="btn btn-default" @click="show = !show">OK</button>
                    </slot>
                </div>

            </div>
        </div>
    </div>
</template>
<style>

    .close-x{
        cursor: pointer;
        float: right;
        color: darkgray;
    }

    .modal-mask {
        position: fixed;
        z-index: 9998;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, .5);
        display: table;
    }

    .modal-wrapper {
        display: table-cell;
        vertical-align: middle;
    }

    .modal-container {
        width: 300px;
        margin: 0px auto;
        padding: 10px 10px 10px 10px;
        background-color: #fff;
        border-radius: 2px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
        font-family: Helvetica, Arial, sans-serif;
    }

    .modal-body {
        margin: 20px 0;
    }

    .modal-header{
        font-size: 1.4em;
    }




</style>
<script>

    export default{
        props: {
            show:{
                type: Boolean,
                required: true,
                twoWay: true
            },

        },


    }
</script>