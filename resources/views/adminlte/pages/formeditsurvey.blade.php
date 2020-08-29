@extends('adminlte/index')
@section('konten')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Survey</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <form role="form" id="formsurvey" action="/survey/act_update/{{ $surveys->s_id }}" method="POST">
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      {{ csrf_field() }}
                      <!-- {{ method_field('PUT') }} -->
                      <div class="form-group">
                        <label>Judul Survey <i class="text-danger">*</i></label>
                        <input type="text" name="judul" class="form-control" value="{{ $surveys->s_judul }}"
                        maxlength="120" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" rows="3" placeholder="Enter ...">{{ $surveys->s_deskripsi }}
                        </textarea>
                      </div>
                    </div>
                  </div>
                </div>
                    <div class="card-footer">
                      <button class="btn btn-primary float-right" type="submit">Simpan</button>
                      <a class="btn btn-danger float-right mx-2" href="/survey">Batal</a>
                    </div>
                <!-- /.card-body -->
                </div>
              </div>
              </form>
          </div>
          <!-- /.col -->

        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection