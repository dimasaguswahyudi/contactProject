<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Kontak') }}
        </h2>
    </x-slot>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="pb-0 card-header">
                        @if (Route::is('contact.create'))
                            <h5>Tambah Kontak</h5>
                        @else
                            <h5>Edit Kontak</h5>
                        @endif
                    </div>
                    @if (Route::is('contact.create'))
                        <form action="{{ route('contact.store') }}" class="form theme-form" method="POST"
                            enctype="multipart/form-data">
                        @else
                            <form action="{{ route('contact.update', $contact->id) }}" class="form theme-form" method="POST"
                                enctype="multipart/form-data">
                                @method('PUT')
                    @endif
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <x-input-label for="name" :value="__('Name *')" />
                                    <x-text-input id="email" class="form-control" type="text" name="name"
                                        required autofocus autocomplete="name"
                                        value="{{ old('name', $contact->name) }}" />
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="mb-3">
                                    <x-input-label for="email" :value="__('Email *')" />
                                    <x-text-input id="email" class="form-control" type="email" name="email"
                                        required autofocus autocomplete="email"
                                        value="{{ old('email', $contact->email) }}" />
                                    <small class="text-muted">Email Harus Unique dan blm pernah dimiliki user
                                        lain</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <x-input-label for="no_telp" :value="__('No Telp *')" />
                                    <x-text-input id="password" class="form-control" type="number" name="no_telp"
                                        required autocomplete="no_telp" value="{{ old('no_telp', $contact->no_telp) }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <a href="{{ route('contact.index') }}" class="btn btn-light" type="submit">Kembali</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
