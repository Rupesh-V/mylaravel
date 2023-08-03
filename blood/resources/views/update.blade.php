@extends('admin')  
@section('content')  
<label for="basic-url" class="how">Blood Donations:</label>
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
          <th>Donor Name</th>
          <th>Blood Group</th>
          <th>Data Of Donation</th>
          <th>Quantity in ml</th>
          <th>Edit</th>
          <th>Delete</th>
          
</tr>

@foreach($result as $crud)  


        
           <tr>
          <td class="td">{{$crud->id}}</td>
          <td >{{$crud->donor_name}}</td>
          <td>{{$crud->blood_group}}</td>
          <td>{{$crud->date_donotion}}</td>
          <td>{{$crud->quantity}}</td>
          <td><a href="{{url('edit/'.$crud->id)}}"  class="btn btn-primary ed"><i class="fa fa-eye" aria-hidden="true"></i></a></td> 
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
