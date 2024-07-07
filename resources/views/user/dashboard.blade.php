@extends('user.layouts.template')

@section('content')
<div class="px-6 py-2">
    <h2 class="text-3xl">User Dashboard</h2>

    <p id="demo" class="text-3xl text-gray-700 hover:text-gray-900 hover:bg-green-900 transition-colors py-2"></p>

    <button class="bg-slate-500 hover:bg-slate-700 text-white font-bold py-2 px-4 rounded transition-colors" onclick="myFunction()">Click User</button>
</div>

    <script>
        function myFunction() {
            $("#demo").html("Hello World");
            successToast("Hello User..!");
        }
    </script>
@endsection
