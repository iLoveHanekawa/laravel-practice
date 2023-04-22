@extends('layouts.user')

@section('title', 'User Page')

@section('working', 'Works')

@hasSection('working')
    @section('nested', 'Nested works')
@endif