<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Event') }}
        </h2>
    </x-slot>

  
    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end">
                <a href="{{ route('events.create') }}" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">
                    Create Event 
                </a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="py-2">
                        @if (session('success'))
                            <div class="bg-green-500 text-black p-4 rounded">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                        <div class="bg-green-500 text-black p-4 rounded">
                            {{ session('error') }}
                        </div>
                    @endif
                    </div>

                    <table class="border-collapse border border-gray-400 w-full">
                        <thead>
                          <tr>
                            <th class="border border-gray-300 px-4 py-2">Event Name</th>
                            <th class="border border-gray-300 px-4 py-2">Category</th>

                            <th class="border border-gray-300 px-4 py-2">Date</th>
                            <th class="border border-gray-300 px-4 py-2">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $event)
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">{{$event->name}}</td>
                                <td class="border border-gray-300 px-4 py-2">{{$event->cat_name->name ?? ''}}</td>

                                <td class="border border-gray-300 px-4 py-2">{{date('Y-m-d', strtotime( $event->date))  ?? ''}}</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <a href="{{ route('events.edit', $event->id) }}" class="text-indigo-600 hover:text-indigo-900"> <i class="fas fa-edit">Edit</a>
                                    -||-
                                        <a href="{{ route('events.delete', $event->id) }}" 
                                        onclick="return confirm('Are you sure you want to delete?')" class="text-red-600 hover:text-red-900 ml-4">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

