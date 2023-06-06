<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7 text-center">
            <div class="section-title">
                <h2>Berita Terbaru</h2>
                <div class="divider mx-auto my-4"></div>
                {{-- <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p> --}}
            </div>
        </div>
    </div>

    <div class="row">
        @forelse ($news as $item)
        <div class="col-lg-4 col-md-6 ">
            <div class="department-block mb-5">
                <img src="{{ $item->image }}" alt="{{ $item->slug }}" class="img-fluid w-100">
                <div class="content">
                    <h4 class="mt-4 mb-2 title-color">{{ $item->title }}</h4>
                    <p><i class="icofont-user"></i> {{ $item->user->name }} <i class="icofont-calendar ml-3"></i> {{ $item->created_at }}</p>
                    <p class="mb-4">{{ Str::limit(strip_tags($item->body), 100) }}</p>
                    <a href="{{ route('berita-detail', $item->slug) }}" class="read-more">Selengkapnya  <i class="icofont-simple-right ml-2"></i></a>
                </div>
            </div>
        </div>
        @empty

        @endforelse
    </div>
</div>
