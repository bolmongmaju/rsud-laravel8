@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Link Terkait</h1>
            </div>

            <div class="section-body">

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-link"></i> Edit Link Terkait</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('link.update', $link->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label>NAMA</label>
                                <input type="text" name="name" value="{{ old('name') ?? $link->name }}" placeholder="Masukkan Nama" class="form-control @error('name') is-invalid @enderror">

                                @error('name')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>URL</label>
                                <input type="text" name="url" value="{{ old('url') ?? $link->url }}" placeholder="Masukkan URL" class="form-control @error('url') is-invalid @enderror">

                                @error('url')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>IMAGE</label>
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">

                                @error('image')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror

                                @if(Storage::disk('public')->exists($link->image ?? null))
                                    <img src="{{ Storage::url($link->image ?? null) }}" width="200px" />
                                @endif
                            </div>

                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i> UPDATE</button>
                            <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
