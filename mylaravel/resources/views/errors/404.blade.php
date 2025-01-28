@extends('errors::minimal')

@section('content')

<table class="d-flex justify-content-center">
    <tr>
        <td class="col-1 text-warning"  rowspan="4" style="font-size: 100px"> 
            <h2 class="text-warning text-center px-5" style="font-size: 100px;">404</h2>
        </td>
    </tr>
    <tr>
        <td class="col-auto text-muted h3">
                <i class="bi bi-exclamation-triangle-fill text-warning"></i> Oops! Page not found
        </td>
    </tr>
    <tr>
        <td class="col-auto">
            We could not find the page you were looking for. Meanwhile, <br> you may
            <a href="{{url('home')}}" class="btn btn-link px-0 ">return to dashboard</a>
            or try using the search form below.
        </td>
    </tr>
    <tr>
        <td class="col-auto form-inline text-center">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                <button class="btn btn-warning" type="button">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </td>
    </tr>
</table>
@endsection


{{-- <!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
        crossorigin="anonymous"
      />
</head>
    <body>
        <section class="container text-left" style="margin-top: 50px;">
                <div class="col-md-5">
                    <h2 class="text-warning" style="font-size: 80px; font-weight: bold;">404</h2>
                    <h3 class="text-muted">
                        <i class="bi bi-exclamation-triangle-fill"></i> Oops! Page not found
                    </h3>
                    <p class="lead">
                        We could not find the page you were looking for. Meanwhile, you may 
                        <a href="../../index.html" class="btn btn-link">return to dashboard</a>
                        or try using the search form below.
                    </p>
                    <form class="form-inline text-center">
                        <div class="form-group">
                            <input type="text" name="search" class="form-control input-lg" placeholder="Search">
                        </div>
                        <button type="submit" name="submit" class="btn btn-warning btn-lg">
                            Search <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </form>
                </div>
        </section>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body>
</html> --}}