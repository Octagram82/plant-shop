@extends('layout.main')

@section('content')
    {{-- Background --}}
    <img src="/bg.jpg" alt="background">
    <div class="container mx-auto mt-5 space-y-10">
      {{-- See all Button --}}
      <div class="flex justify-end">
        <a href="" class="text-[#3B823E]"><span class="underline">See all</span> &rarr;</a>
      </div>
      {{-- Best plant for sale--}}
      <div class="grid grid-cols-6 gap-4">
        <div class="flex flex-col items-center space-y-4">
            <div class="w-[180px] aspect-square bg-slate-600 rounded-full shadow-md">
              {{-- Masukan gambar disini --}}
            </div>
            <h2 class="font-bold text-base text-[#343434] uppercase tracking-widest">Cactus</h2>
        </div>
        <div class="flex flex-col items-center space-y-4">
          <div class="w-[180px] aspect-square bg-slate-600 rounded-full shadow-md">
            {{-- Masukan gambar disini --}}
          </div>
          <h2 class="font-bold text-base text-[#343434] uppercase tracking-widest">Cactus</h2>
        </div>
        <div class="flex flex-col items-center space-y-4">
            <div class="w-[180px] aspect-square bg-slate-600 rounded-full shadow-md">
              {{-- Masukan gambar disini --}}
            </div>
            <h2 class="font-bold text-base text-[#343434] uppercase tracking-widest">Cactus</h2>
        </div>
        <div class="flex flex-col items-center space-y-4">
          <div class="w-[180px] aspect-square bg-slate-600 rounded-full shadow-md">
            {{-- Masukan gambar disini --}}
          </div>
          <h2 class="font-bold text-base text-[#343434] uppercase tracking-widest">Cactus</h2>
        </div>
        <div class="flex flex-col items-center space-y-4">
            <div class="w-[180px] aspect-square bg-slate-600 rounded-full shadow-md">
              {{-- Masukan gambar disini --}}
            </div>
            <h2 class="font-bold text-base text-[#343434] uppercase tracking-widest">Cactus</h2>
        </div>
        <div class="flex flex-col items-center space-y-4">
          <div class="w-[180px] aspect-square bg-slate-600 rounded-full shadow-md">
            {{-- Masukan gambar disini --}}
          </div>
          <h2 class="font-bold text-base text-[#343434] uppercase tracking-widest">Cactus</h2>
        </div>
      </div>

      {{-- Best Selling --}}
      <div class="w-max mt-32 mx-auto flex flex-col items-center space-y-4">
        <h2 class="text-[48px] pb-4 border-b-2 border-[#343434] font-unna font-bold w-max">Best Selling</h2>
        <div class="grid grid-cols-3 gap-4">
          <div class="p-3 shadow-lg space-y-4 rounded-lg">
            {{-- jangan lupa untuk menambahkan background imagenya --}}
            <div class="bg-slate-400 w-[344px] h-[318px] flex items-center justify-center">
              {{-- Masukan gambar disini --}}
              <h2 class="uppercase tracking-widest text-[24px] text-center text-white">Indoor <br> Plants</h2>
            </div>
            <button class="bg-[#3B823E] font-semibold text-white p-4 w-full rounded-lg">Shop Now</button>
          </div>
          <div class="p-3 shadow-lg space-y-4 rounded-lg">
            {{-- jangan lupa untuk menambahkan background imagenya --}}
            <div class="bg-slate-400 w-[344px] h-[318px] flex items-center justify-center">
              {{-- Masukan gambar disini --}}
              <h2 class="uppercase tracking-widest text-[24px] text-center text-white">Air Purifying <br> Plants</h2>
            </div>
            <button class="bg-[#3B823E] font-semibold text-white p-4 w-full rounded-lg">Shop Now</button>
          </div>
          <div class="p-3 shadow-lg space-y-4 rounded-lg">
            {{-- jangan lupa untuk menambahkan background imagenya --}}
            <div class="bg-slate-400 w-[344px] h-[318px] flex items-center justify-center">
              {{-- Masukan gambar disini --}}
              <h2 class="uppercase tracking-widest text-[24px] text-center text-white">Flowering <br> Plants</h2>
            </div>
            <button class="bg-[#3B823E] font-semibold text-white p-4 w-full rounded-lg">Shop Now</button>
          </div>
        </div>
      </div>

      {{-- Trendings Plants --}}
      <div  class="w-max mt-32 mx-auto flex flex-col items-center space-y-4">
        <h2 class="text-[48px] pb-4 border-b-2 border-[#343434] font-unna font-bold w-max">Trendings Plants</h2>
        <div class="grid grid-cols-4 gap-4">
          <div class="w-[282px] shadow-lg rounded-lg p-4 space-y-4">
            <div class=" aspect-video bg-slate-400"></div>
            {{-- Masukan gambar disini --}}
            <div class="space-y-2 text-[#343434]">
              <h3 class="text-[20px] font-bold">Jade Terrarium</h3>
              <span>$ 350</span>
            </div>
            <button class="p-4 bg-[#3B823E] w-full text-lg font-semibold text-white rounded-lg">Buy</button>
          </div>
          <div class="w-[282px] shadow-lg rounded-lg p-4 space-y-4">
            <div class=" aspect-video bg-slate-400"></div>
            {{-- Masukan gambar disini --}}
            <div class="space-y-2 text-[#343434]">
              <h3 class="text-[20px] font-bold">Jade Terrarium</h3>
              <span>$ 350</span>
            </div>
            <button class="p-4 bg-[#3B823E] w-full text-lg font-semibold text-white rounded-lg">Buy</button>
          </div>
          <div class="w-[282px] shadow-lg rounded-lg p-4 space-y-4">
            <div class=" aspect-video bg-slate-400"></div>
            {{-- Masukan gambar disini --}}
            <div class="space-y-2 text-[#343434]">
              <h3 class="text-[20px] font-bold">Jade Terrarium</h3>
              <span>$ 350</span>
            </div>
            <button class="p-4 bg-[#3B823E] w-full text-lg font-semibold text-white rounded-lg">Buy</button>
          </div>
          <div class="w-[282px] shadow-lg rounded-lg p-4 space-y-4">
            <div class=" aspect-video bg-slate-400"></div>
            {{-- Masukan gambar disini --}}
            <div class="space-y-2 text-[#343434]">
              <h3 class="text-[20px] font-bold">Jade Terrarium</h3>
              <span>$ 350</span>
            </div>
            <button class="p-4 bg-[#3B823E] w-full text-lg font-semibold text-white rounded-lg">Buy</button>
          </div>
          <div class="w-[282px] shadow-lg rounded-lg p-4 space-y-4">
            <div class=" aspect-video bg-slate-400"></div>
            {{-- Masukan gambar disini --}}
            <div class="space-y-2 text-[#343434]">
              <h3 class="text-[20px] font-bold">Jade Terrarium</h3>
              <span>$ 350</span>
            </div>
            <button class="p-4 bg-[#3B823E] w-full text-lg font-semibold text-white rounded-lg">Buy</button>
          </div>
          <div class="w-[282px] shadow-lg rounded-lg p-4 space-y-4">
            <div class=" aspect-video bg-slate-400"></div>
            {{-- Masukan gambar disini --}}
            <div class="space-y-2 text-[#343434]">
              <h3 class="text-[20px] font-bold">Jade Terrarium</h3>
              <span>$ 350</span>
            </div>
            <button class="p-4 bg-[#3B823E] w-full text-lg font-semibold text-white rounded-lg">Buy</button>
          </div>
          <div class="w-[282px] shadow-lg rounded-lg p-4 space-y-4">
            <div class=" aspect-video bg-slate-400"></div>
            {{-- Masukan gambar disini --}}
            <div class="space-y-2 text-[#343434]">
              <h3 class="text-[20px] font-bold">Jade Terrarium</h3>
              <span>$ 350</span>
            </div>
            <button class="p-4 bg-[#3B823E] w-full text-lg font-semibold text-white rounded-lg">Buy</button>
          </div>
          <div class="w-[282px] shadow-lg rounded-lg p-4 space-y-4">
            <div class=" aspect-video bg-slate-400"></div>
            {{-- Masukan gambar disini --}}
            <div class="space-y-2 text-[#343434]">
              <h3 class="text-[20px] font-bold">Jade Terrarium</h3>
              <span>$ 350</span>
            </div>
            <button class="p-4 bg-[#3B823E] w-full text-lg font-semibold text-white rounded-lg">Buy</button>
          </div>
        </div>
      </div>

    </div>
@endsection
