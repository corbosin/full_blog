@extends('personal.layouts.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Комментарии</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>

          </div><!-- /.col -->
        <div class="row">
            <div class="col-12">
                <form action="{{ route('personal.comment.update', $comment->id) }}" method="POST" class="w-150">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <textarea class= "form-control" name="message" cols="70" rows="10">{{ $comment->message }}</textarea>
                        @error('message')
                        <div class="text-danger">Это поле нужно заполнить</div>
                        @enderror
                    </div>
                    <input type="submit" class="btn btn-primary" value="Обновить">
                </form>
            </div>
        </div>
      </div>


    </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection
