@extends('layouts.layout')
@section('content')
    <section class="bg-white dark:bg-gray-900 flex-1">
        <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Update product</h2>
            <form action="{{ route('profiles.update') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User
                            Name</label>
                        <input type="text" name="name" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-2 dark:focus:ring-accent-500 dark:border-none dark:outline-none caret-secondary-500"
                            value="{{ (old('name') ?? Auth::user()->name) }}">
                            <p class=" h-2 text-red-500 font-semibold text-md mt-1">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </p>
                    </div>
                    <div class="w-full">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">email</label>
                        <input type="text" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-2 dark:focus:ring-accent-500 dark:border-none dark:outline-none caret-secondary-500"
                            value="{{ (old('email') ?? Auth::user()->email) }}" placeholder="">
                            <p class=" h-2 text-red-500 font-semibold text-md mt-1">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </p>
                    </div>
                    <div class="w-full">
                        <label for="tel"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tel</label>
                        <input type="number" name="tel" id="tel"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-2 dark:focus:ring-accent-500 dark:border-none dark:outline-none caret-secondary-500"
                            value="{{ (old('tel') ?? Auth::user()->tel) }}">
                            <p class=" h-2 text-red-500 font-semibold text-md mt-1">
                                @error('tel')
                                    {{ $message }}
                                @enderror
                            </p>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="bio"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">bio</label>
                        <textarea name="bio" id="bio" rows="8"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-2 dark:focus:ring-accent-500 dark:border-none dark:outline-none caret-secondary-500">{{ (old('bio') ?? Auth::user()->bio) }}</textarea>
                            <p class=" h-2 text-red-500 font-semibold text-md mt-1">
                                @error('bio')
                                    {{ $message }}
                                @enderror
                            </p>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <button type="submit"
                        class="text-white px-3 py-2 bg-secondary-500 rounded w-20 hover:bg-secondary-600 transition cursor-pointer  ">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
