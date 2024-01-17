<div class="sidebar">
            <h2>Dashboard</h2>
            <ul>
                <li class="dropdown">
                    <a class="nav-button" href="{{ route('home.index') }}">Home</a>
                    <div class="dropdown-content">
                        <a href="{{ route('home.edit') }}">Edit</a>
                        <a href="{{ route('home.view') }}">View</a>
                    </div>
                </li>

                <li class="dropdown">
                    <a class="nav-button" href="{{ route('services.index') }}">Services</a>
                    <div class="dropdown-content">
                        <a href="{{ route('service.edit') }}">Edit</a>
                        <a href="{{ route('service.view') }}">View</a>
                    </div>
                </li>

                <li class="dropdown" >
                    <a class="nav-button" href="{{ route('aboutus.index') }}">About Us</a>
                    <div class="dropdown-content">
                        <a href="{{ route('aboutus.edit') }}">Edit</a>
                        <a href="{{ route('aboutus.view') }}">View</a>
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
                    </div>
                </li>

                <li class="dropdown" >
                    <a class="nav-button2" href="">Edit Footer</a>
                    <div class="dropdown-content">
                        <a href="{{ route('footer.edit') }}">Edit</a>
                        <a href="{{ route('footer.view') }}">View</a>

                    </div>
                </li>
            </ul>
        </div>