@extends('layouts.app')

@section('content')
<div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="px-6 py-8 sm:p-10 text-center">
        <div class="mb-4 text-gray-400">
            <!-- iOS style empty state icon placeholder -->
            <svg class="mx-auto h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
            </svg>
        </div>
        <h2 class="text-xl font-semibold text-gray-900 mb-2">No Saved Registrations Yet</h2>
        <p class="text-gray-500 text-sm mb-6">Registrations submitted through the portal will appear here.</p>
        
        <a href="{{ route('registration.create') }}" class="inline-flex items-center text-[#007AFF] font-medium hover:text-blue-700 transition-colors">
            Go to Registration
            <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </a>
    </div>
</div>
@endsection