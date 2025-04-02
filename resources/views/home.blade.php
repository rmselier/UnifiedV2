<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- Launch Cover Section --}}
                    <section id="home" class="relative w-full h-screen mb-10">
                        <picture>
                            {{-- For mobile A5 view --}}
                            <source
                                media="(max-width: 767px)"
                                srcset="{{ asset('storage/Mobile/LAUNCHCOVERA5.webp') }}"
                                type="image/webp"
                            />
                            <source
                                media="(max-width: 767px)"
                                srcset="{{ asset('storage/banner.jpg') }}"
                            />
                            {{-- For larger screens --}}
                            <source
                                media="(min-width: 768px)"
                                srcset="{{ asset('storage/banner.jpg') }}"
                                type="image/webp"
                            />
                            <source
                                media="(min-width: 768px)"
                                srcset="{{ asset('storage/banner.jpg') }}"
                            />
                            {{-- Fallback image --}}
                            <img
                                src="{{ asset('storage/Desktop/LAUNCHCOVER.png') }}"
                                alt="Launch Cover"
                                class="w-full h-full object-cover"
                                loading="lazy"
                            />
                        </picture>
                    </section>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
