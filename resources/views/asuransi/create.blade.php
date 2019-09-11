<section class="content-header">
    <h1>
        Asuransi
        <small>Master</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i>Home</a>
        <li class="active"><i class="fa fa-database"></i>Mater</a>
        <li><a href="{{url('/asuransi')}}"><i class="fa fa-cubes"></i>Asuransi</a>
        <li class="active"><i class="fa fa-plus"></i>Create New</a>
    </ol>
</section>

<!-- {{-- main content --}} -->
<section>

    <!-- {{-- default box --}} -->
    <section class="content">

            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Create New</h3> 
              </div>
              <div class="box-body">
                {{ Form::open(array('url' => 'asuransi/create-new', 'class' => 'form-horizontal')) }}
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nomor aplikasi</label>
                  <div class="col-sm-10">
                    <!-- {{-- name:name untuk melempar controller ke database --}} -->
                    <input type="text" value="NOMOR APLIKASI" class="form-control"  name="nomoraplikasi" readonly>
                  </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <!-- {{-- name:name untuk melempar controller ke database --}} -->
                      <input type="text" class="form-control" placeholder="Name" name="name" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Kantor cabang</label>
                    <div class="col-sm-10">
                        <select class="form-control select2" name="kantorcabang" id="kantorcabang">
                            <option>- select kantor cabang -</option>
                            @foreach($kantorcabangs as $kantorcabang)
                              <option value="{{$kantorcabang->idkodecabang}}">{{$kantorcabang->namecabang}}</option>
                             @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Usia</label>
                    <div class="col-sm-3">
                      <!-- {{-- name:name untuk melempar controller ke database --}} -->
                      <input type="text" class="form-control"  name="usia" id="umur" readonly>
                    </div>
                    <div class="input-group date col-sm-6">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control datepicker pull-right"  id="datepicker" data-date-format='yyyy-mm-dd' value="{{date('Y-m-d')}}" autocomplete="off">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Jangka waktu</label>
                    <div class="col-sm-10">
                      <!-- {{-- name:name untuk melempar controller ke database --}} -->
                      <input type="text" class="form-control" placeholder="Jangka Waktu" name="jangkawaktu" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Harga Bangunan</label>
                    <div class="col-sm-10">
                      <!-- {{-- name:name untuk melempar controller ke database --}} -->
                      <input type="text" class="form-control" placeholder="Harga Bangunan" name="hargabangunan" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Tipe bangunan</label>
                    <div class="col-sm-10">
                      <!-- {{-- name:name untuk melempar controller ke database --}} -->
                      <input type="text" class="form-control" placeholder="Tipe Bangunan" name="tipebangunan" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">premi</label>
                    <div class="col-sm-10">
                      <!-- {{-- name:name untuk melempar controller ke database --}} -->
                      <input type="text" class="form-control" placeholder="Premi" name="premi" required>
                    </div>
                  </div>
                
                <hr>
                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-10">
                    <a href="{{url('asuransi')}}" class="btn btn-warning pull-right">Back</a>
                    <input type="submit" value="Save" class="btn btn-primary">
                  </div>
                </div>
                {{ Form::close() }}
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          
          </section>
          <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
          <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
          <script>
              $(function() {
                  $( "#datepicker" ).datepicker();
              });
       
              window.onload=function(){
                  $('#datepicker').on('change', function() {
                      var dob = new Date(this.value);
                      var today = new Date();
                      var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
                      $('#umur').val(age);
                  });
              }
       
          </script>
          



