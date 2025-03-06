@extends('layouts.layout')
@section('content')
    <!-- component -->
    <div class=" bg-primary-500 flex justify-center items-center h-screen">
        <!-- Left: Image -->
        <div class="w-1/2 h-screen hidden lg:block">
            <img src="{{ asset('images/biblio.jpeg') }}" alt="Placeholder Image" class="object-cover w-full h-full">
        </div>
        <!-- Right: Login Form -->
        <div class= "lg:p-36 md:p-52 sm:20 p-8 w-full flex-col lg:w-1/2">
            <div class="flex flex-col space-y-10 items-center w-full mx-auto max-w-sm">
                <h2 class="text-3xl font-bold dark:text-white">Login</h2>
                <form method="POST" action="{{ route('login') }}" class="w-full">
                    @csrf
                    <x-form-input label="email" name="email" />
                    <x-form-input type="password" label="password" name="password" />
                    <div class="flex items-start mb-5">
                        <div class="flex items-center h-5">
                            <input name="remember" id="remember" type="checkbox" value=""
                                class="w-4 h-4 accent-secondary-400  " />
                        </div>
                        <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                    </div>
                    <button type="submit" class="w-full  cursor-pointer text-white bg-gradient-to-r from-secondary-200 via-secondary-500 to-secondary-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-accent-600 shadow-lg shadow-teal-500/50 dark:shadow-lg dark:shadow-teal-800/80 font-medium rounded-lg text-md px-5 py-2.5 text-center me-2 mb-2 ">Login</button>
                    <div>
                        <p class="dark:text-calm-400">don't you have an account ? <a href="/register" class="font-bold underline underline-offset-3 decoration-accent-400  cursor-pointer">create an account</a></p>
                    </div>
                </form>
            </div>
        </div>
    @endsection
