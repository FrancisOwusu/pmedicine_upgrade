@extends('frontend.master-frontend')

@section('content')

    <div class="container" style="padding-left: 30px; padding-right: 30px">
             <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>

                <li class="breadcrumb-item active" aria-current="page">Revision Notes</li>
            </ol>
        </nav>

        <div class="col-lg-12 col-md-12 col-sm-12 text-center text-left">
            <h2 class="text-center" style="font-size: 35px;text-align: center;">
              Revision Notes
            </h2>
            <p class="text-justify">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
        <br />
        <div class="row" style="margin-bottom:12px;" >
        @foreach ($data as $item)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                <a href="{{ route('blogByCategories',$item->id) }}" class="btn btn-spinner col-12 p-0" style="background:{{ $item->cat_color }};padding:0;border-radius:10px;overflow:hidden">
                    <img src="{{ url('storage/photos/'.$item->cat_img) }}" alt="" style="width:35%;float:left;height:55px;">
                    <span style="margin-top:17px">{{ $item->name }}</span>
                </a>
            </div>
        @endforeach
    </div>
    {!! $data->render() !!}

    </div>
    </div>
    <br>
    


    <br>
@endsection