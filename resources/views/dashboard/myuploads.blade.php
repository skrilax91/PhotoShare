@extends('dashboard/dash_template')

@section('title')
Mes Images
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mes Images</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Images</a></li>
              <li class="breadcrumb-item active">Mes Images</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="offset-1 col-10">
        <div class="card card-primary ">
          <div class="card-header">
            <h3 class="card-title">Mes Images</h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="casiers">
                  <thead>
                      <tr>
                          <th scope="col">id</th>
                          <th>Titre</th>
                          <th>Code</th>
                          <th>Format</th>
                          <th class="text-center">Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($uploads as $image)
                      <tr>
                        <td>{{$image->id}}</td>
                        <td>{{$image->titre}}</td>
                        <td>{{$image->code}}</td>
                        <td>{{$image->ext}}</td>
                        <td class="text-center">
                          <a type="button" href="{{url('/view?image='.$image->code)}}"><i class="fas fa-sign-in-alt"></i></a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
              </table>
          </div>

            


            
          </div>
        </div>
        <!-- /.card-body -->
      </div>
    </section>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        $('#uploads').DataTable({
            "lengthChange": true,
            "searching": true,
            "pageLength": 25,
        });  
    } );
</script>  

@endsection