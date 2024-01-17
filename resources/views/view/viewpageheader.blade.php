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
    <div class="content"><h2> Header Data</h2>
    <form action="{{ route('adminpanel') }}" >
        @csrf

        @php
         $titles = explode(',', $headerpage->headertitle);
         @endphp
      
        @for ($i = 0; $i < count($titles); $i++)
    <div class="form-group">
        <label for="{{ $titles[$i] }}">{{ ucfirst($titles[$i]) }}</label>
        <input type="text" class="form-control" name="{{ $titles[$i] }}" value="{{ $titles[$i] }}" >
      
    </div>
        @endfor
        <div class="form-group">
            <label for="headertitle6">{{ucfirst($columns[3])}}</label>
            <input type="text" class="form-control" name="title" value="{{ $headerpage->headertitle6 }}" required>
        </div>
        
        <button  class="btn btn-primary">Go Back</button>
    </form>
</div>
</div>
</body>
</html>