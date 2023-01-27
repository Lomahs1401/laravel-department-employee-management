<x-layout>
    {{-- Flex container --}}
    <div class="flex flex-col items-center justify-between">
        {{-- Image Container --}}
        <div id="image-container" class="flex justify-between items-center">
            {{-- Employee Container --}}
            <img src="{{asset('img/employee.jpg')}}" alt="Employee" width="500px" height="300px">
            {{-- Department Container --}}
            <img src="{{asset('img/department.png')}}" alt="Department" width="500px" height="300px">
        </div>
        {{-- Main Container --}}
        <div id="main-container" class="flex flex-row items-center space-x-10 justify-between w-1/3">
            <div id="employee-container">
                <h1 class="text-4xl text-center my-4">Quản lý nhân sự</h1>
                <div class="flex flex-col items-center justify-between space-y-2">
                    <button class="p-3 px-6 pt-2 bg-blue-500 text-white rounded-full baseline hover:bg-blue-300">
                        <a href="/employees">Xem danh sách nhân viên</a>
                    </button>
                    <button class="p-3 px-6 pt-2 bg-blue-500 text-white rounded-full baseline hover:bg-blue-300">
                        <a href="#">Thêm mới nhân viên</a>
                    </button>
                    <button class="p-3 px-6 pt-2 bg-blue-500 text-white rounded-full baseline hover:bg-blue-300">
                        <a href="#">Cập nhật nhân viên</a>
                    </button>
                    <button class="p-3 px-6 pt-2 bg-blue-500 text-white rounded-full baseline hover:bg-blue-300">
                        <a href="#">Xóa sách nhân viên</a>
                    </button>
                    <button class="p-3 px-6 pt-2 bg-blue-500 text-white rounded-full baseline hover:bg-blue-300">
                        <a href="#">Tìm kiếm nhân viên</a>
                    </button>
                </div>
            </div>
            <div id="department-container">
                <h1 class="text-4xl text-center my-4">Quản lý phòng ban</h1>
                <div class="flex flex-col items-center justify-between space-y-2">
                    <button class="p-3 px-6 pt-2 bg-blue-500 text-white rounded-full baseline hover:bg-blue-300">
                        <a href="#">Xem danh sách phòng ban</a>
                    </button>
                    <button class="p-3 px-6 pt-2 bg-blue-500 text-white rounded-full baseline hover:bg-blue-300">
                        <a href="#">Thêm mới phòng ban</a>
                    </button>
                    <button class="p-3 px-6 pt-2 bg-blue-500 text-white rounded-full baseline hover:bg-blue-300">
                        <a href="#">Cập nhật phòng ban</a>
                    </button>
                    <button class="p-3 px-6 pt-2 bg-blue-500 text-white rounded-full baseline hover:bg-blue-300">
                        <a href="#">Xóa sách phòng ban</a>
                    </button>
                    <button class="p-3 px-6 pt-2 bg-blue-500 text-white rounded-full baseline hover:bg-blue-300">
                        <a href="#">Tìm kiếm phòng ban</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-layout>