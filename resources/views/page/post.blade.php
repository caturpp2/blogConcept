<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form Create Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- Form --}}
                    <div class="container mt-2">
                    <form action="..." method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="photo" class="form-label">photo</label>
                            <input type="file" name="file"class="form-control">
                        </div>
                        <div class="form-group mb-3">
                          <label for="title" class="form-label">Title</label>
                          <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" name="content"></textarea>
                        </div>
                        <div class="form-group mb-3">
                          <label for="category" class="form-label">Category ID</label>
                          <select name="category_id" class="form-control">
                            <option value="Anime">Anime</option>
                            <option value="Manga">Manga</option>
                          </select>
                        </div>
                        <button type="submit" class="btn btn-primary bg-primary">Submit</button>
                    </form>
                    </div>
                    {{-- endForm --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
