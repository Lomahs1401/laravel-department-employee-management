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
                    <a href="/employees" class="p-3 px-6 pt-2 bg-blue-500 text-white rounded-full baseline hover:bg-blue-300">
                        Xem danh sách nhân viên
                    </a>
                    <a href="#" class="p-3 px-6 pt-2 bg-blue-500 text-white rounded-full baseline hover:bg-blue-300">
                        Thêm mới nhân viên
                    </a>
                    <a href="#" class="p-3 px-6 pt-2 bg-blue-500 text-white rounded-full baseline hover:bg-blue-300">
                        Cập nhật nhân viên
                    </a>
                    <a href="#" class="p-3 px-6 pt-2 bg-blue-500 text-white rounded-full baseline hover:bg-blue-300">
                        Xóa sách nhân viên
                    </a>
                    <a href="#" class="p-3 px-6 pt-2 bg-blue-500 text-white rounded-full baseline hover:bg-blue-300">
                        Tìm kiếm nhân viên
                    </a>
                </div>
            </div>
            <div id="department-container">
                <h1 class="text-4xl text-center my-4">Quản lý phòng ban</h1>
                <div class="flex flex-col items-center justify-between space-y-2">
                    <a href="/departments" class="p-3 px-6 pt-2 bg-blue-500 text-white rounded-full baseline hover:bg-blue-300">
                        Xem danh sách phòng ban
                    </a>
                    <a href="#" class="p-3 px-6 pt-2 bg-blue-500 text-white rounded-full baseline hover:bg-blue-300">
                        Thêm mới phòng ban
                    </a>
                    <a href="#" class="p-3 px-6 pt-2 bg-blue-500 text-white rounded-full baseline hover:bg-blue-300">
                        Cập nhật phòng ban
                    </a>
                    <a href="#" class="p-3 px-6 pt-2 bg-blue-500 text-white rounded-full baseline hover:bg-blue-300">
                        Xóa sách phòng ban
                    </a>
                    <a href="#" class="p-3 px-6 pt-2 bg-blue-500 text-white rounded-full baseline hover:bg-blue-300">
                        Tìm kiếm phòng ban
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>