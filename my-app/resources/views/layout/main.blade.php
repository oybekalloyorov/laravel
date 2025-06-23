<header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
        <div>
            {{-- {{ $name }} --}}
            {{-- <?php echo $name ?> --}}
        </div>
            @include('for');
        <div>

        <div>
            <x-forms.button class="alert">
                Saqlash
            </x-forms.button>
        </div>

        {{-- <div>
            <x-alert type="bu alert tipi"></x-alert>
        </div> --}}

        {{-- <div>
            <x-jumbotron></x-jumbotron>
        </div> --}}

            {{-- @empty($records)
                record bo'm bosh
            @endempty --}}

            {{-- @if (count($records) === 1)
                I have one record!
            @elseif (count($records) > 1)
                I have multiple records!
            @else
                I don't hame any records!
            @endif --}}
        </div>


        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif

        @yield('content');
    </body>
