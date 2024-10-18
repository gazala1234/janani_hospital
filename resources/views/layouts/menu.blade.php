<div class="sidebar-menu">
    <ul class="menu">
        {{-- <li class="sidebar-title">Menu</li> --}}

        <li class="sidebar-item active ">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-people"></i>
                <span>Janani Moms</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item">
                    <a href="#" class="submenu-link">Events</a>
                </li>
                <li class="submenu-item">
                    <a href="#" class="submenu-link">Ask for suggestions</a>
                </li>
                <li class="submenu-item">
                    <a href="auth-forgot-password.html" class="submenu-link">Book free consult</a>
                </li>
                <li class="submenu-item">
                    <a href="{{ url('api/ask-doctor') }}" class="submenu-link">Ask an expert</a>
                </li>
                <li class="submenu-item">
                    <a href="auth-forgot-password.html" class="submenu-link">Virtual baby shower</a>
                </li>
                <li class="submenu-item">
                    <a href="auth-forgot-password.html" class="submenu-link">Introduce yourself</a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-person-badge"></i>
                <span>Pregnancy Classes</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item">
                    <a href="{{ url('api/events') }}" class="submenu-link">Events</a>
                </li>
                <li class="submenu-item">
                    <a href="auth-register.html" class="submenu-link">Ask for suggestions</a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-box2"></i>
                <span>Pregnancy Packages</span>
            </a>
            {{-- <ul class="submenu ">
                <li class="submenu-item">
                    <a href="auth-login.html" class="submenu-link">Login</a>
                </li>
                <li class="submenu-item">
                    <a href="auth-register.html" class="submenu-link">Register</a>
                </li>
                <li class="submenu-item">
                    <a href="auth-forgot-password.html" class="submenu-link">Forgot Password</a>
                </li>
            </ul> --}}
        </li>

        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-card-list"></i>
                <span>Janani Health Cards</span>
            </a>
            {{-- <ul class="submenu ">
                <li class="submenu-item">
                    <a href="auth-login.html" class="submenu-link">Login</a>
                </li>
                <li class="submenu-item">
                    <a href="auth-register.html" class="submenu-link">Register</a>
                </li>
                <li class="submenu-item">
                    <a href="auth-forgot-password.html" class="submenu-link">Forgot Password</a>
                </li>
            </ul> --}}
        </li>

        <li class="sidebar-item">
            <a href="table.html" class='sidebar-link'>
                <i class="bi bi-camera-video"></i>
                <span>Live Sessions</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="table.html" class='sidebar-link'>
                <i class="bi bi-calendar2-event"></i>
                <span>Events</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="table.html" class='sidebar-link'>
                <i class="bi bi-info-circle"></i>
                <span>Services</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ url('api/settings') }}" class='sidebar-link'>
                <i class="bi bi-gear"></i>
                <span>Settings</span>
            </a>
        </li>

        {{-- <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-person-badge-fill"></i>
                <span>Authentication</span>
            </a>

            <ul class="submenu">
                <li class="submenu-item">
                    <a href="auth-login.html" class="submenu-link">Login</a>
                </li>
                <li class="submenu-item">
                    <a href="auth-register.html" class="submenu-link">Register</a>
                </li>
                <li class="submenu-item">
                    <a href="auth-forgot-password.html" class="submenu-link">Forgot Password</a>
                </li>
            </ul>
        </li> --}}

    </ul>
</div>
</div>
</div>