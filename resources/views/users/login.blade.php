<x-layout>
    {{-- Flex Container --}}
    <div class="flex flex-row justify-start items-center">
        <div class="mx-auto bg-blue-300 px-4 py-6 pt-3 mt-20 w-2/5 rounded-xl">
            <h1 class="text-4xl text-center mb-4">Đăng Nhập</h1>
            <form action="/users/authenticate" method="POST">
                @csrf
                {{-- Form container --}}
                <div class="rounded-xl p-4 bg-white w-auto">
                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-md font-medium text-black dark:text-white">Username:</label>
                        <input type="text" id="name" class="bg-gray-50 border border-gray-300 
                            text-black text-sm rounded-lg block w-full p-2.5
                            focus:outline-none focus:ring-blue-500 focus:border-blue-500
                            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                            dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                            placeholder="Enter username" value="{{old('name')}}" name="name">
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block mb-2 text-md font-medium text-black dark:text-white">Password:</label>
                        <input type="password" id="password" class="bg-gray-50 border border-gray-300 
                        text-black text-sm rounded-lg block w-full p-2.5
                            focus:outline-none focus:ring-blue-500 focus:border-blue-500
                            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                            dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                            placeholder="Enter password" value="{{old('password')}}" name="password">
                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="w-full flex">
                        <button type="submit" class="p-2 w-1/3 bg-blue-500 rounded-md m-auto hover:bg-blue-400">
                            <h2 class="text-center text-white text-lg">Đăng nhập</h2>
                        </button>
                    </div>
                    <div class="mt-8 text-center">
                        <p>
                          Chưa có tài khoản?
                          <a href="/register" class="text-blue-500">Đăng ký tại đây</a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>
