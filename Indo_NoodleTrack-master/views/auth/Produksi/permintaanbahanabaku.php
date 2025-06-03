@extends('layouts.app-layout')

@section('header', 'Permintaan Bahan Baku')

@section('content')
    <!-- Category Tabs + Search + Cart (in one row) -->
    <div class="flex justify-between items-center px-2 py-3 gap-4">
        <!-- Tabs -->
        <div class="flex space-x-2 overflow-x-auto">
            @foreach($categories as $category)
                <a href="#" class="px-4 py-2 text-sm rounded-full {{ $loop->first ? 'bg-primary text-white' : 'bg-white text-primary border border-primary' }} hover:bg-primary hover:text-white transition-colors duration-200 whitespace-nowrap">
                    {{ $category }}
                </a>
            @endforeach
        </div>
        <!-- Search & Cart -->
        <div class="flex items-center space-x-2 mt-2 sm:mt-0">
            <button class="bg-primary-light p-2 rounded-full text-white hover:bg-primary-dark transition">
                <img src="{{ asset('item-images/keranjang.svg') }}" alt="Keranjang Icon" class="h-5 w-5">
            </button>
            <div class="relative">
                <input type="text" placeholder="Cari bahan baku..." class="rounded-full border border-primary py-2 px-4 pl-10 focus:outline-none focus:ring-2 focus:ring-primary text-sm min-w-[180px]" />
                <span class="absolute left-3 top-2.5 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4-4m0 0A7 7 0 104 4a7 7 0 0013 13z" />
                    </svg>
                </span>
            </div>
        </div>
    </div>
    
    <!-- Bahan Baku Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 px-2 mt-4">
        @foreach($bahanBaku as $item)
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                <!-- Image Section -->
                <div class="p-4 bg-white">
                    <img src="{{ asset('item-images/terigu.png') }}" alt="{{ $item['nama'] }}" class="w-full h-auto">
                </div>
                
                <div class="bg-primary-light p-4 flex gap-2 flex-col">
                    <!-- Teal Header with Product Name -->
                    <div class="text-primary">
                        <h3 class="font-bold text-xl flex justify-between items-center">
                            {{ $item['nama'] }}
                            <button class="text-primary hover:text-primary-dark">
                                <img src="{{ asset('item-images/item.svg') }}" alt="Search Icon" class="h-5 w-5">
                            </button>
                        </h3>
                    </div>

                    <!-- Description -->
                    <p class="text-gray-600 text-xs leading-tight mb-1">{{ $item['kategori'] }}</p>
                            
                    <!-- Specifications in horizontal layout to save space -->
                    <div class="flex gap-3">
                        <!-- Row 1: U01 Kode -->
                        <div class="flex text-xs font-medium text-gray-700 items-start flex-col">
                            <p>{{ $item['kode'] }}</p>
                            <p>Kode</p>
                        </div>
                        
                        <!-- Row 2: 30 April 2025 Expired -->
                        <div class="flex text-xs font-medium text-gray-700 items-start flex-col">
                            <p>{{ $item['expired'] }}</p>
                            <p>Expired</p>
                        </div>
                        
                        <!-- Row 3: 12-14% Kadar Protein -->
                        <div class="flex text-xs font-medium text-gray-700 items-start flex-col">
                            <p>{{ $item['protein'] }}</p>
                            <p>Kadar Protein</p>
                        </div>
                        
                        <!-- Row 4: Kuat, Elastis, Kenyal Tekstur -->
                        <div class="flex text-xs font-medium text-gray-700 items-start flex-col">
                            <p>{{ $item['tekstur'] }}</p>
                            <p>Tekstur</p>
                        </div>
                        
                        <!-- Row 5: 690 kg Stok -->
                        <div class="flex text-xs font-medium text-gray-700 items-start flex-col">
                            <p>{{ $item['stok'] }} {{ $item['satuan'] }}</p>
                            <p>Stok</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
