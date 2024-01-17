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
                        <a href="{{ route('contact.create') }}">Create</a>
                        <a href="{{ route('contact.delete') }}">Delete</a>
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