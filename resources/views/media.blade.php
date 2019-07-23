<?php
use Carbon\Carbon;
?>
@extends('layouts.base')
@section('content')
    <div class="row">

        <div class="col-md-12">
            <br>
            <h1>Media</h1>
            <br>

            @foreach ($obj as $item)
                <div class="card mb-12">
                    <div class="card-body">
                        <h2 class="card-title"><a href="/media/{{$item->id}}/{{$item->url}}">{{$item->title}}</a></h2>
                        <p class="card-text">{{$item->description}}</p>
                    </div>
                    <div class="card-footer text-muted">
                        {{
                        !$diff = Carbon::createFromTimeStamp(strtotime($item->pubDate))->diffForHumans()
                        }}
                        <a href="{{$item->link}}">{{$item->source}}</a> [{{$diff}}]
                    </div>
                </div>
                <br>
            @endforeach

            <div id="pagination">
                {!!$obj->links()!!}
            </div>

        </div>

    </div>
@endsection