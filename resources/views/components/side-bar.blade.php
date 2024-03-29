    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">Evento</span>
        </a>
        <ul class="side-menu top">
            @if (Auth::user()->role == 'admin')
                <li class="active">
                    <a href="{{ URL('admin/dashboard') }}">
                        <i class='bx bxs-dashboard'></i>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li class="active">
                    <a href="{{ URL('admin/users') }}">
                        <i class='bx bxs-group'></i>
                        <span class="text">Team</span>
                    </a>
                </li>
            @else
                <li class="active">
                    <a href="{{ URL('organisateur/dashboard') }}">
                        <i class='bx bxs-dashboard'></i>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li class="active">
                    <a href="{{ URL('organisateur/gestion_ticket') }}">
                        <i class='bx bxs-dashboard'></i>
                        <span class="text">Réservations</span>
                    </a>
                </li>
            @endif
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <i class='bx bxs-log-out-circle dark:text-white'></i>
                    <button type="submit" class="text dark:text-white">Logout</button>
                </form>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->
