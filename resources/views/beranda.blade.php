<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-4 lg:w-12/12 lg:flex-none">
            <div
                class="border-black/12.5 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="p-4 pt-6 pb-0 rounded-t-4">
                    <h3 class="mb-0 dark:text-white">{{ $title }} {{ env('APP_NAME') }}</h3>
                </div>
                <div class="flex-auto p-4 pt-1">
                    <h7 class="mb-0 dark:text-white">Halo! selamat datang kembali di {{ env('APP_NAME') }}.
                        Selamat
                        bekerja {{ auth()->user()->name }}!
                        <br> <br>
                    </h7>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-5/12 lg:flex-none">
            <div
                class="border-black/12.5 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="p-4 pb-0 rounded-t-4">
                    <h6 class="mb-0 dark:text-white">User Login</h6>
                </div>
                <div class="flex-auto p-4">
                    <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                        <li
                            class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-t-lg rounded-xl text-inherit">
                            <div class="flex items-center">
                                <div class="inline-block w-8 h-8 mr-4 text-center text-black bg-center stroke-none">
                                    <img src="../assets/img/users.png"
                                        class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-9 w-9 rounded-xl"
                                        alt="UserLogin" />
                                </div>
                                <div class="flex flex-col">
                                    <h6 class="mb-1 text-sm leading-normal text-slate-700 dark:text-white">
                                        {{ auth()->user()->name }}</h6>
                                    <span class="text-xs leading-tight dark:text-white/80">{{ auth()->user()->email }},
                                        <span class="font-semibold">Admin</span></span>
                                </div>
                            </div>
                            <div class="flex">
                                <button
                                    class="group ease-in leading-pro text-xs rounded-3.5xl p-1.2 h-6.5 w-6.5 mx-0 my-auto inline-block cursor-pointer border-0 bg-transparent text-center align-middle font-bold text-slate-700 shadow-none transition-all dark:text-white"><i
                                        class="ni ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                        aria-hidden="true"></i>
                                </button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-full max-w-full px-3 mt-0 lg:w-7/12 lg:flex-none">
            <div
                class="border-black/12.5 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="p-4 pb-0 rounded-t-4">
                    <h6 class="mb-0 dark:text-white">Profil Toko</h6>
                </div>
                <div class="flex-auto p-4">
                    <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                        <li
                            class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-t-lg rounded-xl text-inherit">
                            <div class="flex items-center">
                                <div class="inline-block w-8 h-8 mr-4 text-center text-black bg-center stroke-none">
                                    <img src="../assets/img/logo-ct-dark.png"
                                        class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-9 w-9 rounded-xl"
                                        alt="ProfilToko" />
                                </div>
                                <div class="flex flex-col">
                                    <h6 class="mb-1 text-sm leading-normal text-slate-700 dark:text-white">Sekawan</h6>
                                    <span class="text-xs leading-tight dark:text-white/80">supplier buku pelajaran
                                        sekolah, <span class="font-semibold">Sukabumi</span></span>
                                </div>
                            </div>
                            <div class="flex">
                                <button
                                    class="group ease-in leading-pro text-xs rounded-3.5xl p-1.2 h-6.5 w-6.5 mx-0 my-auto inline-block cursor-pointer border-0 bg-transparent text-center align-middle font-bold text-slate-700 shadow-none transition-all dark:text-white"><i
                                        class="ni ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                        aria-hidden="true"></i>
                                </button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-layout>
