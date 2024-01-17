<!DOCTYPE html>
<html>
<head>
  <title>Manager Dashboard</title>
  <style>

        /* Reset some default styles */
        body, ul {
            margin: 0;
            padding: 0;
        }

        /* Add styling to the container */
        .dashboard-container {
            display: flex;
            background-color: #f5f5f5;
        }

        /* Style the sidebar */
        .sidebar {
            width: 250px;
            background-color: #77a5a0ed;
            color: #fff;
            padding: 20px;
        }

        .sidebar h2 {
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style: none;
            padding-left: 0;
        }

        .sidebar li {
            margin-bottom: 10px;
        }

        /* Style the navigation buttons */
        .nav-button {
            display: block;
            text-decoration: none;
            padding: 10px 20px;
            background-color: #3e4853;
            
            color: #fff;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .nav-button:hover {
            background-color: #0056b3;
        }


        .nav-button2 {
            display: block;
            text-decoration: none;
            padding: 10px 20px;
            background-color: white;
            
            color: #fff;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .nav-button2:hover {
            background-color: #0056b3;
        }




        /* Style the dropdown */
        .dropdown {
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #333;
            min-width: 150px;
            border-radius: 5px;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #fff;
            transition: background-color 0.3s ease;
        }

        .dropdown-content a:hover {
            background-color: #555;
        }
  


.dropdown {
    position: relative;
    display: block;
}


.dropdown .nav-button {
    background-color: #dde9db;
    color: #180e0e
}

.dropdown .nav-button2 {
    background-color: #3e4853;
    color: #fff
}



.dropdown-content {
    display: none;
    position: absolute;
    background-color: black;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: blue;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
 
}

.dropdown-content a:hover {
    background-color: black;
}

.dropdown:hover .dropdown-content {
    display: block;
}

    body {
      font-family: Arial, sans-serif;
      background-color:lightgrey;
      margin: 0;
      padding: 0;
    }

    .dashboard-container {
      display: flex;
      height: 100vh;
    }

    .sidebar {
      background-color: #77a5a0ed
      color: #fff;
      padding: 20px;
      width: 250px;
      
    }

    .sidebar h2 {
      margin-top: 0;
      margin-bottom: 20px;
      font-size: 24px;
    }

    .sidebar ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    .sidebar li {
      margin-bottom: 10px;
    }

    .sidebar a {
      color: #fff;
      text-decoration: none;
    }

    .content {
      flex: 1;
      padding: 40px;
      
    }

    .content h2 {
      margin-top: 0;
      margin-bottom: 20px;
      font-size: 24px;
    }

    .content p {
      margin-bottom: 20px;
    }
     
  </style>
  <!-- Additional Stylesheets -->
  <link rel="stylesheet" href="path/to/your/other/stylesheet.css">
</head>
<body>
  <!-- <div class="dashboard-container">
    <div class="sidebar">
      <h2>Dashboard</h2>
      <ul>
    <li class="dropdown">
        <a class="btn btn-primary nav-button" href="{{ route('home.index') }}">Home</a>
        <div class="dropdown-content">
            <a class="btn btn-secondary" href="{{ route('home.edit') }}">Edit</a>
        </div>
    </li >
    <li class="dropdown">
        <a class="btn btn-primary nav-button" href="{{ route('services.index') }}">Services</a>
        <div class="dropdown-content">
            <a class="btn btn-secondary" href="{{ route('service.edit') }}">Edit</a>
        </div>
    </li >
    <li><a class="btn btn-primary nav-button" href="{{ route('contact.page') }}">Contact Us</a></li>
    <li><a class="btn btn-primary nav-button" href="{{ route('about.page') }}">About Us</a></li>
</ul>
    </div> -->
    <div class="dashboard-container">
        <div class="sidebar">
            <h2>Dashboard</h2>
            <ul>
                <li class="dropdown">
                    <a class="nav-button" href="{{ route('home.index') }}">Home</a>
                    <div class="dropdown-content">
                        <a href="{{ route('home.edit') }}">Edit</a>
                        <a href="{{ route('home.view') }}">View</a>
                        <a href="{{ route('home.create') }}">Create</a>
                        <a href="{{ route('home.delete') }}">Delete</a>
                    </div>
                </li>

                <li class="dropdown">
                    <a class="nav-button" href="{{ route('services.index') }}">Services</a>
                    <div class="dropdown-content">
                        <a href="{{ route('service.edit') }}">Edit</a>
                        <a href="{{ route('service.view') }}">View</a>
                        <a href="{{ route('services.create') }}">Create</a>
                        <a href="{{ route('services.delete') }}">Delete</a>
                    </div>
                </li>

                <li class="dropdown" >
                    <a class="nav-button" href="{{ route('aboutus.index') }}">About Us</a>
                    <div class="dropdown-content">
                        <a href="{{ route('aboutus.edit') }}">Edit</a>
                        <a href="{{ route('aboutus.view') }}">View</a>
                        <a href="{{ route('aboutus.create') }}">Create</a>
                        <a href="{{ route('aboutus.delete') }}">Delete</a>
                    </div>
                </li>

        
                <li class="dropdown" >
                    <a class="nav-button" href="{{ route('contact.index') }}">Contact Us</a>
                    <div class="dropdown-content">
                        <a href="{{ route('contact.edit') }}">Edit</a>
                        <a href="{{ route('contact.view') }}">View</a>
                    </div>
                </li>


                <li class="dropdown" >
                    <a class="nav-button2" href="">Edit Header</a>
                    <div class="dropdown-content">
                        <a href="{{ route('header.edit') }}">Edit</a>
                        <a href="{{ route('header.view') }}">View</a>
                        <a href="{{ route('header.create') }}">Create</a>
                        <a href="{{ route('header.delete') }}">Delete</a>
                    </div>
                </li>

                <li class="dropdown" >
                    <a class="nav-button2" href="">Edit Footer</a>
                    <div class="dropdown-content">
                        <a href="{{ route('footer.edit') }}">Edit</a>
                        <a href="{{ route('footer.view') }}">View</a>
                        <a href="{{ route('footer.create') }}">Create</a>
                        <a href="{{ route('footer.delete') }}">Delete</a>

                    </div>
                </li>
            </ul>
        </div>
        <div class="content">
      <h2>Welcome Admin !!</h2>
      <p>This is your dashboard. You can access various features and manage your team from here.</p>
      <p>Feel free to explore the different sections using the sidebar navigation.</p>
      <p>SVAM will work with you to create an incident response plan aligned with your business team, and perform role play exercises, called
        table top exercises, to practice common scenarios and ensure readiness.</p>
    </div>
  </div>
    </div>

   




   
  <!-- ... (your existing script) ... -->
</body>
</html>
