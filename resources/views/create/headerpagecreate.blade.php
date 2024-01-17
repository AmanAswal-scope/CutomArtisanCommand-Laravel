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
        <form method="POST" action="{{ route('header.store') }}">
            @csrf {{-- CSRF protection --}}

            <div class="form-group">
                <label for="headertitle">Title</label>
                <input type="text" class="form-control" name="headertitle">
            </div>
            
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>
</div>
</body>
</html>
