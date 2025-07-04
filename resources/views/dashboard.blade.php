@extends('layouts.authenticated')

@section('page-title', 'Dashboard')
@section('page-subtitle', 'Welcome back, ' . auth()->user()->name)

@section('content')
    <div class="space-y-6">
        <!-- Welcome Section -->
        <x-ui.card>
            <h1 class="text-2xl font-bold mb-2">Welcome back, {{ auth()->user()->name }}!</h1>
            <p class="text-gray-600 mb-4">You're successfully logged in to your Bible reading journey.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
                <div class="p-3 bg-gray-50 rounded border">
                    <div class="font-medium text-gray-700">Account Status</div>
                    <div class="text-gray-600">✅ Active</div>
                </div>
                <div class="p-3 bg-gray-50 rounded border">
                    <div class="font-medium text-gray-700">Email</div>
                    <div class="text-gray-600">{{ auth()->user()->email }}</div>
                </div>
                <div class="p-3 bg-gray-50 rounded border">
                    <div class="font-medium text-gray-700">Member Since</div>
                    <div class="text-gray-600">{{ auth()->user()->created_at->format('M j, Y') }}</div>
                </div>
            </div>
        </x-ui.card>

        <!-- MVP Status Notice -->
        <x-ui.card class="bg-yellow-50 border-yellow-200">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-yellow-600" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-yellow-800">MVP Development Status</h3>
                    <div class="mt-2 text-sm text-yellow-700">
                        <p>You're seeing the authenticated dashboard! 🎉 The core Bible reading features will be implemented in the coming weeks according to our development roadmap.</p>
                    </div>
                </div>
            </div>
        </x-ui.card>

        <!-- Quick Actions -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <x-ui.card>
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-700 ml-3">Log Reading</h3>
                </div>
                <p class="text-gray-600 text-sm mb-4">Record your daily Bible reading progress (Coming in Week 3)</p>
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 border border-yellow-200">
                    In Development
                </span>
            </x-ui.card>

            <x-ui.card>
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2-2v16a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-700 ml-3">View History</h3>
                </div>
                <p class="text-gray-600 text-sm mb-4">See your reading calendar and streaks (Coming in Week 5)</p>
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 border border-yellow-200">
                    In Development
                </span>
            </x-ui.card>

            <x-ui.card>
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-700 ml-3">View Statistics</h3>
                </div>
                <p class="text-gray-600 text-sm mb-4">Track your progress and achievements (Coming in Week 6)</p>
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 border border-yellow-200">
                    In Development
                </span>
            </x-ui.card>
        </div>

        <!-- Demo Link -->
        <x-ui.card class="bg-blue-50 border-blue-200">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-blue-800">Try the Demo</h3>
                    <div class="mt-2 text-sm text-blue-700">
                        <p>While we build the full features, you can preview how the app will work by visiting the <a href="{{ route('demo') }}" class="font-medium underline hover:no-underline">interactive demo</a>.</p>
                    </div>
                </div>
            </div>
        </x-ui.card>
    </div>
@endsection

@section('sidebar')
    <div class="space-y-6">
        <!-- User Profile Card -->
        <x-ui.card class="bg-gray-50">
            <h4 class="font-semibold text-gray-700 mb-3">Your Profile</h4>
            <div class="flex items-center mb-3">
                <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white text-lg font-medium">
                    {{ substr(auth()->user()->name, 0, 1) }}
                </div>
                <div class="ml-3">
                    <p class="font-medium text-gray-700">{{ auth()->user()->name }}</p>
                    <p class="text-sm text-gray-500">{{ auth()->user()->email }}</p>
                </div>
            </div>
            <div class="text-xs text-gray-500">
                Member since {{ auth()->user()->created_at->format('F j, Y') }}
            </div>
        </x-ui.card>

        <!-- Quick Actions -->
        <x-ui.card class="bg-gray-50">
            <h4 class="font-semibold text-gray-700 mb-3">Quick Actions</h4>
            <div class="space-y-2">
                <a href="{{ route('profile') }}" class="block w-full text-left px-3 py-2 text-sm text-gray-600 hover:bg-white rounded border border-transparent hover:border-gray-200">
                    Edit Profile
                </a>
                <a href="{{ route('demo') }}" class="block w-full text-left px-3 py-2 text-sm text-gray-600 hover:bg-white rounded border border-transparent hover:border-gray-200">
                    View Demo
                </a>
                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <button type="submit" class="w-full text-left px-3 py-2 text-sm text-gray-600 hover:bg-white rounded border border-transparent hover:border-gray-200">
                        Sign Out
                    </button>
                </form>
            </div>
        </x-ui.card>

        <!-- Development Timeline -->
        <x-ui.card class="bg-gray-50">
            <h4 class="font-semibold text-gray-700 mb-3">Development Progress</h4>
            <div class="space-y-3 text-sm">
                <div class="flex items-center justify-between">
                    <span class="text-gray-600">Week 1-2: Foundation</span>
                    <span class="text-green-600 font-medium">✅ Complete</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-gray-600">Week 3: Reading Log</span>
                    <span class="text-yellow-600 font-medium">🔄 In Progress</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-gray-600">Week 4: Streaks</span>
                    <span class="text-gray-400">⏳ Planned</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-gray-600">Week 5: Visualization</span>
                    <span class="text-gray-400">⏳ Planned</span>
                </div>
            </div>
        </x-ui.card>
    </div>
@endsection 