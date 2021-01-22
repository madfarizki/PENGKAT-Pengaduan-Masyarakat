@extends('layouts.admin')

@section('title')
Data Petugas
@endsection

@section('content')
<main class="h-full pb-16 overflow-y-auto">
  <div class="container grid px-6 mx-auto">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Data Petugas
    </h2>

    <div class="my-4 mb-6">
      <a href="{{ route('petugas.create')}} "
        class="px-5 py-3  font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
        Tambah Petugas
      </a>
    </div>
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }} </li>
            @endforeach
          </ul>
        </div>
        @endif
        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <th class="px-4 py-3">Nama</th>
              <th class="px-4 py-3">NIK</th>
              <th class="px-4 py-3">No. Hp</th>
              <th class="px-4 py-3">Email</th>
              <th class="px-4 py-3">Role</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @forelse ($data as $petugas)
            <tr class="text-gray-700 dark:text-gray-400">
              <td class="px-4 py-3 text-sm">
                {{ $petugas->name }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $petugas->nik }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $petugas->phone }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $petugas->email }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $petugas->roles }}
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="7" class="text-center text-gray-400">
                Data Kosong
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>

  </div>
</main>
@endsection