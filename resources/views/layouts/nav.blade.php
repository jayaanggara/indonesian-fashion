<header>
    <nav class="header navbar navbar-expand-lg bg-transparent">
        <div class="delimiter-first bflex">
            <a class="navbar-brand" href="index.php">
                <img src="{{ asset('/assets') }}/images/logo.png">
            </a>
            <button class="navbar-toggler" type="button">
                <div class="mob">
                    <span class="mobi mobi-1"></span>
                    <span class="mobi mobi-2"></span>
                    <span class="mobi mobi-3"></span>
                </div>
            </button>
            <div class="navbar-swipe">
                <ul class="navbar-nav ms-auto sflex">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('events.index')}}">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('web.membership')}}">Membership</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('news.index')}}">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('web.about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('member.index')}}">Member</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg style="height: 30px !important;" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M28 29V27C28 25.9391 27.5786 24.9217 26.8284 24.1716C26.0783 23.4214 25.0609 23 24 23H16C14.9391 23 13.9217 23.4214 13.1716 24.1716C12.4214 24.9217 12 25.9391 12 27V29" stroke="#DD9243" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20 19C22.2091 19 24 17.2091 24 15C24 12.7909 22.2091 11 20 11C17.7909 11 16 12.7909 16 15C16 17.2091 17.7909 19 20 19Z" stroke="#DD9243" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <circle cx="20" cy="20" r="19" stroke="#DD9243" stroke-width="2"/>
                            </svg>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="nav-link dropdown-item" href="{{ route('register')}}">Register</a>
                            </li>
                            <li>
                                <a class="nav-link dropdown-item" href="{{ route('login')}}">Login</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="btn-primary" href="{{ route('web.contact-us')}}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
