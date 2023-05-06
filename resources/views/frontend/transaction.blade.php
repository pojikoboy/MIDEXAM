@extends('layouts.app')

@section('title', 'Transactions')

@section('container')
<div class="w-10/12 mx-auto py-4 min-h-screen">
    <h4 class="text-2xl font-bold mb-3">Transaction</h4>
    @forelse($transactions as $item)
    <div class="py-4 border-b-[1px] border-gray-400 rounded-md">
        <div class="flex">
            <img class="w-24 h-24 object-cover" src="{{asset($item->coffee->image)}}" alt="">
            <div class="line-clamp-4 pl-4 flex flex-col gap-2">
                <h4 class="font-bold text-lg">{{$item->coffee->name}}</h4>
                <h4 class="font-bold text-sm">Price: {{$item->coffee->price}}</h4>
                <h4 class="font-bold text-sm text-gray-400">Date: {{$item->created_at->format('d M Y')}}</h4>
            </div>
        </div>
    </div>
    @empty
    <div class="flex">
        <h4 class="text-center">No Transaction</h4>
    </div>
    @endforelse
</div>
@endsection