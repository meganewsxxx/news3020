@extends('layouts.base')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <br>
            @foreach($items as $val)
                @if ($val->type_id == 1)
                    {{!$type = 'news'}}
                @elseif ($val->type_id == 2)
                    {{!$type = 'media'}}
                @endif
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title"><a href="/{{$type}}/{{$val->id}}/{{$val->url}}">{{$val->title}}</a></h2>
                        <p class="card-text">{{$val->description}}</p>
                    </div>
                </div>
            @endforeach
            <div id="pagination">
                {!!$items->links()!!}
            </div>
        </div>

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
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection