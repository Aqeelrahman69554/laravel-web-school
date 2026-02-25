<!DOCTYPE html>
<html lang="en">
<head>
    @include('visitor.partials.head')
 
</head>
<body>
    @include('visitor.components.navbar')
  
    <main>
      @yield('content')
    </main>

    @include('visitor.components.footer')
    @include('visitor.partials.script')

</body>
</html>