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
        <form method="POST" action="{{ route('contact.remove') }}">
            @csrf {{-- CSRF protection --}}

            <div class="form-group">
                <label for="heading">Title</label>
                <input type="text" class="form-control" name="heading">
            </div>
            
            <div class="form-group">
                <label for="ContactTitle">Contact Title</label>
                <input type="text" class="form-control" name="ContactTitle">
            </div>

            <div class="form-group">
                <label for="ContactTitleAddress">Contact Title Address</label>
                <input type="text" class="form-control" name=" ContactTitleAddress">
            </div>

            <div class="form-group">
                <label for="ContactTitleNumber">Contact Title Number</label>
                <input type="text" class="form-control" name=" ContactTitleNumber">
            </div>

            <div class="form-group">
                <label for="ContactTitleNumber2">Contact Title Number 2</label>
                <input type="text" class="form-control" name=" ContactTitleNumber2">
            </div>

            <div class="form-group">
                <label for="ContactTitleEmail">Contact Title Email</label>
                <input type="text" class="form-control" name=" ContactTitleEmail">
            </div>
           
            <button type="submit" class="btn btn-primary">Delete Post</button>
        </form>
    </div>
</div>
</body>
</html>
