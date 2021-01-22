<!-- Desktop sidebar -->
<aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
  <div class="py-4 text-gray-500 dark:text-gray-400">
    <img src="{{ asset('img/logo.svg')}}" alt=""
      class="inline-flex ml-3 items-center transform transition hover:scale-125 duration-300 ease-in-out" />
    <a class="ml-3 text-lg font-bold text-gray-800 dark:text-gray-200" href="/">
      PENGKAT
    </a>
    <ul class="mt-6">
      <li class="relative px-6 py-3">
        <span
          class="{{ (request()->routeIs('dashboard')) ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : '' }} "
          aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold  transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
          href="{{ route('dashboard')}} ">
          <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path
              d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
          </svg>
          <span class="ml-4">Dashboard</span>
        </a>
      </li>
    </ul>
    <ul>
      <li class="relative px-6 py-3">
        <span
          class="{{ (request()->routeIs('pengaduans.index')) ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : '' }} "
          aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
          href="{{ route('pengaduans.index')}}">
          <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
              d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z"
              clip-rule="evenodd" />
          </svg>
          <span class="ml-4">Pengaduan</span>
        </a>
      </li>
    </ul>
    <ul>
      <li class="relative px-6 py-3">
        <span
          class="{{ (request()->is('admin/masyarakat')) ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : '' }} "
          aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
          href="{{ url('admin/masyarakat')}}">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
            </path>
          </svg>
          <span class="ml-4">Masyarakat</span>
        </a>
      </li>
    </ul>
    @if( Auth::user()->roles == 'ADMIN')

    <ul>
      <li class="relative px-6 py-3">
        <span
          class="{{ (request()->is('admin/petugas')) ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : '' }} "
          aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
          href="{{ route('petugas.index')}}">
          <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
            <path
              d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
          </svg>
          <span class="ml-4">Petugas</span>
        </a>
      </li>
    </ul>
    @endif
    <ul>
      <li class="relative px-6 py-3">
        <span
          class="{{ (request()->is('admin/laporan')) ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : '' }} "
          aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
          href="{{ url('admin/laporan')}}">
          <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
              d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v7a1 1 0 102 0V8z"
              clip-rule="evenodd" />
          </svg>
          <span class="ml-4">Laporan</span>
        </a>
      </li>
    </ul>

  </div>
</aside>
<!-- Mobile sidebar -->
<!-- Backdrop -->
<div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
  x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
  x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
  x-transition:leave-end="opacity-0"
  class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
<aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
  x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
  x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
  x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
  x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
  @keydown.escape="closeSideMenu">
  <div class="py-4 text-gray-500 dark:text-gray-400">
    <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
      PENGKAT
    </a>
    <ul class="mt-6">
      <li class="relative px-6 py-3">
        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
          href="index.html">
          <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
            <path
              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
            </path>
          </svg>
          <span class="ml-4">Dashboard</span>
        </a>
      </li>
    </ul>
    <ul>
      <li class="relative px-6 py-3">
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
          href="forms.html">
          <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
            <path
              d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
            </path>
          </svg>
          <span class="ml-4">Forms</span>
        </a>
      </li>

    </ul>

  </div>
</aside>