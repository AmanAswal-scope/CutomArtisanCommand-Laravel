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
    <div class="content">    <h2>Contact-us</h2>
    <form action="{{ route('adminpanel') }}" >
        @csrf
   
        @php
        $head=explode(',',$contact->heading);
        $contacttitle=explode(',',$contact->ContactTitle);
        $contactaddress=explode(',',$contact->ContactTitleAddress);
        $contactnum1=explode(',',$contact->ContactTitleNumber);
        $contactnum2=explode(',',$contact->ContactTitleNumber2);
        $contactemail=explode(',',$contact->ContactTitleEmail);
        $regionTitle=explode(',',$contact->RegionTitle);
        $regionaddres=explode(',',$contact->regionaddress);
        $regioncontct=explode(',',$contact->regioncontact);
        $regionmail=explode(',',$contact->regionemail);
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
            <input type="file" class="form-control" name="image">
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






        
        <button  class="btn btn-primary">Go Back</button>
    </form>
</div>
</div>
</body>
</html>
