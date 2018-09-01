@extends('../welcome')

@section('content')
<div class="row">
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>#</th>
                <th>ชื่อ</th>
                <th>เวอร์ชั่น</th>
                <th></th>
            </tr>
            @foreach($files as $key => $file)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$file->name}}</td>
                <td>{{$file->version}}</td>
                <td>
                    <a href="{{url('download/'.$file->id) }}" class="btn btn-sm btn-default"><i class="fas fa-download"></i></a>
                    <button onclick="if(confirm('คุณต้องการลบ ?')) window.location.href='{{url('delete/'.$file->id)}}'"  class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                </td>
            </tr>
            @endforeach
            
        </table>
    </div>
</div>
@endsection