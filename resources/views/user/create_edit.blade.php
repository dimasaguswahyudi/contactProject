<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Master User') }}
        </h2>
    </x-slot>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="pb-0 card-header">
                        @if (Route::is('user.create'))
                            <h5>Tambah User</h5>
                        @else
                            <h5>Edit User</h5>
                        @endif
                    </div>
                    @if (Route::is('user.create'))
                        <form action="{{ route('user.store') }}" class="form theme-form" method="POST"
                            enctype="multipart/form-data">
                        @else
                            <form action="{{ route('user.update', $user->id) }}" class="form theme-form" method="POST"
                                enctype="multipart/form-data">
                                @method('PUT')
                    @endif
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <x-input-label for="password" :value="__('Name *')" />
                                    <x-text-input id="email" class="form-control" type="text" name="name" required autofocus autocomplete="username" value="{{ old('name', $user->name) }}"/>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="mb-3">
                                    <x-input-label for="password" :value="__('Email *')" />
                                    <x-text-input id="email" class="form-control" type="email" name="email" required autofocus autocomplete="username" value="{{ old('email', $user->email) }}"/>
                                    <small class="text-muted">Email Harus Unique dan blm pernah dimiliki user
                                        lain</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <x-input-label for="password" :value="__('Password *')" />
                                    <x-text-input id="password" class="form-control" type="password" name="password"
                                    required autocomplete="current-password" value="{{ old('password') }}" />
                                    <small class="text-muted">Min 8 Karakter</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <x-input-label for="password" :value="__('Konfirmasi Password *')" />
                                    <x-text-input id="password" class="form-control" type="password" name="conpassword"
                                    required autocomplete="current-password" value="{{ old('conpassword') }}" />
                                    <small class="text-muted">Min 8 Karakter</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <a href="{{ route('user.index') }}" class="btn btn-light" type="submit">Kembali</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script>
            $(document).ready(function() {
                $('#role').trigger('change');
            });
        </script>
    @endpush
</x-app-layout>
