<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/css/admin.css">
</head>



<body>
<div class="dashboard-container">
    @include('AdminSidebar.sidebar')
    <div class="content">
<h2> Homepage Data</h2>
    <form action="{{ route('adminpanel') }}">
        @csrf

      
        @php
        $title=explode(',',$homepage->title);
        $description=explode(',',$homepage->description);
        $subtitle=explode(',',$homepage->SubTitle);
        $subtitledes=explode(',',$homepage->SubTitleDes);
        $Servicetitle=explode(',',$homepage->ServiceTitle);
        $Servicedes=explode(',',$homepage->ServiceDes);
        @endphp

        @foreach($title as $ti)
        <div class="form-group">
            <label for="{{$ti}}">{{ucfirst($ti)}}</label>
            <input type="text" class="form-control" name="{{$ti}}" value="{{$ti}}" required>
        </div>
        @endforeach
        
        @foreach($description as $des)
        <div class="form-group">
            <label for="{{$des}}">{{ucfirst($des)}}</label>
            <textarea class="form-control" name="{{$des}}" required>{{ucfirst($des)}}</textarea>
        </div>
        @endforeach
        
        @foreach($subtitle as $st)
        <div class="form-group">
            <label for="{{$st}}">{{ucfirst($st)}}</label>
            <input type="text" class="form-control" name="{{$st}}" value="{{ $st }}" required>
        </div>
        @endforeach
        
        @foreach($subtitledes as $std)
        <div class="form-group">
            <label for="{{$std}}">{{ucfirst($std)}}</label>
            <textarea class="form-control" name="{{$std}}" required>{{ $std }}</textarea>
        </div>
        @endforeach
        
        @foreach($Servicetitle as $sert)
        <div class="form-group">
            <label for="{{$sert}}">{{ucfirst($sert)}}</label>
            <input type="text" class="form-control" name="{{$sert}}" value="{{ $sert}}" required>
        </div>
        @endforeach
        
        @foreach($Servicedes as $serdes)
        <div class="form-group">
            <label for="{{$serdes}}">{{ucfirst($serdes)}}</label>
            <textarea class="form-control" name="{{$serdes}}" required>{{ $serdes }}</textarea>
        </div>
        @endforeach
        
        <button  class="btn btn-primary">Go Back</button>
    </form>
</div>
</div>
</body>
</html>