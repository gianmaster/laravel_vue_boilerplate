<template>
    <li>
        <div :class="{bold: isFolder}"
            @click="toggle"
            @dblclick="changeType">
            {{model.name}}
            <span v-if="isFolder">[{{open ? '-' : '+'}}]</span>
        </div>
        <ul v-show="open" v-if="isFolder">
            <item
                    class="item"
                    v-for="model in model.children"
                    :model="model">
            </item>
            <li @click="addChild">+</li>
        </ul>
    </li>
</template>
<style>
    .x-block{
        display: inline;
        padding: 0 4px;
    }

    .isParent{
        background: #6ea1ff;
        font-weight: bold;
    }
</style>
<script>

    export default{
        props: {
            model: Object
        },

        computed: {
            isParent: function(){
                return this.mode.children && this.mode.children.length;
            }
        },

        methods: {

        }
    }
</script>