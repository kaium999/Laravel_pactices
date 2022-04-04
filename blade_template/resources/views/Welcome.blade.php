<h1>Hello Welcome to Our Family</h1>
<p>First Name:{{$fistname}}</p>
<p>Last Name:{{$lastname}}</p>
<p>Time is:{{time()}}</p>

{{-- @if($fistname=='Abdul')
<h3>{{$fistname}}</h3>
@endif --}}



{{-- @if($fistname=='Abdul')
<h3>{{$fistname}}</h3>
@elseif($lastname=='Oyshe')
<h3>{{$lastname}}</h3>
@else
<h3>Hello Guest</h3>
@endif --}}

{{--@switch(1)
    @case1(1)
        <h3>First</h3>
        @break
    @case1(2)
        <h3>Two</h3>
        @break
    @case1(3)
        <h3>Three</h3>
        @break  
    @default
        <h3>Any</h3>         
@endswitch --}}

{{--@for($i=0;$i<=10;$i++)
<h4>{{$i}}<h4>
@endfor --}}

{{--@foreach ($student as $stud)
   <h4>{{$stud}}</h4>
@endforeach --}}


{{-- @foreach ($student as $stud)
    @if($stud=='Ashik')
    @break
    @endif
   <h4>{{$stud}}</h4>
@endforeach --}}


{{--@foreach ($student as $stud)
    @if($stud=='Ashik')
    @continue
    @endif
   <h4>{{$stud}}</h4>
@endforeach --}}
{{--@foreach ($student as $stud)
    @break($stud=='Ashik')
    <h4>{{$stud}}</h4>
@endforeach 
@foreach ($student as $stud)
    @continue($stud=='Ashik')
    <h4>{{$stud}}</h4>
@endforeach --}}

{{--@foreach($student as $stud)
    <h3>{{$stud}}</h3>
    @if($loop->first)
    <h3>This is First Loop</h3>
    @endif
@endforeach--}}
@foreach($student as $stud)
    <h3>{{$stud}}</h3>
    @if($loop->last)
    <h3>This is last Loop</h3>
    @endif
@endforeach

