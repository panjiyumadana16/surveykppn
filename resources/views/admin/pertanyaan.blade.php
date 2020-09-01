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
            <h1 class="m-0 text-dark">Pertanyaan Survey <a class="text-primary">{{ $surveys->s_judul }}</a></h1>
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
            <div class="card bg-secondary">
              <div class="card-header bg-dark">
                <div class="col-12">
                  <label>Tipe Pertanyaan : </label>
                  <select id="tipe" name="tipe" class="rounded m-1 col-sm-3">
                    <option disabled="" selected=""><i>-- Pilih Tipe --</i></option>
                    <option value="Essay">Essay</option>
                    <option value="Number">Number</option>
                    <option value="Checkbox">Checkbox</option>
                    <option value="Radio">Radio</option>
                    <option value="Rating">Rating Kepuasan</option>
                  </select>

                <i id="jmlform">
  
                </i>
                <form action="{{route('insert.q')}}" method="post" id="saveform-act">
                  {{ csrf_field() }}
                <div class="float-right my-1">
                  <a id="addqs" class="btn btn-primary mx-1"><i class="fas fa-plus"></i></a>
                  <a id="removeqs" class="btn btn-danger mx-1"><i class="fas fa-minus"></i></a>
                  <input id="submit" value="Simpan" class="btn btn-success mx-1" type="submit">
                </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row" id="pertanyaans">
                  <input type="text" name="idsurvey " value="{{ $surveys->s_id }}" hidden="">


                  
                
                </div>
                <input id="submit" value="Simpan" class="btn btn-success mx-1" type="submit">
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          </form>
        </div>

        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
@section('footer')
<script type="text/javascript">
  function addnewopsi(n, opsi) {
      $('input[id=banyakopsi]').last().val(n);
      for (var i = 0; i < n; i++) {
        $('div #fieldjawaban').last().append(opsi);
      }
    };

    $('#tipe').on('change',function () {
      if ($('#tipe').val() == 'Checkbox' || $('#tipe').val() == 'Radio') {
        $('#jmlform').html(jmlformadd);
      } else if ($('#tipe').val() == 'Rating') {
        $('#jmlform').html(jmlformadd2);
      } else {
         $('#jmlform').html('');
      }
      $('#tipe').data('opsitipe',$('#tipe').val());
      $('#addqs').click(function(){
        if ($('#tipe').data('opsitipe')=='Checkbox') {
          addCheckbox();
          
        }
        else if ($('#tipe').data('opsitipe')=='Number') {
          $('#pertanyaans').append(numberset);
        }
        else if ($('#tipe').data('opsitipe')=='Radio') {
          $('#pertanyaans').append(radioset);
          addnewopsi($('#jumlahopsi').val(), radioopsi);
        }
        else if ($('#tipe').data('opsitipe')=='Rating') {
          $('#pertanyaans').append(ratingset);
          addnewopsi($('#jumlahopsi').val(), ratingopsi);
        }
        else if ($('#tipe').data('opsitipe')=='Essay'){
          $('#pertanyaans').append(essayset);
        }
        $('#tipe').removedata('opsitipe');
      });
    });

    $('#addqs').on('click', function(){
      addCheckbox();
    })
    function addCheckbox(){
      var checkboxset = '<div class="col-12" id="question-card">'
                    +'<div class="card bg-light">'
                      +'<div id="pertanyaan" class="card-header">'

                        +'<div class="form-group">'
                          +'<label>Pertanyaan (Checkbox)<i class="text-danger"></i></label>'
                          +'<textarea type="text" name="pertanyaan[]" class="form-control" placeholder="Enter ...">s</textarea>'
                        +'</div>'
                        +'<input value="Checkbox" name="tipepertanyaan[]" hidden="">'
                        +'<div class="form-group float-right">'
                          +'<input type="checkbox" value="1" class="form-group" name="wajibisi[]">'
                          +' <label> Wajib diisi</label>'
                        +'</div>'
                      +'</div>'
                      +'<div class="card-body" id="fieldjawaban">'
                      +'<input type="number" id="banyakopsi" name="banyakopsi[]" value="" hidden="">'
                      +'</div>'
                    +'</div>'
                  +'</div>';  

      // var checkboxopsi = '<div class="container-fluid my-1" id="checkboxopsi">'
      //                     +'<div class="input-group">'
      //                       +'<div class="input-group-prepend">'
      //                         +'<span class="input-group-text">'
      //                           +'<input type="checkbox" disabled="">'
      //                         +'</span>'
      //                       +'</div>'
      //                       +'<input type="text" class="form-control" name="isijawaban[]" placeholder="Isi Pilihan Jawaban">'
      //                     +'</div>'
      //                   +'</div>';

                  $('#pertanyaans').append(checkboxset);
                  // addnewopsi($('#jumlahopsi').val(), checkboxopsi);
    }

   $(document).ready(function () {
    
    
    var radioset = '<div class="col-12" id="question-card">'
                    +'<div class="card bg-light">'
                      +'<div id="pertanyaan" class="card-header">'

                        +'<div class="form-group">'
                          +'<label>Pertanyaan (Radio)<i class="text-danger"></i></label>'
                          +'<textarea type="text" name="pertanyaan[]" class="form-control" placeholder="Enter ..."></textarea>'
                        +'</div>'
                        +'<input value="Radio" name="tipepertanyaan[]" hidden="">'
                        +'<div class="form-group float-right">'
                          +'<input type="checkbox" value="1" class="form-group" name="wajibisi[]">'
                          +' <label> Wajib diisi</label>'
                        +'</div>'
                      +'</div>'
                      +'<div class="card-body" id="fieldjawaban">'
                        +'<div class="container-fluid" id="checkboxset">'
                        +'<input type="number" id="banyakopsi" name="banyakopsi[]" value="" hidden="">'
                      +'</div>'

                    +'</div>'
                  +'</div>';
    var radioopsi = '<div class="input-group my-1">'
                            +'<div class="input-group-prepend">'
                              +'<span class="input-group-text"><input type="radio" disabled=""></span>'
                            +'</div>'
                            +'<input type="text" class="form-control" name="isijawaban[]" placeholder="Isi Pilihan Jawaban">'
                          +'</div>'
                        +'</div>';
    var ratingset = '<div class="col-12" id="question-card">'
                    +'<div class="card bg-light">'
                      +'<div id="pertanyaan" class="card-header">'

                        +'<div class="form-group">'
                          +'<label>Pertanyaan (Rating Kepuasan)<i class="text-danger"></i></label>'
                          +'<textarea type="text" name="pertanyaan[]" class="form-control" placeholder="Enter ..."></textarea>'
                        +'</div>'
                        +'<input value="Rating" name="tipepertanyaan[]" hidden="">'
                        +'<div class="form-group float-right">'
                          +'<input type="checkbox" value="1" class="form-group" name="wajibisi[]">'
                          +' <label> Wajib diisi</label>'
                        +'</div>'
                      +'</div>'
                      +'<div class="card-body" id="fieldjawaban">'
                      +'<input type="number" id="banyakopsi" name="banyakopsi[]" value="" hidden="">'
                      +'<p>Rating dari yang terendah ke tertinggi</p>'
                      +'</div>'
                    +'</div>'
                  +'</div>';
    var ratingopsi = '<div class="input-group my-1">'
                            +'<div class="input-group-prepend">'
                              +'<span class="input-group-text"><i class="far fa-star"></i></span>'
                            +'</div>'
                            +'<input type="text" class="form-control" name="isijawaban[]" placeholder="Isi Pilihan Jawaban">'
                          +'</div>'
                        +'</div>';
    var numberset = '<div class="col-12" id="question-card">'
                    +'<div class="card bg-light">'
                      +'<div id="pertanyaan" class="card-header">'

                        +'<div class="form-group">'
                          +'<label>Pertanyaan (Number)<i class="text-danger"></i></label>'
                          +'<textarea type="text" name="pertanyaan[]" class="form-control" placeholder="Enter ..."></textarea>'
                        +'</div>'
                        +'<input value="Number" name="tipepertanyaan[]" hidden="">'
                        +'<div class="form-group float-right">'
                          +'<input type="checkbox" value="1" class="form-group" name="wajibisi[]">'
                          +' <label> Wajib diisi</label>'
                        +'</div>'
                        +'<input type="number" id="banyakopsi" name="banyakopsi[]" value="0" hidden="">'
                      +'</div>'
                  +'</div>';
    var essayset = '<div class="col-12" id="question-card">'
                    +'<div class="card bg-light">'
                      +'<div id="pertanyaan" class="card-header">'

                        +'<div class="form-group">'
                          +'<label>Pertanyaan (Essay)<i class="text-danger"></i></label>'
                          +'<textarea type="text" name="pertanyaan[]" class="form-control" placeholder="Enter ..."></textarea>'
                        +'</div>'
                        +'<input value="Essay" name="tipepertanyaan[]" hidden="">'
                        +'<div class="form-group float-right">'
                          +'<input type="checkbox" value="1" class="form-group" name="wajibisi[]">'
                          +' <label> Wajib diisi</label>'
                        +'</div>'
                        +'<input type="number" id="banyakopsi" name="banyakopsi[]" value="0" hidden="">'
                      +'</div>'
                  +'</div>';
    var jmlformadd = '<label> Jumlah Opsi jawaban : </label>'
                  +'<input type="number" min="2" name="jmlopsi" id="jumlahopsi" value="2" class="rounded m-1 col-sm-3">';
    var jmlformadd2 = '<label> Jumlah Opsi jawaban : </label>'
                  +'<input type="number" min="3" name="jmlopsi" id="jumlahopsi" value="3" class="rounded m-1 col-sm-3">';

    $('#removeqs').click(function(){
      $('#pertanyaans').children('div[id=question-card]:last').remove();
    });

    
  });
</script>
@endsection