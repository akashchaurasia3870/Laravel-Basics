<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-semibold text-center mb-6">Student Information</h1>
        
        <div class="bg-white shadow-md rounded-lg p-6">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="border-b">
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Name</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Age</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Roll No</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">City</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">City Code</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr class="border-b">
                        <td class="px-4 py-2 text-sm">{{ $student->name }}</td>
                        <td class="px-4 py-2 text-sm">{{ $student->age }}</td>
                        <td class="px-4 py-2 text-sm">{{ $student->rollno }}</td>
                        <td class="px-4 py-2 text-sm">{{ $student->city }}</td>
                        <td class="px-4 py-2 text-sm">{{ $student->city_code }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
