<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <Style>

/* Add your custom styles here */
  /* Reset some default styles */

body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color:  #ebd6d6
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

h2 {
    font-size: 24px;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    font-weight: bold;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 2px solid #393333;
    border-radius: 5px;
    font-size: 16px;
}

textarea.form-control {
    height: 150px;
}

.btn-primary {
    background-color: #007bff;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #0056b3;
}

 </style>
</head>
<body>
    
<div class="container">
<h2>Edit Homepage Data</h2>
    <form action="{{ route('home.update') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">{{ucfirst($columns[1])}}</label>
            <input type="text" class="form-control" name="title" value="{{ $homepage->title }}" required>
        </div>
        
        <div class="form-group">
            <label for="description">{{ucfirst($columns[2])}}</label>
            <textarea class="form-control" name="description" required>{{ $homepage->description }}</textarea>
        </div>
        
        <div class="form-group">
            <label for="SubTitle1">{{ucfirst($columns[3])}}</label>
            <input type="text" class="form-control" name="SubTitle1" value="{{ $homepage->SubTitle1 }}" required>
        </div>
        
        <div class="form-group">
            <label for="SubTitle1Des">{{ucfirst($columns[4])}}</label>
            <textarea class="form-control" name="SubTitle1Des" required>{{ $homepage->SubTitle1Des }}</textarea>
        </div>
        
        <div class="form-group">
            <label for="SubTitle2">{{ucfirst($columns[5])}}</label>
            <input type="text" class="form-control" name="SubTitle2" value="{{ $homepage->SubTitle2 }}" required>
        </div>
        
        <div class="form-group">
            <label for="SubTitle2Des">{{ucfirst($columns[6])}}</label>
            <textarea class="form-control" name="SubTitle2Des" required>{{ $homepage->SubTitle2Des }}</textarea>
        </div>
        
        <div class="form-group">
            <label for="SubTitle3">{{ucfirst($columns[7])}}</label>
            <input type="text" class="form-control" name="SubTitle3" value="{{ $homepage->SubTitle3 }}" required>
        </div>
        
        <div class="form-group">
            <label for="SubTitle3Des">{{ucfirst($columns[8])}}</label>
            <textarea class="form-control" name="SubTitle3Des" required>{{ $homepage->SubTitle3Des }}</textarea>
        </div>
        
        <div class="form-group">
            <label for="Service1Title">{{ucfirst($columns[9])}}</label>
            <input type="text" class="form-control" name="Service1Title" value="{{ $homepage->Service1Title }}" required>
        </div>
        
        <div class="form-group">
            <label for="Service1">{{ucfirst($columns[10])}}</label>
            <textarea class="form-control" name="Service1" required>{{ $homepage->Service1 }}</textarea>
        </div>
        
        <div class="form-group">
            <label for="Service2Title">{{ucfirst($columns[11])}}</label>
            <input type="text" class="form-control" name="Service2Title" value="{{ $homepage->Service2Title }}" required>
        </div>
        
        <div class="form-group">
            <label for="Service2">{{ucfirst($columns[12])}}</label>
            <textarea class="form-control" name="Service2" required>{{ $homepage->Service2 }}</textarea>
        </div>
        
        <div class="form-group">
            <label for="Service3Title">{{ucfirst($columns[13])}}</label>
            <input type="text" class="form-control" name="Service3Title" value="{{ $homepage->Service3Title }}" required>
        </div>
        
        <div class="form-group">
            <label for="Service3">{{ucfirst($columns[14])}}</label>
            <textarea class="form-control" name="Service3" required>{{ $homepage->Service3 }}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>