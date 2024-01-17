<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" type="text/css" href="/css/admin.css">

</head>
<body>
<div class="dashboard-container">
@include('AdminSidebar.sidebar')
<div class="content">
    <h2>Edit Data</h2>
    <form action="{{ route('contact.update') }}" method="POST">
        @csrf

        @php
        $head=explode(',',$contactpage->heading);
        $contacttitle=explode(',',$contactpage->ContactTitle);
        $contactaddress=explode(',',$contactpage->ContactTitleAddress);
        $contactnum1=explode(',',$contactpage->ContactTitleNumber);
        $contactnum2=explode(',',$contactpage->ContactTitleNumber2);
        $contactemail=explode(',',$contactpage->ContactTitleEmail);
        $regionTitle=explode(',',$contactpage->RegionTitle);
        $regionaddres=explode(',',$contactpage->regionaddress);
        $regioncontct=explode(',',$contactpage->regioncontact);
        $regionmail=explode(',',$contactpage->regionemail);
        @endphp

        @foreach($head as $he)
        <div class="form-group">
            <label for="{{$he}}">{{ucfirst($he)}}</label>
            <input type="text" class="form-control" name="{{$he}}" value="{{ $he}}" required>
        </div>
        @endforeach

        @foreach($contacttitle as $ct)
        <div class="form-group">
            <label for="{{$ct}}">{{ucfirst($ct)}}</label>
            <input type="text" class="form-control" name="{{$ct}}" value="{{ $ct}}" required>
        </div>
        @endforeach

        
        @foreach($contactaddress as $ca)
        <div class="form-group">
            <label for="{{$ca}}">{{ucfirst($ca)}}</label>
            <input type="text" class="form-control" name="{{$ca}}" value="{{ $ca}}" required>
        </div>
        @endforeach

        
        @foreach($contactnum1 as $cn1)
        <div class="form-group">
            <label for="{{$cn1}}">{{ucfirst($cn1)}}</label>
            <input type="text" class="form-control" name="{{$cn1}}" value="{{ $cn1}}" required>
        </div>
        @endforeach

        
        @foreach($contactnum2 as $cn2)
        <div class="form-group">
            <label for="{{$cn2}}">{{ucfirst($cn2)}}</label>
            <input type="text" class="form-control" name="{{$cn2}}" value="{{ $cn2}}" required>
        </div>
        @endforeach

        
        @foreach($contactemail as $cm)
        <div class="form-group">
            <label for="{{$cm}}">{{ucfirst($cm)}}</label>
            <input type="text" class="form-control" name="{{$cm}}" value="{{ $cm}}" required>
        </div>
        @endforeach

        <div class="form-group">
            <label for="image">{{ucfirst($columns[8])}}</label>
            <input type="text" class="form-control" name="image">
        </div>
           
        @foreach($regionTitle as $rt)
        <div class="form-group">
            <label for="{{$rt}}">{{ucfirst($rt)}}</label>
            <input type="text" class="form-control" name="{{$rt}}" value="{{ $rt}}" required>
        </div>
        @endforeach

           
        @foreach($regioncontct as $rc)
        <div class="form-group">
            <label for="{{$rc}}">{{ucfirst($rc)}}</label>
            <input type="text" class="form-control" name="{{$rc}}" value="{{ $rc}}" required>
        </div>
        @endforeach

           
        @foreach($regionmail as $rm)
        <div class="form-group">
            <label for="{{$rm}}">{{ucfirst($rm)}}</label>
            <input type="text" class="form-control" name="{{$rm}}" value="{{ $rm}}" required>
        </div>
        @endforeach

           
        @foreach($contactemail as $ce)
        <div class="form-group">
            <label for="{{$ce}}">{{ucfirst($ce)}}</label>
            <input type="text" class="form-control" name="{{$ce}}" value="{{ $ce}}" required>
        </div>
        @endforeach



        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</div>
</body>
</html>
