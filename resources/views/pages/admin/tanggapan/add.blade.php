@extends('layouts.admin')

@section('title')
Tanggapan
@endsection

@section('content')
<main class="h-full pb-16 overflow-y-auto">
  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl text-center font-semibold text-gray-700 dark:text-gray-200">
      Berikan Tanggapan
    </h2>
    <form action="{{ route('tanggapan.store')}} " method="POST" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="pengaduan_id" value="{{ $item->id }} ">
      <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Tanggapan</span>
          <textarea
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            rows="8" type="text" placeholder="Isi Tanggapan Anda" value="{{ old('description')}}"
            name="tanggapan" required></textarea>
        </label>

        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Status</span>

          <select
            class="block w-full text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            name="status" required>
            <option value="Belum di Proses">Belum di Proses</option>
            <option value="Sedang di Proses">Sedang di Proses</option>
            <option value="Selesai">Selesai</option>

          </select>
        </label>


        <button type="submit"
          class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
          Tanggapi
        </button>
      </div>
    </form>
  </div>
</main>
@endsection