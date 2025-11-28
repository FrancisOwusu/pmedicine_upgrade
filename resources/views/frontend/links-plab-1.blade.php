@extends('frontend.master-frontend')
@section('content')
      <div class="container" >

        
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/community/useful-links-plab-1')}}">Useful Links</a></li>
            </ol>
        </nav>
           

    <div>
        {{--  data fetch from Database !!  --}}
        {!! $data !!}
    </div>
        </div>

  
@endsection
