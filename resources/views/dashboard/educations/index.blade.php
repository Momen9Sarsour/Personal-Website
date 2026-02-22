<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Educations') }}
            </h2>
            <a class="bg-amber-500 text-white px-2 py-1 rounded hover:bg-amber-600 duration-300"
                href="{{ route('educations.create') }}">Add new
                Education</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="uppercase bg-gray-50 dark:bg-gray-700 text-black font-bold dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Collage
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Location
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Degree
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Start Date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        End Date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($educations as $edu)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                        <td class="px-6 py-4">
                                            {{ $edu->id }}
                                        </td>
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $edu->collage }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $edu->location }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $edu->degree }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $edu->start_date }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $edu->end_date }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <a class="bg-teal-500 text-white px-2 py-1 rounded hover:bg-teal-600 duration-300"
                                                href="{{ route('educations.edit', $edu->id) }}">Edit</a>
                                            <form class="inline" action="{{ route('educations.destroy', $edu->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('delete')
                                                <button onclick="return confirm('Are you Sure ?!')"
                                                    class="bg-red-500 text-white px-2 py-0.5 rounded hover:bg-red-600 duration-300">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
