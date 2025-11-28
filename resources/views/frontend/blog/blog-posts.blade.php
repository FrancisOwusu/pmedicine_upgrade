@extends('frontend.master-frontend')
@section('content')

<div class='container'>
<nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>

<li class="breadcrumb-item"><a href="{{url('blog/categories')}}">Revision Notes</a></li>
@php $cat_name =\App\categoty::where('id',request()->route('id'))->first()->name; @endphp
                @if(isset($cat_name))
                    <li class="breadcrumb-item active"><a href="#">{{$cat_name}}</a></li>
                @endif

            </ol>
        </nav>


    @if(!$blogs->isEmpty())
    <div class="row">
        @if(!$blogs->isEmpty())
        @foreach($blogs as $key=>$blog)
            <div class="col-lg-4  col-md-6 col-12">
                <!-- single-courses -->
                <div class="single-our-blog mt--30">
                    <div class="our-blog-image">
                        <a href="{{ route('blogDetails', $blog->id) }}"><img src="{{ url('storage/blog/'.$blog->featured_img) }}" alt=""></a>
                        <span class="in-our-blog-icon">
                            <img src="{{ url('frontend/images/icon/our-blog-01.png') }}" alt="">
                        </span>
                    </div>
                    <div class="our-blog-contnet">
                        <h5><a href="{{ route('blogDetails', $blog->id) }}">{{ $blog->title }}</a></h5>
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
                            <a href="{{ route('blogDetails', $blog->id) }}" class="botton-border">Read more</a>
                        </div>
                    </div>
                </div><!--// single-courses -->
            </div>
        @endforeach
    @endif
    </div>

    <div class='col-12'>
        {!! $blogs->render() !!}
    </div>
    @else
        <div class="row">

                    <div class="col-lg-4  col-md-6 col-12">
                        <!-- single-courses -->
                        <div class="single-our-blog mt--30">
                            <div class="our-blog-image">
                         <img src="{{ url('frontend/images/icon/our-blog-01.png') }}" alt="">
                        </span>
                            </div>
                            <div class="our-blog-contnet">
                                <h5><a href="#">No Blog Post</a></h5>


                            </div>
                        </div><!--// single-courses -->
                    </div>

        </div>
        @endif
    <br/>
</div>

@endsection
