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
        <h2>Delete a New Post</h2>
        <form method="POST" action="{{ route('services.remove') }}">
            @csrf {{-- CSRF protection --}}

            <div class="form-group">
                <label for="heading">Title</label>
                <input type="text" class="form-control" name="heading">
            </div>

            <div class="form-group">
                <label for="descp">Sub Title</label>
                <input type="text" class="form-control" name=" descp">
            </div>

            <div class="form-group">
                <label for="BenefitTitle">Benefit Title</label>
                <input type="text" class="form-control" name=" BenefitTitle">
            </div>

            <div class="form-group">
                <label for="BenefitDes">Benefit Des</label>
                <input type="text" class="form-control" name=" BenefitDes">
            </div>

            <div class="form-group">
                <label for="BenefitPoint">Benefit Point</label>
                <input type="text" class="form-control" name=" BenefitPoint">
            </div>
            
            <button type="submit" class="btn btn-primary">Delete Post</button>
        </form>
    </div>
</div>
</body>
</html>
