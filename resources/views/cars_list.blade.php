<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cars') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <div class="flex">
                    <div class="flex-auto text-2xl mb-4">Cars List</div>

                    <div class="flex-auto text-right mt-2">
                        <a href="/car" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Add Car</a>
                    </div>

                    <div class="col-md-4" style="margin-left: auto; margin-right: 5px;">
                        <form action="/search" method="get">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input type="search" name="search" class="form-control">
                                <span class="input-group-prepend">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <table class="w-full text-md rounded mb-4">
                    <thead>
                    <tr class="border-b">
                        <th class="text-left p-3 px-5">Manufacturer</th>
                        <th class="text-left p-3 px-5">Model</th>
                        <th class="text-left p-3 px-5">Production date</th>
                        <th class="text-left p-3 px-5">Travelled kilometers</th>
                        <th class="text-left p-3 px-5">Type</th>
                        <th class="text-left p-3 px-5">Actions</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cars as $car)
                        <tr class="border-b hover:bg-orange-100">
                            <td class="p-3 px-5">
                                {{$car->manufacturer->name}}
                            </td>
                            <td class="p-3 px-5">
                                {{$car->carmodel->name}}
                            </td>
                            <td class="p-3 px-5">
                                {{$car->production_year}}
                            </td>
                            <td class="p-3 px-5">
                                {{$car->travelled_kilometers}}
                            </td>
                            <td class="p-3 px-5">
                                {{$car->name}}
                            </td>
                            <td class="p-3 px-5">

                                <a href="/car/{{$car->id}}" name="edit" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-black py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
                                <form action="/car/{{$car->id}}" class="inline-block">
                                    <button type="submit" name="delete" formmethod="POST" class="text-sm bg-red-500 hover:bg-red-700 text-black py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                                    {{ csrf_field() }}
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
