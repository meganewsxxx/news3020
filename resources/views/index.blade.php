@extends('layouts.base')
{{--@section('styles')--}}
{{--    @parent--}}
{{--    <link href="{{asset('vendor/bootstrap/css/bootstrap2.min.css')}}" rel="stylesheet">--}}
{{--@endsection--}}
@section('content')
<div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

        <br>

        <!-- Blog Post -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title"><a href="#">Crypto-bro Justin Sun represents everything Warren Buffett “can’t even” about crypto</a></h2>
                <p class="card-text">It’s hard to imagine a lunch where the guests contrast as starkly as this pair.</p>
            </div>
            <div class="card-footer text-muted">
                17min ago by <a href="#">qz.com</a>
            </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title"><a href="#">Crypto-bro Justin Sun represents everything Warren Buffett “can’t even” about crypto</a></h2>
                <p class="card-text">It’s hard to imagine a lunch where the guests contrast as starkly as this pair.</p>
            </div>
            <div class="card-footer text-muted">
                17min ago by <a href="#">qz.com</a>
            </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title"><a href="#">Crypto-bro Justin Sun represents everything Warren Buffett “can’t even” about crypto</a></h2>
                <p class="card-text">It’s hard to imagine a lunch where the guests contrast as starkly as this pair.</p>
            </div>
            <div class="card-footer text-muted">
                17min ago by <a href="#">qz.com</a>
            </div>
        </div>

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
                <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
                <a class="page-link" href="#">Newer &rarr;</a>
            </li>
        </ul>

    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
                </div>
            </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
            <h5 class="card-header">Source</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled mb-0">
@foreach($types as $val)
<li>
    <a href="/{{$val->url}}/">{{$val->name}}</a>
</li>
@endforeach
{{--                            <li>--}}
{{--                                <i class="fas fa-rss-square"></i> <a href="#">Rss</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="fab fa-youtube"></i> <a href="#">Youtube</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="fab fa-reddit"></i> <a href="#">Reddit</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="fas fa-lightbulb"></i> <a href="#">TradingView</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="fab fa-twitter"></i> <a href="#">Twitter</a>--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- /.row -->
@endsection