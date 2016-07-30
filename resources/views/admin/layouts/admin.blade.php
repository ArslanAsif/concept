<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            @yield('title')
        </title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        @include('admin.includes.cssLinks')
        @yield('css')
    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            @include('admin.includes.header')
            @include('admin.includes.leftSidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    @yield('sectionTitle')
                </section>
                
                <div class="col-md-12">
                    @include('includes.errorMessageBox')
                </div>

                <section class="content">
                    @yield('content')
                </section>

            </div><!-- /.content-wrapper -->

            @include('admin.includes.footer')
            @include('admin.includes.rightSidebar')
        </div><!-- ./wrapper -->

        @include('admin.includes.jsLinks')
        @yield('js')
    </body>
</html>
