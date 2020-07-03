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
              <h3 class="card-title"><a href="/pertanyaan" class="btn">Beri Jawaban</a></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>                  
                  <tr>
                    <th style="width: 10px">ID</th>
                    <!-- <th style="width: 10px">ID_P</th> -->
                    <th>Jawaban</th>

                    <th style="width: 18%;">Aksi</th>
                    <!-- <th style="width: 40px">Aksi</th> -->
                  </tr>
                </thead>
                <tbody>
                  @foreach($pertanyaan->jawaban as $j)
                  <tr>
                    <td>{{ $j -> id }}</td>
                    <!-- <td>{{ $j -> pertanyaan_id }}</td> -->
                    <td>{{ $j -> isi }}</td>
                    <!-- <td><a href="/jawaban/{{$j -> id}}" class="btn btn-warning btn-sm">Jawab</a></td> -->
                    <td>
                      <a href="/jawaban/{{$j->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                      <a href="/jawaban/{{$j-> id}}/delete" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <br>
              <form action="/jawaban/{{$pertanyaan -> id}}" method="POST">
              <div class="form-group">
                {{ csrf_field()}}
                <input type="hidden" name="pertanyaan_id" value="{{$pertanyaan -> id}}"/>
                <label for="inputDescription">Beri Jawaban</label>
                <textarea id="isi" name="isi" class="form-control" rows="4"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              </form>
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