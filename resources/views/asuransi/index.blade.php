<section class="content-header">
    <h1>Asuransi</h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><i class="fa fa-cubes"></i>asuransi</li>
    </ol>
</section>

<section class="content">
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Index</h3>
        <div class="box-tools pull-right">
            <a href="{{url('asuransi/create-new')}}" class="btn btn-box-tool" title="Create New"><i class="fa fa-plus"></i>create New</a>
            
        </div>
     </div>
</div>
<div class="box-body table-responsive">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor aplikasi</th>
                <th>name</th>
                <th>cabang</th>
                <th>Jangka waktu</th>
                <th>Harga Bangunan</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($asuransi as $number => $asuransi)
                <tr>
                    <td>{{$number+1}}</td>
                    {{-- <td>{{$asuransi->idasuransi}}</td> --}}
                    <td>{{$asuransi->nomoraplikasi}}</td>
                    <td>{{$asuransi->name}}</td>
                    <td>{{$asuransi->cabang}}</td>
                    <td>{{$asuransi->jangkawaktu}}</td>
                    <td>{{$asuransi->hargabangunan}}</td>
                    <td>
                        <center>
                            <a href="{{url('/asuransi/update/'.$asuransi->idasuransi)}}"><i class="fa fa-pencil-square-o"></i></a>
                            <a href="{{url('/asuransi/view/'.$asuransi->idasuransi)}}" ><i class="fa fa-eye"></i></a>
                        </center>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</section>     