<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Education') }}
            </h2>
            <a class="bg-amber-500 text-white px-2 py-1 rounded hover:bg-amber-600 duration-300"
                href="{{ route('educations.index') }}">All Educations</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('educations.update', $education->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div>
                            <x-input-label for="collage" :value="__('Collage')" />
                            <x-text-input id="collage" class="block mt-1 w-full" type="text" name="collage"
                                :value="old('collage', $education->collage)" required autofocus autocomplete="collage" />
                            <x-input-error :messages="$errors->get('collage')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="location" :value="__('Location')" />
                            <x-text-input id="location" class="block mt-1 w-full" type="text" name="location"
                                :value="old('location', $education->location)" required autofocus autocomplete="location" />
                            <x-input-error :messages="$errors->get('location')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="degree" :value="__('Degree')" />
                            <x-text-input id="degree" class="block mt-1 w-full" type="text" name="degree"
                                :value="old('degree', $education->degree)" required autofocus autocomplete="degree" />
                            <x-input-error :messages="$errors->get('degree')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="start_date" :value="__('Start Date')" />
                            <x-text-input id="start_date" class="block mt-1 w-full" type="date" name="start_date"
                                :value="old('start_date', $education->start_date)" required autofocus autocomplete="start_date" />
                            <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="end_date" :value="__('End Date')" />
                            <x-text-input id="end_date" class="block mt-1 w-full" type="date" name="end_date"
                                :value="old('end_date', $education->end_date)" required autofocus autocomplete="end_date" />
                            <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="description" :value="__('Description')" />
                            <x-text-area id="description" class="block mt-1 w-full" type="date" name="description"
                                required autofocus autocomplete="description"
                                rows="5">{{ old('description', $education->description) }}</x-text-area>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>
                        <button
                            class="mt-4 bg-blue-600 text-white rounded-md px-4 py-1 text-lg hover:bg-blue-700 duration-300">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
