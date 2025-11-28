@extends('frontend.master-frontend')
@section('js-css')
    <style type="text/css">
        p {
            text-align: justify;
        }

        h4 {
            margin-top: 30px;
            border-bottom: 1px solid #ddd
        }

        ul {
            display: block;
            list-style-type: square;
            margin-left: 25px;
        }

        .heading_ {
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-size: 30px;
            text-align: center;
        }

        section {
            width: 100%;
            float: left;
        }

        .banner-section {
            background-image: url("https://static.pexels.com/photos/373912/pexels-photo-373912.jpeg");
            background-size: cover;
            height: 200px;
            left: 0;
            top: 0;
            background-position: 0;
        }

        .post-title-block {
            padding: 100px 0;
        }

        .post-title-block h1 {
            color: #fff;
            font-size: 85px;
            font-weight: bold;
            text-transform: capitalize;
        }

        .post-title-block li {
            font-size: 20px;
            color: #fff;
        }

        .image-block {
            float: left;
            width: 100%;
            margin-bottom: 10px;
        }

        .blog_image {
            max-width: 100%;
            height: auto;
        }
        /* ------ wedgets ------ */
        .widgets{
            background-color:#fff;
            padding:20px 15px;
            margin-bottom:20px;
        }
        .widgets h3{
            padding-bottom:10px;
            font-size:20px;
            margin-bottom:15px;
            border-bottom:1px solid #eaeaea;
        }
        .widgets ul{
            list-style: none;
            padding-left: 0px;
        }
        .widgets ul li{
            font-weight: 600;
            font-size: 13px;
            text-transform: uppercase;
            margin-bottom: 10px;
        }
        .widgets h4{
            font-size: 16px;
            font-weight: 600;
            line-height: 22px;
            letter-spacing: 0.3px;
            padding-bottom: 10px;
            border-bottom: 1px solid #e6e6e6;
        }

        }
        @media only screen and (max-width: 600px) {
            #pdf_show{
                width="100%";
                height="800%" ;
            }

            /*body {*/
            /*  background-color: lightblue;*/
        }
    </style>
@endsection

@section('content')

    <div class="container" style="padding-left: 25px; padding-right: 25px">


        
       
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('/blog/categories')}}">Revision Notes</a></li>
                @if(isset($data->category))
                    <li class="breadcrumb-item"><a href="{{url('blog/'.$data->category->id.'/all')}}">{{$data->category->name}}</a></li>
                @endif
                <li class="breadcrumb-item active" aria-current="page">{{$data->title}}</li>
            </ol>
        </nav>
        <div class="post-content-section">


            <div class="container">
            <!-- <h3 class="heading_">{{ $data->title }}</h3> -->
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12">

                        {!!$data->description!!}

                        @if(isset($data->attachment))



                            <div class='col-12' id="pdf_show_desktop">
                                <iframe src="https://docs.google.com/gview?url={{ url('storage/blog/'.$data->attachment) }}&embedded=true#:page.7" style="" width="100%" height="870px" allowfullscreen="false" webkitallowfullscreen="false"  mozallowfullscreen="false"></iframe>
                            </div>
                            <div class='col-12' id="pdf_show_mobile" >
                                <iframe src="https://docs.google.com/gview?url={{ url('storage/blog/'.$data->attachment) }}&embedded=true#:page.7"  style="" width="100%" height="435px" allowfullscreen="false" webkitallowfullscreen="false"  mozallowfullscreen="false"></iframe>
                            </div>


                        @else
                        @endif

                        @if(!empty($files))
                            <h3 class="text-uppercase heading_"
                                style="margin-left: -15px;font-weight:bold;font-size:16px">REFERENCE FILES</h3>
                            <div class='col-12' style="margin-top:10px;">
                                <div class="card-body">

                                    @foreach($files as $file)
                                        @if(in_array($file->type, array('pdf', 'jpeg', 'jpg', 'png')))
                                            <div><a href="{{route('view_file', $file->id)}}"
                                                    target="_blank">{{$file->name}}</a></div>
                                        @elseif($file->type === 'mp4')
                                            {{--<video width="320" height="240" controls>
                                                <source src="{{public_path("storage/app/public/questions/".$file->assetable_id.'/'.$file->name)}}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>--}}

                                            <video width='320' height='240' controls>
                                                <source src='google.guru' type='video/mp4'>
                                                Your browser does not support the video tag.
                                            </video>
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                        @endif




                    </div>

                </div>
            </div>

        </div>

    </div>
    </div>

@endsection
@section('js')
<script>
    window.addEventListener("resize", responsive);
    function responsive() {
        if(screen.width > 767){
            document.getElementById("pdf_show_mobile").style.display = "none";
            document.getElementById("pdf_show_desktop").style.display = "block";
        }else{
            document.getElementById("pdf_show_desktop").style.display = "none";
            document.getElementById("pdf_show_mobile").style.display = "block";
        }
    }

    if(screen.width > 767){
        document.getElementById("pdf_show_mobile").style.display = "none";
        document.getElementById("pdf_show_desktop").style.display = "block";
    }else{
        document.getElementById("pdf_show_desktop").style.display = "none";
        document.getElementById("pdf_show_mobile").style.display = "block";
    }
</script>
    @endsection