<!-- Navigation Component -->
<nav class="fixed top-0 left-0 right-0 z-50 bg-gradient-to-r from-pink-100/90 via-rose-50/90 to-pink-100/90 backdrop-blur-md border-b-2 border-pink-200 shadow-sm shadow-pink-500/10">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Font Logo Design[cite: 3] -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('registration.index') }}" class="flex items-center space-x-2.5 group">
                    <div class="w-9 h-9 rounded-xl bg-gradient-to-tr from-pink-500 via-rose-400 to-pink-300 flex items-center justify-center text-white shadow-md shadow-pink-500/20 group-hover:scale-105 transition-transform duration-200">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0112 20.055a11.952 11.952 0 01-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-black text-xl tracking-tight bg-gradient-to-r from-pink-700 via-rose-600 to-pink-600 bg-clip-text text-transparent font-sans">
                            CIT<span class="font-light italic text-pink-500 ml-0.5">PORTAL</span>
                        </span>
                    </div>
                </a>
            </div>

            <!-- Navigation Links[cite: 3] -->
            <div class="flex space-x-2">
                <a href="{{ route('registration.create') }}" 
                   class="{{ request()->routeIs('registration.create') ? 'bg-gradient-to-r from-pink-500 to-rose-500 text-white shadow-md shadow-pink-500/20 font-bold' : 'text-pink-800 font-medium hover:text-pink-600 hover:bg-pink-200/50' }} px-4 py-2 rounded-xl transition-all duration-200 text-sm inline-flex items-center space-x-2">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                    <span>Registration</span>
                </a>

                <a href="{{ route('registration.index') }}" 
                   class="{{ request()->routeIs('registration.index') ? 'bg-gradient-to-r from-pink-500 to-rose-500 text-white shadow-md shadow-pink-500/20 font-bold' : 'text-pink-800 font-medium hover:text-pink-600 hover:bg-pink-200/50' }} px-4 py-2 rounded-xl transition-all duration-200 text-sm inline-flex items-center space-x-2">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 012-2h10a2 2 0 012 2M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                    </svg>
                    <span>Saved Registrations</span>
                </a>
            </div>
        </div>
    </div>
</nav>