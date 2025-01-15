
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>
</head>
<body>
    <div class="container mx-auto p-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Users</h1>
            <a href="{{ route('user.view') }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
                Create User
            </a>
        </div>
    
        <div class="overflow-x-auto shadow-md rounded-lg">
            <table class="min-w-full bg-white border border-2">
                <thead>
                    <tr class="bg-gray-100 text-gray-600">
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Name</th>
                        <th class="py-2 px-4 border-b">Age</th>
                        <th class="py-2 px-4 border-b">Email</th>
                        <th class="py-2 px-4 border-b">Phone</th>
                        <th class="py-2 px-4 border-b">Address</th>
                        <th class="py-2 px-4 border-b">View</th>
                        <th class="py-2 px-4 border-b">Delete</th>
                        <th class="py-2 px-4 border-b">Update</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="text-gray-700">
                            <td class="py-2 px-4 border-b">{{ $user->id }}</td>
                            <td class="py-2 px-4 border-b">{{ $user->name }}</td>
                            <td class="py-2 px-4 border-b">{{ $user->age }}</td>
                            <td class="py-2 px-4 border-b">{{ $user->email }}</td>
                            <td class="py-2 px-4 border-b">{{ $user->phone }}</td>
                            <td class="py-2 px-4 border-b">{{ $user->address }}</td>
                            <td class="py-2 px-4 border-b space-x-2">
                                <a href="{{ route('user.read', $user->id) }}" class="text-yellow-500 hover:text-yellow-700">
                                    View
                                </a>
                            </td>
                            <td class="py-2 px-4 border-b space-x-2">
                                <form action="{{ route('user.delete', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700">
                                        Delete
                                    </button>
                                </form>
                            </td>
                            <td class="py-2 px-4 border-b space-x-2">
                                <a href="{{ route('user.edit', $user->id) }}" class="text-yellow-500 hover:text-yellow-700">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="my-5">
                {{$users->links()}}
            </div>

            {{-- <div class="my-5">
               Total User : {{$users->total()}}
            </div> --}}
        </div>
    </div>
    
</body>
</html>