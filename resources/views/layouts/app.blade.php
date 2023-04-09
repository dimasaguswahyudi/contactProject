<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <div class="loader-wrapper">
        <div class="loader"></div>
    </div>
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <div class="page-body-wrapper">
            @include('layouts.header')
            @include('layouts.sidebar')
            <div class="page-body-wrapper">
                <div class="page-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <main>
                        {{ $slot }}
                    </main>
                </div>
                @include('layouts.footer')
            </div>
        </div>
    </div>
    @include('layouts.javascript')
</body>

</html>
