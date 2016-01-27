<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - SB Admin</title>

    <!-- Bootstrap core CSS -->
    {!! Html::style('bootstrap/css/bootstrap.css') !!}
    
    <!-- Add custom CSS here -->
    {!! Html::style('bootstrap/css/sb-admin.css') !!}
    {!! Html::style('bootstrap/font-awesome/css/font-awesome.min.css') !!}
    
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    {!! Html::script('bootstrap/js/jquery-1.10.2.js') !!}
    {!! Html::script('bootstrap/js/bootstrap.js')!!}
    
  </head>

  <body>

    <div id="wrapper">
        @include('admin.layouts.sidebar')
        @yield('content')
    </div><!-- /#wrapper -->

    <!-- JavaScript -->



    <!-- Page Specific Plugins -->
   
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
     {!! Html::script('http://cdn.oesmith.co.uk/morris-0.4.3.min.js') !!}
    {!! Html::script('bootstrap/js/morris/chart-data-morris.js') !!}
    {!! Html::script('bootstrap/js/tablesorter/jquery.tablesorter.js') !!}
    {!! Html::script('bootstrap/js/tablesorter/tables.js') !!}

  </body>
</html>
