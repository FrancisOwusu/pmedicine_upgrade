@extends('frontend.master-frontend')
@section('content')
 <div class="container">
        <div class="container" style="padding-left: 30px; padding-right: 30px">
               <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/our-team/our-team')}}">Our Team </a></li>
            </ol>
        </nav>

<div >
     {{--  data fetch from Database !!  --}}
        

            {!! $data !!}
        </div>

<div>
    
       <div class="row my-4 my-md-5">
    
            @if(!$team_members->isEmpty())
                @foreach($team_members as $key=>$member)
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- single-courses -->
                        <div class="single-popular-courses mt--30">
                            <div class="popular-courses-image">
                                <a href="{{route('team-details',$member->id)}}"><img src="{{ asset('storage/team/'.$member->profile)}}" alt=""></a>
                            </div>
                            <div class="popular-courses-contnet">
                                <h5>{{ $member->name }}</h5>
                                <p class='text-justify'><?php echo \Illuminate\Support\Str::limit($member->description, 80); ?></p>
                                <div class="button-block">
                                    <a href="{{route('team-details',$member->id)}}" class="botton-border">READ MORE</a>
                                </div>
                            </div>
                        </div><!--// single-courses -->
                    </div>
                @endforeach
            @endif
        </div>
     </div>
    </div>

@endsection
