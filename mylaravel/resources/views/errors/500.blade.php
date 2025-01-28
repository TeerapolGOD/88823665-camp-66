@extends('errors::minimal')

@section('content')

<table class="d-flex justify-content-center">
    <tr>
        <td class="col-1 text-danger"  rowspan="4" style="font-size: 100px"> 
            <h2 class="text-danger text-center px-5" style="font-size: 100px;">500</h2>
        </td>
    </tr>
    <tr>
        <td class="col-auto text-muted h3">
                <i class="bi bi-exclamation-triangle-fill text-danger"></i> Oops! Page not found
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
                <button class="btn btn-danger" type="button">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </td>
    </tr>
</table>
@endsection