@extends('layouts.app')
@section('title', 'Brew Coffee')
@section('container')
@php
$left = ceil($coffees->count() / 2);
$i = 0;
@endphp

<div class="w-10/12 mx-auto relative min-h-screen">
    <div class="grid grid-cols-3 gap-2 py-5 border-b-2 border-black mb-4">
        <a href="{{url('brew-coffee/signature')}}" class="px-2 py-3 border-[1px] border-black text-center rounded-md {{Request::is('brew-coffee/signature*') ? 'bg-black text-white' : '' }}">Signature</a>
        <a href="{{url('brew-coffee/espresso')}}" class="px-2 py-3 border-[1px] border-black text-center rounded-md {{Request::is('brew-coffee/espresso') ? 'bg-black text-white' : '' }}">Espresso</a>
        <a href="{{url('brew-coffee/brewed')}}" class="px-2 py-3 border-[1px] border-black text-center rounded-md {{Request::is('brew-coffee/brewed') ? 'bg-black text-white' : '' }}">Brewed</a>
        <a href="{{url('brew-coffee/blended')}}" class="px-2 py-3 border-[1px] border-black text-center rounded-md {{Request::is('brew-coffee/blended') ? 'bg-black text-white' : '' }}">Blended</a>
    </div>
    <div class="flex gap-3 mb-4">
        <div class="flex flex-col gap-3">
            @for ($i; $i < $left; $i++)
                <a class="relative" href="{{url('/brew-coffee/order/'.$coffees[$i]->id)}}" id="order">
                    <img class="object-cover" src="{{asset($coffees[$i]->image)}}" alt="">
                    <div class="absolute bottom-0 left-0 w-full text-center bg-black py-2">
                        <h4 class="text-white text-sm">{{$coffees[$i]->name}}</h4>
                        <h4 class="text-white text-sm">{{$coffees[$i]->price}}</h4>
                    </div>
                </a>
            @endfor
        </div>
        <div class="flex flex-col gap-3">
            @for ($i; $i < $coffees->count(); $i++)
                <a class="relative" href="{{url('/brew-coffee/order/'.$coffees[$i]->id)}}" id="order">
                    <img class="object-cover" src="{{asset($coffees[$i]->image)}}" alt="">
                    <div class="absolute bottom-0 left-0 w-full text-center bg-black py-2">
                        <h4 class="text-white text-sm">{{$coffees[$i]->name}}</h4>
                        <h4 class="text-white text-sm">{{$coffees[$i]->price}}</h4>
                    </div>
                </a>
            @endfor
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    var orderLinks = document.querySelectorAll('#order');

    for (var i = 0; i < orderLinks.length; i++) {
        orderLinks[i].addEventListener('click', function(event) {
        event.preventDefault();

        Swal.fire({
            title: 'Order',
            text: 'Do you want to continue',
            icon: 'info',
            confirmButtonText: 'Buy',
            denyButtonText: 'No',
            showDenyButton: true,
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = this.getAttribute('href');
            }
        })
    });
}
    
    function confirmOrder()
    {
        
    }
</script> 
@endsection