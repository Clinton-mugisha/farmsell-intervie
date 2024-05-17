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
            <a href="{{ route('user')}}" class="mr-4">Users</a>
            <a href="{{ route('logout') }}">Log Out</a>

        </div>
        </div>
        <!-- Rest of your dashboard content -->
    </body>
    </html>

    <script>
        function changeButton() {
        var button = document.getElementById("timeButton");
        if (button.innerHTML === "Time in") {
            button.innerHTML = "Time Out";
            button.classList.remove("bg-green-500");
            button.classList.add("bg-red-500");
        } else {
            button.innerHTML = "Time in";
            button.classList.remove("bg-red-500");
            button.classList.add("bg-green-500");
        }
        }
    </script>
    </div>
    <div class="flex flex-col items-center mt-10">
        <span class="text-4xl font-bold">{{ date('H:i') }} Hrs</span>
        <span class="text-lg">{{ date('D, d/M/y') }}</span>
        <form id="timeForm" action="{{route('timeIn')}}" method="POST" style="display: inline;">
    @csrf
    <input type="hidden" name="date" value="{{ date('Y-m-d') }}">
    <input type="hidden" name="time_in" value="{{ date('H:i') }}">
        <button id="timeButton" type='submit' class="mt-4 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" onclick="changeButton()">Time in</button>
    </form>
    </div>
    <!-- Rest of your dashboard content -->
</body>
</html>
