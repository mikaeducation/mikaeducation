<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register | Mika Education</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('public/assets/css/style.css')
    </head>
    <body>
        <div id="profilePopup" class="fixed top-0 right-0 w-full h-full bg-gray-900 bg-opacity-50 z-50 hidden"></div>
            <!-- Profile Headbar -->


            <!-- Profile Icon -->
            <div class="profile-icon">
                <img src="{{ asset('images/Profile.svg') }}" alt="Profile Icon">
            </div>

            <!-- Profile Content -->
            <div class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg shadow-lg p-4">
                <p>Username: Ahmad Rayhan </p>
                <p>Username: Ahmad Rayhan </p>
                <p>Username: Ahmad Rayhan </p>
                <p>Username: Ahmad Rayhan </p>
                <p>Username: Ahmad Rayhan </p>
            </div>

            <!-- Close Button -->
            <button id="closeButton" class="text-white bg-blue-500 hover:bg-blue-700 px-4 py-2 rounded-md focus:outline-none">Close</button>
        </div>
    </body>
</html>
