<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Car') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

                <form method="POST" action="/car/{{ $car->id }}">

                    <div class="form-group">
                        <textarea name="manufacturer_id" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">{{$car->manufacturer_id}}</textarea>
                        @if ($errors->has('manufacturer_id'))
                            <span class="text-danger">{{ $errors->first('manufacturer_id') }}</span>
                        @endif
                        <textarea name="car_models_id" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">{{$car->car_models_id}}</textarea>
                        @if ($errors->has('car_models_id'))
                            <span class="text-danger">{{ $errors->first('car_models_id') }}</span>
                        @endif
                        <textarea name="production_year" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">{{$car->production_year}}</textarea>
                        @if ($errors->has('production_year'))
                            <span class="text-danger">{{ $errors->first('production_year') }}</span>
                        @endif
                        <textarea name="travelled_kilometers" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">{{$car->travelled_kilometers}}</textarea>
                        @if ($errors->has('travelled_kilometers'))
                            <span class="text-danger">{{ $errors->first('travelled_kilometers') }}</span>
                        @endif
                        <textarea name="name" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">{{$car->name}}</textarea>
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" name="update" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Update car</button>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
