<nav id="desktop-nav">
            <div class="nav">
                <div class="logo">
                    <a href="/"><img src="{{ URL('assets\logo.png')}}" alt="logo" width="130"></a>
                </div>
                <nav>
                    <ul class="navbar">
                        <li><a href="Catalog">Catalog</a></li>
                        <li><a href="Services">Services</a></li>
                        <li><a href="Posts">Posts</a></li>
                        <li><a href="AboutUs">About Us</a></li>
                    </ul>
                </nav>
                <div class="nav-icon">
                    <!-- <a href="#"><img src="{{ URL('assets\search.svg')}}" alt="search-icon"></a> -->
                    <a href="{{ url('cart') }}"><img src="{{ URL('assets\shopping-cart.svg')}}" alt="cart-icon"><span class="badge bg-danger"> {{ count((array) session('cart')) }}</span></a>
                    <div id="profile-dropdown">
                        <a href="profile" id="profile-icon">
                            <img src="http://127.0.0.1:8000/assets/user.svg" alt="user-icon">
                            <span class="arrow">&blacktriangledown;</span>
                        </a>
                        <ul class="dropdown-menu">
                            @if (Route::has('login'))
                                <nav class="-mx-3 flex flex-1 justify-end">
                                    @auth
                                        <!-- <a
                                            href="{{ url('/dashboard') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Dashboard
                                        </a> -->
                                        <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-responsive-nav-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-responsive-nav-link>
                                    </form> 
                                    @else
                                        <li>
                                            <a
                                            href="{{ route('login') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Log in
                                        </a>
                                        </li>

                                        @if (Route::has('register'))
                                        <li>
                                            <a
                                                href="{{ route('register') }}"
                                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                            >
                                                Register
                                            </a>
                                        </li>
                                            
                                        @endif
                                    @endauth
                                </nav>
                            @endif
                        </ul>
                    </div> 
                </div>
            </div>
</nav>

<style>
.nav a{
    text-decoration: none;
    color: rgb(87,65,40);
}

.logo a:hover{
    color: rgb(87,65,40);
    text-decoration: none;
}

.nav a:hover{
    color: rgb(87,65,40);
    text-decoration: underline;
    text-underline-offset: 1rem;
}

.main-container{
    /* width:1200px; */
    margin:auto;
}

.nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1rem 0;
    margin-left: 10rem;
    margin-right: 10rem;
}

.navbar{
    list-style: none;
    display: flex;
    gap:4rem;
    /* align-items: start; */
}

.navbar li{
    list-style: none;
    display: flex;
    align-items: start;
}

.nav-icon{
    display: flex;
    gap: 1.5rem;
}

/* Basic styling for dropdown */
#profile-dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-menu {
    display: none; /* Hide dropdown by default */
    position: absolute;
    background-color: white;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    z-index: 1;
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.dropdown-menu li {
    /* display: none; */
    padding: 8px 16px;
}

.dropdown-menu li a {
    text-decoration: none;
    color: black;
}

.dropdown-menu li a:hover {
    background-color: #ddd;
}

/* Show dropdown menu on hover */
#profile-dropdown:hover .dropdown-menu {
    display: block;
}


</style>


<!-- <script>
    // Get references to elements
    const profileIcon = document.getElementById('profile-icon');
    const dropdownMenu = document.querySelector('.dropdown-menu');
    const authModal = document.getElementById('auth-modal');
    const signupModal = document.getElementById('signup-modal');
    const signinModal = document.getElementById('signin-modal');

    // Add click event listener to profile icon
    profileIcon.addEventListener('click', function(event) {
      // Prevent default behavior (following the href="#" link)
      event.preventDefault();

      // Toggle visibility of dropdown menu
      dropdownMenu.classList.toggle('show');
    });

    // Add click event listeners to close buttons (optional)
    const closeButtons = document.querySelectorAll('.close');
    closeButtons.forEach(closeButton => {
      closeButton.addEventListener('click', function() {
        closeModal(closeButton.parentElement.parentElement); // Get the parent modal
      });
    });

    // Function to close any open modal (optional)
    function closeModal(modal) {
      modal.classList.remove('show');
    }
</script> -->