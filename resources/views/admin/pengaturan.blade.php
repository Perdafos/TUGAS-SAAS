@extends('template.layout-admin')

@section('title', 'login - web perpustakaan')

  @section('header')
    @include('template.sidebar_admin')
  @endsection 

  @section('main')
            <main class="flex-1 flex flex-col items-center justify-start mt-5">
            <div class="card p-8 m-5">
  <div class="card-body">
  <h1 class="text-xl font-bold mb-6">Pengaturan Akun</h1>
                <form
                    action=""
                    method="POST"
                    class="w-full max-w-lg bg-#181C14 rounded-lg shadow-lg p-8">
                    <div class="mb-4">
                        <label
                            for="nama"
                            class="block text-gray-700 font-semibold mb-2"
                            >Nama</label>
                        <input
                            type="text"
                            id="nama"
                            name="nama"
                            class="w-full border border-gray-300 rounded-md p-2"
                            required
                            placeholder="Masukkan Nama"/>
                    </div>
                    <div class="mb-4">
                        <label
                            for="username"
                            class="block text-gray-700 font-semibold mb-2"
                            >Username</label>
                        <input
                            type="text"
                            id="username"
                            name="username"
                            class="w-full border border-gray-300 rounded-md p-2"
                            required
                            placeholder="Masukkan Username"/>
                    </div>
                    <div class="mb-4">
                        <label
                            for="alamat"
                            class="block text-gray-700 font-semibold mb-2"
                            >Alamat</label>
                        <input
                            type="text"
                            id="alamat"
                            name="alamat"
                            class="w-full border border-gray-300 rounded-md p-2"
                            required
                            placeholder="Masukkan Alamat"/>
                    </div>
                    <div class="mb-4">
                        <label
                            for="email"
                            class="block text-gray-700 font-semibold mb-2"
                            >Email</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="w-full border border-gray-300 rounded-md p-2"
                            required
                            placeholder="Masukkan Email"/>
                    </div>
                    <div class="mb-4">
                        <label
                            for="nomor_hp"
                            class="block text-gray-700 font-semibold mb-2"
                            >Nomor HP</label>
                        <input
                            type="tel"
                            id="nomor_hp"
                            name="nomor_hp"
                            class="w-full border border-gray-300 rounded-md p-2"
                            required
                            placeholder="Masukkan Nomor HP"/>
                    </div>
                    <div class="mb-4">
                        <label
                            for="password"
                            class="block text-gray-700 font-semibold mb-2"
                            >Password</label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="w-full border border-gray-300 rounded-md p-2"
                            required
                            placeholder="Masukkan Password"
                        />
                    </div>
                    <button
                        type="submit"
                        class="w-full bg-green-600 text-black font-bold py-2 rounded-md hover:bg-green-700 transition duration-200">
                        Update Data Admin
                    </button>
                </form>
  </div>
</div>        
            </main>
        </div>
@endsection