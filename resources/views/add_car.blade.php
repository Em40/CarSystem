<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Car') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

                <form method="POST" action="/car">

                    <div class="form-group">
                        <textarea name="name" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"  placeholder='Enter a name and a type'></textarea>
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                        <textarea name="production_year" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"  placeholder='Enter a production date (YYYY-MM-DD)'></textarea>
                        @if ($errors->has('production_year'))
                            <span class="text-danger">{{ $errors->first('production_year') }}</span>
                        @endif
                        <textarea name="travelled_kilometers" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"  placeholder='Enter the travelled kilometers'></textarea>
                        @if ($errors->has('travelled_kilometers'))
                            <span class="text-danger">{{ $errors->first('travelled_kilometers') }}</span>
                        @endif
                        <textarea name="car_models_id" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"  placeholder='Enter a model ID'></textarea>
                        @if ($errors->has('car_models_id'))
                            <span class="text-danger">{{ $errors->first('car_models_id') }}</span>
                        @endif
                        <textarea name="manufacturer_id" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"  placeholder='Enter a manufacturer ID'></textarea>
                        @if ($errors->has('manufacturer_id'))
                            <span class="text-danger">{{ $errors->first('manufacturer_id') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Add Car</button>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
