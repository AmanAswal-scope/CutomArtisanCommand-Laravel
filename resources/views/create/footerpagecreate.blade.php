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
        <form method="POST" action="{{ route('footer.store') }}">
            @csrf {{-- CSRF protection --}}

            <div class="form-group">
                <label for=" SvamInfoFooter">Svam Info Footer</label>
                <input type="text" class="form-control" name=" SvamInfoFooter">
            </div>
            
            <div class="form-group">
                <label for="footertitle">Title</label>
                <input type="text" class="form-control" name="footertitle">
            </div>

            <div class="form-group">
                <label for=" footersubtitle">Sub Title</label>
                <input type="text" class="form-control" name=" footersubtitle">
            </div>

            <div class="form-group">
                <label for=" CopyRsubtitle">Copy Right subtitle</label>
                <input type="text" class="form-control" name=" CopyRsubtitle">
            </div>

          
           
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>
</div>
</body>
</html>
