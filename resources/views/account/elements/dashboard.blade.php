@extends('account.index')

@section('subContent')
<div class="row">
    <div class="col-sm-6">
        <a href="" class="text-center">
            <img src="{{ asset('img/questions-icon.jpg') }}" class="img-responsive">
            <h4>My Questions <span class="badge">{{ count($questions) }}</span></h4>
        </a>
    </div>
    <div class="col-sm-6">
        <a href="" class="text-center">
            <img src="{{ asset('img/answers-icon.png') }}" class="img-responsive">
            <h4>My Answers <span class="badge">{{ count($answers) }}</span></h4>
        </a>
    </div>

</div>
<div class="row">
    <div class="col-sm-6">
        <a href="" class="text-center">
            <img src="{{ asset('img/comments-icon.jpg') }}" class="img-responsive">
            <h4>My Comments</h4>
        </a>
    </div>
    <div class="col-sm-6">
        <a href="" class="text-center">
            <img src="{{ asset('img/answers-me-icon.jpg') }}" class="img-responsive">
            <h4>Answered me</h4>
        </a>
    </div>
</div>
@endsection