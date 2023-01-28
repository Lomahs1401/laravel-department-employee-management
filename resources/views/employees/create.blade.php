<x-layout>
    {{-- Flex Container --}}
    <div class="flex flex-row justify-start items-center">
        <div class="mx-auto bg-gray-200 px-4 py-6 pt-3 mt-20 w-2/5 rounded-xl">
            <h1 class="text-4xl text-center mb-4">Thêm mới nhân viên</h1>
            <form action="/employees" method="POST">
                @csrf
                {{-- Form container --}}
                <div class="rounded-xl p-4 bg-gray-200 w-auto">
                    <div class="mb-6">
                        <label for="fullname" class="block mb-2 text-md font-medium text-black dark:text-white">Họ và tên:</label>
                        <input type="text" id="fullname" class="bg-gray-50 border border-gray-300 
                            text-black text-sm rounded-lg block w-full p-2.5
                            focus:outline-none focus:ring-blue-500 focus:border-blue-500
                            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                            dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                            placeholder="Nhập họ và tên" value="{{old('fullname')}}" name="fullname">
                        @error('fullname')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="address" class="block mb-2 text-md font-medium text-black dark:text-white">Địa chỉ:</label>
                        <input type="text" id="address" class="bg-gray-50 border border-gray-300 
                        text-black text-sm rounded-lg block w-full p-2.5
                            focus:outline-none focus:ring-blue-500 focus:border-blue-500
                            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                            dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                            placeholder="Nhập địa chỉ" value="{{old('address')}}" name="address">
                        @error('address')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="department" class="block mb-2 text-md font-medium text-black dark:text-white">Phòng ban:</label>
                        <input type="text" id="department" class="bg-gray-50 border border-gray-300 
                        text-black text-sm rounded-lg block w-full p-2.5
                            focus:outline-none focus:ring-blue-500 focus:border-blue-500
                            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                            dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                            placeholder="Nhập địa chỉ" value="{{old('department')}}" name="department">
                        @error('department')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="w-full flex justify-between">
                        <a href="/" class="text-center text-white text-lg p-2 mx-4 w-1/4 bg-green-500 rounded-md m-auto hover:bg-green-400">Back</a>
                        <button type="reset" class="p-2 mx-4 w-1/4 bg-gray-500 rounded-md m-auto hover:bg-gray-400">
                            <h2 class="text-center text-white text-lg">Hủy</h2>
                        </button>
                        <button type="submit" class="p-2 mx-4 w-1/4 bg-blue-500 rounded-md m-auto hover:bg-blue-400">
                            <h2 class="text-center text-white text-lg">Xác nhận</h2>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>