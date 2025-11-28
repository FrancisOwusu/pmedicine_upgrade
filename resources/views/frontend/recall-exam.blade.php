 @extends('frontend.master-frontend')




@section('content')

@extends('frontend.master-frontend')
@section('content')
<br>

{{--  data fetch from Database !!  --}}

     <div class="container" style="padding-left: 25px; padding-right: 25px">
        
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
             
                <li class="breadcrumb-item active" aria-current="page">Recall Exam</li>
            </ol>
        </nav>
        
        
        <h2 class="text-center mt-4 mb-sm-5 mb-4" style="font-size: 36px;">Recall Exam</h2>
        
            <p class="text-center">
                Our bank of volunteers who have recently sat the PLAB 1 already have provided us with their recall of the typical questions they an-swered. This has enabled our team to provide our service users with the most recent questions set and asked in the exam. We ask that anybody who is about to sit the exam consider letting us know the type of question asked and it enables out team to provide the most up to date mock exams and questions 
            </p>
        
        
        
        <div class="row my-4 my-md-5" >
            {{-- OLD CODE
            @foreach ($data as $key=>$item)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                    
                    @if ($key%4 == '0')
                        <a href="{{ url('q-bank/recall-exam/'.$item->id) }}" class="btn btn-spinner extraCustomCSS_btn col-12" style="background:darkviolet">{{ $item->name }}</a>
                    @elseif($key%3 == '0')
                        <a href="{{ url('q-bank/recall-exam/'.$item->id) }}" class="btn btn-spinner extraCustomCSS_btn col-12" style="background:violet">{{ $item->name }}</a>
                    @elseif($key%2 == '0')
                        <a href="{{ url('q-bank/recall-exam/'.$item->id) }}" class="btn btn-spinner extraCustomCSS_btn col-12" style="background:darkblue">{{ $item->name }}</a>
                    @else
                        <a href="{{ url('q-bank/recall-exam/'.$item->id) }}" class="btn btn-spinner extraCustomCSS_btn col-12" style="background:hotpink">{{ $item->name }}</a>
                    @endif
                </div>
            @endforeach
            --}}

            @foreach ($data as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                    <a href="{{ url('q-bank/recall-exam/'.$item->id) }}" class="btn btn-spinner col-12 p-0" style="background:{{ $item->cat_color }};padding:0;border-radius:10px;overflow:hidden">
                        <img src="{{ url('storage/photos/'.$item->cat_img) }}" alt="" style="width:35%;float:left;height:55px;">
                        <span style="margin-top:17px">{{ $item->name }}</span>
                    </a>
                </div>
            @endforeach
        </div>

    </div>


@endsection


