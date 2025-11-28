@extends('frontend.master-frontend')
@section('content')
 <div class="container" style="padding-left: 30px; padding-right: 30px">
    
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/our-team/plab-exam')}}">All About Plab</a></li>
            </ol>
        </nav>
         <div class="container">
        {{--  data fetch from Database !!  --}}
        {!! $data !!}
</div>
    </div>
 
@endsection
