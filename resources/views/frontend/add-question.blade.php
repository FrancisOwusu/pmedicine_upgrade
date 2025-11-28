@extends('frontend.master-frontend')
@section('js-css')
 <script src="https://cdn.tiny.cloud/1/fwsfgiiytzvcywkntu6awfxbtcp9xv49h0jdgwlgcbc0u225/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>

    <style>
        .panel-white{
            background: white;
            padding: 10px;
        }

    </style>
@endsection
@section('content')
<div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/community/add-questions')}}">Plab Community Add Question</a></li>
            </ol>
        </nav>
        
        <div class="panel panel-white">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if (session("success"))
            <div class="alert alert-success">
                {{ session("success") }}
            </div>
        @endif
        <div class="panel-heading clearfix">
            <form action="{{ url('user/question/add/single') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Category</label>
                    <select class="select-2 form-control" name="category">
                        @foreach ($category as $item)
                            <option value="{{ $item->id }}" >{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Enter Question</label>
                    <textarea class="form-control my-editor" name="question"></textarea>
                </div>

                <div class="form-group">
                    <input type="radio" name="answer" value="0">
                    <label>OPtion A</label>
                    <input type="text" class="form-control" name="ans[]">
                </div>
                <div class="form-group">
                    <input type="radio" name="answer" value="1">
                    <label>OPtion B</label>
                    <input type="text" class="form-control" name="ans[]">
                </div>
                <div class="form-group">
                    <input type="radio" name="answer" value="2">
                    <label>OPtion C</label>
                    <input type="text" class="form-control" name="ans[]">
                </div>
                <div class="form-group">
                    <input type="radio" name="answer" value="3">
                    <label>OPtion D</label>
                    <input type="text" class="form-control" name="ans[]">
                </div>
                <div class="form-group">
                    <input type="radio" name="answer" value="4">
                    <label>OPtion E</label>
                    <input type="text" class="form-control" name="ans[]">
                </div>

                <div class="form-group">
                    <label>Explanation (Optional)</label>
                    <textarea class="form-control my-editor" name="explanation"></textarea>
                </div>
                <div class="form-group">
                    <label>Hints (Optional)</label>
                    <textarea class="form-control my-editor" name="hint">{!! $item->hint !!}</textarea>
                </div>

                <button type="submit" class="btn btn-primary" style="border: none;">Save</button>
            </form>
        </div>
    </div>
</div>
    </div>


        
    
<br>
@endsection
@section('js')

    <script>
        $(document).ready(function() {
            $('.select-2').select2();
        });
    </script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    {{-- editor --}}
    <script>
        var editor_config = {
            path_absolute : "/",
            selector: "textarea.my-editor",
            inline: false,
    a_plugin_option: true,
  a_configuration_option: 400,
  
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak image code",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            
            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media | forecolor backcolor emoticons',
            menubar: 'favs file edit view insert format tools table help',
            relative_urls: false,
            
            
            
            
            
            image_title: true,
  /* enable automatic uploads of images represented by blob or data URIs*/
  automatic_uploads: true,
  /*
    URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
    images_upload_url: 'postAcceptor.php',
    here we add custom filepicker only to Image dialog
  */
  file_picker_types: 'image',
  /* and here's our custom image picker*/
  file_picker_callback: function (cb, value, meta) {
    var input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/*');

    /*
      Note: In modern browsers input[type="file"] is functional without
      even adding it to the DOM, but that might not be the case in some older
      or quirky browsers like IE, so you might want to add it to the DOM
      just in case, and visually hide it. And do not forget do remove it
      once you do not need it anymore.
    */

    input.onchange = function () {
      var file = this.files[0];

      var reader = new FileReader();
      reader.onload = function () {
        /*
          Note: Now we need to register the blob in TinyMCEs image blob
          registry. In the next release this part hopefully won't be
          necessary, as we are looking to handle it internally.
        */
        var id = 'blobid' + (new Date()).getTime();
        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
        var base64 = reader.result.split(',')[1];
        var blobInfo = blobCache.create(id, file, base64);
        blobCache.add(blobInfo);

        /* call the callback and populate the Title field with the file name */
        cb(blobInfo.blobUri(), { title: file.name });
      };
      reader.readAsDataURL(file);
    };

    input.click();
  },
            
            
            
            
            
            file_browser_callback : function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.open({
                file : cmsURL,
                title : 'Filemanager',
                width : x * 0.8,
                height : y * 0.8,
                resizable : "yes",
                close_previous : "no"
            });
            }
        };

        tinymce.init(editor_config);
    </script>


@endsection
