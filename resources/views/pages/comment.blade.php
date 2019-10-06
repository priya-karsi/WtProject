    @extends('layouts/main')
    @section('content')
    <script src="/js/Bootstrap/Select/bootstrap-select.js"></script>

        <form method="POST" action="{{ url('/comment') }}" aria-label="{{ __('Comment') }}">
            @csrf
            <div class="container">
            <div class="row">
                <div class="col-md-4">
                        <div class="form-group" >
                                <select class="form-control"  name="standard" id="standard">
                                        <option style="background-color:#d9d5d5; color:#566f90;" value="8">Standard VIII</option>
                                        <option style="background-color:#d9d5d5; color:#566f90;" value="9">Standard IX</option>
                                        <option style="background-color:#d9d5d5; color:#566f90;" value="10">Standard X</option>
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
            <div class="form-group row">
                    <div class="col-md-6">
                    <label for="teacher_id" class="col-md-4 col-form-label text-md-right">{{ __('Teacher_id') }}</label>
                    <input value="{{ Auth::user()->name }}" id="teacher_id" type="text" class="form-control" name="teacher_name" required autocomplete="teacher_name" readonly="readonly\">
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