<x-header />
<main class="mt-10">

    <div class="mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative" style="height: 24em;">
        <div class="absolute left-0 bottom-0 w-full h-full z-10"
            style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
        <img src="{{ asset('images/' . $events->image) }}" class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
        <div class="p-4 absolute bottom-0 left-0 z-20">
            <a href="#"
                class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">{{ $events->categorie->name }}</a>
            <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
                {{ $events->name }}
            </h2>
            <div class="flex mt-3">
                <img src="https://randomuser.me/api/portraits/men/97.jpg"
                    class="h-10 w-10 rounded-full mr-2 object-cover" />
                <div>
                    <p class="font-semibold text-gray-200 text-sm"> {{ $events->organisateur->user->name }} </p>
                    <p class="font-semibold text-gray-400 text-xs"> {{ $events->created_at }} </p>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-auto px-4 lg:px-0 mt-12 text-gray-700 max-w-screen-md vismx-auto text-lg leading-relaxed">
        <h2 class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">Nombre de place :
            {{ $events->capacity }}
        </h2>
        <div class="flex justify-between">
            <div>
                <h2 class="text-2xl text-gray-800 font-semibold mb-4 mt-4">
                    Localisation
                </h2>
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                    </svg>

                    <p class="pb-6">{{ $events->localisation }}</p>
                </div>
            </div>
            <div>
                <h2 class="text-2xl text-gray-800 font-semibold mb-4 mt-4">
                    Date d'événement
                </h2>
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                    </svg>


                    <p class="pb-6">{{ $events->date }}</p>
                </div>
            </div>
        </div>

        <h2 class="text-2xl text-gray-800 font-semibold mb-4 mt-4">Description</h2>
        <div class="flex justify-start">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
            </svg>


            <p class="pb-6">{{ $events->description }}</p>
        </div>
    </div>
    {{-- @dd($events->id) --}}
    <form method="post" action="{{ route('createreservation', $events->id) }}">
        @csrf
        <input type="hidden" name="client_id" value="{{ Auth::user()->id }}">
        <input type="hidden" name="acceptation" value="{{ $events->acceptation }}">
        <input type="hidden" name="event_id" value="{{ $events->id }}">
        <button type="submit"
            class='flex justify-center max-w-sm w-full bg-gradient-to-r from-indigo-500 via-pink-500 to-yellow-500 hover:from-indigo-600 hover:via-pink-600 hover:to-red-600 focus:outline-none text-white text-2xl uppercase font-bold shadow-md rounded-full mx-auto p-5'>
            Reserver Maintenant
        </button>
    </form>
    @if ($reservations)
        <form action="{{ route('ticket', ['id' => $events->id]) }}" method="post">
            @csrf
            <button>Get Ticket</button>
        </form>
    @endif
</main>
</body>

</html>
