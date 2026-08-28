@extends('layouts.app')

@section('content')
<div class="bg-white/90 backdrop-blur-xl rounded-3xl shadow-xl shadow-pink-500/5 border border-pink-100 overflow-hidden relative">
    <!-- Subtle Gradient Background Accent -->
    <div class="h-2 bg-gradient-to-r from-pink-400 via-rose-500 to-pink-600"></div>

    <div class="px-6 py-8 sm:p-10">
        <!-- Header -->
        <div class="mb-8 border-b border-pink-100/60 pb-6 flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold tracking-tight bg-gradient-to-r from-pink-900 via-rose-900 to-gray-900 bg-clip-text text-transparent">Student Registration</h1>
                <p class="text-sm text-pink-600/80 font-medium mt-1">College of Information Technology</p>
            </div>
            <div class="w-10 h-10 rounded-2xl bg-pink-50 border border-pink-100 flex items-center justify-center text-pink-500">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </div>
        </div> 

        <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- Personal Details Section -->
            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-3">
                
                <div class="sm:col-span-3">
                    <label for="student_id" class="block text-sm font-medium text-gray-700">Student ID <span class="text-pink-500">*</span></label>
                    <input type="text" name="student_id" id="student_id" required placeholder="e.g. 2023-0001" 
                           class="mt-1 block w-full rounded-xl border-pink-200/80 bg-pink-50/20 py-2.5 px-3.5 text-sm transition-all duration-200 focus:bg-white focus:border-pink-500 focus:ring-2 focus:ring-pink-400/20 outline-none">
                </div>

                <div>
                    <label for="first_name" class="block text-sm font-medium text-gray-700">First Name <span class="text-pink-500">*</span></label>
                    <input type="text" name="first_name" id="first_name" required
                           class="mt-1 block w-full rounded-xl border-pink-200/80 bg-pink-50/20 py-2.5 px-3.5 text-sm transition-all duration-200 focus:bg-white focus:border-pink-500 focus:ring-2 focus:ring-pink-400/20 outline-none">
                </div>

                <div>
                    <label for="middle_name" class="block text-sm font-medium text-gray-700">Middle Name</label>
                    <input type="text" name="middle_name" id="middle_name" placeholder="Optional"
                           class="mt-1 block w-full rounded-xl border-pink-200/80 bg-pink-50/20 py-2.5 px-3.5 text-sm transition-all duration-200 focus:bg-white focus:border-pink-500 focus:ring-2 focus:ring-pink-400/20 outline-none">
                </div>

                <div>
                    <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name <span class="text-pink-500">*</span></label>
                    <input type="text" name="last_name" id="last_name" required
                           class="mt-1 block w-full rounded-xl border-pink-200/80 bg-pink-50/20 py-2.5 px-3.5 text-sm transition-all duration-200 focus:bg-white focus:border-pink-500 focus:ring-2 focus:ring-pink-400/20 outline-none">
                </div>
            </div>

            <!-- Contact & Demographics -->
            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-2">
                
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address <span class="text-pink-500">*</span></label>
                    <input type="email" name="email" id="email" required placeholder="student@example.com"
                           class="mt-1 block w-full rounded-xl border-pink-200/80 bg-pink-50/20 py-2.5 px-3.5 text-sm transition-all duration-200 focus:bg-white focus:border-pink-500 focus:ring-2 focus:ring-pink-400/20 outline-none">
                </div>

                <div>
                    <label for="mobile_number" class="block text-sm font-medium text-gray-700">Mobile Number <span class="text-pink-500">*</span></label>
                    <input type="tel" name="mobile_number" id="mobile_number" required pattern="[0-9]*" placeholder="Numeric only"
                           class="mt-1 block w-full rounded-xl border-pink-200/80 bg-pink-50/20 py-2.5 px-3.5 text-sm transition-all duration-200 focus:bg-white focus:border-pink-500 focus:ring-2 focus:ring-pink-400/20 outline-none">
                </div>

                <div>
                    <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth <span class="text-pink-500">*</span></label>
                    <input type="date" name="dob" id="dob" required
                           class="mt-1 block w-full rounded-xl border-pink-200/80 bg-pink-50/20 py-2.5 px-3.5 text-sm transition-all duration-200 focus:bg-white focus:border-pink-500 focus:ring-2 focus:ring-pink-400/20 outline-none text-gray-600">
                </div>

                <div>
                    <label for="gender" class="block text-sm font-medium text-gray-700">Gender <span class="text-pink-500">*</span></label>
                    <div class="relative mt-1">
                        <select name="gender" id="gender" required
                                class="block w-full rounded-xl border-pink-200/80 bg-pink-50/20 py-2.5 px-3.5 text-sm transition-all duration-200 focus:bg-white focus:border-pink-500 focus:ring-2 focus:ring-pink-400/20 outline-none text-gray-700 appearance-none">
                            <option value="" disabled selected>Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-pink-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Academic & Address -->
            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-2">
                
                <div>
                    <label for="program" class="block text-sm font-medium text-gray-700">Program <span class="text-pink-500">*</span></label>
                    <div class="relative mt-1">
                        <select name="program" id="program" required
                                class="block w-full rounded-xl border-pink-200/80 bg-pink-50/20 py-2.5 px-3.5 text-sm transition-all duration-200 focus:bg-white focus:border-pink-500 focus:ring-2 focus:ring-pink-400/20 outline-none text-gray-700 appearance-none">
                            <option value="" disabled selected>Select Program</option>
                            <option value="BSIT">BS Information Technology</option>
                            <option value="BSCS">BS Computer Science</option>
                            <option value="BSIS">BS Information Systems</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-pink-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                    </div>
                </div>

                <div>
                    <label for="year_level" class="block text-sm font-medium text-gray-700">Year Level <span class="text-pink-500">*</span></label>
                    <div class="relative mt-1">
                        <select name="year_level" id="year_level" required
                                class="block w-full rounded-xl border-pink-200/80 bg-pink-50/20 py-2.5 px-3.5 text-sm transition-all duration-200 focus:bg-white focus:border-pink-500 focus:ring-2 focus:ring-pink-400/20 outline-none text-gray-700 appearance-none">
                            <option value="" disabled selected>Select Year Level</option>
                            <option value="1">1st Year</option>
                            <option value="2">2nd Year</option>
                            <option value="3">3rd Year</option>
                            <option value="4">4th Year</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-pink-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label for="address" class="block text-sm font-medium text-gray-700">Address <span class="text-pink-500">*</span></label>
                    <textarea name="address" id="address" rows="3" required
                              class="mt-1 block w-full rounded-xl border-pink-200/80 bg-pink-50/20 py-2.5 px-3.5 text-sm transition-all duration-200 focus:bg-white focus:border-pink-500 focus:ring-2 focus:ring-pink-400/20 outline-none"></textarea>
                </div>
                
                <div class="sm:col-span-2">
                    <label for="profile_picture" class="block text-sm font-medium text-gray-700">Profile Picture <span class="text-pink-500">*</span></label>
                    <div class="mt-1 flex items-center justify-center w-full">
                        <label class="flex flex-col rounded-2xl border-2 border-dashed border-pink-200 hover:border-pink-400 w-full h-32 p-6 group text-center bg-pink-50/30 hover:bg-pink-50/70 transition-all duration-200 cursor-pointer justify-center items-center">
                            <div class="flex flex-col items-center justify-center space-y-2">
                                <div class="w-10 h-10 rounded-full bg-pink-100 group-hover:bg-pink-200/80 flex items-center justify-center text-pink-500 transition-colors">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <span class="text-xs font-medium text-gray-600 group-hover:text-pink-600 transition-colors">
                                    Click to upload image <span class="text-gray-400">(JPG, PNG)</span>
                                </span>
                            </div>
                            <input type="file" name="profile_picture" id="profile_picture" accept="image/*" required class="hidden" />
                        </label>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="pt-4">
                <button type="submit" 
                        class="w-full flex items-center justify-center space-x-2 py-3.5 px-4 rounded-xl text-base font-semibold text-white bg-gradient-to-r from-pink-500 via-rose-500 to-pink-600 hover:from-pink-600 hover:to-rose-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500 shadow-lg shadow-pink-500/25 transition-all duration-200 hover:scale-[1.01]">
                    <span>Submit Registration</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection