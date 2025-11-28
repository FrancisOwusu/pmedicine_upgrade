@extends('frontend.master-frontend')
@section('content')
<br>

 <div class="container">
           <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/our-team/plab-news')}}">All News & Updates</a></li>
            </ol>
        </nav>
        
    </div>
<div class='container' style="padding-left: 35px; padding-right: 35px">
    
  
        <div class="row align-items-stretch">

        @if(!$blogs->isEmpty())
        @foreach($blogs as $key=>$blog)
            <div class="align-self-stretch col-lg-4 col-md-6 col-12">
                <!-- single-courses -->
                <div class=" single-our-blog mt--30">
                    <div class="our-blog-image">
                        <a href="#"><img src="{{ url('storage/blog/'.$blog->featured_img) }}" alt=""></a>
                        <span class="in-our-blog-icon">
                            <img src="{{ url('frontend/images/icon/our-blog-01.png') }}" alt="">
                        </span>
                    </div>
                    <div class="our-blog-contnet">
                        <h5><a href="">{{ $blog->title }}</a></h5>
                        <div class="post_meta">
                            <!-- <ul>
                                <li><p>By: <a href="#">Sekh Rana</a></p></li>
                                <li><p>15 Fab 2018</p></li>
                            </ul> -->
                        </div>
                        <div class="text-justify">
                            <?php echo Str::limit($blog->description, 110); ?>
                        </div>
                        
                        
                        <div class="button-block">
                            <a href="{{ route('newsDetails', $blog->id) }}" class="botton-border">Read more</a>
                        </div>
                    </div>
                </div><!--// single-courses -->
            </div>
        @endforeach
    @endif
    </div>

    </div>
    
    <div class='col-12'>
        {!! $blogs->render() !!}
    </div>
    <br/>
</div>
            
@endsection