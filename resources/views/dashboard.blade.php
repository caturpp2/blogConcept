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
                    
                    
                    {{-- start create --}}

                    <div class="container mt-4">
                        <div class="row">

                            @if ($message = Session::get('success')) 
                                <div class="alert alert-success"> 
                                    <p>{{ $message }}</p> 
                                </div> 
                            @endif 

                           {{-- form --}}
                           <div class="col-md-8 col-sm-12 bg-white p-4">
                            <form method="post" action="/store">
                                @csrf
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                                <div class="form-group mt-4">
                                    <label>Content</label>
                                    <textarea class="form-control" name="content" rows="10"></textarea>
                                </div>
                            </div>

                            {{-- upload --}}
                                <div class="col-md-3 ml-md-5 col-sm-12 bg-white p-4" style="height:120px !important">
                                    <div class="form-group">
                                        <label>Upload</label>
                                        <input type="submit" class="form-control btn btn-primary bg-primary" value="Upload">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- end create --}}

                    {{-- start card --}}
                    <div class="col-md-4 col-sm-12 mt-4">
                        @foreach ($posts as $item)
                            <div class="card">
                                <img src="https://atlantictravelsusa.com/wp-content/uploads/2016/04/dummy-post-horisontal-thegem-blog-default.jpg" class="card-img-top" alt="gambar" >
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->title }}</h5>
                                    <a href="/detail/{{ $item->id }}" class="btn btn-primary">Baca Artikel</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- end Card --}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>







{{-- <div class="card mb-5" style="width: 18rem;">
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
  </div> --}}