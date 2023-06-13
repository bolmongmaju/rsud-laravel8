@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Layanan</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-concierge-bell"></i> Edit Layanan</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('service.update', $service->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nama layanan:</strong>
                                <input type="text" value="{{ $service->name }}" name="name" class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Nama layanan">

                                @error('name')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Persyaratan pelayanan:</strong>
                                    <textarea class="form-control content @error('persyaratan') is-invalid @enderror" name="persyaratan" rows="10">{!! old('persyaratan', $service->persyaratan) !!}</textarea>

                                @error('persyaratan')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Prosedur:</strong>
                                    <textarea class="form-control content @error('prosedur') is-invalid @enderror" name="prosedur" rows="10">{!! old('prosedur', $service->prosedur) !!}</textarea>
                                @error('prosedur')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Waktu pelayanan:</strong>
                                    <textarea class="form-control content @error('waktu') is-invalid @enderror" name="waktu" rows="10">{!! old('waktu', $service->waktu) !!}</textarea>
                                @error('waktu')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Biaya/tarif:</strong>
                                <input type="text" value="{{ old('biaya', $service->biaya) }}" name="biaya" class="form-control @error('biaya') is-invalid @enderror">

                                @error('biaya')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Produk layanan:</strong>
                                <input type="text" value="{{ old('produk_layanan', $service->produk_layanan) }}" name="produk_layanan" class="form-control @error('produk_layanan') is-invalid @enderror">

                                @error('produk_layanan')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Image prosedur (opsional):</strong>
                                <input type="file" name="image" class="form-control" placeholder="image">

                                @error('image')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror

                                @if(Storage::disk('public')->exists($service->image ?? null))
                                    <img src="{{ Storage::url($service->image ?? null) }}" width="500px" />
                                @endif
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a class="btn btn-light" href="{{ route('service.index') }}">Cancel</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.6.2/tinymce.min.js"></script>
<script>
    var editor_config = {
        selector: "textarea.content",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        forced_root_block : false,
    };

    tinymce.init(editor_config);
</script>
@stop
