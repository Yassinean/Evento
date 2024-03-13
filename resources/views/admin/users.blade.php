<x-header />
<!-- SIDEBAR -->
<x-side-bar />
<!-- SIDEBAR -->



<!-- CONTENT -->
<section id="content">
    <!-- NAVBAR -->
    <nav>
        <i class='bx bx-menu'></i>
        <a href="#" class="nav-link">Users</a>
        <form action="#">
            <div class="form-input">
                <input type="search" placeholder="Search...">
                <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
            </div>
        </form>
        <input type="checkbox" id="switch-mode" hidden>
        <label for="switch-mode" class="switch-mode"></label>
        <a href="#" class="notification">
            <i class='bx bxs-bell'></i>
            <span class="num">8</span>
        </a>
        <a href="#" class="profile">
            <img src="img/people.png">
        </a>
    </nav>
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Dashboard</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ URL('admin/dashboard') }}">Dashboard</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Users</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Evénement</h3>
                    <i class='bx bx-search'></i>
                    <i class='bx bx-filter'></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (session('success'))
                            <div class=" p-4 my-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                                role="alert" id="successMessage">
                                <strong class="font-bold">Success!</strong>
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        @endif
                        @foreach ($users as $user)
                            @if($user->role !== 'admin')
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        <form action="{{ route('users.update', $user->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            @if ($user->status == 'unblocked')
                                                <input type="hidden" name="status" value="blocked">
                                            @else
                                                <input type="hidden" name="status" value="unblocked">
                                            @endif
                                            <button type="submit"
                                                class="{{ $user->status == 'unblocked' ? 'bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 shadow-md py-2 px-6 inline-flex items-center' : 'bg-white text-gray-800 font-bold rounded border-b-2 border-yellow-500 hover:border-yellow-600 hover:bg-yellow-500 shadow-md py-2 px-6 inline-flex items-center' }}">
                                                {{ $user->status == 'unblocked' ? 'Block' : 'Unblock' }}
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <!-- MAIN -->
</section>
<!-- CONTENT -->

<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
<script src="/assets/js/script.js"></script>
</body>

</html>
