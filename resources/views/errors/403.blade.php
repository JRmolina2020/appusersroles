@extends('errors::illustrated-layout')

@section('code', '403')
@section('title', __('No tienes autorización'))

@section('image')
<style>
    #apartado-derecho{
        text-align:center;
    }
    ul{
        text-decoration: none !important;
        list-style: none;
        color: black;
        font-weight: bold;
    }
</style>
@endsection

@section('message', __('No tienes autorización para ingresar a este apartado'))