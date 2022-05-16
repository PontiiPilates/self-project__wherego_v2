<x-project.layout>

    <div class="col-lg-1"></div>
    <div class="col-lg-4">

        <div class="outer-container fixed-collumn">
            <div class="inner-container">
                <!-- <div class="fixed-collumn"> -->

                {{-- <!-- Навигация, видимая при двухколоночной вёрстке. --> --}}
                <div class="d-none d-lg-block">
                    <x-project.navigationDesktop>
                        </x-project.navigationDesctop>
                </div>

                {{-- <!-- Информация о профиле для двух колонок --> --}}
                <x-project.profile :user="$user" :profile="$profile">
                </x-project.profile>


                {{-- <!-- Футер, видимый при двухколоночной вёрстке --> --}}
                <div class="d-none d-lg-block">
                    <x-project.footerDesktop>
                        </x-project.footerDesctop>
                </div>

            </div>
        </div>

    </div>

    @auth
    <div class="col-lg-6">
        <x-project.eventsList :events="$events" :bookmarks="$bookmarks">
        </x-project.eventsList>
    </div>
    @endauth
    @guest
    <div class="col-lg-6">
        <x-project.eventsList :events="$events">
        </x-project.eventsList>
    </div>
    @endguest
    <div class="col-lg-1"></div>

</x-project.layout>