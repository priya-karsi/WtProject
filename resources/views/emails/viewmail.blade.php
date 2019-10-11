@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-lg-4">
                <label for="teacher_id" style="font-size:18px;" class="col-form-label text-md-right">{{ __('To : ') }}</label>
                <div class="form-group" >
                        <select class="form-control"  name="standard" id="standard">
                                <option  class="down" value="8">Standard VIII</option>
                                <option  class="down" value="9">Standard IX</option>
                                <option  class="down" value="10">Standard X</option>
                        </select>
                    </div>
        </div>
        <div class="col-md-2 col-lg-2"></div>
        <div class="col-md-6 col-lg-6">
            <label for="teacher_id" style="font-size:18px;" class="col-form-label text-md-right">{{ __('Names of Students : ') }}</label>
            <div id="print">

            </div>
        </div>
        </div>
    </div>
<script>
        $(document).ready(function() {
            $('#standard').change(function() {
                $('#print').children().remove().end();
                var hi = $(this).val();
                var students = <?php echo json_encode($students); ?>;
                $('#print').html(students);
                console.log(students);
                for(i = 0;i < )
            });
        })
    </script>
@endsection