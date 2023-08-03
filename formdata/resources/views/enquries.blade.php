@extends('admin')  
@section('content')  
<label for="basic-url" class="how">Enquiries:</label>
        <input class="form-control  search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success sg" type="submit">Search</button>
      </form>
      
    </div>
    <div class="col-lg-2 ad">
          
    <a href="{{'add'}}"  class="btn btn-primary" >Add New</a>
    </div>
    </section>
<section  id="/enquiries" class="tabb"> 
      @if(session('message'))
      <div class="alert alert-success">{{session('message')}}</div>
      @endif
<table>
<tr>
          <th>Id</th>
          <th>Full Name</th>
          <th>Email</th>
          <th>Zipcode</th>
          <th>Created</th>
          
</tr>

@foreach($result as $crud)  


        
           <tr>
          <td class="td">{{$crud->id}}</td>
          <td >{{$crud->fullname}}</td>
          <td >{{$crud->email}}</td>
          <td>{{$crud->zipcode}}</td>
          <td>{{$crud->created_at}}</td>
          </tr>
@endforeach 
</table>  
<div class="page">
{{$result->onEachSide(1)->links()}}
</div>
</section>
@endsection  
