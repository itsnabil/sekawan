<nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start"
    navbar-main navbar-scroll="false">
    <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        <nav>
            <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                <li class="text-sm leading-normal">
                    <a class="text-white opacity-50" href="javascript:;">Pages</a>
                </li>
                <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']"
                    aria-current="page">Dashboard</li>
            </ol>
            <h6 class="mb-0 font-bold text-white capitalize">Dashboard</h6>
        </nav>
        <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
            <ul class="flex flex-row pl-0 mb-0 list-none ml-auto">
                <li class="flex items-center">
                    @guest
                        <a href="{{ route('login') }}"
                            class="block px-0 py-2 font-semibold text-white transition-all ease-in-out text-sm">
                            <i class="fa fa-user sm:mr-1" aria-hidden="true"></i>
                            <span class="hidden sm:inline">Sign In</span>
                        </a>
                    @endguest
                    @auth
                        <a class="block px-0 py-2 font-semibold text-white transition-all ease-in-out text-sm">
                            <i class="fa fa-user sm:mr-1" aria-hidden="true"></i>
                            <span class="hidden sm:inline">{{ auth()->user()->name }}
                                &ThickSpace;&ThickSpace;&vert;&ThickSpace;&ThickSpace;&ThickSpace;</span>
                        </a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="inline-block px-4 py-2 font-bold text-center text-blue-500 align-middle transition-all bg-white border border-blue-500 rounded-lg cursor-pointer leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md">Logout</button>
                        </form>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>
