<!DOCTYPE html>
<html>
<head>
    <title>Clocking App</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="navbar bg-green-400 py-2 px-4 flex justify-between items-center">
        <div class="flex flex-col">
            <span class="text-xl font-bold">Clocking</span>
            <span class="ml-2">{{ auth()->user()->email }}</span>
        </div>
        <div class="flex items-center">
            <a href="{{ route('report')}}" class="mr-4">Report</a>
            <a href="#" class="mr-4">Users</a>
            <a href="#">Log Out</a>
        </div>
    </div>
    <div class="flex">
        <div class="w-1/4 p-4">
            <h2 class="text-lg font-bold">User Information</h2>
            <p class="mt-2">Name: {{ auth()->user()->name }}</p>
            <p class="mt-2">Email: {{ auth()->user()->email }}</p>
        </div>
        <div class="w-3/4 p-4">
            <h2 class="text-lg font-bold">Logs</h2>
            <table class="w-full mt-2 rounded border-collapse border-2 border-gray-500 text-left">
                <thead>
                    <tr>
                        <th class="border-2 border-gray-400 px-4 py-2">Date</th>
                        <th class="border-2 border-gray-400 px-4 py-2">Time In</th>
                        <th class="border-2 border-gray-400 px-4 py-2">Time Out</th>
                    </tr>
                </thead>
                <tbody>
                @if(isset($user->timeLogs))
                    @foreach ($timeLogs as $timeLog)
                        <tr>
                            <td class="border-2 border-gray-400 px-4 py-2">{{ $timeLog->date }}</td>
                            <td class="border-2 border-gray-400 px-4 py-2">{{ $timeLog->time_in }}</td>
                            <td class="border-2 border-gray-400 px-4 py-2">{{ $timeLog->time_out }}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
        
    <!-- Rest of your dashboard content -->
</body>
</html>
