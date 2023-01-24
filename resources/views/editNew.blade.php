@extends('layouts.master')

@section('content')

{{-- over lay  --}}
<div class=" fixed top-0 right-16  w-9/12  h-full  " id="overLay">
    <div class="mx-11 bg-white shadow-lg  rounded-md border-2 px-5 py-5 mt-10  " >
        <div class="">
            <div class=" flex justify-between">
                <h1 class=" text-xl">Edit News</h1>
                <button class=" hover:shadow-md " id="closeBtn">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </button>
            </div>
            <div class=" mt-5">
                <hr class=" ">
            </div>
            <div class="">
                <form action="{{ route('news#update',$new->id) }}" enctype='multipart/form-data'  method="POST">
                    @csrf
                    <div class=" flex flex-row  ">
                        <div class="flex flex-col gap-2 px-10 py-3">
                            <img src="{{ Cloudinary::getUrl($new->photo) }}"  class=" h-40 " id="previewImg" alt="">

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
                                <input type="text" name="title" value="{{ $new->title }}" placeholder="Enter Title" class=" outline-none border-b-2 border-b-gray-500">
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
                                        <option value="{{ $category->id }}" {{ $new->category_id === $category->id ? "selected": "" }}  >{{ $category->name }}</option>
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
                                    <option value="{{ $location->id }}" {{ $new->location_id === $location->id ? "selected": "" }} >{{ $location->name }}</option>
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
                        <textarea name="description" id="" cols="150" class=" outline-none border-b-2  border-b-gray-500 " rows="10" placeholder="Enter ">{{ $new->description }}</textarea>
                        @error('description')
                            <div class=" text-red-500">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class=" mt-3 text-end">
                        <button type="submit" class=" bg-purple-500 px-7 py-2 text-white">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="{{ asset('js/editHome.js') }}" type="module"></script>

@endsection
