@extends('frontend.master-frontend')

@section('content')
 @php $cat = \App\categoty::where('id',$catId)->first()->name;@endphp
    <div class="container">
        
            
    <!--Gallery Area Start-->
    
  <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('i-bank/image-bank')}}">Image Bank</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="#">{{$cat}}</a></li>
            </ol>
        </nav>


        <div class="gallery-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    @foreach($images as $image)
                    <!--Single Gallery Image Start-->
                    <div class="col-md-4 col-sm-6">
                        <div class="single-gallery-img mb-30">
                            <img src="{{url('storage/image-bank/'.$image->image)}}" alt="">
                            <div class="gallery-overlay">
                                <a class="view-only" href="{{url('storage/image-bank/'.$image->image)}}" data-fancybox="images"><i class="zmdi zmdi-eye"></i></a>
                                <a href="{{ url('i-bank/image-bank-gallery-detail/'.$image->id) }}" >View Details</a>
                            </div>
                        </div>
                    </div>
                    <!--Single Gallery Image End-->
                    @endforeach
                </div>
            </div>
        </div>
        <!--Gallery Area End-->
    </div>
@endsection
