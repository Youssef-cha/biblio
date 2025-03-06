@extends('layouts.layout')
@section('content')
    <div
        class="p-8 w-screen h-screen  bg-linear-to-t from-primary-700 to-primary-500  flex flex-col justify-center items-center">
        <div
            class="bg-primary-500 flex flex-col items-center space-y-4 py-10 min-w-lg px-19 h-9/10 shadow-lg shadow-black rounded-lg">
            <h2 class="font-bold text-white text-2xl">Register</h2>
            <form action="/register" class="w-full" method="POST">
                @csrf
                <x-form-input name="name" label="User Name" />
                <x-form-input name="email" label="Email" type="email" />
                <x-form-input name="password" label="Password" type="password" />
                <x-form-input name="password_confirmation" label="Confirm Password" type="password" />
                <button type="submit"
                    class="w-full cursor-pointer text-white bg-gradient-to-r from-secondary-200 via-secondary-500 to-secondary-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-accent-600 shadow-lg shadow-teal-500/50 dark:shadow-lg dark:shadow-teal-800/80 font-medium rounded-lg text-md px-5 py-2.5 text-center me-2 mb-2 ">Register</button>
                <div>
                    <p class="dark:text-white">already have an account ? <a href="/login"
                            class="font-bold underline underline-offset-3 decoration-accent-400  cursor-pointer">login
                            now</a></p>
                </div>
            </form>
        </div>
    </div>
@endsection
