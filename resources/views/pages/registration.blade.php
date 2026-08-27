@extends('layouts.app')

@section('content')
<div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="px-6 py-8 sm:p-10">
        <div class="mb-8">
            <h1 class="text-2xl font-bold tracking-tight text-gray-900">Student Registration</h1>
            <p class="text-sm text-gray-500 mt-1">College of Information Technology</p>
        </div> 

        <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- Personal Details Section -->
            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-3">
                
                <div class="sm:col-span-3">
                    <label for="student_id" class="block text-sm font-medium text-gray-700">Student ID <span class="text-red-500">*</span></label>
                    <input type="text" name="student_id" id="student_id" required placeholder="e.g. 2023-0001" 
                           class="mt-1 block w-full rounded-xl border-gray-300 bg-gray-50 border py-2.5 px-3 text-sm transition-all focus:bg-white">
                </div>

                <div>
                    <label for="first_name" class="block text-sm font-medium text-gray-700">First Name <span class="text-red-500">*</span></label>
                    <input type="text" name="first_name" id="first_name" required
                           class="mt-1 block w-full rounded-xl border-gray-300 bg-gray-50 border py-2.5 px-3 text-sm transition-all focus:bg-white">
                </div>

                <div>
                    <label for="middle_name" class="block text-sm font-medium text-gray-700">Middle Name</label>
                    <input type="text" name="middle_name" id="middle_name" placeholder="Optional"
                           class="mt-1 block w-full rounded-xl border-gray-300 bg-gray-50 border py-2.5 px-3 text-sm transition-all focus:bg-white">
                </div>

                <div>
                    <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name <span class="text-red-500">*</span></label>
                    <input type="text" name="last_name" id="last_name" required
                           class="mt-1 block w-full rounded-xl border-gray-300 bg-gray-50 border py-2.5 px-3 text-sm transition-all focus:bg-white">
                </div>
            </div>

            <!-- Contact & Demographics -->
            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-2 mt-6">
                
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address <span class="text-red-500">*</span></label>
                    <input type="email" name="email" id="email" required placeholder="student@example.com"
                           class="mt-1 block w-full rounded-xl border-gray-300 bg-gray-50 border py-2.5 px-3 text-sm transition-all focus:bg-white">
                </div>

                <div>
                    <label for="mobile_number" class="block text-sm font-medium text-gray-700">Mobile Number <span class="text-red-500">*</span></label>
                    <input type="tel" name="mobile_number" id="mobile_number" required pattern="[0-9]*" placeholder="Numeric only"
                           class="mt-1 block w-full rounded-xl border-gray-300 bg-gray-50 border py-2.5 px-3 text-sm transition-all focus:bg-white">
                </div>

                <div>
                    <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth <span class="text-red-500">*</span></label>
                    <input type="date" name="dob" id="dob" required
                           class="mt-1 block w-full rounded-xl border-gray-300 bg-gray-50 border py-2.5 px-3 text-sm transition-all focus:bg-white text-gray-500">
                </div>

                <div>
                    <label for="gender" class="block text-sm font-medium text-gray-700">Gender <span class="text-red-500">*</span></label>
                    <select name="gender" id="gender" required
                            class="mt-1 block w-full rounded-xl border-gray-300 bg-gray-50 border py-2.5 px-3 text-sm transition-all focus:bg-white text-gray-700 appearance-none">
                        <option value="" disabled selected>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>

            <!-- Academic & Address -->
            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-2 mt-6">
                
                <div>
                    <label for="program" class="block text-sm font-medium text-gray-700">Program <span class="text-red-500">*</span></label>
                    <select name="program" id="program" required
                            class="mt-1 block w-full rounded-xl border-gray-300 bg-gray-50 border py-2.5 px-3 text-sm transition-all focus:bg-white text-gray-700 appearance-none">
                        <option value="" disabled selected>Select Program</option>
                        <option value="BSIT">BS Information Technology</option>
                        <option value="BSCS">BS Computer Science</option>
                        <option value="BSIS">BS Information Systems</option>
                    </select>
                </div>

                <div>
                    <label for="year_level" class="block text-sm font-medium text-gray-700">Year Level <span class="text-red-500">*</span></label>
                    <select name="year_level" id="year_level" required
                            class="mt-1 block w-full rounded-xl border-gray-300 bg-gray-50 border py-2.5 px-3 text-sm transition-all focus:bg-white text-gray-700 appearance-none">
                        <option value="" disabled selected>Select Year Level</option>
                        <option value="1">1st Year</option>
                        <option value="2">2nd Year</option>
                        <option value="3">3rd Year</option>
                        <option value="4">4th Year</option>
                    </select>
                </div>

                <div class="sm:col-span-2">
                    <label for="address" class="block text-sm font-medium text-gray-700">Address <span class="text-red-500">*</span></label>
                    <textarea name="address" id="address" rows="3" required
                              class="mt-1 block w-full rounded-xl border-gray-300 bg-gray-50 border py-2.5 px-3 text-sm transition-all focus:bg-white"></textarea>
                </div>
                
                <div class="sm:col-span-2">
                    <label for="profile_picture" class="block text-sm font-medium text-gray-700">Profile Picture <span class="text-red-500">*</span></label>
                    <div class="mt-1 flex items-center justify-center w-full">
                        <label class="flex flex-col rounded-xl border-2 border-dashed border-gray-300 w-full h-32 p-10 group text-center bg-gray-50 hover:bg-white transition-all cursor-pointer">
                            <div class="h-full w-full text-center flex flex-col items-center justify-center">
                                <span class="text-sm text-gray-500 group-hover:text-[#007AFF]">Click to upload image (JPG, PNG)</span>
                            </div>
                            <input type="file" name="profile_picture" id="profile_picture" accept="image/*" required class="hidden" />
                        </label>
                    </div>
                </div>
            </div>

            <!-- Submit Button (iOS Style) -->
            <div class="pt-4">
                <button type="submit" 
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-xl shadow-sm text-base font-semibold text-white bg-[#007AFF] hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#007AFF] transition-all">
                    Submit Registration
                </button>
            </div>
        </form>
    </div>
</div>
@endsection