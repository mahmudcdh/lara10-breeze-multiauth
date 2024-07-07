@extends('admin.layouts.template')

@section('pageTitle', 'Admin Dashboard')

@section('content')
<div>
    <h2 class="head_text">Admin Dashboard</h2>

    <p id="demo" class="text-3xl text-gray-700 hover:text-gray-900 hover:bg-green-900 transition-colors py-2"></p>

    <button class="black_btn" onclick="myFunction()">Click me</button>
</div>

    <script>
        function myFunction() {
            $("#demo").html("Hello World");
            successToast("Hello Admin..!");
        }
    </script>
@endsection
