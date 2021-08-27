@extends('layouts.app')
@section('content')
    <div class="section">
        <div class="section-header">
            <h1>Kredit</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('home')}}">Dashboard</a></div>
                <div class="breadcrumb-item">Kredit</div>
            </div>
        </div>
        @livewire('kredit.index')
    </div>
@endsection