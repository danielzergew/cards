@extends('master')

@section('top')
    <div class="h-fit flex justify-center items-center py-10">
        <h1 class="text-center text-7xl uppercase font-bold h-fit text-white">The Most expensive foods in the world</h1>
    </div>
@endsection

@section('body')
    <div class="justify-center flex flex-wrap gap-10
    ">
        @for ($i = 0; $i < count($product); $i++)
            <?php $color = '' ?>
            @switch($product[$i]["Status"])
                @case('R')
                    <?php $color = 'bg-slate-500' ?>
                    @break
                @case('SR')
                    <?php $color = 'bg-yellow-600' ?>
                    @break
                @case('SSR')
                    <?php $color = 'bg-red-700' ?>
                    @break
            @endswitch
                <a href="/cards/{{ $i }}" class="group">
                    <div class="{{ $color }} w-80 aspect-[3/4] rounded-2xl text-white flex flex-col justify-between relative shadow-md duration-500 ease-out group-hover:scale-95">
                        <div class="flex gap-5 z-10 p-5">
                            <p class="w-fit font-bold text-6xl italic">
                                {{ $product[$i]["Status"] }}
                            </p>
                            <p class="h-fit self-center text-3xl font-semibold">
                                {{ $product[$i]["Name"] }}
                            </p>
                        </div>
                        <div class="w-full h-[70%] overflow-hidden">
                            <div class="w-full h-full bg-cover bg-center duration-500 ease-out group-hover:scale-[120%]" style="background-image: url('images/{{ $i }}.jpg')">
                            </div>
                        </div>
                        <div class="z-10 p-5 flex flex-col gap-3">
                            <p class="italic font-light">
                                {{ $product[$i]["Desc"] }}
                            </p>
                            <p class="text-right font-bold italic">
                                Price: {{ $product[$i]["Price"] }}
                            </p>
                        </div>
                    </div>
                </a>
        @endfor
    </div>
@endsection
