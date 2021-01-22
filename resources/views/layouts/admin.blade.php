<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title') </title>

  @include('includes.admin.style')
</head>

<body>
  <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
    @include('includes.admin.sidebar')
    <div class="flex flex-col flex-1 w-full">

      @include('includes.admin.navbar')

      @yield('content')



      @include('includes.admin.footer')
    </div>
  </div>
  @include('sweetalert::alert')
  @include('includes.admin.script')
</body>

</html>