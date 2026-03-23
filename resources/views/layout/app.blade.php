<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head', ['pageTitle' => $pageTitle, 'metaTitle' => $metaTitle])
</head>

<body>
    @include ('partials.navbar')

    <div>
        @yield('content')
    </div>


</body>

</html>
