@extends('backend.master-backend')
@section('js-css')

    <style>
        .panel-white{
            background: white;
            padding: 10px;
        }

    </style>
@endsection
@section('content')
<br>

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
        @if (session("error"))
            <div class="alert alert-danger">
                {{ session("error") }}
            </div>
        @endif
        <div class="panel-heading clearfix">
            <form action="{{ url('admin/recall/question/add/single') }}" method="POST">
                @csrf
                <input type="hidden" name="status" value="{{ $id }}">

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
                    <label>OPtion D</label>
                    <input type="text" class="form-control" name="ans[]">
                </div>

                <div class="form-group">
                    <label>Explanation (Optional)</label>
                    <textarea class="form-control my-editor" name="explanation"></textarea>
                </div>
                <div class="form-group">
                    <label>Hint (Optional)</label>
                    <textarea class="form-control my-editor" name="hint"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
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
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],

            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media | forecolor backcolor emoticons',
            menubar: 'favs file edit view insert format tools table help',
            relative_urls: false,
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
