<div
    x-show="menuVisibility"
    class="relative z-40 md:hidden" role="dialog" aria-modal="true">

    <div
        x-show="menuVisibility"
        @click="menuVisibility = false"
        x-transition:enter="transition-opacity ease-linear duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-linear duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>

    <div class="fixed inset-0 z-40 flex">

        <div
            x-show="menuVisibility"
            @click.outside="menuVisibility = false"
            x-transition:enter="transition ease-in-out transform duration-300"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in-out transform duration-300"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            class="relative flex flex-col flex-1 w-full max-w-xs pt-5 pb-4 bg-gray-800">
            <div
                x-show="menuVisibility"
                x-transition:enter="transition-opacity ease-linear duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity ease-linear duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="absolute top-0 right-0 pt-2 -mr-12">
                <button
                    @click="menuVisibility = false"
                    type="button"
                    class="flex items-center justify-center w-10 h-10 ml-1 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                >
                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <x-logo />

            <div class="flex-1 h-0 mt-5 overflow-y-auto">
                <x-side-bar-items />
            </div>
        </div>

        <div class="flex-shrink-0 w-14" aria-hidden="true">
        </div>
    </div>
</div>

<div class="hidden md:fixed md:inset-y-0 md:flex md:w-64 md:flex-col">
    <div class="flex flex-col flex-1 min-h-0 bg-gray-800">

        <div class="flex items-center flex-shrink-0 px-4 py-4">
            <img class="w-auto h-8" src="{{ Vite::asset("resources/assets/logo.svg") }}" alt="Your Company">
        </div>

        <div class="flex flex-col flex-1 overflow-y-auto">
            <x-side-bar-items />
        </div>
    </div>
</div>