<x-layout>
    @if(count($employees) == 0)
        <h1 class="text-4xl text-center my-2">Chưa có nhân viên trong hệ thống</h1>
    @else
        <h1 class="text-4xl text-center my-2">Danh sách nhân viên</h1>
        <table class="table-auto border border-slate-600 border-collapse text-center mx-auto">
            <thead class="text-white bg-black font-bold text-xl">
                <tr>
                    <th class="border border-slate-600 px-6 py-2">ID</th>
                    <th class="border border-slate-600 px-6 py-2">Họ và tên</th>
                    <th class="border border-slate-600 px-6 py-2">Địa chỉ</th>
                    <th class="border border-slate-600 px-6 py-2">Chi tiết</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                    <tr class="hover:bg-slate-200">
                        <td class="border border-slate-600 px-6 py-2">{{$employee->id}}</td>
                        <td class="border border-slate-600 px-6 py-2">{{$employee->name}}</td>
                        <td class="border border-slate-600 px-6 py-2">{{$employee->address}}</td>
                        <td class="border border-slate-600 px-6 py-2">
                            <a href="/employees/{{$employee->id}}" class="text-blue-500">Chi tiết</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/" class="bg-blue-500 px-4 py-2 m-auto inline-block text-white rounded-full text-2xl">Back</a>
    @endif
</x-layout>