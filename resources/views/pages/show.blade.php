<x-main-layout>
    <x-slot name="header">
        
    </x-slot>

    <section class="container m-auto mt-12 px-6 lg:px-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Imaginea serviciului -->
            <div class="bg-white overflow-hidden">
                <img
                    src="{{ asset($service->image) }}"
                    alt="{{ $service->title }}"
                    class="w-full h-72 object-cover"
                >
            </div>

            <!-- Detalii serviciu -->
            <div class="bg-white px-4">
                <h2 class="text-2xl uppercase font-semibold text-blue-950 mb-4">{{ $service->title }}</h2>
                <p class="text-gray-700 text-base mb-6">
                    {{ $service->description }}
                </p>

                <!-- Link Înapoi -->
                <a 
                    href="{{ route('pages.index') }}" 
                    class="inline-block bg-blue-950 text-white py-1 px-6 rounded-md hover:bg-blue-800 transition duration-300"
                >
                    Înapoi la listă
                </a>
            </div>
        </div>
    </section>
</x-main-layout>
