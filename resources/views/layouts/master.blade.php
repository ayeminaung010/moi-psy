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
            @yield('content')
        </div>
    </div>


</body>
<script src="{{ asset('js/home.js') }}" type="module"></script>
{{-- <script src="{{ asset('../resources/js/app.js') }}"></script> --}}
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@yield('script')
</html>
