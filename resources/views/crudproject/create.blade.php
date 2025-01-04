<form  method="post" action="{{route('crudproject.store')}}" enctype="multipart/form-data">
       @csrf
        

<div class="form-group">      
              <label for="first_name">First Name:</label><br/><br/>  
              <input type="text" class="form-control" name="first_name" p-2/><br/><br/>  
          </div>  
<div class="form-group">      
<label for="first_name">Last Name:</label><br/><br/>  
              <input type="text" class="form-control" name="last_name"/><br/><br/>  
          </div> 
          <div class="form-group">      
    <label for="gender">Gender:</label><br/><br/>  
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br/>

    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br/>

    <input type="radio" id="others" name="gender" value="others">
    <label for="others">Others</label><br/>

</div>

<div class="form-group">      
              <label for="email">E-mail:</label><br/><br/>  
              <input type="text" class="form-control" name="email"/><br/><br/>  
          </div>    
<div class="form-group">      
              <label for="qualifications">Qualifications:</label><br/><br/>  
              <input type="text" class="form-control" name="qualifications"/><br/><br/>  
          </div>  
          <div class="form-group">      
              <label for="image">Image:</label><br/><br/>  
              <input type="file" class="form-control" name="image"/><br/><br/>  
          </div>            
<br/>  
<button type="submit" class="btn btn-primary">Submit</button>
      </form>

