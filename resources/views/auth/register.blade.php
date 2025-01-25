@extends('layouts.layout')
@section('content')
    <div class="p-8 w-screen h-screen  bg-linear-to-br from-navy to-forest  flex flex-col justify-center items-center">
        <div class="bg-navy min-w-md px-10 h-">

            <form action="" class="mx-auto " method="POST">
                @csrf
                <x-form-input name="" label="" type="" />
                <x-form-input name="" label="" type="" />
            </form>
        </div>
    </div>
@endsection
