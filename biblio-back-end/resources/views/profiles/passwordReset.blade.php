@extends('layouts.layout')
@section('content')
    <section class="bg-white dark:bg-gray-900 flex-1">
        <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Update password</h2>
            <form action="{{ route('updatePassword') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                    <div class="sm:col-span-2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Old Password</label>
                        <input type="password" name="old_password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-2 dark:focus:ring-accent-500 dark:border-none dark:outline-none caret-secondary-500">
                        <p class=" h-2 text-red-500 font-semibold text-md mt-1">
                            @error('old_password')
                                {{ $message }}
                            @enderror
                        </p>
                    </div>
                    <div class="sm:col-span-2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Password</label>
                        <input type="password" name="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-2 dark:focus:ring-accent-500 dark:border-none dark:outline-none caret-secondary-500">
                        <p class=" h-2 text-red-500 font-semibold text-md mt-1">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </p>
                    </div>
                    <div class="sm:col-span-2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm New Password</label>
                        <input type="password" name="password_confirmation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-2 dark:focus:ring-accent-500 dark:border-none dark:outline-none caret-secondary-500">
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
