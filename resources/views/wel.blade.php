@extends('layouts.master')



@section('css')
  @livewireStyles
@stop

@section('content')


  @livewire('patient')
  @livewireScripts

@stop

@section('scripts')

@stop