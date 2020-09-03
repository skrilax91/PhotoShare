@extends('dashboard/dash_template')

@section('title')
Dashboard
@endsection

@section('content')

<div class="content-wrapper">
    
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fas fa-tasks"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">NOMBRES D'IMAGE</span>
                        <span class="info-box-number">{{$count}}</span>
                    </div>
                </div>
            </div>
            <div class="offset-md-6 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fas fa-plus-circle"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">ESPACE RESTANT</span>
                        <span class="info-box-number">{{$last}} Images</span>
                    </div>
                </div>
            </div>
        </div>  
    </section>
</div>

@endsection