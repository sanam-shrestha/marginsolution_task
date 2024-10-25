<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Event') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="{{ route('events.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Event Name <span class="text-red-600">*</span></label>
                            <input type="text" name="name" id="name" 
                            class="mt-1 block w-full px-3
                             py-2 bg-white border border-gray-300 
                             rounded-md shadow-sm placeholder-gray-400 focus:outline-none 
                             focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{old('name')}}">
                             @error('name')
                             <span class="text-red-600 text-sm">{{ $message }}</span>
                             @enderror
                        </div>
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea name="description" id="description" rows="4"
                                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                {{old('description')}}</textarea>
                        </div>

                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Date <span class="text-red-600">*</span></label>
                            <input type="date" name="date" id="date" 
                            class="mt-1 block w-full px-3
                             py-2 bg-white border border-gray-300 
                             rounded-md shadow-sm placeholder-gray-400 focus:outline-none 
                             focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{old('date')}}">
                             @error('date')
                             <span class="text-red-600 text-sm">{{ $message }}</span>
                             @enderror
                        </div>

                        
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Location</label>
                            <input type="text" name="location" id="location" 
                            class="mt-1 block w-full px-3
                             py-2 bg-white border border-gray-300 
                             rounded-md shadow-sm placeholder-gray-400 focus:outline-none 
                             focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{old('location')}}">
                        </div>

                        <div>
                            <label for="category_id" class="block text-sm font-medium text-gray-700">
                                Category <span class="text-red-600">*</span>
                            </label>
                            <select name="category_id" id="category_id" 
                                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 
                                rounded-md shadow-sm placeholder-gray-400 focus:outline-none 
                                focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="">Select Category</option>
                        
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        
                            @error('category_id')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>


                        
                        <!-- Submit Button -->
                        <div>
                            <button type="submit" class="bg-blue-500 text-black font-bold py-2 px-4 rounded-md shadow-sm border border-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 hover:bg-blue-700">
                                Save
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
