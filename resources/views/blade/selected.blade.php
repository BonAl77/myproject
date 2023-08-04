<select id="Month">
 @foreach($months as $key => $month)
       {{ $key }}: {{ $$currentMonth }}
     <option value="Mohth" @foreach($$months) selected @endif>
    @endforeach 
</select>
   