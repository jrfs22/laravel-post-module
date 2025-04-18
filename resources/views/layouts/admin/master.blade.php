<!doctype html>
<html lang="en">

<head>
    @include('layouts.admin._partials.headers')
</head>

<body>
    @include('layouts.admin._partials.navbar')

    @yield('content')

    @include('layouts.admin._partials.scripts')
</body>

</html>
