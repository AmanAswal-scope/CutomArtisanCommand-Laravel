<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Footer Data</title>
    <link rel="stylesheet" type="text/css" href="/css/admin.css">

</head>
<body>
<div class="dashboard-container">
@include('AdminSidebar.sidebar')
<div class="content">
    <h2>Edit Footer Data</h2>
    <form action="{{ route('footer.update') }}" method="POST">
        @csrf


        @php
        $svamInfoFooter=explode(',',$Footerpage->SvamInfoFooter);
        $footrtitle=explode(',',$Footerpage->footertitle);
        $footsubtitle=explode(',',$Footerpage->footersubtitle);
        $copyRsubtitle=explode(',',$Footerpage->CopyRsubtitle);
        
        @endphp
        <div class="form-group">
           <label for="footerlogo">{{ucfirst($columns[1])}}</label>
           <input type="file" class="form-control-file" name="footerlogo" accept="image/*">
       </div>

         @foreach($svamInfoFooter as $svamInfoFoot)
        <div class="form-group">
            <label for="{{$svamInfoFoot}}">{{ucfirst($svamInfoFoot)}}</label>
            <input type="text" class="form-control" name="{{$svamInfoFoot}}" value="{{ $svamInfoFoot }}" required>
        </div>
        @endforeach

        @foreach($footrtitle as $foottitle)
        <div class="form-group">
            <label for="{{$foottitle}}">{{ucfirst($foottitle)}}</label>
            <input type="text" class="form-control" name="{{$foottitle}}" value="{{ $foottitle }}" required>
        </div>
        @endforeach

        @foreach($footsubtitle as $footsubt)
        <div class="form-group">
            <label for="{{$footsubt}}">{{ucfirst($footsubt)}}</label>
            <input type="text" class="form-control" name="{{$footsubt}}" value="{{ $footsubt}}" required>
        </div>
        @endforeach

        <div class="form-group">
            <label for="connectwithus">{{ucfirst($columns[5])}}</label>
            <input type="text" class="form-control" name="connectwithus" value="{{ $Footerpage->connectwithus }}" required>
        </div>

        <div class="form-group">
            <label for="copyright">{{ucfirst($columns[6])}}</label>
            <input type="text" class="form-control" name="copyright" value="{{ $Footerpage->copyright }}" required>
        </div>

        @foreach($copyRsubtitle as $crs)
        <div class="form-group">
            <label for="{{$crs}}">{{ucfirst($crs)}}</label>
            <input type="text" class="form-control" name="{{$crs}}" value="{{ $crs }}" required>
        </div>
        @endforeach



<button type="submit" class="btn btn-primary">Update</button>

     

        
    </form>
</div>
</div>
</body>
</html>
