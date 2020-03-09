@extends('layouts.admin')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Buttons</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Buttons</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- Block buttons -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Block Buttons</h3>
              </div>
              <div class="card-body">
                <button type="button" class="btn btn-default btn-block">.btn-block</button>
                <button type="button" class="btn btn-default btn-block btn-flat">.btn-block .btn-flat</button>
                <button type="button" class="btn btn-default btn-block btn-sm">.btn-block .btn-sm</button>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /. row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
