<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit AboutusPage Data</title>
    <link rel="stylesheet" type="text/css" href="/css/admin.css">

</head>
<body>
<div class="dashboard-container">
    @include('AdminSidebar.sidebar')
    <div class="content">
    <h2> AboutusPage Data</h2>
    <form action="{{ route('adminpanel') }}"  enctype="multipart/form-data">
        @csrf
        @php
              $tit=explode(',',$aboutuspage->heading);
              $des=explode(',',$aboutuspage->descp);
              $memname=explode(',',$aboutuspage->MemberName);
              $memdes=explode(',',$aboutuspage->MemberDes);
              $img = [
                       "images/Anil-kapoor.png",
                       "images/vikas-dhablania.png",
                       "images/kiran_bujle.png",
                       "images/Shahryar.png",
                       "images/Kambiz_Mofrad.png",
                       "images/Tanuj_Mathur.png",
                       "images/matthew_lang.png",
                       "images/yesica-heredia-guerrero.png",
                       "images/manish_sehgal.png",
                      ];
              @endphp

              @foreach($tit as $ti)
        <div class="form-group">
            <label for="{{$ti}}">{{ucfirst($ti)}}</label>
            <input type="text" class="form-control" name="{{$ti}}" value="{{ $ti }}" required>
        </div>
              @endforeach

              @foreach($des as $de)
        <div class="form-group">
            <label for="{{$de}}">{{ucfirst($de)}}</label>
            <textarea class="form-control" name="{{$de}}" required>{{ $de }}</textarea>
        </div>
        @endforeach

        <div class="form-group">
            <label for="TeamTitle">{{ucfirst($columns[3])}}</label>
            <input type="text" class="form-control" name="TeamTitle" value="{{ $aboutuspage->TeamTitle }}" required>
        </div>

        <!-- Member 1 -->
         @for($i=0;$i<count($img);$i++)
        <div class="form-group">
            <label for="{{$memname[$i]}}">{{ucfirst($memname[$i])}}</label>
            <input type="text" class="form-control" name="{{$memname[$i]}}" value="{{ $memname[$i] }}" required>
        </div>
        <div class="form-group">
            <label for="{{$memdes[$i]}}">{{ucfirst($memdes[$i])}}</label>
            <textarea class="form-control" name="{{$memdes[$i]}}" required> {{$memdes[$i]}} </textarea>
        </div>
        
        <!-- <div class="form-group">
            <label for="Member1Img">{{ucfirst($columns[6])}}</label>
            <input type="file" class="form-control" name="Member1Img">
        </div> -->
         @endfor



        <button  class="btn btn-primary">Go Back</button>
    </form>
</div>
</div>
</body>
</html>
