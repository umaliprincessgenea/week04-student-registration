@extends('layouts.app')

@section('content')
<div class="bg-white/90 backdrop-blur-xl rounded-3xl shadow-xl shadow-pink-500/5 border border-pink-100 overflow-hidden relative">
    <!-- Ambient Gradient Backlight -->
    <div class="absolute -top-24 -right-24 w-72 h-72 bg-gradient-to-br from-pink-200/40 to-rose-100/40 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-24 -left-24 w-72 h-72 bg-gradient-to-tr from-pink-100/50 to-rose-200/30 rounded-full blur-3xl pointer-events-none"></div>

    <div class="px-6 py-12 sm:p-14 text-center relative z-10">
        <!-- Aesthetic Icon Container -->
        <div class="mx-auto w-20 h-20 mb-6 rounded-3xl bg-gradient-to-br from-pink-100 via-rose-50 to-pink-50 border border-pink-200/60 flex items-center justify-center text-pink-500 shadow-inner">
            <svg class="w-10 h-10 stroke-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
            </svg>
        </div>

        <h2 class="text-2xl font-bold bg-gradient-to-r from-gray-900 via-pink-950 to-gray-800 bg-clip-text text-transparent mb-2">No Saved Registrations Yet</h2>
        <p class="text-gray-500 text-sm max-w-sm mx-auto mb-8 leading-relaxed">Registrations submitted through the portal will be stored and available here for review.</p>
        
        <a href="{{ route('registration.create') }}" class="inline-flex items-center space-x-2 px-6 py-3 rounded-xl text-sm font-semibold text-white bg-gradient-to-r from-pink-500 via-rose-500 to-pink-600 hover:from-pink-600 hover:to-rose-600 shadow-lg shadow-pink-500/25 transition-all duration-200 hover:scale-[1.02]">
            <span>Go to Registration</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
        </a>
    </div>
</div>
@endsection