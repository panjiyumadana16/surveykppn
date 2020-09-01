@extends('adminlte/index')
@section('konten')

<!-- Content Wrapper. Contains page content -->
  @if(\Session::has('alert'))
    @if(Session::get('sweetalert')=='success')
     <div class="swalDefaultSuccess">
     </div>
     @elseif(Session::get('sweetalert')=='danger')
     <div class="swalDefaultError">
     </div>
     @endif
  @endif
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Survey</h1>
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
              <div class="card-header border-transparent bg-primary">
                <h3 class="card-title">Data Survey</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-1">
                <div align="center" class="p-1">
                  <a href="/survey/form_insert">
                    <button type="button" class="btn btn-primary">
                      <i class="fas fa-plus"> Buat Survey Baru</i>
                    </button>
                  </a>
                </div>
                <div class="table-responsive">
                  <table id="example1" class="table text-nowrap m-0">
                    <thead>
                    <tr>
                      <th width="8%">ID</th>
                      <th>Judul Survey</th>
                      <th width="5%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($surveys as $dtsurveys)
                    <tr>
                      <td>{{ $dtsurveys -> s_id }}</td>
                      <td>
                        <a href="/survey/{{ $dtsurveys -> s_id }}/pertanyaan">
                          {{ $dtsurveys -> s_judul }}
                        </a>
                      </td>
                      <td>
                        <a href="/survey/{{ $dtsurveys -> s_id }}/pertanyaan" class="btn btn-primary">
                          <i class="far fa-eye"></i>
                        </a>
                        <a href="/survey/form_edit/{{ $dtsurveys -> s_id }}" class="btn btn-success">
                          <i class="far fa-edit"></i>
                        </a>
                        <a href="/survey/act_delete/{{ $dtsurveys -> s_id }}" class="btn btn-danger">
                          <i class="fas fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
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