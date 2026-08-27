<nav class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-gray-200/80">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-14 items-center">
            <div class="flex-shrink-0 flex items-center">
                <span class="font-semibold text-lg tracking-tight text-gray-900">CIT Portal</span>
            </div>
            <div class="flex space-x-6">
                <a href="{{ route('registration.create') }}" 
                   class="{{ request()->routeIs('registration.create') ? 'text-[#007AFF] font-medium' : 'text-gray-500 hover:text-gray-900' }} transition-colors text-sm">
                    Registration
                </a>
                <a href="{{ route('registration.index') }}" 
                   class="{{ request()->routeIs('registration.index') ? 'text-[#007AFF] font-medium' : 'text-gray-500 hover:text-gray-900' }} transition-colors text-sm">
                    Saved Registrations
                </a>
            </div>
        </div>
    </div>
</nav>