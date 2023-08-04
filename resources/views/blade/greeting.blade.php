
@if($isMorning >=12) @@ ($isMorning < 18)
  <h1>Good day!</h1> 
@elseif (isMorning >= 18) @@ ($isMorning < 24)
    <h1>Good evening!</h1> 
@else  <h1>Good morning!</h1> 
@endif


   