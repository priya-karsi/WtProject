    @extends('layouts/main')
    @section('content')
    <style>
        .down{
            background-color:#d9d5d5; 
            color:#566f90; 
            font-size:20px;  
        }
    </style>
    <script src="/js/Bootstrap/Select/bootstrap-select.js"></script>

        <form method="POST" action="{{ url('/comment') }}" aria-label="{{ __('Comment') }}">
            @csrf
            <div class="container">
            <div class="form-group row">
                    <div class="col-md-3">
                    <label for="teacher_id" style="font-size:18px;" class="col-form-label text-md-right">{{ __('From : ') }}</label>
                    <input value="{{ Auth::user()->name }}" id="teacher_id" type="text" style="font-size:23px;" class="form-control" name="teacher_name" required autocomplete="teacher_name" readonly="readonly\">
                    </div>
            </div>
        </div>
            <div class="container">
            <div class="row">
                <div class="col-md-4">
                        <label for="teacher_id" style="font-size:18px;" class="col-form-label text-md-right">{{ __('To : ') }}</label>
                        <div class="form-group" >
                                <select class="form-control"  name="standard" id="standard">
                                        <option  class="down" value="8">Standard VIII</option>
                                        <option  class="down" value="9">Standard IX</option>
                                        <option  class="down" value="10">Standard X</option>
                                </select>
                            </div>
                </div>
            </div>
    </div>
            <select id="student_name" name="student_name" required autocomplete="student_name"> 
                    
                </select> 
              <div id="print">

              </div>
            <div class="form-group row">
                    <label for="comment" class="col-md-4 col-form-label text-md-right">{{ __('Comment') }}</label>

                    <div class="col-md-6">
                        <input value="Comment" id="comment" type="text" class="form-control" name="comment" required autocomplete="comment">
                    </div>
            </div>
            
            <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Submit') }}
                        </button>
                    </div>
                </div>
                <script>
                        $(document).ready(function() {
                            $('#standard').change(function() {
                                $('#student_name').children().remove().end();
                                var hi = $(this).val();
                                $('#print').html(hi);
                                var students = <?php echo json_encode($students); ?>;
                                $('#print').html(students);
                                console.log(students);
                                
                                $.each(students, function () {
                                var flag=0
                                $.each(this, function (name, value) {
                                if(name=="standard" && value==hi){
                                    flag = 1;
                                }
                                });
                                if(flag==1)
                                {
                                    $.each(this, function (name, value) {
                                    if(name=="name"){
                                        $('#student_name').append(new Option(value,value))
                                    }
                                    });
                                }

                            });
                        });
                        });
                </script>
            @endsection