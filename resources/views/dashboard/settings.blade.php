<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Site Settings') }}
            </h2>
            <a class="bg-amber-500 text-white px-2 py-1 rounded hover:bg-amber-600 duration-300"
                href="{{ route('settings') }}">All Setting</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('settings') }}" method="POST">
                        @csrf
                        @method('put')
                        {{-- Site Name --}}
                        <div>
                            <x-input-label for="site_name" :value="__('Site Name')" />
                            <x-text-input id="site_name" class="block mt-1 w-full" type="text" name="site_name"
                                :value="old('site_name')" autofocus autocomplete="site_name" />
                            <x-input-error :messages="$errors->get('site_name')" class="mt-2" />
                        </div>

                        {{-- Facebook --}}
                        <div class="mt-4">
                            <x-input-label for="facebook" :value="__('Facebook')" />
                            <x-text-input id="facebook" class="block mt-1 w-full" type="text" name="facebook"
                                :value="old('facebook')" autocomplete="facebook" />
                            <x-input-error :messages="$errors->get('facebook')" class="mt-2" />
                        </div>

                        {{-- Twitter --}}
                        <div class="mt-4">
                            <x-input-label for="twitter" :value="__('Twitter')" />
                            <x-text-input id="twitter" class="block mt-1 w-full" type="text" name="twitter"
                                :value="old('twitter')" autocomplete="twitter" />
                            <x-input-error :messages="$errors->get('twitter')" class="mt-2" />
                        </div>

                        {{-- Linkedin --}}
                        <div class="mt-4">
                            <x-input-label for="linkedin" :value="__('Linkedin')" />
                            <x-text-input id="linkedin" class="block mt-1 w-full" type="text" name="linkedin"
                                :value="old('linkedin')" autocomplete="linkedin" />
                            <x-input-error :messages="$errors->get('linkedin')" class="mt-2" />
                        </div>

                        {{-- Github --}}
                        <div class="mt-4">
                            <x-input-label for="github" :value="__('Github')" />
                            <x-text-input id="github" class="block mt-1 w-full" type="text" name="github"
                                :value="old('github')" autocomplete="github" />
                            <x-input-error :messages="$errors->get('github')" class="mt-2" />
                        </div>

                        <button
                            class="mt-4 bg-green-600 text-white rounded-md px-4 py-1 text-lg hover:bg-green-700 duration-300">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
