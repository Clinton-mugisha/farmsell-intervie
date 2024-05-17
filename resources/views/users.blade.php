<!DOCTYPE html>
<html>
<head>
    <title>Clocking App</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="navbar bg-green-400 py-2 px-4 flex justify-between items-center">
        <div class="flex flex-col">
            <span class="text-xl font-bold"><a href="{{ route('dashboard')}}">Clocking</a></span>
            <span class="ml-2">{{ auth()->user()->email }}</span>
        </div>
        <div class="flex items-center">
            <a href="{{ route('report')}}" class="mr-4">Report</a>
            <a href="#" class="mr-4">Users</a>
            <a href="{{ route('logout') }}">Log Out</a>

        </div>
    </div>
    <div class="flex">
        <div class="w-1/4 p-4">
            <h2 class="text-lg font-bold">User Information</h2>
            <p class="mt-2">Name: {{ auth()->user()->name }}</p>
            <p class="mt-2">Email: {{ auth()->user()->email }}</p>
        </div>
        <div class="w-3/4 p-4">
            <div class="flex justify-between items-center">
                <h2 class="text-lg font-bold">Users</h2>
                <a href="{{ route('addUser') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Add User
                </a>
            </div>
            <table class="w-full mt-2 rounded border-collapse border-2 border-gray-500 text-left">
                <thead>
                    <tr>
                        <th class="border-2 border-gray-400 px-4 py-2">Unique ID</th>
                        <th class="border-2 border-gray-400 px-4 py-2">Name</th>
                        <th class="border-2 border-gray-400 px-4 py-2">Email</th>
                        <th class="border-2 border-gray-400 px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @if(isset($users))
                    @foreach ($users as $user)
                        <tr>
                            <td class="border-2 border-gray-400 px-4 py-2">{{ $user->id }}</td>
                            <td class="border-2 border-gray-400 px-4 py-2">{{ $user->name }}</td>
                            <td class="border-2 border-gray-400 px-4 py-2">{{ $user->email }}</td>
                            <td class="border-2 border-gray-400 px-4 py-2">
                                <a href="{{ route('editUser', ['id' => $user->id]) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                                    Edit
                                </a> |
                                <a href="{{ route('deleteUser', ['id' => $user->id]) }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                    Delete
                                </a>
                                
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
    <!-- Rest of your dashboard content -->
</body>
</html>
