@extends('master')

@section('body')
    <?php $color = '' ?>
    <?php $rarity = '' ?>
    @switch($product["Status"])
        @case('R')
            <?php $color = 'bg-slate-500' ?>
            <?php $rarity = 'Rare' ?>
            @break
        @case('SR')
            <?php $color = 'bg-yellow-600' ?>
            <?php $rarity = 'Super Rare' ?>
            @break
        @case('SSR')
            <?php $color = 'bg-red-700' ?>
            <?php $rarity = 'Super Super Rare' ?>
            @break
    @endswitch
    <div class="fixed w-full h-full flex flex-col justify-center items-center text-white gap-5">
        <div class="{{ $color }} h-fit rounded-2xl flex relative shadow-md duration-500 ease-out group hover:scale-95 overflow-hidden">
            <div class="overflow-hidden">
                <img src="{{ asset('images/'.$id.'.jpg') }}" class="duration-500 ease-out group-hover:scale-110">
            </div>
            <div class="flex flex-col w-80 p-5 gap-3">
                <p class="w-fit font-bold text-6xl italic">
                    {{ $rarity }}
                </p>
                <p class="h-fit text-left text-3xl font-semibold">
                    {{ $product["Name"] }}
                </p>
                <p class="italic font-light">
                    {{ $product["Desc"] }}
                </p>
                <p class="text-right font-bold italic">
                    Price: {{ $product["Price"] }}
                </p>
            </div>
        </div>
        <div class="text-xl uppercase rounded-full py-2 px-3 duration-300 hover:text-[#2D2727] hover:bg-white hover:scale-105 hover:-translate-y-1">
            <a href="/cards">back to food list</a>
        </div>
    </div>
@endsection
