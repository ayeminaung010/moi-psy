<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite('resources/css/app.css')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
</head>
<body class=" selection:bg-purple-400">

    <div class="container-fluid " >
        <div class=" grid grid-cols-5 ">
            <div class="md:col-span-1 hidden md:block  h-screen shadow-xl dark:bg-gray-800 dark:text-white">
                <div class="logo">
                    <img src="{{ asset('image/moi_mm.jpg') }}" alt="">
                </div>
                <div class="">
                    <hr>
                </div>
                <div class="">
                    <ul class=" text-center text-gray-800 dark:text-white">
                        <li class=" py-4 hover:bg-purple-400 hover:text-white rounded-md font-semibold mx-10 my-2">Dashboard</li>
                        <li class=" py-4 hover:bg-purple-400 hover:text-white rounded-md font-semibold mx-10 my-2">Category</li>
                        <li class=" py-4 hover:bg-purple-400 hover:text-white rounded-md font-semibold mx-10 my-2">Report</li>
                        <li class=" py-4 hover:bg-purple-400 hover:text-white rounded-md font-semibold mx-10 my-2">Log Out</li>
                    </ul>
                </div>
            </div>
            <div class="md:col-span-4 col-span-5  h-screen overflow-scroll overflow-x-hidden bg-gray-100 " id="container">
                <div class=" flex  flex-col mx-10">
                    <div class=" py-6 ">
                        <div class=" text-xl">
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
                                        <button class=" text-white  bg-blue-600  px-5 py-1 uppercase hover:bg-blue-400">Important News</button>
                                        <button class=" bg-white text-gray-700 px-5 py-1 uppercase hover:bg-gray-200">Normal News</button>
                                    </div>
                                    <div class="">
                                        <button class=" text-white  bg-green-600 px-5 py-1 uppercase hover:bg-green-400 " id="addBtn">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- table  --}}
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
                            <tr class=" text-center border-t-gray-300 border-t-2">
                                <td class=" py-6  px-2  ">1</td>
                                <td class=" py-6   px-2 ">
                                    <div class=" flex justify-center items-center">
                                        <img src="{{ asset('image/moi_mm.jpg') }}" class=" w-50 h-16" alt="">
                                    </div>
                                </td>
                                <td class=" py-6 px-3  text-justify " colspan="2">
                                    ????????? ??????????????????????????? ????????? Lorem ipsum ????????????????????? ?????????????????? Version ?????????????????? ??????????????????????????????????????????????????????????????????????????? ????????????????????? (???) ?????????????????????????????????????????? ????????????????????? ???????????????????????????????????????????????? ???????????? (???) ???????????? (???) ?????????????????????????????????????????? ???????????????????????????????????????????????? ??????????????????????????????????????? ???????????? ???????????????????????? ??????????????? ??????????????????????????????????????? ???????????????????????? ?????????????????? ??????????????? ?????????????????? ???????????????????????? ??????????????????????????????????????? ????????????????????? ????????????????????????????????? ??????????????? ??????????????????????????? ???????????????????????? ??????????????????????????????????????????????????????
                                </td>
                                <td class=" py-6   px-2 ">2020-5-28</td>
                                <td class=" py-6   px-2  flex gap-2 flex-col items-center justify-center text-white">
                                    <button class=" bg-green-500 py-1 px-5 hover:bg-green-400" id="editBtn">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>
                                    <button class=" bg-red-500 py-1 px-5 hover:bg-red-400" id="deleteBtn">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

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
                            <form action="">
                                <div class=" flex flex-row  ">
                                    <div class="flex flex-col gap-2 px-10 py-3">
                                        <img src="{{ asset('image/uploadImg.png') }}" class=" h-40 " id="previewImg" alt="">
                                        <div class="">
                                            <span id="fileValue" class=" text-lg text-gray-600"></span>
                                        </div>
                                        <input type="file" class=" hidden" id="fileInput" >
                                        <button class=" bg-purple-500 text-white px-5 py-3 " id="uploadFile">Upload File</button>
                                    </div>
                                    <div class=" flex  flex-col justify-between px-10 py-3 w-9/12">
                                        <div class="flex flex-col gap-5">
                                            <label for="title" class=" text-xl">Title</label>
                                            <input type="text" class=" outline-none border-b-2 border-b-gray-500">
                                        </div>
                                        <div class="flex flex-col gap-5 ">
                                            <label for="title" class=" text-xl">Category</label>
                                            {{-- <input type="text" class=" outline-none border-b-2 border-b-gray-600"> --}}
                                            <select name="" id="" class=" py-2 outline-none border-b-2 border-b-gray-500">
                                                <option value="" class="">Choose Category</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class=" mt-10">
                                    <div id="summernote" class=" "></div>
                                </div>
                                <div class=" mt-3 text-end">
                                    <button class=" bg-purple-500 px-7 py-2 text-white">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
<script src="{{ asset('js/home.js') }}" type="module"></script>
{{-- <script src="{{ asset('../resources/js/app.js') }}"></script> --}}
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            placeholder: 'Detail',
            tabsize: 2,
            height: 100
          });
    });

</script>
</html>
