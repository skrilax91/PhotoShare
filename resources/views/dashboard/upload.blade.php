@extends('dashboard/dash_template')

@section('title')
Upload
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Formulaire d'upload</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Upload</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="offset-2 col-8">
        <div class="card card-primary ">
          <div class="card-header">
            <h3 class="card-title">Upload une image</h3>
          </div>
          <div class="card-body">
            @if(session()->has('error'))
              <div class="alert alert-danger">{!! session('error') !!}</div>
            @endif
            {!! Form::open(['url' => 'upload', 'files' => true]) !!}
            {{ csrf_field() }}
              <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" name="title" class="form-control" id="title" required>
              </div>
              <div class="form-group">
                <label for="image">Image à upload</label>
                <div class="input-group">
                  <div class="custom-file">
                    {!! Form::file('image', ['class' => 'form-control', 'accept' => '.jpg,.jpeg,.png']) !!}
                  </div>
                </div>
              </div>
              
              <button type="submit" class="btn btn-primary">Upload</button>
              {!! Form::close() !!}
            </form>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
    </section>
</div>
@endsection