<section class="content-header">
    <h1>Categories</h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><i class="fa fa-cubes"></i>Kantor cabang</li>
    </ol>
</section>

<section class="content">
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Index</h3>
        <div class="box-tools pull-right">
            <a href="{{url('kantor/create-new')}}" class="btn btn-box-tool" title="Create New"><i class="fa fa-plus"></i>create New</a>
            {{-- <a href="{{url('categories/trash')}}" class="btn btn-box-tool" title="Restore"><i class="fa fa-undo"></i> Restore</a> --}}
        </div>
     </div>
</div>
<div class="box-body table-responsive">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Name cabang</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kantor as $number => $kantor)
                <tr>
                    <td>{{$number+1}}</td>
                    <td>{{$kantor->namecabang}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</section>     