@extends('layouts.master')

@section('content')

@include('sweetalert::alert')
<div class="md:col-span-4 col-span-5  h-screen overflow-scroll overflow-x-hidden bg-gray-100 " id="container">
    <div class=" flex  flex-col mx-10">
        <div class=" py-6 ">
            <div class=" text-xl text-gray-500">
                <h1>News</h1>
            </div>
        </div>
    </div>

    <div class="flex  flex-col mx-10 bg-white mt-5 shadow-md rounded">
        <div class=" flex  flex-col mx-11 -mt-10">
            {{-- header  --}}
            <div class=" py-6 ">
                <div class=" text-lg">
                    <div class=" flex justify-between bg-purple-500 px-10 py-6 rounded">
                        <div class=" flex ">
                            @foreach ($categories as $c )
                                <button class=" text-white  bg-blue-600  px-5 py-1 uppercase hover:bg-blue-400">{{ $c->name }}</button>
                            @endforeach
                        </div>
                        <div class="">
                            <button class=" text-white  bg-green-600 px-5 py-1 uppercase hover:bg-green-400 " id="addBtn">Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- table  --}}
        @if ( count($news) !== 0)
        <table>
            <thead class="">
                <tr class=" text-purple-400 ">
                    <th class=" px-10   font-semibold text-lg">No</th>
                    <th class=" px-10   font-semibold text-lg">Photo</th>
                    <th class=" px-10 text-start font-semibold text-lg">Title</th>
                    <th class=" "></th>
                    <th class=" px-10   font-semibold text-lg">Created date</th>
                    <th class=" px-10   font-semibold text-lg">Action</th>
                </tr>
            </thead>
            <tbody class=" ">
               @foreach ($news  as $new)
               <tr class=" text-center border-t-gray-300 border-t-2">
                    <td class=" py-6  px-2  ">{{ $new->id }}</td>
                    <td class=" py-6   px-2 ">
                        <div class=" flex justify-center items-center">
                            <img src="{{ Cloudinary::getUrl($new->photo) }}" class=" w-50 h-16" alt="">
                        </div>
                    </td>
                    <td class=" py-6 px-3  text-justify " colspan="2">
                        {{ $new->title }}
                    </td>
                    <td class=" py-6   px-2 ">{{ $new->created_at->format('d-m-Y') }}</td>
                    <td class=" py-6   px-2  flex gap-2 flex-col items-center justify-center text-white">
                        <a href="{{ route('news#edit', $new->id) }}">
                            <button class=" bg-green-500 py-1 px-5 hover:bg-green-400" id="editBtn">
                                <i class="fa-solid fa-pen"></i>
                            </button>
                        </a>
                        <a href="{{ route('news#delete', $new->id) }}">
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
            <h1 class=" text-xl text-gray-600 font-light text-center">There is no News Here</h1>
        </div>
        @endif

    </div>
</div>
{{-- over lay  --}}
<div class=" fixed top-0 right-16  w-9/12  h-full hidden " id="overLay">
    <div class="mx-11 bg-white shadow-lg  rounded-md border-2 px-5 py-5 mt-10  " >
        <div class="">
            <div class=" flex justify-between">
                <h1 class=" text-xl">Create News</h1>
                <button class=" hover:shadow-md " id="closeBtn">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </button>
            </div>
            <div class=" mt-5">
                <hr class=" ">
            </div>
            <div class="">
                <form action="{{ route('news#create') }}" enctype='multipart/form-data'  method="POST">
                    @csrf
                    <div class=" flex flex-row  ">
                        <div class="flex flex-col gap-2 px-10 py-3">
                            <img src="{{ asset('image/uploadImg.png') }}"  class=" h-40 " id="previewImg" alt="">

                            <input type="file" class=" hidden" name='photo' id="fileInput">
                            <button class=" bg-purple-500 text-white px-5 py-3 " id="uploadFile">Upload File</button>
                            <div class="">
                                <span id="fileValue" class=" text-lg text-gray-600"></span>
                                @error('photo')
                                    <div class=" text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class=" flex  flex-col justify-between px-10 py-3 w-9/12">
                            <div class="flex flex-col gap-5">
                                <label for="title" class=" text-xl">Title</label>
                                <input type="text" name="title" value="{{ old('title') }}" placeholder="Enter Title" class=" outline-none border-b-2 border-b-gray-500">
                                @error('title')
                                    <div class=" text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="flex flex-col gap-5 ">
                                <label for="category" class=" text-xl">Category</label>
                                {{-- <input type="text" class=" outline-none border-b-2 border-b-gray-600"> --}}
                                <select  id="" name="categoryId" class=" py-2 outline-none border-b-2 border-b-gray-500">
                                    <option value="" >Choose Category</option>
                                    @foreach ( $categories as  $category)
                                        <option value="{{ $category->id }}" {{ old("categoryName") === $category->id ? "selected": "" }}  >{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('categoryId')
                                    <div class=" text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        </div>
                    </div>
                    <div class=" my-4">
                        <div class="flex flex-col gap-5 ">
                            <label for="location" class=" text-xl">Location</label>
                            {{-- <input type="text" class=" outline-none border-b-2 border-b-gray-600"> --}}
                            <select  id="" name="locationId" class=" py-2 outline-none border-b-2 border-b-gray-500">
                                <option value="" class="">Choose Location</option>
                                @foreach ($locations as $location )
                                    <option value="{{ $location->id }}" {{ (old("location") === $location->id ? "selected": "") }} >{{ $location->name }}</option>
                                @endforeach
                            </select>
                            @error('locationId')
                                <div class=" text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class=" ">
                        <textarea name="description" id="" cols="150" class=" outline-none border-b-2  border-b-gray-500 " rows="10" placeholder="Enter "></textarea>
                        @error('description')
                            <div class=" text-red-500">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class=" mt-3 text-end">
                        <button type="submit" class=" bg-purple-500 px-7 py-2 text-white">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/home.js') }}" type="module"></script>

@endsection
