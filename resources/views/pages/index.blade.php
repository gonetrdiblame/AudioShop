<x-main-layout>
    <x-slot name="header">
        <div class="container m-auto relative">
            <img
                src="{{ asset('images/header.jpg') }}" alt="Header"
                class="h-header object-cover w-full">
            <h1 class="title absolute left-20 top-52 text-5xl w-1/2 text-white lh-title">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </h1>
        </div>
    </x-slot>

    <section class="container m-auto mt-8">
        <h4 class="text-3xl text-blue-950 font-bold">Servicii</h4>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
            @foreach ($services as $service)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img
                    src="{{ asset($service->image) }}"
                    alt="{{ $service->title }}"
                    class="w-full h-48 object-cover">

                <div class="p-6">
                    <h5 class="text-xl font-semibold text-blue-950">{{ $service->title }}</h5>
                    <p class="text-sm text-gray-700 mt-2">
                        {{ Str::limit($service->description, 100) }}
                    </p>

                    <!-- Link "Află mai mult" -->
                    <a href="{{ route('pages.services.show', ['service' => $service->id]) }}"
                        class="text-blue-950 hover:text-blue-700 mt-4 inline-block">
                        Află mai mult
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>

</x-main-layout>