<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add new Experiences') }}
            </h2>
            <a class="bg-amber-500 text-white px-2 py-1 rounded" href="{{ route('experiences.index') }}">All
                Experiences</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="w-full overflow-x-auto">
                            <h2 class="text-2xl font-bold mb-6 text-gray-800">Add Experience</h2>

                            <form action="{{ route('experiences.store') }}" method="post" class="space-y-6">
                                @csrf
                                <!-- Title -->
                                <div>
                                    <x-input-label for="title" :value="__('Title')" />
                                    <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                                        :value="old('title')" required autofocus autocomplete="title"
                                        placeholder="Enter title" />
                                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                </div>

                                <!-- Company -->
                                <div class="mt-4">
                                    <x-input-label for="company" :value="__('Company')" />
                                    <x-text-input id="company" class="block mt-1 w-full" type="text" name="company"
                                        :value="old('company')" required autofocus autocomplete="company"
                                        placeholder="Enter company name" />
                                    <x-input-error :messages="$errors->get('company')" class="mt-2" />
                                </div>

                                <!-- Location -->
                                <div class="mt-4">
                                    <x-input-label for="location" :value="__('Location')" />
                                    <x-text-input id="location" class="block mt-1 w-full" type="text"
                                        name="location" :value="old('location')" required autofocus autocomplete="location"
                                        placeholder="Enter Location" />
                                    <x-input-error :messages="$errors->get('location')" class="mt-2" />
                                </div>

                                <!-- Start Date -->
                                <div class="mt-4">
                                    <x-input-label for="start_date" :value="__('Start Date')" />
                                    <x-text-input id="start_date" class="block mt-1 w-full" type="date"
                                        name="start_date" :value="old('start_date')" required autofocus
                                        autocomplete="start_date" placeholder="Enter start date" />
                                    <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
                                </div>

                                <!-- End Date -->
                                <div class="mt-4">
                                    <x-input-label for="end_date" :value="__('End Date')" />
                                    <x-text-input id="end_date" class="block mt-1 w-full" type="date"
                                        name="end_date" :value="old('end_date')" required autofocus autocomplete="end_date"
                                        placeholder="Enter end date" />
                                    <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
                                </div>

                                <!-- Description -->
                                <div class="mt-4">
                                    <x-input-label for="description" :value="__('Description')" />
                                    <x-text-area id="description" class="block mt-1 w-full" type="text"
                                        name="description" required autofocus autocomplete="description" rows=5
                                        placeholder="Enter description">{{ old('description') }}</x-text-area>
                                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                </div>

                                <!-- Buttons -->
                                <div class="flex justify-end gap-4">
                                    <button type="reset"
                                        class="px-6 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">
                                        Cancel
                                    </button>

                                    <button type="submit"
                                        class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-800 duration-300 transition shadow">
                                        Save
                                    </button>
                                </div>

                            </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
