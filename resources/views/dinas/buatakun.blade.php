<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Konsultasi</title>
</head>

<body>
  <header class="absolute inset-x-0 top-0 z-50">
    @include ('dinas.navbar')
  </header>
  <section class="h-full" >
    <div class="bg-primary pt-20 mt-6 h-full pb-1">
      <div class="container px-6 py-10 mx-auto">
        <div class="container bg-white rounded-lg shadow-lg overflow-hidden h-[80vh] relative p-12">
          <div class="block">
            <h2 class="text-5xl font-bold mb-4 grid grid-row-15 row-span-1">Buat Akun Dokter Hewan</h2>
            <div class="p-8">
              <div class="flex flex-col mb-4 w-full justify-between ">
                <label class="basis-3/12 font-semibold text-xl" for="nama">
                    Nama
                </label>
                <div class="relative basis-9/12 mt-2"
                    data-twe-input-wrapper-init>
                    <input type="text" name="nama" id="nama"
                        placeholder="Masukkan Nama"
                        class="peer block w-full p-3 pl-4 border border-gray-300 rounded-md shadow-sm focus:outline:none focus:ring-primary focus:border-primary @error('nama') border-red-500 @enderror"
                        value="" autocomplete="nama" />
                    @error('nama')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
              </div>
              <div class="flex flex-col mb-4 w-full justify-between ">
                <label class="basis-3/12 font-semibold text-xl" for="nama">
                    PUSKESWAN
                </label>
                <div class="relative basis-9/12 mt-2"
                    data-twe-input-wrapper-init>
                    <select 
                        class="peer block w-full px-1 py-3 pl-4 border border-gray-300 rounded-md shadow-sm focus:outline:none focus:ring-primary focus:border-primary @error('kecamatan') border-red-500 @enderror"
                        name="kecamatan" id="kecamatan">
                        <option selected hidden value="">Pilih PUSKESWAN</option>
                        {{-- @foreach ($kecamatan as $item)
                        <option value="{{ $item->id }}">{{ $item->kecamatan }}</option>
                        @endforeach --}}
                    </select>
                    @error('kecamatan')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
              </div>
              <div class="flex flex-col mb-4 w-full justify-between ">
                <label class="basis-3/12 font-semibold text-xl" for="nama">
                    Nama Pengguna
                </label>
                <div class="relative basis-9/12 mt-2"
                    data-twe-input-wrapper-init>
                    <input type="text" name="nama" id="nama"
                        placeholder="Masukkan Nama"
                        class="peer block w-full p-3 pl-4 border border-gray-300 rounded-md shadow-sm focus:outline:none focus:ring-primary focus:border-primary @error('nama') border-red-500 @enderror"
                        value="" autocomplete="nama" />
                    @error('nama')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
              </div>
              <div class="flex flex-col mb-4 w-full justify-between ">
                <label class="basis-3/12 font-semibold text-xl" for="password">
                    Kata Sandi
                </label>
                <div class="relative basis-9/12 mt-2"
                    data-twe-input-wrapper-init>
                    <input type="text" name="password" id="password"
                        placeholder="Masukkan Nama"
                        class="peer block w-full p-3 pl-4 border border-gray-300 rounded-md shadow-sm focus:outline:none focus:ring-primary focus:border-primary @error('password') border-red-500 @enderror"
                        value="" autocomplete="password" />
                    @error('password')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
              </div>
              <div class="flex justify-end">
                <div class="flex gap-5">
                  <button type="button" class="inline-block w-full rounded rounded-full px-6 py-2 text-xl font-bold uppercase leading-normal text-white shadow-dark-3 transition duration-150 ease-in-out bg-danger hover:bg-primary-light min-w-32"
                  type="button"
                  id="cancel-profile-button"
                  data-twe-ripple-init
                  data-twe-ripple-color="light">
                  <a href="{{route('dinas.dashboard')}}">Batal</a>
                  </button> 
                  <button type="submit" class="inline-block w-full rounded rounded-full px-6 py-2 text-xl font-bold uppercase leading-normal text-white shadow-dark-3 transition duration-150 ease-in-out bg-primary hover:bg-primary-light min-w-32"
                  type="submit"
                  id="save-profile-button"
                  data-twe-ripple-init
                  data-twe-ripple-color="light">
                  Simpan
              </button> 
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    
  </script>
</body>

</html>
