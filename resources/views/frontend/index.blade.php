@extends('layouts.app')

@section('title', 'Home')

@section('container')
    <div class="w-10/12 mx-auto py-3 min-h-screen">
        <div class="flex items-center">
            <h2 class="text-3xl font-bold">151</h2>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-yellow-300 w-6 h-6">
                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
            </svg>
        </div>
        <p class="text-sm">Start Balance</p>
        <div class="py-4">
            <div class="relative">
                <div class="flex justify-around">
                    <div class="relative w-5 h-5 rounded-full bg-[#eac784]">
                        <h4 class="absolute top-6 font-bold text-sm">25</h4>
                    </div>
                    <div class="relative w-5 h-5 rounded-full bg-[#eac784]">
                        <h4 class="absolute top-6 font-bold text-sm">50</h4>
                    </div>
                    <div class="relative w-5 h-5 rounded-full bg-gray-400">
                        <h4 class="absolute top-6 font-bold text-sm">100</h4>
                    </div>
                    <div class="relative w-5 h-5 rounded-full bg-gray-400">
                        <h4 class="absolute top-6 font-bold text-sm">200</h4>
                    </div>
                </div>
                <div class="flex justify-around absolute top-0 items-center w-full h-5">
                    <div class="w-full h-1.5 z-[-1] rounded-l-lg bg-[#eac784]"></div>
                    <div class="w-full h-1.5 z-[-1] bg-[#eac784]"></div>
                    <div class="w-full h-1.5 z-[-1] bg-[#eac784]"></div>
                    <div class="w-full h-1.5 z-[-1] bg-gray-400"></div>
                    <div class="w-full h-1.5 z-[-1] bg-gray-400"></div>
                    <div class="w-full h-1.5 z-[-1] bg-gray-400"></div>
                    <div class="w-full h-1.5 z-[-1] bg-gray-400"></div>
                    <div class="w-full h-1.5 z-[-1] rounded-r-lg bg-gray-400"></div>
                </div>
            </div>
        </div>
        <div class="flex pt-5 drop-shadow-md">
            <div class="flex items-center gap-2 text-sm bg-black rounded-2xl text-white pl-5 pr-3 py-1">
                Redeem
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-yellow-300 w-4 h-4">
                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
        <div class="py-4">
            <img class="object-cover rounded-lg w-full" src="{{asset('assets/images/promo_1.jpg')}}" alt="">
        </div>
        <div>
            <h4 class="font-bold">Promo Information</h4>
            <div class="py-4 border-b-[1px] border-gray-400">
                <div class="flex">
                    <img class="w-24 h-24 object-cover rounded-md" src="{{asset('assets/images/promo_2.png')}}" alt="">
                    <div class="line-clamp-4 pl-4">
                        <h4 class="font-bold mb-2">Buy 1 Get 1 Coffee</h4>
                        <p class="text-sm">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam corrupti voluptatibus corporis asperiores quae, eius error ut quo deserunt doloribus dolores nulla? Labore numquam, laborum fuga non beatae enim perferendis.
                        </p>
                    </div>
                </div>
            </div>
            <div class="py-4 border-b-[1px] border-gray-400">
                <div class="flex">
                    <img class="w-24 h-24 object-cover rounded-md" src="{{asset('assets/images/promo_3.jpg')}}" alt="">
                    <div class="line-clamp-4 pl-4">
                        <h4 class="font-bold mb-2">Buy 1 Get 1 Coffee</h4>
                        <p class="text-sm">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam corrupti voluptatibus corporis asperiores quae, eius error ut quo deserunt doloribus dolores nulla? Labore numquam, laborum fuga non beatae enim perferendis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed w-20 h-20 rounded-full bg-[#eac784] bottom-5 right-5 flex items-center justify-center">
        <a href="{{url('/brew-coffee/signature')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
        </a>
    </div>
@endsection