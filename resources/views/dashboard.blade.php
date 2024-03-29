<x-app-layout>
    


    <div class="relative w-full">
        <div class="hidden sm:block">
            <nav class="fixed z-10 w-full bg-white md:absolute md:bg-transparent">
                <div class="container m-auto px-2 md:px-12 lg:px-7">
                    <div class="flex flex-wrap items-center justify-between py-3 gap-6 md:py-4 md:gap-0">
                        <div class="w-full px-6 flex justify-between lg:w-max md:px-0">
                            <a href="{{ route('dashboard') }}" aria-label="logo" class="flex space-x-2 items-center">
                                <img src="https://tailus.io/sources/blocks/food-delivery/preview/images/icon.png" class="w-12" alt="tailus logo" width="144" height="133">
                                <span class="text-2xl font-bold text-yellow-900">Appaña <span class="text-yellow-700">app</span></span>
                            </a>
        
                            <button aria-label="humburger" id="hamburger" class="relative w-10 h-10 -mr-2 lg:hidden">
                                <div aria-hidden="true" id="line" class="inset-0 w-6 h-0.5 m-auto rounded bg-yellow-900 transtion duration-300"></div>
                                <div aria-hidden="true" id="line2" class="inset-0 w-6 h-0.5 mt-2 m-auto rounded bg-yellow-900 transtion duration-300"></div>
                            </button>
                        </div>
        
                        <div class="hidden w-full lg:flex flex-wrap justify-end items-center space-y-6 p-6 rounded-xl bg-white md:space-y-0 md:p-0 md:flex-nowrap md:bg-transparent lg:w-7/12">
                            <div class="text-gray-600 lg:pr-4">
                                <ul class="space-y-6 tracking-wide font-medium text-sm md:flex md:space-y-0">
                                    <li>
                                        <a href="https://admin.appana.cl/register" class="block md:px-4 transition hover:text-yellow-700">
                                            <span>Registra tu Negocio</span>
                                        </a>
                                    </li>
                                    <li class="hidden">
                                        <a href="#" class="block md:px-4 transition hover:text-yellow-700">
                            <span>Favoritos</span>
                                        </a>
                                    </li>
                                    <li class="hidden">
                                        <a href="#" class="block md:px-4 transition hover:text-yellow-700">
                                                    <span>Carrito</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
        
                            <div class="w-full flex space-y-2 border-yellow-200 lg:space-y-0 md:w-max lg:border-l">
                                
                                @if (auth()->user())
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf
                    
                                    
                                        <a href="{{ route('logout') }}">
                                            <button  @click.prevent="$root.submit();" type="button" title="Start buying" class="w-full py-3 px-6 text-center rounded-full transition active:bg-yellow-200 focus:bg-yellow-100 sm:w-max">
                                                <span class="block text-yellow-800 font-semibold text-sm">
                                                Salir
                                                </span>
                                            </button>
                                        </a>
                                    </form>
                                
                                @else
                                    <a href="{{ route('register') }}">
                                        <button type="button" title="Start buying" class="w-full py-3 px-6 text-center rounded-full transition active:bg-yellow-200 focus:bg-yellow-100 sm:w-max">
                                            <span class="block text-yellow-800 font-semibold text-sm">
                                            Registro
                                            </span>
                                        </button>
                                    </a>
                                    
                                @endif
                            
                                @if (auth()->user())
                                    <a href="{{ route('profile.show') }}">
                                        <button type="button" title="Start buying" class="w-full py-3 px-6 text-center rounded-full transition bg-yellow-300 hover:bg-yellow-100 active:bg-yellow-400 focus:bg-yellow-300 sm:w-max">
                                            <span class="block text-yellow-900 font-semibold text-sm">
                                                Mi Perfil
                                            </span>
                                        </button>
                                    </a>
                                @else
                                    <a href="{{ route('login') }}">
                                        <button type="button" title="Start buying" class="w-full py-3 px-6 text-center rounded-full transition bg-yellow-300 hover:bg-yellow-100 active:bg-yellow-400 focus:bg-yellow-300 sm:w-max">
                                            <span class="block text-yellow-900 font-semibold text-sm">
                                                Ingresar
                                            </span>
                                        </button>
                                    </a>
                                    <a href="https://appana.cl/login-google">
                                        <button type="button" title="Start buying" class=" ml-2 w-full py-3 px-2 text-center rounded-full transition bg-yellow-300 hover:bg-yellow-100 active:bg-yellow-400 focus:bg-yellow-300 sm:w-max">
                                            <span class="px-2 block text-yellow-900 font-semibold text-sm text-center">
                                                <svg class=" w-4 h-4" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512"><path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path></svg>
                                            </span>
                                        </button>
                                    </a>
                                    
                                @endif
                            
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        
        <div class="relative bg-yellow-50">
            <div class="container m-auto px-6 pt-32 md:px-12 lg:pt-[4.8rem] lg:px-7">
                <div class="flex items-center flex-wrap px-2 md:px-0">
                    <div class="relative lg:w-6/12 lg:py-24 xl:py-32">
                        <h1 class="font-bold text-4xl text-yellow-900 md:text-5xl lg:w-10/12">Tu Comida Favorita, a un Click de tu Puerta</h1>
                        <form action="" class="w-full mt-12">
                            <div class="relative flex p-1 rounded-full bg-white border border-yellow-200 shadow-md md:p-2">
                                <select class="hidden p-3 rounded-full bg-transparent md:block md:p-4 w-4/12 " name="domain" id="domain">
                                    <option value="design">Sandwich</option>
                                    <option value="development">Sushi</option>
                                    <option value="marketing">Botilleria</option>
                                </select>
                                <input placeholder="Tu comida Favorita" class="w-full p-4 rounded-full" type="text">
                                <button type="button" title="Start buying" class="ml-auto py-3 px-6 rounded-full text-center transition bg-gradient-to-b from-yellow-200 to-yellow-300 hover:to-red-300 active:from-yellow-400 focus:from-red-400 md:px-12">
                                    <span class="hidden text-yellow-900 font-semibold md:block">
                                                Buscar     
                                    </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 mx-auto text-yellow-900 md:hidden" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg>
                                </button>
                            </div>
                        </form>
                        <p class="mt-8 text-gray-700 lg:w-10/12">Llegamos más lejos y no solo en distancia. <a href="#" class="text-yellow-700">Garantizamos</a> calidad en los productos y servicios.</p>
                    </div>
                    <div class="ml-auto -mb-24 lg:-mb-56 lg:w-6/12">
                        <img src="https://tailus.io/sources/blocks/food-delivery/preview/images/food.webp" class="relative" alt="food illustration" loading="lazy" width="4500" height="4500">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
