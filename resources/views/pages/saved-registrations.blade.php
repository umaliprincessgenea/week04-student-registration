@extends('layouts.app')

@section('content')
<!-- FULL SCREEN FIXED BACKGROUND -->
<div class="fixed inset-0 z-[-1] bg-gradient-to-br from-pink-100 via-white to-pink-50">
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#fbcfe8_1px,transparent_1px),linear-gradient(to_bottom,#fbcfe8_1px,transparent_1px)] bg-[size:2rem_2rem] opacity-50"></div>
</div>

<!-- Auto-Disappearing Success Pop-up -->
@if (session('success'))
    <div id="success-toast" class="fixed top-10 right-10 bg-emerald-500 text-white px-6 py-4 rounded-xl shadow-2xl transition-all duration-500 z-50 flex items-center space-x-3 transform translate-x-0 opacity-100">
        <div class="bg-emerald-600/50 p-1.5 rounded-full">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>
        <span class="font-medium tracking-wide">{{ session('success') }}</span>
    </div>
@endif

<!-- Main Content Wrapper -->
<div class="w-full min-h-screen pt-28 pb-12 px-4 sm:px-6 lg:px-8 relative z-0">
    
    <!-- Reusable Modal (Now with Image Support) -->
    <div id="studentModal" class="fixed inset-0 z-50 hidden bg-gray-900/50 backdrop-blur-sm flex items-center justify-center p-4 opacity-0 transition-opacity duration-300">
        <div class="bg-white rounded-3xl shadow-2xl w-full max-w-md overflow-hidden transform scale-95 transition-transform duration-300 border-2 border-pink-200" id="modalContent">
            <div class="h-3 bg-gradient-to-r from-pink-400 via-rose-500 to-pink-600"></div>
            <div class="p-8">
                <div class="flex justify-between items-start mb-6">
                    <div class="flex items-center space-x-4">
                        <img id="modalImage" src="" alt="Profile" class="w-16 h-16 rounded-full object-cover border-2 border-pink-300 shadow-sm hidden">
                        <h3 class="text-2xl font-bold text-gray-900" id="modalName">Student Name</h3>
                    </div>
                    <button onclick="closeModal()" class="text-gray-400 hover:text-rose-500 transition-colors">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>
                <div class="space-y-4 text-base text-gray-700 bg-pink-50/50 p-6 rounded-2xl border border-pink-100">
                    <p class="flex justify-between border-b border-pink-200 pb-2">
                        <span class="font-bold text-pink-700">Student ID:</span> 
                        <span id="modalId" class="font-medium"></span>
                    </p>
                    <p class="flex justify-between border-b border-pink-200 pb-2">
                        <span class="font-bold text-pink-700">Program:</span> 
                        <span id="modalProgram" class="font-medium"></span>
                    </p>
                    <p class="flex justify-between border-b border-pink-200 pb-2">
                        <span class="font-bold text-pink-700">Email:</span> 
                        <span id="modalEmail" class="font-medium"></span>
                    </p>
                    <p class="flex justify-between">
                        <span class="font-bold text-pink-700">Mobile:</span> 
                        <span id="modalMobile" class="font-medium"></span>
                    </p>
                </div>
                <div class="mt-8 flex justify-end">
                    <button onclick="closeModal()" class="px-6 py-3 bg-gray-100 hover:bg-gray-200 text-gray-800 rounded-xl font-bold transition-colors">Close Profile</button>
                </div>
            </div>
        </div>
    </div>

    @if(!isset($registrations) || $registrations->isEmpty())
        <!-- Empty State in Grid-Card Format -->
        <div class="max-w-4xl mx-auto bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl shadow-pink-500/20 border-2 border-pink-200 overflow-hidden relative text-center py-20 px-6">
            <div class="mx-auto w-24 h-24 mb-8 rounded-3xl bg-gradient-to-br from-pink-100 via-rose-50 to-pink-50 border-2 border-pink-200 flex items-center justify-center text-pink-500 shadow-inner">
                <svg class="w-12 h-12 stroke-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                </svg>
            </div>
            <h2 class="text-3xl font-bold bg-gradient-to-r from-gray-900 via-pink-900 to-gray-800 bg-clip-text text-transparent mb-3">No Saved Registrations Yet</h2>
            <p class="text-gray-600 text-base max-w-md mx-auto mb-10 leading-relaxed font-medium">Registrations submitted through the portal will be securely stored and available here for review.</p>
            
            <a href="{{ route('registration.create') }}" class="inline-flex items-center space-x-2 px-8 py-4 rounded-xl text-lg font-bold text-white bg-gradient-to-r from-pink-500 to-rose-600 hover:from-pink-600 hover:to-rose-700 shadow-xl shadow-pink-500/30 transition-all duration-200 hover:scale-[1.02]">
                <span>Go to Registration</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </div>
    @else
        <!-- Populated List State in Grid-Card Format -->
        <div class="max-w-5xl mx-auto bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl shadow-pink-500/20 border-2 border-pink-200 overflow-hidden relative">
            <div class="h-3 bg-gradient-to-r from-pink-400 via-rose-500 to-pink-600"></div>
            <div class="p-8 sm:p-10">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 border-b border-pink-200 pb-6">Saved Registrations</h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm">
                        <thead>
                            <tr class="text-pink-900 border-b-2 border-pink-200 bg-pink-50/50">
                                <th class="p-4 font-bold rounded-tl-xl">Student ID</th>
                                <th class="p-4 font-bold">Name</th>
                                <th class="p-4 font-bold">Program</th>
                                <th class="p-4 font-bold text-right rounded-tr-xl">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-800 font-medium">
                            @foreach($registrations as $student)
                            <!-- Clickable Row Passing Real Data Including Profile Picture -->
                            <tr class="border-b border-pink-100 hover:bg-pink-100/50 transition-colors cursor-pointer"
                                onclick="openModal('{{ $student->student_id }}', '{{ $student->first_name }} {{ $student->last_name }}', '{{ $student->program }} - Year {{ $student->year_level }}', '{{ $student->email }}', '{{ $student->mobile_number }}', '{{ asset('storage/' . $student->profile_picture) }}')">
                                <td class="p-4">{{ $student->student_id }}</td>
                                <td class="p-4">
                                    <div class="flex items-center space-x-3">
                                        <img src="{{ asset('storage/' . $student->profile_picture) }}" class="w-8 h-8 rounded-full object-cover shadow-sm">
                                        <span>{{ $student->first_name }} {{ $student->last_name }}</span>
                                    </div>
                                </td>
                                <td class="p-4">{{ $student->program }}</td>
                                <td class="p-4 text-right">
                                    <span class="text-white font-bold text-xs bg-pink-500 hover:bg-pink-600 px-4 py-2 rounded-full shadow-md transition-colors">View Details</span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
</div>

<script>
    const modal = document.getElementById('studentModal');
    const modalContent = document.getElementById('modalContent');
    const modalImg = document.getElementById('modalImage');

    function openModal(id, name, program, email, mobile, imageSrc) {
        document.getElementById('modalId').innerText = id;
        document.getElementById('modalName').innerText = name;
        document.getElementById('modalProgram').innerText = program;
        document.getElementById('modalEmail').innerText = email;
        document.getElementById('modalMobile').innerText = mobile;
        
        if (imageSrc) {
            modalImg.src = imageSrc;
            modalImg.classList.remove('hidden');
        }

        modal.classList.remove('hidden');
        setTimeout(() => {
            modal.classList.remove('opacity-0');
            modalContent.classList.remove('scale-95');
        }, 10);
    }

    function closeModal() {
        modal.classList.add('opacity-0');
        modalContent.classList.add('scale-95');
        setTimeout(() => {
            modal.classList.add('hidden');
            modalImg.src = '';
            modalImg.classList.add('hidden');
        }, 300); 
    }

    // Auto-Disappearing Toast Logic
    document.addEventListener('DOMContentLoaded', function() {
        const successToast = document.getElementById('success-toast');
        
        if (successToast) {
            // Wait 4 seconds, then start the slide-out and fade-out animation
            setTimeout(() => {
                successToast.classList.remove('translate-x-0', 'opacity-100');
                successToast.classList.add('translate-x-full', 'opacity-0');
                
                // Wait for the CSS transition (500ms) to finish before removing from DOM
                setTimeout(() => {
                    successToast.remove();
                }, 500);
            }, 4000); 
        }
    });
</script>
@endsection