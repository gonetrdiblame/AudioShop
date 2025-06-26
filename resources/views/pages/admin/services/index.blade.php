@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h1 class="text-xl font-semibold mb-4">Lista produselor</h1>
            <a href="{{ route('services.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md">Adaugă</a>
            <table class="w-full mt-4 border-collapse">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-3 text-left">Model</th>
                        <th class="p-3 text-left">Descriere</th>
                        <th class="p-3 text-left">Fotografie</th>
                        <th class="p-3 text-left">Status</th>
                        <th class="p-3 text-left">Acțiuni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                    <tr class="border-b">
                        <td class="p-3">{{ $service->title }}</td>
                        <td class="p-3">{{ Str::limit($service->description, 50) }}</td>
                        <td class="p-3">
                            @if ($service->image)
                                <img src="{{ asset($service->image) }}" class="w-16 h-16 object-cover rounded-md">
                            @else
                                <span class="text-gray-400">Fără fotografie</span>
                            @endif
                        </td>
                        <td class="p-3">
                            <span class="px-2 py-1 rounded {{ $service->status == 'activ' ? 'bg-green-200' : 'bg-gray-300' }}">
                                {{ ucfirst($service->status) }}
                            </span>
                        </td>
                        <td class="p-3">
                            <a href="{{ route('services.edit', $service->id) }}" class="text-blue-600 hover:underline">Editează</a> |
                            <form action="{{ route('services.destroy', $service->id) }}" method="POST" class="inline">
                                @csrf @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Șterge</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
