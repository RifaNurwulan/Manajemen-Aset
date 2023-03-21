
<!DOCTYPE html>
<html lang="en">

<head>
@include('Template.head')
</head>


@include('Template.navbar')

<body>
    <div id="app">
     
                    @include('Template.left-sidebar')
        
        <div id="main">
            <!-- <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header> -->

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">

                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                  
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <!-- <div class="card"> -->
                        <!-- <div class="card-header">
                            <h4 class="card-title"></h4>
                        </div> -->
                        @yield('content')
                        <!-- //<div class="card-body"> -->
                        @yield('contentdepan')
                        <!-- </div> -->
                    <!-- </div> -->
                </section>
            </div>
            @include('Template.footer')
        </div>
    </div>
    @include('Template.script') @include('sweetalert::alert')
</body>

</html>