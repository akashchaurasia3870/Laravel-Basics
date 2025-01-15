<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="container mx-auto p-6 max-w-4xl">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h1 class="text-3xl font-semibold text-gray-800 mb-6">User Details</h1>
            
            <div class="space-y-4">
                <div class="flex items-center">
                    <h3 class="text-lg font-medium text-gray-600 w-32">ID:</h3>
                    <p class="text-gray-800">{{ $data->id }}</p>
                </div>

                <div class="flex items-center">
                    <h3 class="text-lg font-medium text-gray-600 w-32">Name:</h3>
                    <p class="text-gray-800">{{ $data->name }}</p>
                </div>

                <div class="flex items-center">
                    <h3 class="text-lg font-medium text-gray-600 w-32">Email:</h3>
                    <p class="text-gray-800">{{ $data->email }}</p>
                </div>

                <div class="flex items-center">
                    <h3 class="text-lg font-medium text-gray-600 w-32">Age:</h3>
                    <p class="text-gray-800">{{ $data->age }}</p>
                </div>

                <div class="flex items-center">
                    <h3 class="text-lg font-medium text-gray-600 w-32">City:</h3>
                    <p class="text-gray-800">{{ $data->city }}</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
