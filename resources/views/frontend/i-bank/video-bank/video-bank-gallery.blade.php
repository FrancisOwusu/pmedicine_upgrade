@extends('frontend.master-frontend')

@section('content')
    @php $cat = \App\categoty::where('id',$catId)->first()->name;@endphp
    <div class="container">
      <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page"><a href="{{url('i-bank/video-bank')}}"> Video Bank</a></li>
                <li class="breadcrumb-item active"><a href="#">{{$cat}}</a></li>
               
    
            </ol>
        </nav>  
        </div>
    <!--Gallery Area Start-->
   
        <!--Course Area Start-->
        <!--<div class="course-area bg-white section-padding">-->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-wrapper">
                            <div class="section-title">
                                <h2 class="text-center mt-4 mb-sm-5 mb-4" style="font-size: 36px;">
                                    Video Bank</h2>
                                <p class="text-center">There are many variations of passages of Lorem Ipsum</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($videos as $video)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-item mb-50">
                            <div class="single-item-image overlay-effect">
                                <a href="{{ url('i-bank/video-bank-gallery-detail/'.$video->id) }}">
                                    <video width="360" height="360" controls>
                                        <source src="{{url('storage/video-bank/'.$video->image)}}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </a>
                            </div>
                            <div class="single-item-text">
                                <h4><a href="{{ url('i-bank/video-bank-gallery-detail/'.$video->id) }}">{{$video->title}}</a></h4>
                                <p>@php echo Str::limit($video->description, 50) @endphp</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
       <!-- </div>-->
        <!--End of Course Area-->
   
@endsection
