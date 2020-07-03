@extends('layouts.master')


@section('content')
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><a href="/pertanyaan/create" class="btn btn-primary">Buat pertanyaan</a></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
          <thead>                  
            <tr>
              <th style="width: 10px">ID</th>
              <th>Isi</th>
              <th style="width: 17%;">Tanggal</th>
              <th style="width: 23%;">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($pertanyaan as $p)
            <tr>
              <td>{{ $p -> id }}</td>
              <td>{{ $p -> isi }}</td>
              <td>{{ $p -> tanggal }}</td>
              <td>
                <a href="/pertanyaan/{{$p -> id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                <a href="/pertanyaan/{{$p -> id}}/delete" class="btn btn-danger btn-sm">Hapus</a>
                <a href="/jawaban/{{$p -> id}}" class="btn btn-primary btn-sm">Lihat Jawaban</a>

              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@stop