@extends('student.stdadmin')  
@section('content')  
<label for="basic-url" class="how">How otm can benefit you:</label>
        <input class="form-control  search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success sg" type="submit">Search</button>
      </form>
      
    </div>
    <div class="col-lg-2 ad">
          
    <a href="{{'add'}}"  class="btn btn-primary" >Add new</a>
    </div>
</section>
<section  id="howw" class="tab">
      @if(session('message'))
      <div class="alert alert-success">{{session('message')}}</div>
      @endif
<table >  
<tr>
          <th>Id</th>
          <th>FirstName</th>
          <th>LastName</th>
         
          <th>Email</th>
          <th>Phone</th>
          <th>Address</th>
          <th colspan="2">Changes</th>
</tr>

@foreach($result as $crud)  


        
           <tr>
          <td class="td">{{$crud->id}}</td>
          <td >{{$crud->firstname}}</td>
          <td>{{$crud->lastname}}</td>
          <td>{{$crud->email}}</td>
          <td>{{$crud->phone}}</td>
          <td>{{$crud->address}}</td>
          <td><a href="{{url('view/'.$crud->id)}}"  class="btn btn-primary ed"><i class="fa fa-eye" aria-hidden="true"></i></a></td> 
          <td><form action="/delete/{{$crud->id}}" method="post">
          @method('DELETE')     
          @csrf
                    <button type="submit"  class="btn btn-danger">Delete</button>
              </form>
         </td>
        </tr>
@endforeach 

</table>  



</section>

@endsection  
