<div class="py-2 px-6 bg-white flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
    <button type="button" class="text-lg text-gray-600 sidebar-toggle">
        <i class="ri-menu-line"></i>
    </button>
    <ul class="flex items-center text-sm ml-4">
        <li class="mr-2 font-semibold">
             @yield('pageTitle')
        </li>
    </ul>
    <ul class="ml-auto flex items-center">
        <li class="dropdown ml-3">
            <button type="button" class="dropdown-toggle flex items-center">
                <i class="ri-user-line w-7 h-6 bg-green-200 rounded-full block object-cover align-middle"></i>
                <!-- <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle"> -->
            </button>
            <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                <li>
                    <!-- <a href="{{ route('admin.profile') }}" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a> -->
                    <a href="{{ route('admin.profile') }}" class="dropdown_link">Profile</a>
                </li>
                <li>
                    <!-- <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a> -->
                    <a href="#" class="dropdown_link">Settings</a>
                </li>
                <li>
                    <!-- <a href="{{ route('logout') }}" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50" -->
                    <a href="{{ route('logout') }}" class="dropdown_link"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</div>
