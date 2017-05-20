{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="col-sm-6" style="margin-top: 200px; margin-left: 200px;">
    <div class="box box-primary" >
        <div class="box-header with-border" style="background-color: seagreen; font-size: 21px;">
            <h3 class="box-title" style="color: white;">Bienvenu sur <b>XCSM module(Extended Content Structured Module)</b> </h3>
            <span class="label label-primary pull-right"><i class="fa fa-html5"></i></span>
        </div><!-- /.box-header -->
        <div class="box-body" style=" font-size: 21px;">
            <p>Le module de structuration des contenus (eXtended Content Structured Module) permet de mettre en ligne des contenus structurés sur une plateforme de formation xMoodle2.0.

                Ce module:
                Organise les contenus en leur offrant une structure pédagogique de 5 niveaux,
                Réduit les risques de surcharge cognitive en proposant aux apprenants des contenus sur mesure,
                Facilite la publication des contenus en ligne,
                Garanti la réutilisation des notions lors de la composition de nouveaux cours,
                Réduit considérablement les flux sur les bandes passantes lors des formations à distance.</p>
            <a href="http://almsaeedstudio.com/download/AdminLTE-dist" class="btn btn-primary"><i class="fa fa-download"></i> Download</a>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>


@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
@push('css')

@push('js')