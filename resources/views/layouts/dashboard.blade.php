@extends('layouts.app')

@section('content')
    <!-- TopNavBar -->
    <header class="bg-surface border-b border-outline-variant sticky top-0 z-50">
        <div class="flex justify-between items-center w-full px-gutter max-w-container-max mx-auto h-16">
            <div class="flex items-center gap-8">
                <span class="font-display-lg-mobile text-display-lg-mobile font-bold text-on-surface">Ink &amp; Paper</span>
                <nav class="hidden md:flex gap-6 items-center">
                    <a class="text-on-surface-variant font-medium hover:text-primary transition-colors duration-200 font-ui-label text-ui-label"
                        href="/">Feed</a>
                    <a class="text-on-surface-variant font-medium hover:text-primary transition-colors duration-200 font-ui-label text-ui-label"
                        href="#">Authors</a>
                    <a class="text-primary font-bold border-b-2 border-primary pb-1 font-ui-label text-ui-label"
                        href="/dashboard">Dashboard</a>
                </nav>
            </div>
            <div class="flex items-center gap-4">
                <div
                    class="hidden sm:flex items-center bg-surface-container px-3 py-1.5 rounded-lg border border-outline-variant">
                    <span class="material-symbols-outlined text-[20px] text-on-surface-variant">search</span>
                    <span class="ml-2 text-ui-label font-ui-label text-on-surface-variant">Search posts...</span>
                </div>
                <div class="flex items-center gap-3">
                    <button
                        class="material-symbols-outlined text-on-surface-variant hover:text-primary transition-all">notifications</button>
                    <button
                        class="material-symbols-outlined text-on-surface-variant hover:text-primary transition-all">bookmark</button>
                    <button
                        class="bg-primary-container text-on-primary font-ui-button text-ui-button px-4 py-2 rounded-lg hover:opacity-90 active:scale-95 transition-all">Create
                        Post</button>
                    <div class="w-8 h-8 rounded-full overflow-hidden border border-outline-variant">
                        <img alt="User Avatar" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjAxuQeoICgOY4t7S5mACIwKwONV7tjvi47xvwzkaPNi_V-X1qfudvkO9zDzzlNKQ3QkEiiSxmmjt-kgIODbbcdpPj_y7JMJ3tLBpvpFEAp-efcopWL6y8z0dA4LbkekE6ZNlMzG1oTS2YtIkP2P3l9j_Rbkf7fQ_Z55XaOU1ow0z4qmOxbYRyR1brPu3FUEX483DtAYwMXlehzs9SLnESOkMSKofD0ypN6nsJ4RlwbNOao_uTKPI0zxdDN-kzuTkau9v2ajIyTrzY" />
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="max-w-container-max mx-auto px-gutter py-10">
        @yield('page-content')
    </main>
@endsection
