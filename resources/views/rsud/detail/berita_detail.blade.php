@extends('rsud.detail.app', ['breadcrumb' => 'Detail Berita'])

@section('content')
<section class="section blog-wrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">

            <div class="col-lg-12 col-md-12 mb-5">
                <div class="blog-item">
                    <div class="blog-thumb">
                        <img src="{{ $news->image }}" alt="{{ $news->slug }}" class="img-fluid ">
                    </div>

                    <div class="blog-item-content mt-5">
                        <div class="blog-item-meta mb-3">
                            <span class="text-color-2 text-capitalize mr-3"><i class="icofont-book-mark mr-2"></i> {{ $news->category->name }}</span>
                            <span class="text-muted text-capitalize mr-3"><i class="icofont-user mr-2"></i>{{ $news->user->name }}</span>
                            <span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-1"></i> {{ $news->created_at }}</span>
                        </div>

                        <h2 class="mt-3 mb-3"><a href="#">{{ $news->title }}</a></h2>

                        <p class="mb-4">{!! strip_tags($news->body) !!}</p>

                        <div class="mt-5 clearfix">
                            <ul class="float-left list-inline tag-option">
                                @foreach ($news->tags as $item)
                                <li class="list-inline-item"><a href="#!">{{ $item->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

  </div>
        </div>
        <div class="col-lg-4">
          <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
      <div class="sidebar-widget search  mb-3 ">
          <h5>Cari Berita</h5>
          <form action="#" class="search-form">
              <input type="text" class="form-control" placeholder="search">
              <i class="ti-search"></i>
          </form>
      </div>


      <div class="sidebar-widget latest-post mb-3">
          <h5>Berita Terbaru</h5>

          @forelse ($news_new as $item)
          <div class="py-2">
              <span class="text-sm text-muted">{{ $item->created_at }}</span>
              <h6 class="my-2"><a href="{{ route('berita-detail', $item->slug) }}">{{ $item->title }}</a></h6>
          </div>
          @empty
          <span class="text-sm text-muted">tidak ada data</span>
          @endforelse
      </div>

      <div class="sidebar-widget category mb-3">
          <h5 class="mb-4">Kategori</h5>

          <ul class="list-unstyled">
            @forelse ($category as $item)
            <li class="align-items-center">
              <a href="{{ route('cari-kategori', $item->slug) }}">{{ $item->name }}</a>
              <span>({{ $item->news->count() }})</span>
            </li>
            @empty
            <li class="align-items-center">
                <a href="#">tidak ada data</a>
            </li>
            @endforelse
          </ul>
      </div>


      <div class="sidebar-widget tags mb-3">
          <h5 class="mb-4">Tags</h5>

          @forelse ($tags as $item)
          <a href="{{ route('cari-tag', $item->slug) }}">{{ $item->name }}</a>
          @empty
          <span class="text-sm text-muted">tidak ada data</span>
          @endforelse
      </div>

  </div>
        </div>
      </div>
    </div>
  </section>
@endsection

