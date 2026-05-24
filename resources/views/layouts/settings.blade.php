@extends('layouts.dashboard')

@section('page-content')
    <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
        <!-- Settings Sidebar -->
        <aside class="md:col-span-3">
            <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-6">
                <h3 class="font-headline-md text-headline-md text-on-surface mb-6">Settings</h3>
                <nav class="space-y-2">
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg font-ui-label text-ui-label text-on-surface hover:bg-surface-container transition-colors"
                        href="/settings/account">
                        <span class="material-symbols-outlined">account_circle</span>
                        Account
                    </a>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg font-ui-label text-ui-label text-on-surface hover:bg-surface-container transition-colors"
                        href="/settings/profile">
                        <span class="material-symbols-outlined">person</span>
                        Profile
                    </a>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg font-ui-label text-ui-label text-on-surface hover:bg-surface-container transition-colors"
                        href="/settings/notifications">
                        <span class="material-symbols-outlined">notifications</span>
                        Notifications
                    </a>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg font-ui-label text-ui-label text-on-surface hover:bg-surface-container transition-colors"
                        href="/settings/security">
                        <span class="material-symbols-outlined">security</span>
                        Security
                    </a>
                </nav>
            </div>
        </aside>

        <!-- Settings Content -->
        <div class="md:col-span-9">
            @yield('settings-content')
        </div>
    </div>
@endsection
