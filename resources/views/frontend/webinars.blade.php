@extends('frontend.master-frontend')
@section('js-css')
<style type="text/css">
	.notification{
	    text-align: center;
	    background-color: red;
	    color: #fff;
	    font-weight: bold;
	    padding: 20px 10px;
	    font-size: 16px;
	    margin-top: 50px;
	    margin-bottom: 15px
	}
</style>
@endsection

@section('content')
<br>


@if(Auth::user()->role == 2 || 
	Auth::user()->role == 3 ||
	Auth::user()->role == 5 ||
	Auth::user()->role == 6
)
	<div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/course-material/webinars')}}">Webinars</a></li>
            </ol>
        </nav>
    </div>
        
		<h4 class="notification">{{ 'SORRY! You Need to Upgrade Your Plan to Advance/Professional to Access' }}</h4>
		<a href="{{ route('root_page') }}#most_popular_courses" class="btn">Upgrade Now</a>
	</div>

@else

{{--  data fetch from Database !!  --}}

@endif


@endsection
