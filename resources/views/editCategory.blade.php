@extends('layouts.master')

@section('content')

<div class=" fixed top-0 right-16  w-9/12  h-full  " id="createOverLay">
    <div class="mx-11 bg-white shadow-lg  rounded-md border-2 px-5 py-5 mt-10  " >
        <div class="">
            <div class=" flex justify-between">
                <h1 class=" text-xl font-semibold" id="category">Update Category</h1>
                <a href="{{ route('category') }}">
                    <button class=" hover:shadow-md " id="closeBtn">
                        <i class="fa-solid fa-xmark text-xl"></i>
                    </button>
                </a>
            </div>
            <div class=" mt-5">
                <hr class=" ">
            </div>
            <div class="">
                <form action="{{ route('category#update',$singleCat->id) }}" method="POST">
                    @csrf
                    <div class=" flex flex-row  ">
                        <div class=" flex  flex-col justify-between px-10 py-3 w-9/12">
                            <div class="flex flex-col gap-5">
                                <label for="title"  class=" text-lg text-gray-600">Category Name</label>
                                <input type="text" value="{{ $singleCat->name }}" name="categoryName" class=" outline-none border-b-2 border-b-gray-500 text-xl" placeholder="Enter category....">
                                @error('categoryName')
                                    <div class=" text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class=" mt-3 text-end">
                        <button class=" bg-purple-500 px-7 py-2 text-white" id="createBtn">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="{{ asset('js/category.js') }}" type="module"></script>

@endsection
