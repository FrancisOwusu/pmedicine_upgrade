@extends('frontend.master-frontend')
@section('content')
<br>

 <div class="container" style="padding-left: 30px; padding-right: 30px">
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Courses</li>
            </ol>
        </nav>
</div>
    <div class='container'>
    <!-- Most Popular Courses Area -->
    <div class="most-popular-courses-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8  ml-auto mr-auto">
                    <div class="section-title-two">
                        <h3>Most Popular Courses</h3>
                    </div>
                </div>
            </div>

            <div class="row">
            @if(!$course_list->isEmpty())
                @foreach($course_list as $key=>$course)
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- single-courses -->
                    <div class="single-popular-courses mt--30">
                        <div class="popular-courses-image">
                            
                            <a href="{{ url('k-bank/courses-details') }}"><img src="{{ asset('storage/course/'.$course->featured_img) }}" alt=""></a>
                            <a href="{{ url('k-bank/courses-details') }}"><img src="{{ asset('storage/course/'.$course->featured_img) }}" alt=""></a>
{{--                            <a href="{{ url('k-bank/courses-details') }}"><img src="{{ asset('storage/course/'.$course->featured_img) }}" alt=""></a>--}}
                        </div>
                        <div class="popular-courses-contnet">
                            <h5>{{ $course->title }}</h5>
                            <div class="post_meta">
                                <ul>
                                    <li><a href="{{ url('k-bank/courses-details') }}">{{ $course->title }}</a></li>
                                    <li><p>Duration : {{ $course->duration }}</p></li>
                                </ul>
                            </div>
                            <p class='text-justify'><?php echo \Illuminate\Support\Str::limit($course->description, 80); ?></p>
                            <div class="button-block">
                                <a href="{{ url('k-bank/courses-details') }}" class="botton-border">READ MORE</a>
                                <a href="{{ route('subscription_plans', $course->title) }}" class="botton-border">SUBSCRIBE</a>
                            </div>
                        </div>
                    </div><!--// single-courses -->
                </div>
                @endforeach
            @endif

            </div>

        </div>
    </div>

</div>

@endsection
