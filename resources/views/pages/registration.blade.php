@extends('layouts.app')

@section('content')
<!-- FULL SCREEN FIXED BACKGROUND -->
<div class="fixed inset-0 z-[-1] bg-gradient-to-br from-pink-100 via-white to-pink-50">
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#fbcfe8_1px,transparent_1px),linear-gradient(to_bottom,#fbcfe8_1px,transparent_1px)] bg-[size:2rem_2rem] opacity-50"></div>
</div>

<!-- Main Content Wrapper (pt-28 accounts for the fixed navbar height) -->
<div class="w-full min-h-screen pt-28 pb-12 px-4 sm:px-6 lg:px-8 relative z-0">
    
    <!-- Toast Notification -->
    <div id="error-toast" class="fixed bottom-5 right-5 hidden bg-rose-600 text-white px-6 py-4 rounded-xl shadow-2xl transition-opacity duration-300 z-50 flex items-center space-x-3">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        <span id="toast-message" class="font-medium"></span>
    </div>

    <!-- Grid-Card Container -->
    <div class="max-w-4xl mx-auto bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl shadow-pink-500/20 border-2 border-pink-200 overflow-hidden relative">
        <div class="h-3 bg-gradient-to-r from-pink-400 via-rose-500 to-pink-600"></div>

        <div class="px-6 py-8 sm:p-10">
            <div class="mb-8 border-b border-pink-200 pb-6">
                <h1 class="text-3xl font-bold tracking-tight bg-gradient-to-r from-pink-900 via-rose-900 to-gray-900 bg-clip-text text-transparent">Student Registration</h1>
                <p class="text-sm text-pink-600/80 font-semibold mt-1">College of Information Technology</p>
            </div> 

            <form id="registrationForm" action="#" method="POST" enctype="multipart/form-data" class="space-y-6" novalidate>
                @csrf

                <!-- Personal Details Section -->
                <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-3">
                    <div class="sm:col-span-3">
                        <label for="student_id" class="block text-sm font-bold text-gray-700">Student ID <span class="text-pink-500">*</span></label>
                        <input type="text" name="student_id" id="student_id" required placeholder="0123-3456" maxlength="9"
                               class="mt-1 block w-full rounded-xl border-2 border-pink-400 shadow-sm bg-white py-2.5 px-3.5 text-sm transition-all duration-200 focus:bg-white focus:border-pink-600 focus:ring-4 focus:ring-pink-400/20 outline-none font-medium text-gray-800">
                    </div>

                    <div>
                        <label for="first_name" class="block text-sm font-bold text-gray-700">First Name <span class="text-pink-500">*</span></label>
                        <input type="text" name="first_name" id="first_name" required
                               class="name-input mt-1 block w-full rounded-xl border-2 border-pink-400 shadow-sm bg-white py-2.5 px-3.5 text-sm transition-all duration-200 focus:border-pink-600 focus:ring-4 focus:ring-pink-400/20 outline-none font-medium text-gray-800">
                    </div>

                    <div>
                        <label for="middle_name" class="block text-sm font-bold text-gray-700">Middle Name</label>
                        <input type="text" name="middle_name" id="middle_name" placeholder="Optional"
                               class="name-input mt-1 block w-full rounded-xl border-2 border-pink-400 shadow-sm bg-white py-2.5 px-3.5 text-sm transition-all duration-200 focus:border-pink-600 focus:ring-4 focus:ring-pink-400/20 outline-none font-medium text-gray-800">
                    </div>

                    <div>
                        <label for="last_name" class="block text-sm font-bold text-gray-700">Last Name <span class="text-pink-500">*</span></label>
                        <input type="text" name="last_name" id="last_name" required
                               class="name-input mt-1 block w-full rounded-xl border-2 border-pink-400 shadow-sm bg-white py-2.5 px-3.5 text-sm transition-all duration-200 focus:border-pink-600 focus:ring-4 focus:ring-pink-400/20 outline-none font-medium text-gray-800">
                    </div>
                </div>

                <!-- Contact & Demographics -->
                <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-2">
                    <div>
                        <label for="email" class="block text-sm font-bold text-gray-700">Email Address <span class="text-pink-500">*</span></label>
                        <input type="email" name="email" id="email" required placeholder="student@example.com"
                               class="mt-1 block w-full rounded-xl border-2 border-pink-400 shadow-sm bg-white py-2.5 px-3.5 text-sm transition-all duration-200 focus:border-pink-600 focus:ring-4 focus:ring-pink-400/20 outline-none font-medium text-gray-800">
                    </div>

                    <div>
                        <label for="mobile_number" class="block text-sm font-bold text-gray-700">Mobile Number <span class="text-pink-500">*</span></label>
                        <input type="tel" name="mobile_number" id="mobile_number" required maxlength="11" placeholder="09xxxxxxxxx"
                               class="mt-1 block w-full rounded-xl border-2 border-pink-400 shadow-sm bg-white py-2.5 px-3.5 text-sm transition-all duration-200 focus:border-pink-600 focus:ring-4 focus:ring-pink-400/20 outline-none font-medium text-gray-800">
                    </div>

                    <div>
                        <label for="dob" class="block text-sm font-bold text-gray-700">Date of Birth (18+) <span class="text-pink-500">*</span></label>
                        <input type="date" name="dob" id="dob" required
                               class="mt-1 block w-full rounded-xl border-2 border-pink-400 shadow-sm bg-white py-2.5 px-3.5 text-sm transition-all duration-200 focus:border-pink-600 focus:ring-4 focus:ring-pink-400/20 outline-none font-medium text-gray-800">
                    </div>

                    <div>
                        <label for="gender" class="block text-sm font-bold text-gray-700">Gender <span class="text-pink-500">*</span></label>
                        <select name="gender" id="gender" required
                                class="mt-1 block w-full rounded-xl border-2 border-pink-400 shadow-sm bg-white py-2.5 px-3.5 text-sm transition-all duration-200 focus:border-pink-600 focus:ring-4 focus:ring-pink-400/20 outline-none font-medium text-gray-800">
                            <option value="" disabled selected>Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>

                <!-- Academic & Address -->
                <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-2">
                    <div>
                        <label for="program" class="block text-sm font-bold text-gray-700">Program <span class="text-pink-500">*</span></label>
                        <select name="program" id="program" required
                                class="mt-1 block w-full rounded-xl border-2 border-pink-400 shadow-sm bg-white py-2.5 px-3.5 text-sm transition-all duration-200 focus:border-pink-600 focus:ring-4 focus:ring-pink-400/20 outline-none font-medium text-gray-800">
                            <option value="" disabled selected>Select Program</option>
                            <option value="BSIT">BS Information Technology</option>
                            <option value="BSCS">BS Computer Science</option>
                        </select>
                    </div>

                    <div>
                        <label for="year_level" class="block text-sm font-bold text-gray-700">Year Level <span class="text-pink-500">*</span></label>
                        <select name="year_level" id="year_level" required
                                class="mt-1 block w-full rounded-xl border-2 border-pink-400 shadow-sm bg-white py-2.5 px-3.5 text-sm transition-all duration-200 focus:border-pink-600 focus:ring-4 focus:ring-pink-400/20 outline-none font-medium text-gray-800">
                            <option value="" disabled selected>Select Year Level</option>
                            <option value="1">1st Year</option>
                            <option value="2">2nd Year</option>
                            <option value="3">3rd Year</option>
                            <option value="4">4th Year</option>
                        </select>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="address" class="block text-sm font-bold text-gray-700">Address <span class="text-pink-500">*</span></label>
                        <textarea name="address" id="address" rows="3" required
                                  class="mt-1 block w-full rounded-xl border-2 border-pink-400 shadow-sm bg-white py-2.5 px-3.5 text-sm transition-all duration-200 focus:border-pink-600 focus:ring-4 focus:ring-pink-400/20 outline-none font-medium text-gray-800"></textarea>
                    </div>
                    
                    <div class="sm:col-span-2">
                        <label for="profile_picture" class="block text-sm font-bold text-gray-700">Profile Picture <span class="text-pink-500">*</span></label>
                        <div class="mt-1 flex items-center justify-center w-full">
                            <label class="flex flex-col rounded-2xl border-2 border-dashed border-pink-400 hover:border-pink-600 w-full h-40 p-2 group text-center bg-pink-50/50 transition-all duration-200 cursor-pointer overflow-hidden relative">
                                <div id="upload-placeholder" class="flex flex-col items-center justify-center space-y-2 h-full">
                                    <div class="w-10 h-10 rounded-full bg-pink-100 flex items-center justify-center text-pink-500">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                    </div>
                                    <span class="text-xs font-bold text-gray-600">Click to upload image</span>
                                </div>
                                <img id="image-preview" src="" alt="Preview" class="hidden absolute inset-0 w-full h-full object-contain bg-gray-900/5" />
                                <input type="file" name="profile_picture" id="profile_picture" accept="image/*" required class="hidden" />
                            </label>
                        </div>
                    </div>
                </div>

                <div class="pt-6">
                    <button type="submit" class="w-full py-4 px-4 rounded-xl text-lg font-bold text-white bg-gradient-to-r from-pink-500 to-rose-600 hover:from-pink-600 hover:to-rose-700 shadow-xl shadow-pink-500/30 transition-all duration-200 hover:scale-[1.01]">
                        Submit Registration
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const dobInput = document.getElementById('dob');
    const today = new Date();
    const minAgeDate = new Date(today.getFullYear() - 18, today.getMonth(), today.getDate());
    dobInput.max = minAgeDate.toISOString().split('T')[0];

    let toastTimeout;
    function showError(message) {
        const toast = document.getElementById('error-toast');
        document.getElementById('toast-message').innerText = message;
        toast.classList.remove('hidden');
        
        clearTimeout(toastTimeout);
        toastTimeout = setTimeout(() => { toast.classList.add('hidden'); }, 3500);
    }

    const form = document.getElementById('registrationForm');
    form.addEventListener('submit', function(e) {
        let hasError = false;

        const requiredFields = form.querySelectorAll('[required]');
        for (let field of requiredFields) {
            if (!field.value.trim()) {
                const label = document.querySelector(`label[for="${field.id}"]`).innerText.replace('*', '').trim();
                showError(`Please fill out the ${label} field.`);
                hasError = true;
                e.preventDefault();
                return; 
            }
        }

        const studentId = document.getElementById('student_id').value;
        if (!/^\d{4}-\d{4}$/.test(studentId)) {
            showError("Student ID must be in the format XXXX-XXXX.");
            hasError = true;
        }

        const phone = document.getElementById('mobile_number').value;
        if (!/^09\d{9}$/.test(phone)) {
            showError("Mobile number must be 11 digits and start with '09'.");
            hasError = true;
        }

        const dobVal = new Date(dobInput.value);
        if (dobVal > minAgeDate) {
            showError("You must be at least 18 years old to register.");
            hasError = true;
        }

        if (hasError) {
            e.preventDefault();
        }
    });

    document.getElementById('student_id').addEventListener('input', function() {
        let val = this.value.replace(/\D/g, '');
        if (val.length > 4) {
            val = val.substring(0, 4) + '-' + val.substring(4, 8);
        }
        this.value = val;
    });

    document.getElementById('mobile_number').addEventListener('input', function() {
        this.value = this.value.replace(/\D/g, '').slice(0, 11);
    });

    document.querySelectorAll('.name-input').forEach(input => {
        input.addEventListener('input', function() {
            let val = this.value.replace(/\d/g, '');
            this.value = val.replace(/\b\w/g, char => char.toUpperCase());
        });
    });

    const profileInput = document.getElementById('profile_picture');
    const previewImg = document.getElementById('image-preview');
    const placeholder = document.getElementById('upload-placeholder');
    
    profileInput.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImg.src = e.target.result;
                previewImg.classList.remove('hidden');
                placeholder.classList.add('hidden');
            }
            reader.readAsDataURL(file);
        } else {
            previewImg.classList.add('hidden');
            placeholder.classList.remove('hidden');
            previewImg.src = '';
        }
    });
});
</script>
@endsection