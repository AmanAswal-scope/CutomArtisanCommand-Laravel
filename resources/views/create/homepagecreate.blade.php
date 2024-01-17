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
        <form method="POST" action="{{ route('home.store') }}">
            @csrf {{-- CSRF protection --}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description"></textarea>
            </div>

            <div class="form-group">
                <label for="SubTitle">Sub Title</label>
                <input type="text" class="form-control" name="SubTitle">
            </div>

            <div class="form-group">
                <label for="SubTitleDes">Sub Title Description</label>
                <textarea class="form-control" name="SubTitleDes"></textarea>
            </div>

            <div class="form-group">
                <label for="ServiceTitle">Service Title</label>
                <input type="text" class="form-control" name="ServiceTitle">
            </div>

            <div class="form-group">
                <label for="ServiceDes">Service Description</label>
                <textarea class="form-control" name="ServiceDes"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>
</div>
</body>
</html>
