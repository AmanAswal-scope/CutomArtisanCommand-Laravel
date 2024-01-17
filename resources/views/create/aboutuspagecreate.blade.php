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
        <h2>Create a New Post</h2>
        <form method="POST" action="{{ route('aboutus.store') }}">
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
                <label for="MemberName">Member Name</label>
                <input type="text" class="form-control" name=" MemberName">
            </div>

            <div class="form-group">
                <label for="MemberDes">Member Description</label>
                <input type="text" class="form-control" name=" MemberDes">
            </div>

            <div class="form-group">
                <label for="MemberImg">Member Image</label>
                <input type="text" class="form-control" name=" MemberImg">
            </div>
           
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>
</div>
</body>
</html>
