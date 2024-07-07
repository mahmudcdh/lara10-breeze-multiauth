@extends('admin.layouts.template')

@section('pageTitle')
    <h2>{{ $user->name }} Profile</h2>
@endsection

@section('content')
    <div class="min-h-32 bg-gray-100 shadow-md rounded-md mb-6 flex flex-row justify-between">
        <div class="px-10 py-3">
            <h2 class="mb-2">Name: <span class="font-bold text-sm italic">{{ $user->name }}</span></h2>
            <h2 class="mb-2">Contact: <span class="font-bold text-sm italic">{{ $user->phone }}</span></h2>
            <h2 class="mb-2">Email: <span class="font-bold text-sm italic">{{ $user->email }}</span></h2>
            <h2 class="mb-2">Role: <span class="font-bold text-sm italic">{{ $user->role }}</span></h2>
        </div>
        <div class="px-10 py-3">
            <a href="{{ route('admin.dashboard') }}" class="bg-slate-500 hover:bg-slate-700 hover:text-white text-white text-xs font-medium rounded px-3 py-2 transition-colors">Back to Home</a>
        </div>
    </div>

    <div class="min-h-32 bg-gray-100 shadow-md rounded-md py-5">
        <div class="px-10 py-3">
            <label for="password" class="px-2 text-sm">Password :</label>
            <input type="password" name="password" id="password" class="text-sm rounded-md py-1" required>
        </div>
        <div class="px-10">
            <label for="cpassword" class="px-2 text-sm">Confirm Password :</label>
            <input type="password" name="cpassword" id="cpassword" class="text-sm rounded-md py-1" confirmed="password" required>
        </div>
        <div class="px-10 py-3">
            <button onclick="updatePassword()" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold rounded px-3 py-2 transition-colors">Update Password</button>
        </div>
    </div>

    <script>
        async function updatePassword(){
            let password = $('#password').val();
            let cpassword = $('#cpassword').val();

            if(password.length === 0 ){
                errorToast('Password is required');
            }else if(cpassword.length === 0){
                errorToast('Confirm Password is required');
            }else if(password !== cpassword){
                errorToast('Password does not match');
            }

            let res = await axios.put(`{{ route('admin.update-password') }}`, {
                password: password,
            });

            if(res.data.success){
                successToast(res.data.message);
                window.location.reload();
            }else{
                errorToast(res.data.message);
            }
        }
    </script>
@endsection
