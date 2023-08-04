
<ul>
   
    @foreach($months as $key => $month)
        <li>{{ $key }}: {{$month}}</li>
       
@if ($month == 'May')
       @break
       @endif 
       @endforeach   
</ul>
