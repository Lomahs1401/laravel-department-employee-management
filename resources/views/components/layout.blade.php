<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Quản lý phòng ban nhân sự</title>
  <link rel="icon" href="..public/favicon.ico" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="//unpkg.com/alpinejs" defer></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
        theme: {
          extend: {
            colors: {
              laravel: '#ef3b2d',
            },
          },
        },
      }
  </script>
</head>

<body>
    <nav class="flex bg-blue-500 justify-between items-center mb-4 px-4 py-2">
        <a href="/">
            <img class="w-24 logo" src="{{asset('img/logo.jpg')}}" alt="Logo" />
        </a>
        <h2 class="text-white text-4xl">
          Quản lý phòng ban nhân sự với Laravel
        </h2>
        <ul class="flex space-x-6 mr-6 text-lg">
          @auth
            <li>
              <span class="font-bold uppercase">
                Welcome {{auth()->user()->name}}
              </span>
            </li>
            {{-- <li>
              <a href="/listings/manage" class="hover:text-laravel"><i class="fa-solid fa-gear"></i> Manage Listings</a>
            </li> --}}
            <li>
              <form class="inline" method="POST" action="/logout">
                @csrf
                <button type="submit">
                  <i class="fa-solid fa-door-closed"></i> Đăng xuất
                </button>
              </form>
            </li>
          @else
            <li>
              <a href="/register" class="text-white hover:text-blue-200"><i class="fa-solid fa-user-plus"></i> Đăng ký</a>
            </li>
            <li>
              <a href="/login" class="text-white hover:text-blue-200"><i class="fa-solid fa-arrow-right-to-bracket"></i> Đăng nhập</a>
            </li>
          @endauth
        </ul>
    </nav>

    <main>
        {{$slot}}
    </main>

    <footer class="w-full flex items-center justify-center font-bold bg-blue-500 text-white h-24 m-auto opacity-90 mt-4">
      <p class="ml-2 text-xl">Copyright &copy; 2023, All Rights reserved</p>
    </footer>
</body>

</html>