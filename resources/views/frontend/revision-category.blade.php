@extends('frontend.master-frontend')

@section('js-css')
 <style>
       

        /*.container {*/
            width: 80%; /* Adjust the width as needed */
            max-width: 1200px; /* Optional: set a maximum width */
        /*    background-color: #f0f0f0;*/
        /*    padding: 20px;*/
        /*    border-radius: 10px;*/
        /*    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);*/
        /*}*/

        /* Optional: Additional styling for mobile devices */
        @media (max-width: 768px) {
            .container {
                width: 90%; /* Adjust the width for smaller screens */
            }
        }
    </style>
@endsection
@section('content')
<br>

{{--  data fetch from Database !!  --}}

 
            <div class="container">
                
                 <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                
                <li class="breadcrumb-item active" aria-current="page">Specialities</li>
            </ol>
        </nav>

            <h2 class="text-center mt-4 mb-sm-5 mb-4" style="font-size: 36px;">
                Specialities
            </h2>
                <p class="text-center">
                    Our revision bank is something that we hope will help you through not only the PLAB exam process, but also through other studies you will undertake and with your CPD. The revision notes are bite-size pieces of information that are taken from sources we have researched such as NICE Guidance, SIGN guidance and a whole range of reference materials including research and Cochrane reviews. It is divided into the same categories as the question bank and each note has a ‘flash card’ and a more detailed content.
                    We recommend you review the revision notes before entering the question bank, and then afterwards to look at some of the details around the questions or any areas of uncertainty you may have. Remember the words of Helen Keller: We can do anything we want to do if we stick to it long enough. Revision helps us do that.

                </p>
                
                
         <div class="row my-4 my-md-5" >
            @foreach ($data as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                    <a href="{{ url('q-bank/revision-category/question/'.$item->id) }}" class="btn btn-spinner col-12 p-0" style="background:{{ $item->cat_color }};padding:0;border-radius:10px;overflow:hidden">
                        <img src="{{url('storage/photos/'.$item->cat_img)}}" alt="" style="max-width:65px;float:left;height:55px;">
                        <span style="margin-top:17px">{{ $item->name }}</span>
                    </a>
                </div>
            @endforeach
        </div>
        {!! $data->render() !!}

  </div>
            </div>



<br>
@endsection
