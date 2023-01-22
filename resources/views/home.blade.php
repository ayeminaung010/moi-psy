<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body>

    <div class="container-fluid">
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
                        <li class=" py-4 hover:bg-purple-400 hover:text-white rounded-md font-semibold mx-10 my-2">Contact</li>
                        <li class=" py-4 hover:bg-purple-400 hover:text-white rounded-md font-semibold mx-10 my-2">Report</li>
                        <li class=" py-4 hover:bg-purple-400 hover:text-white rounded-md font-semibold mx-10 my-2">Log Out</li>
                    </ul>
                </div>
            </div>
            <div class="md:col-span-4 col-span-5  h-screen bg-gray-100 ">
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
                                        <button class=" text-white  bg-green-600 px-5 py-1 uppercase hover:bg-green-400">Add</button>
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
                                    ယခု စာမျက်နှာ သည် Lorem ipsum များကို မြန်မာ Version အနေနဲ့ ထုတ်ပေးထားခြင်းဖြစ်ပါသည်။ စာပိုဒ် (၅) ပိုဒ်ပါ၀င်ပြီး စာပိုဒ် တစ်ခုချင်းစီတွင် ၀ါကျ (၅) ခုမှ (၆) အထိပါ၀င်ပါသည်။ စာလုံးတိုင်းတွင် လူသုံးနည်းသော ပါဠိ စာတစ်၀က် နှင့် လူသုံးများသော မြန်မာစာ တစ်၀က် ပါ၀င် ပါသည်။ ပါ၀င်သော ပါဠိစာများသည် ပုံမှန် စာဖတ်သူများ အတွက် ဖတ်ရှုရန် ခက်ခဲသော စာများဖြစ်စေပါသည်။
                                </td>
                                <td class=" py-6   px-2 ">2020-5-28</td>
                                <td class=" py-6   px-2  flex gap-2 flex-col items-center justify-center text-white">
                                    <button class=" bg-green-500 py-1 px-5 hover:bg-green-400">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>
                                    <button class=" bg-red-500 py-1 px-5 hover:bg-red-400">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    {{-- over lay  --}}
                    <div class="mx-11 bg-white shadow-2xl border-gray-500 border-2 px-5 py-5 mt-10">
                        <div class="">
                            <div class=" flex justify-between">
                                <h1 class=" text-xl">Create News</h1>
                                <button class=" hover:shadow-md ">
                                    <i class="fa-solid fa-xmark text-xl"></i>
                                </button>
                            </div>
                            <div class=" mt-5">
                                <hr class=" ">
                            </div>
                            <div class=" flex flex-row  ">
                                <div class="flex flex-col gap-2 px-10 py-3">
                                    <img src="{{ asset('image/moi_mm.jpg') }}" class=" h-40 " alt="">
                                    <input type="file" class=" hidden" >
                                    <button class=" bg-purple-500 text-white px-5 py-3 ">Upload File</button>
                                </div>
                                <div class=" flex  flex-col justify-between px-10 py-3 w-9/12">
                                    <div class="flex flex-col gap-5">
                                        <label for="title" class=" text-xl">Title</label>
                                        <input type="text" class=" outline-none border-b-2 border-b-gray-600">
                                    </div>
                                    <div class="flex flex-col gap-5 ">
                                        <label for="title" class=" text-xl">Category</label>
                                        <input type="text" class=" outline-none border-b-2 border-b-gray-600">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
