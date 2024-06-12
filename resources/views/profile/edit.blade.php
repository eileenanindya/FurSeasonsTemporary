<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>
<body>
    <div class="main-container">
        @include('components.navigation')
        <div class="profile-container">
            <x-app-layout>
                <x-slot name="header">
                    <h2 class="profile-title">
                        {{ __('Profile') }}
                    </h2>
                </x-slot>
                
                <form action="{{ URL('/add_profile') }}" method="POST">
        @csrf
        <div class="edit-profile">
            <input type="text" class="input-address" name="address" placeholder="Enter your address" value="{{ $profile->address ?? '' }}">
            <input type="text" class="input-address" name="phone_number" placeholder="Enter your phone number" value="{{ $profile->phone_number ?? '' }}">
        </div>
        <input type="submit" value="Save changes">
    </form>
                

                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                @include('profile.partials.update-profile-information-form')
                            </div>
                        </div>

                        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                @include('profile.partials.update-password-form')
                            </div>
                        </div>

                        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                @include('profile.partials.delete-user-form')
                            </div>
                        </div>
                    </div>
                </div>
            </x-app-layout>
        </div>
        
        @include('components.footer')
    </div>
    
</body>
</html>
