<?php
use Carbon\Carbon;
?>
@extends('layouts.base')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <br>
            <div class="card mb-12">
                <div class="card-body">
                    <h2 class="card-title">{{$obj->title}}</h2>
                    <p class="card-text">{{$obj->description}}</p>
                </div>
                <div class="card-footer text-muted">
                    {{
                    !$diff = Carbon::createFromTimeStamp(strtotime($obj->pubDate))->diffForHumans()
                    }}
                    <a href="{{$obj->link}}">{{$obj->source}}</a> [{{$diff}}]
                </div>
            </div>
            <br>
        </div>
    </div>
@endsection