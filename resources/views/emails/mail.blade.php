@if($info == "send_in")
<h1>Hi,This Is to Inform That,Your Child-{{ $student[0]->name }} has successfully reached.</h1>
@else
<h1>Hi,This Is to Inform That,Your Child-{{ $student[0]->name }} has successfully discarded from our class.</h1>
@endif