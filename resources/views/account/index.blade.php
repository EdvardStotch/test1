@extends('layouts.account')

@section('content')
    <h1><b>My Page</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
        <span class="w3-margin-right">Filter:</span>
        <button class="w3-button w3-white"><i class="fa fa-question-circle w3-margin-right"></i>Questions</button>
        <button class="w3-button w3-white w3-hide-small"><i class="fa fa-reply w3-margin-right"></i>Answers</button>
        <button class="w3-button w3-white w3-hide-small"><i class="fa fa-comments w3-margin-right"></i>Comments</button>
    </div>

    <div class="">
        @yield('subContent')
    </div>

@endsection

