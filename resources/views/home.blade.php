@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body" id="app">
                    You are logged in!

                    <!--
                    <div>
                        <alert type="success">Bienvenido al sistema</alert>
                    </div>

                    <div>
                        <modal :show.sync="showModal">
                            <div slot="header">Mensaje del sistema</div>
                            Pero q carajos
                        </modal>
                        <button class="btn btn-warning" @click="showModal=true">toggle modal</button>
                    </div>
                    -->
                    <div>
                        <crearmenu></crearmenu>
                        <listarmenu></listarmenu>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <script src="js/main.js"></script>
@endsection
