<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject Information</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script  src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="crossorigin="anonymous"></script>
   
   
    <script type="text/javascript" src="{{ URL::asset('js/subject.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<style type="text/css">
body { padding: 40px; }
body
{
    font-family: Arial;
    font-size: 10pt;
}

#txtDate
{
    position: relative;
    top: -7px;
    margin-right: 5px;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  
}

.left {
  left: 0;
}

.right {
  right: 0;
}

/* table    {  background-color:black; color:#FFF;   text-align: center; padding-top: 10px; border:inset 1px #000;} */

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  padding-bottom: 12px;
}

#customers td, #customers th {
   text-align: center;
   padding-bottom: 12px;
}

#customers tr:nth-child(even){background-color:#f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #343a40;
  color: white;
}

</style>

</head>
<body>

<div class="content">
        <div class="text-center"><br>
        <h1> Subject Information Form</h1>
 </div>
            </div>

    
<div class="table-responsive-sm">
  <div class="row justify-content-md-center">
    <div class="col col-lg-6"><br><br>
      


              <form id="formSubject">  <br><br>
              {{csrf_field()}} 
                <div class="form-group">
                 <label for="subject_name"></label>
                   <input  type="text" class="form-control" name="subject_name" id="subject_name" placeholder="Enter Your Subject Name" >
                   <input type="hidden" class="form-control" id="fid">
                </div>

                <div class="form-group">
                 <label for="subject_marks"></label>
                   <input  type="text" class="form-control" name="subject_marks" id="subject_marks" placeholder="Enter Your Subject Marks ">
                   <input type="hidden" class="form-control" id="fid">
                </div>

               
                    </br>         
                    <div class="alert alert-success" id="success-alert">
                      <button type="button" class="close" data-dismiss="alert">x</button>
                       <strong>Success! </strong> Subject have added to database.
                    </div>
                    <button id="btnAdd" type="reset"  class="btn btn-success" >Save</button>
                    
                    <input class="btn btn-primary" type="reset" value="Reset">
                   </form><br><br>
                
                    <table id="customers" class="table-responsive-col col-lg-12" >
                      
                        <th>ID</th>
                        <th>Subject Name</th>
                        <th>Subject Marks</th>
                        <th>Delete</th>
                        <th>Edit</th>
                        
                        

                        <tbody id="tbodySubject" >                      
                        </tbody>
                    </table> <br><br><br><br>
               </div>
 

            
<div class="col col-lg-2" ><br><br><br><br><br>

  <form id="formTot">  
      
  <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
  <div class="card-header">Min marks</div>
  <div id="min" class="card-body" >
    <h5 class="card-title">Min marks</h5>
   
  </div>
 </div>

 <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
  <div class="card-header">Max Marks</div>
  <div id="max" class="card-body">
    <h5 class="card-title">Max Marks</h5>

  </div>
 </div>

<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
  <div class="card-header">Average Marks</div>
  <div id="avg" class="card-body">
  <h5 class="card-title">Average Marks</h5> 
  </div>
</div>

<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
  <div class="card-header">Total Marks</div>
  <div id="sum" class="card-body">
    <h5 class="card-title">Total Marks</h5>
  </div>
</div>
  </form>
      </div>
      </div>
      </div>


</body>
</html>