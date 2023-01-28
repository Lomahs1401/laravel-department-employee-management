<x-layout>
    @if(count($employees) == 0)
        <h1 class="text-4xl text-center my-2">Phòng ban {{$department->description}} chưa có nhân viên</h1>
    @else
        <h1 class="text-4xl text-center my-2">Danh sách nhân viên của phòng ban {{$department->description}}</h1>
        <table class="table-auto border border-slate-600 border-collapse text-center mx-auto">
            <thead class="text-white bg-black font-bold text-xl">
                <tr>
                    <th class="border border-slate-600 px-6 py-2">ID</th>
                    <th class="border border-slate-600 px-6 py-2">Tên nhân viên</th>
                    <th class="border border-slate-600 px-6 py-2">Địa chỉ</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                    <tr class="hover:bg-slate-200">
                        <td class="border border-slate-600 px-6 py-2">{{$employee->id}}</td>
                        <td class="border border-slate-600 px-6 py-2">{{$employee->name}}</td>
                        <td class="border border-slate-600 px-6 py-2">{{$employee->address}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/departments" class="bg-blue-500 px-4 py-2 m-auto inline-block text-white rounded-full text-2xl">Back</a>
    @endif
</x-layout>