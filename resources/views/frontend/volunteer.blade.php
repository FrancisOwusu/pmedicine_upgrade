@extends('frontend.master-frontend')
@section('content')
  <div class="container" style="padding-left: 30px; padding-right: 30px">
        
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/our-team/volunteer')}}">Volunteer</a></li>
            </ol>
        </nav>
        {{--  data fetch from Database !!  --}}
        {!! $data !!}

    </div>
    <!--<div class="container-fluid">
        <div class='page_banner_img_common'>
            <div class='overlay__'>
                <p>Volunteer</p>
            </div>
        </div>
        <div class="container">
            {{--  data fetch from Database !!  --}}
            {!! $data !!}
        </div>

    </div>
    <br>-->
@endsection

