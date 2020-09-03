@extends('dashboard/dash_template')

@section('title')
Visionneuse d'image
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Visionneuse d'image</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Images</a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="offset-3 col-6">
        <div class="card card-primary ">
        <div class="card-header">
            <h3 class="card-title">{{$image->titre}}</h3>
          </div>
          <div class="card-body">
           <img src="{{asset('uploads/'.$image->code.'.'.$image->ext)}}">
          </div>
        </div>
        <!-- /.card-body -->
      </div>
    </section>
</div>
@endsection