<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- card --}}
                    <div class="card mb-5" style="width: 18rem;">
                        <img src="/img/images.jpg" class="card-img-top" alt="Shinichi Kudo">
                        <div class="card-body">
                          <h1 class="card-title">Shinichi Kudo</h1>
                          <p class="card-text">Shinichi adalah anak dari pasangan Yusaku Kudo, seorang novelis misteri terkenal dan Yukiko Kudo, mantan bintang film terkenal.</p>
                          <a href="/detail" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                    <div class="card mt-5" style="width: 18rem;">
                        <img src="/img/connan.jpg" class="card-img-top" alt="Conan Edogawa">
                        <div class="card-body">
                          <h1 class="card-title">Conan Edogawa</h1>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    {{-- end card --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
