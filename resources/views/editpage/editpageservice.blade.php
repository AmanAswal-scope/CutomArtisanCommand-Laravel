<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Servicepage Data</title>
    <link rel="stylesheet" type="text/css" href="/css/admin.css">

</head>
<body>
<div class="dashboard-container">
@include('AdminSidebar.sidebar')
<div class="content">
    <h2>Edit ServicePage Data</h2>
    <form action="{{ route('service.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @php
        $title=explode(',',$servicepage->heading);
        $desc=explode(',',$servicepage->descp);
        $benefitTitle=explode(',',$servicepage->BenefitTitle);
        $benefitdes=explode(',',$servicepage->BenefitDes);
        $benefitpoint=explode(',',$servicepage->BenefitPoint);
        @endphp

        @foreach($title as $ti)
        <div class="form-group">
            <label for="{{$ti}}">{{ucfirst($ti)}}</label>
            <input type="text" class="form-control" name="{{$ti}}" value="{{ $ti}}" required>
        </div>
        @endforeach

        @foreach($desc as $descp)
        <div class="form-group">
            <label for="{{$descp}}">{{ucfirst($descp)}}</label>
            <input type="text" class="form-control" name="{{$descp}}" value="{{ $descp}}" required>
        </div>
        @endforeach

        <div class="form-group">
            <label for="heading1">{{ucfirst($columns[3])}}</label>
            <input type="text" class="form-control" name="heading1" value="{{ $servicepage->heading1 }}" required>
         </div>
       
       <div class="form-group">
           <label for="heading1">{{ucfirst($columns[4])}}</label>
           <input type="text" class="form-control" name="heading2" value="{{ $servicepage->heading2 }}" required>
       </div>
       
       <div class="form-group">
           <label for="heading1">{{ucfirst($columns[5])}}</label>
           <input type="text" class="form-control" name="heading3" value="{{ $servicepage->heading3 }}" required>
       </div>
       
       <div class="form-group">
           <label for="heading1">{{ucfirst($columns[6])}}</label>
           <input type="text" class="form-control" name="heading4" value="{{ $servicepage->heading4 }}" required>
       </div>
       
       <div class="form-group">
           <label for="heading1">{{ucfirst($columns[7])}}</label>
           <input type="text" class="form-control" name="heading5" value="{{ $servicepage->heading5 }}" required>
       </div>
       
       <div class="form-group">
           <label for="CyberSecurityStrategyTitle">{{ucfirst($columns[8])}}</label>
           <input type="text" class="form-control" name="CyberSecurityStrategyTitle" value="{{ $servicepage->CyberSecurityStrategyTitle }}" required>
      </div>

      <div class="form-group">
           <label for="CyberSecurityStrategyDescription">{{ucfirst($columns[9])}}</label>
           <textarea class="form-control" name="CyberSecurityStrategyDescription" required>{{ $servicepage->CyberSecurityStrategyDescription }}</textarea>
      </div>

        <div class="form-group">
            <label for="image">{{ucfirst($columns[10])}}</label>
            <input type="file" class="form-control" name="image">
        </div>

        <div class="form-group">
            <label for="ThirdPartyRiskManagementTitle">{{ucfirst($columns[11])}}</label>
            <input type="text" class="form-control" name="ThirdPartyRiskManagementTitle" value="{{ $servicepage->ThirdPartyRiskManagementTitle }}" required>
        </div>

        <div class="form-group">
            <label for="ThirdPartyRiskManagementDes">{{ucfirst($columns[12])}}</label>
            <textarea class="form-control" name="ThirdPartyRiskManagementDes" required>{{ $servicepage->ThirdPartyRiskManagementDes }}</textarea>
        </div>


             @foreach($benefitTitle as $bt)
        <div class="form-group">
            <label for="{{$bt}}">{{ucfirst($bt)}}</label>
            <input type="text" class="form-control" name="{{$bt}}" value="{{ $bt}}" required>
        </div>
        @endforeach

        @foreach($benefitdes as $bd)
        <div class="form-group">
            <label for="{{$bd}}">{{ucfirst($bd)}}</label>
            <input type="text" class="form-control" name="{{$bd}}" value="{{ $bd}}" required>
        </div>
        @endforeach

        @foreach($benefitpoint as $bp)
        <div class="form-group">
            <label for="{{$bp}}">{{ucfirst($bp)}}</label>
            <input type="text" class="form-control" name="{{$bp}}" value="{{ $bp}}" required>
        </div>
        @endforeach

       

        <div class="form-group">
            <label for="whysvamtitle">{{ucfirst($columns[16])}}</label>
            <input type="text" class="form-control" name="whysvamtitle" value="{{ $servicepage->whysvamtitle }}" required>
       </div>


       <div class="form-group">
          <label for="whysvamdes">{{ucfirst($columns[17])}}</label>
          <textarea class="form-control" name="whysvamdes" required>{{ $servicepage->whysvamdes }}</textarea>
    </div>



        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</div>
</body>
</html>
