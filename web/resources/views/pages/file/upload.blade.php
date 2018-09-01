@extends('../welcome')

@section('content')
<div class="row flex-center position-ref full-height">
    <form action="{{url('/upload')}}" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">ชื่อไฟล์</label>
            <input type="text" name="name" class="form-control"  placeholder="ชื่อไฟล์">
        </div>
        <div class="form-group">
            <label for="version">เวอร์ชั่น</label>
            <input type="text" name="version" class="form-control"  placeholder="เวอร์ชั่น">
        </div>
        <div class="form-group">
            <label for="file">ไฟล์</label>
            <input type="file" name="file" class="form-control"  placeholder="เวอร์ชั่น">
        </div>
        <div class="form-group">
            <input class="btn btn-success" type="submit" value="อับโหลด" >
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
</div>
@endsection