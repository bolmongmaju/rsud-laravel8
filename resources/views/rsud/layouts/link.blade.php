<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="section-title text-center">
                <h2>Link Terkait</h2>
                <div class="divider mx-auto my-4"></div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row clients-logo">
        @foreach ($links as $item)
            <div class="col-lg-4">
                <div class="client-thumb">
                    <a href="{{ $item->url }}">
                        <img src="{{ Storage::url($item->image) }}" alt="{{ $item->name }}" class="img-fluid">
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
