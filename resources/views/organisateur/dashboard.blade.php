<x-header />
<!-- SIDEBAR -->
<x-side-bar />
<!-- SIDEBAR -->


<!-- CONTENT -->
<section id="content">
    <!-- NAVBAR -->
    <nav>
        <i class='bx bx-menu'></i>
        <a href="#" class="nav-link">Categories</a>
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
                        <a href="#">Dashboard</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Home</a>
                    </li>
                </ul>
            </div>
            <div class="max-w-2xl mx-auto">

                <!-- Modal toggle -->
                <button class="btn-download" type="button" data-modal-toggle="authentication-modal">
                    Ajouter un événement
                </button>

                <!-- Main modal -->
                <div id="authentication-modal" aria-hidden="true"
                    class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
                    <div class="relative w-full max-w-md px-4 h-full md:h-auto">
                        <!-- Modal content -->
                        <div class="bg-white rounded-lg shadow relative mt-72 dark:bg-gray-700">
                            <div class="flex justify-end p-2">
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                    data-modal-toggle="authentication-modal">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                            <form class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8"
                                action="{{ route('createevent') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h3 class="text-xl font-medium text-gray-900 dark:text-white">Ajouter un événement</h3>
                                <input type="hidden" name="organisateur_id" value="{{ $organizerId }}">
                                <div>
                                    <input type="file" name="image" id="event"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                </div>
                                <div>
                                    <label for="event"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Titre
                                        d'événement</label>
                                    <input type="text" name="name" id="event"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        required="">
                                </div>
                                <div>
                                    <label for="desc"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Description
                                        d'événement</label>
                                    <input type="text" name="description" id="desc"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        required="">
                                </div>
                                <div>
                                    <label for="loc"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Localisation
                                        d'événement</label>
                                    <input type="text" name="localisation" id="loc"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        required="">
                                </div>
                                <div>
                                    <label for="date"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Date
                                        d'événement</label>
                                    <input type="date" name="date" id="date"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        required="">
                                </div>
                                <div>
                                    <label for="cap"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Capacité
                                        d'événement</label>
                                    <input type="number" name="capacity" id="cap"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        required="">
                                </div>
                                <div>
                                    <label for="cap"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Acceptation:
                                    </label>
                                    <div class="flex justify-evenly">
                                        <div class="flex items-center">
                                            <div
                                                class="bg-white dark:bg-gray-100 rounded-full w-4 h-4 flex flex-shrink-0 justify-center items-center relative">
                                                <input aria-labelledby="label1" checked type="radio"
                                                    name="acceptation" value="manuel"
                                                    class="checkbox appearance-none focus:opacity-100 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none border rounded-full border-gray-400 absolute cursor-pointer w-full h-full checked:border-none" />
                                                <div
                                                    class="check-icon hidden border-4 border-indigo-700 rounded-full w-full h-full z-1">
                                                </div>
                                            </div>
                                            <label id="label1"
                                                class="ml-2 text-sm leading-4 font-normal text-gray-800 dark:text-gray-100">Manuel</label>
                                        </div>
                                        <div class="flex items-center ml-6">
                                            <div
                                                class="bg-white dark:bg-gray-100 rounded-full w-4 h-4 flex flex-shrink-0 justify-center items-center relative">
                                                <input aria-labelledby="label2" type="radio" name="acceptation"
                                                    value="automatique"
                                                    class="checkbox appearance-none focus:opacity-100 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none border rounded-full border-gray-400 absolute cursor-pointer w-full h-full checked:border-none" />
                                                <div
                                                    class="check-icon hidden border-4 border-indigo-700 rounded-full w-full h-full z-1">
                                                </div>
                                            </div>
                                            <label id="label2"
                                                class="ml-2 text-sm leading-4 font-normal text-gray-800 dark:text-gray-100">Automatique</label>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label for="event"
                                        class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Categorie
                                        d'événement</label>
                                    <select name="categorie_id" id="">
                                        @foreach ($categories as $c)
                                            <option value="{{ $c->id }}">{{ $c->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit"
                                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ajouter</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <ul class="box-info">
            <li>
                <i class='bx bxs-calendar-check'></i>
                <span class="text">
                    <h3>1020</h3>
                    <p>Nombre de réservation</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-calendar-check'></i>
                <span class="text">
                    <h3></h3>
                    <p>Nombre d'événement</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-group'></i>
                <span class="text">
                    <h3>1</h3>
                    <p>Places disponibles</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-dollar-circle'></i>
                <span class="text">
                    <h3> 1 </h3>
                    <p>Nombre de categories</p>
                </span>
            </li>
        </ul>


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
                            <th>Image</th>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Localisation</th>
                            <th>Date</th>
                            <th>Capacité</th>
                            <th>Categorie</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($events as $event)
                            <tr>
                                <td><img src="{{ asset('images/' . $event->image) }}" alt=""></td>
                                <td>{{ $event->name }}</td>
                                <td>{{ $event->description }}</td>
                                <td>{{ $event->localisation }}</td>
                                <td>{{ $event->date }}</td>
                                <td>{{ $event->capacity }}</td>
                                <td>{{ $event->categorie->name }}</td>
                                <td>
                                    <button data-modal-toggle="authentication-modal-1{{ $event->id }}"
                                        type="button"
                                        class="inline-flex items-center px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white text-sm font-medium rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                        </svg>

                                    </button>
                                    <div id="authentication-modal-1{{ $event->id }}" aria-hidden="true"
                                        class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
                                        <div class="relative w-full max-w-md px-4 h-full md:h-auto">
                                            <!-- Modal content -->
                                            <div class="bg-white rounded-lg shadow relative mt-72 dark:bg-gray-700">
                                                <div class="flex justify-end p-2">
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                        data-modal-toggle="authentication-modal-1{{ $event->id }}">
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <form class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8"
                                                    action="{{ route('updateevent', $event->id) }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PATCH')

                                                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                                                        Modifier cet événement
                                                    </h3>
                                                    <div>
                                                        <input type="file" name="nimage" id="event"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                                    </div>

                                                    <div>
                                                        <label for="event"
                                                            class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">
                                                            Modifier Titre d'événement</label>
                                                        <input type="text" name="nname" id="event"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                            required="" value="{{ $event->name }}">
                                                    </div>
                                                    <div>
                                                        <label for="desc"
                                                            class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">
                                                            Modifer Description d'événement</label>
                                                        <input type="text" name="ndescription" id="desc"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                            required="" value="{{ $event->description }}">
                                                    </div>
                                                    <div>
                                                        <label for="loc"
                                                            class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">
                                                            Modifier Localisation d'événement
                                                        </label>
                                                        <input type="text" name="nlocalisation" id="loc"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                            required="" value="{{ $event->localisation }}">
                                                    </div>
                                                    <div>
                                                        <label for="date"
                                                            class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">
                                                            Modifier Date d'événement
                                                        </label>
                                                        <input type="date" name="ndate" id="date"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                            required="" value="{{ $event->date }}">
                                                    </div>
                                                    <div>
                                                        <label for="cap"
                                                            class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">
                                                            Modifier Capacité d'événement
                                                        </label>
                                                        <input type="number" name="ncapacity" id="cap"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                            required="" value="{{ $event->capacity }}">
                                                    </div>
                                                    <div>
                                                        <label for="event"
                                                            class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">
                                                            Categorie d'événement
                                                        </label>
                                                        <select name="ncategorie_id" id="">
                                                            @foreach ($categories as $categorie)
                                                                <option value="{{ $categorie->id }}">
                                                                    {{ $categorie->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <button type="submit"
                                                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Modifier</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <form action="{{ route('deleteevent', $event->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            class="inline-flex items-center px-4 py-2 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
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
