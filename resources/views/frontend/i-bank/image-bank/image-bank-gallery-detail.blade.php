@extends('frontend.master-frontend')

@section('content')
   @php $cat = \App\categoty::where('id',$image->category_id)->first()->name;@endphp
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                       <li class="breadcrumb-item"><a href="{{url('i-bank/image-bank')}}">Image Bank</a></li>
                 <li class="breadcrumb-item" aria-current="page"><a href="{{url('/i-bank/image-bank-gallery/'.$image->category_id)}}">{{$cat}}</a></li>
      
                <li class="breadcrumb-item active" aria-current="page">{{$image->title}}</li>
            </ol>
        </nav>
            
    <!--Gallery Area Start-->
        <!--Blog Area Start-->
        <div class="blog-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 blog-post-item ml-auto mr-auto">
                        <div class="blog-wrapper blog-details">
                            <div class="blog-img img-full">
                                <img src="{{url('storage/image-bank/'.$image->image)}}" alt="">
                            </div>
                            <div class="blog-content">
                                <div class="single-item-comment-view">
                                    <span><i class="zmdi zmdi-calendar-check"></i>Created At: {{date('d M Y', strtotime($image->created_at))}}</span>
                                </div>
                                <h3>{{$image->title}}</h3>
                                <p>@php echo $image->description @endphp</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Blog Area End-->
        </div>
@endsection
