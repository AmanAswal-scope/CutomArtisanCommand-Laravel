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
        <form method="POST" action="{{ route('header.remove') }}">
            @csrf {{-- CSRF protection --}}
            <div class="form-group">
                <label for="headertitle">Title</label>
                <input type="text" class="form-control" name="headertitle" id="headertitle">
            </div>
            <button type="submit" class="btn btn-primary">Delete Post</button>
        </form>
    </div>
</div>
</body>
</html>




<script>
    // Attach click event handlers to delete buttons
    document.addEventListener('DOMContentLoaded', function() {
        const deleteButtons = document.querySelectorAll('.delete-button');
        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                const field = this.getAttribute('data-field');
                const inputField = document.getElementById(field);

                // Split the input field value by commas
                const values = inputField.value.split(',');

                // Remove the last value
                values.pop();

                // Update the input field value with the modified values
                inputField.value = values.join(',');
            });
        });
    });
</script>
