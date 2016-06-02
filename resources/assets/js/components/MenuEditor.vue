<template>
    <div class="weels">
        <h4>Ramificaciones</h4>
        <div class="box">
            <ul>

            </ul>
        </div>
    </div>
</template>
<style>



</style>
<script>


    export default{
        data(){
            return{
                menu: [
                    {
                        id:1,
                        title: 'Sistema',
                        path: null,
                        isParent: true,
                        icon: 'fa fa-home',
                        childrens: [
                            {
                                id:2,
                                title: 'Usuarios',
                                path: null,
                                isParent: true,
                                icon: 'fa fa-users',
                            },
                            {
                                id:3,
                                title: 'Roles',
                                path: null,
                                isParent: true,
                                icon: 'fa fa-gear',
                                childrens: [
                                    {
                                        id:4,
                                        title: 'Casos especiales',
                                        path: null,
                                        isParent: true,
                                        icon: 'fa fa-eye',
                                    }
                                ]
                            }
                        ]
                    }
                ]
            }
        },
        components:{
            'other-component':OtherComponent,
            HeaderComponent,
        }
    }
</script>