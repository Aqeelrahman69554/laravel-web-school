<!DOCTYPE html>
<html lang="en">

//INCLUDE HEAD
@include('admin.partials.head')

<body>
    <div id="app">

        //INCLUDE SIDEBAR
        @include('admin.components.sidebar')
        
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Profile Statistic</h3>
            </div>

            //INCLUDE CONTENT
            @include('admin.pages.content')

            //INCLUDE FOOTER
            @include('admin.components.footer')
        </div>
    </div>

    //INCLUDE SCRIPT
    @include('admin.partials.script')
</body>

</html>
