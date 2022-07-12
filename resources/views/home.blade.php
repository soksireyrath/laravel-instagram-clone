@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-2">
            <img src="/image/profile.svg" style="width:140px;" class="rounded-circle" alt="profile image" />
        </div>

        <div class="col-9 ">
            <div>
                <h2>{{ Auth::user()->username }}</h2>

            </div>
            <div class="d-flex pt-2">
                <div class="mt-3"><strong>0</strong>posts</div>
                <div class="m-3"><strong>245</strong>followers</div>
                <div class="m-3"><strong>147</strong>following</div>
            </div>
            <div class="pt-1">Dream Won't Work Unless You DO </div>
        </div>

        <div class="row  pt-5">
            <div class="col-4">
                <img src="/image/post1.jpg" style='width:400px' alt="post1" />
            </div>
            <div class="col-4">
                <img src="/image/post2.jpg" style='width:400px' alt="post2" />
            </div>
            <div class="col-4 ">
                <img src="/image/post3.jpg" style='width:400px' alt="post3" />
            </div>

            <div class="col-4 ">
                <img src="/image/post6.jpg" style='width:400px' alt="post6" />
            </div>
            <div class="col-4 ">
                <img src="/image/post5.jpg" style='width:400px' alt="post5" />
            </div>
            <div class="col-4 ">
                <img src="/image/post4.jpg" style='width:400px' alt="post4" />
            </div>

        </div>
    </div>
</div>



</div>
@endsection