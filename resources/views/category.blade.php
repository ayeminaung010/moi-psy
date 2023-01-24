@extends('layouts.master')

@section('content')
@include('sweetalert::alert')
<div class="md:col-span-4 col-span-5  h-screen overflow-scroll overflow-x-hidden bg-gray-100 " id="container">
    <div class=" flex  flex-col mx-10">
        <div class=" py-6 ">
            <div class=" text-xl text-gray-500">
                <h1>Category</h1>
            </div>
        </div>
    </div>

    <div class="flex  flex-col mx-10 bg-white mt-5 shadow-md rounded">
        <div class=" flex  flex-col mx-11 -mt-10">
            {{-- header  --}}
            <div class=" py-6 ">
                <div class=" text-lg">
                    <div class=" flex justify-between bg-purple-500 px-10 py-6 rounded">
                        <div class="">
                            <button class=" text-white  bg-green-600 px-5 py-1 uppercase hover:bg-green-400 " id="addBtn">Add Category</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- table  --}}
        @if (count($categories) !== 0)
        <table>
            <thead class="">
                <tr class=" text-purple-400 ">
                    <th class=" px-10   font-semibold text-lg">No</th>
                    <th class=" px-10 text-start font-semibold text-lg">Category</th>
                    <th class=" px-10   font-semibold text-lg">Created date</th>
                    <th class=" px-10   font-semibold text-lg">Updated date</th>
                    <th class=" px-10   font-semibold text-lg">Action</th>
                </tr>
            </thead>
            <tbody class=" ">
                @foreach ($categories as $category )
                <tr class=" text-center border-t-gray-300 border-t-2">
                    <td class=" py-6  px-2">{{ $category->id }}</td>
                    <td class=" py-6 px-3  text-justify " >
                       {{ $category->name }}
                    </td>
                    <td class=" py-6   px-2 ">{{ $category->created_at->format('d-m-Y') }}</td>
                    <td class=" py-6   px-2 ">{{ $category->updated_at->diffForHumans() }}</td>
                    <td class=" py-6   px-2  flex gap-2  items-center justify-center text-white">
                        <a href="{{ route("category#edit",$category->id) }}">
                            <button class=" bg-green-500 py-1 px-5 hover:bg-green-400" id="editBtn">
                                <i class="fa-solid fa-pen"></i>
                            </button>
                        </a>
                        <a href="{{ route("category#delete",$category->id) }}">
                            <button class=" bg-red-500 py-1 px-5 hover:bg-red-400" id="deleteBtn">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
            <div class="">
                <h1 class=" text-xl text-gray-600 font-light text-center">There is no Category Here</h1>
            </div>
        @endif
    </div>
</div>

{{-- create over lay  --}}
<div class=" fixed top-0 right-16  w-9/12  h-full hidden " id="createOverLay">
    <div class="mx-11 bg-white shadow-lg  rounded-md border-2 px-5 py-5 mt-10  " >
        <div class="">
            <div class=" flex justify-between">
                <h1 class=" text-xl font-semibold" id="category">Create Category</h1>
                <button class=" hover:shadow-md " id="closeBtn">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </button>
            </div>
            <div class=" mt-5">
                <hr class=" ">
            </div>
            <div class="">
                <form action="{{ route('category#create') }}" method="POST">
                    @csrf
                    <div class=" flex flex-row  ">
                        <div class=" flex  flex-col justify-between px-10 py-3 w-9/12">
                            <div class="flex flex-col gap-5">
                                <label for="title"  class=" text-lg text-gray-600">Category Name</label>
                                <input type="text" name="categoryName" class=" outline-none border-b-2 border-b-gray-500 text-xl" placeholder="Enter category....">
                                @error('categoryName')
                                    <div class=" text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class=" mt-3 text-end">
                        <button class=" bg-purple-500 px-7 py-2 text-white" id="createBtn">Create</button>
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
