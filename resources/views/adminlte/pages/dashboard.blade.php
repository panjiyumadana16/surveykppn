@extends('adminlte/index')
@section('konten')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
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
               <div class="col-12 col-sm-12 col-md-4">
                <div class="info-box">
                  <span class="info-box-icon bg-info elevation-1"><i class="fas fa-clipboard"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Survey</span>
                    <span class="info-box-number">
                        <?php 
                          $angka = "210";
                          echo number_format($angka,0,'',',');
                         ?>
                    </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->

              <!-- fix for small devices only -->
              <div class="clearfix hidden-md-up"></div>

              <div class="col-12 col-sm-12 col-md-4">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-success elevation-1"><i class="fas fa-clipboard-check"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Survey terjawab</span>
                    <span class="info-box-number">
                        <?php 
                          $angka = "503123";
                          echo number_format($angka,0,'',',');
                         ?>
                    </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-12 col-md-4">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-warning elevation-1"><i class="far fa-calendar-check" style="color: white;"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Survey terjawab hari ini</span>
                    <span class="info-box-number">
                        <?php 
                          $angka = "1020";
                          echo number_format($angka,0,'',',');
                         ?>
                    </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- TABLE: LATEST ORDERS -->
            <div class="col-12">
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Data Jumlah Survey Terjawab</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th width="10%">ID</th>
                      <th>Survey</th>
                      <th width="10%">Jumlah</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
                      <td>
                        <?php 
                          $angka = "210";
                          echo number_format($angka,0,'',',');
                         ?>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
                      <td>
                        <?php 
                          $angka = "696969";
                          echo number_format($angka,0,'',',');
                         ?>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
                      <td>
                        <?php 
                          $angka = "3120";
                          echo number_format($angka,0,'',',');
                         ?>
                      </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
                      <td>
                        <?php 
                          $angka = "22222";
                          echo number_format($angka,0,'',',');
                         ?>
                      </td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
                      <td>
                        <?php 
                          $angka = "9999";
                          echo number_format($angka,0,'',',');
                         ?>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">Lihat semua data</a>
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