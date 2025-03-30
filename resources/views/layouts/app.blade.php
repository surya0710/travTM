<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @yield('header') <!-- This will inject the meta tags from child views -->

</head>
<body>
    @yield('content') <!-- The main content of the page -->
    @yield('footer')
</body>
</html>
