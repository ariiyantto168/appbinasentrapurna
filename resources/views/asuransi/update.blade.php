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
                <h3 class="box-title">Update</h3> 
                <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#myModal">Delete</button>
              </div>
              <div class="box-body">
                {{Form::open(array('url' => 'asuransi/update/'.$asuransi->idasuransi, 'class' => 'form-horizontal'))}}
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nomor aplikasi</label>
                  <div class="col-sm-10">
                    <!-- {{-- name:name untuk melempar controller ke database --}} -->
                    <input type="text" class="form-control" value="{{$asuransi->nomoraplikasi}}" name="nomoraplikasi" required>
                  </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <!-- {{-- name:name untuk melempar controller ke database --}} -->
                      <input type="text" class="form-control" value="{{$asuransi->name}}" name="name" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">cabang</label>
                    <div class="col-sm-10">
                      <!-- {{-- name:name untuk melempar controller ke database --}} -->
                      <input type="text" class="form-control" value="{{$asuransi->cabang}}" name="cabang" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Usia</label>
                    <div class="col-sm-10">
                      <!-- {{-- name:name untuk melempar controller ke database --}} -->
                      <input type="text" class="form-control" value="{{$asuransi->usia}}" name="usia" required>
                    </div>
                </div>
  
                <div class="form-group">
                    <label class="col-sm-2 control-label">Jangka waktu</label>
                    <div class="col-sm-10">
                      <!-- {{-- name:name untuk melempar controller ke database --}} -->
                      <input type="text" class="form-control" value="{{$asuransi->jangkawaktu}}" name="jangkawaktu" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Harga Bangunan</label>
                    <div class="col-sm-10">
                      <!-- {{-- name:name untuk melempar controller ke database --}} -->
                      <input type="text" class="form-control" value="{{$asuransi->hargabangunan}}" name="hargabangunan" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Tipe bangunan</label>
                    <div class="col-sm-10">
                      <!-- {{-- name:name untuk melempar controller ke database --}} -->
                      <input type="text" class="form-control" value="{{$asuransi->tipebangunan}}" name="tipebangunan" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">premi</label>
                    <div class="col-sm-10">
                      <!-- {{-- name:name untuk melempar controller ke database --}} -->
                      <input type="text" class="form-control" value="{{$asuransi->premi}}" name="premi" required>
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
            {{-- <script type="text/javascript">
            $(document).ready(function() {
             $('.datepicker').datepicker();
            });
          </script> --}}
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete Asuransi</h4>
      </div>
      <div class="modal-body">
        <p>anda yakin ingin hapus asuransi??</p>
      </div>
      <div class="modal-footer">
          {{Form::open(array('url' => 'asuransi/delete/'.$asuransi->idasuransi,'method'=>'delete','class' => 'form-horizontal'))}}
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <input type="submit" class="btn btn-danger" value="Yes">
        {{Form::close()}}
      </div>
    </div>
    
  </div>
</div>
          



