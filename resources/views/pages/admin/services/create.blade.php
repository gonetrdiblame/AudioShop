<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-900 leading-tight">
            {{ __('Create Headphone Service') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-3xl font-semibold mb-6 text-gray-800">Inregistreaza un serviciu pentru casti</h1>
                    <form action="{{ route('services.store') }}" method="post" class="space-y-6" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Model</label>
                            <input 
                                type="text" 
                                name="title" 
                                id="title" 
                                class="mt-1 p-3 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                            />
                            @error('title')
                                <div class="text-sm text-red-600 mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea 
                                name="description" 
                                id="description" 
                                class="mt-1 p-3 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                            ></textarea>
                            @error('description')
                                <div class="text-sm text-red-600 mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                            <input 
                                type="file" 
                                name="image" 
                                id="image" 
                                class="mt-1 p-3 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                            />
                            @error('image')
                                <div class="text-sm text-red-600 mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                            <select 
                                name="status" 
                                id="status" 
                                class="mt-1 p-3 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                            >
                                <option value="activ">Activ</option>
                                <option value="inactiv">Inactiv</option>
                            </select>
                        </div>

                        <button 
                            type="submit" 
                            class="w-full bg-blue-950 text-white py-3 px-4 rounded-md hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                        >
                            Salveaza
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
