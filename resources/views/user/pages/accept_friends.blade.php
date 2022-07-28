<div class="jumbotrob">
    
    <div class="d-inline-flex p-2 bd-highlight">
        @foreach ($users as $item)
        @foreach ($item->friends as $fr)
        @if ($fr->friend==1)
        <ul>
    
                <div class="d-flex flex-row">
                   
                    <a href="">
                        <span >{{$item->name}}</span> 
                         <input type="submit" value="friend" class="btn btn-success">
     
                     </a>
                  </div>
               
               
                
           
        </ul>
        
            
        @endif

            
        @endforeach
            
        @endforeach
    </div>
   
</div>
