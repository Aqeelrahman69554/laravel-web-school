<!doctype html>
<html lang="en">

{{-- include head --}}
@include('visitor.partials.head')

<body>

    {{-- include Navbar --}}
    @include('visitor.components.navbar')


    {{-- include header --}}
    @include('visitor.components.header')

    {{-- include about --}}
    @include('visitor.pages.about')

    {{-- include about2 --}}
    @include('visitor.pages.about2')


    {{-- include class1 --}}
    @include('visitor.pages.class1')

    {{-- include class2 --}}
    @include('visitor.pages.class2')

    {{-- include teacher --}}
    @include('visitor.pages.teacher')

    {{-- include teacher2 --}}
    @include('visitor.pages.teacher2')


    {{-- include blog grid --}}
    @include('visitor.pages.blog_grid')

    {{-- include footer --}}
    @include('visitor.components.footer')

    {{-- include script --}}
    @include('visitor.partials.script')
</body>

</html>
