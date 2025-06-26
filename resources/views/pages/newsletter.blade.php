<x-main-layout>
    <x-slot name="header">
        <div class="container m-auto relative">
            <img
                src="{{ asset('images/header.jpg') }}" alt="Header"
                class="h-header object-cover w-full">
            <h1 class="title absolute left-20 top-52 text-5xl w-1/2 text-white lh-title">
                Abonează-te la Newsletter
            </h1>
        </div>
    </x-slot>

    <section class="container m-auto mt-8">
        <h4 class="text-3xl text-blue-950 font-bold text-center">Abonează-te la Newsletter-ul nostru</h4>
        <p class="text-center text-gray-700 mt-2 mb-8">
            Fii la curent cu ultimele noutăți și oferte prin abonarea la newsletter-ul nostru.
        </p>

        <!-- Formul de abonare la Newsletter -->
        <div class="max-w-md mx-auto bg-white p-8 shadow-lg rounded-lg">
            <form action="{{ route('newsletter.subscribe') }}" method="POST">
                @csrf

                <!-- Adresa de email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Adresa de email</label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="Introdu adresa ta de email"
                        class="mt-1 p-3 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                        required />
                    @error('email')
                    <div class="text-sm text-red-600 mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Buton de abonare -->
                <div>
                    <button
                        type="submit"
                        class="w-full bg-blue-950 text-white py-3 px-4 rounded-md hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Abonează-te
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-main-layout>