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
            <a href="#" class="mr-4">Report</a>
            <a href="#" class="mr-4">Users</a>
            <a href="#">Log Out</a>
        </div>
    </div>
    <!-- Rest of your dashboard content -->
    <div class="flex flex-col items-center mt-10">
        <span class="text-4xl font-bold">{{ date('H:i') }} Hrs</span>
        <span class="text-lg">{{ date('D, d/M/y') }}</span>
        <form id="timeForm" action="{{ route('timeOut') }}" method="POST" style="display: inline;">
    @csrf
    <input type="hidden" name="date" value="{{ date('Y-m-d') }}">
    <input type="hidden" name="time_out" value="{{ date('H:i') }}">
    <button id="timeButton" type="submit" class="mt-4 bg-red-500  text-white font-bold py-2 px-4 rounded">Time  Out</button>
</form>
</body>
</html>
