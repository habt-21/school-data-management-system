
<script>
    $(document).ready(function(){

    $(document).on('click', '#getUser', function(e){
  
     e.preventDefault();
  
     var uid = $(this).data('id');      
 
     $.ajax({
          url: 'view_staff.php',
          type: 'POST',
          data: 'id='+uid,
          beforeSend:function()
{
 $("#content").html('Working on Please wait ..');
},
success:function(data)
{
   $("#content").html(data);
},
     })

    });
})
  </script>
   <?php
  include 'newstaff.php';
  ?>

          <h1 class="page-header">STAFF <button style="float:right" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
      <i class="glyphicon glyphicon-plus"></i> New Entry</button></h1>
  
 

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
     
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New Staff</h4>
        </div>
        <div class="modal-body">

 

        
 <form class="form-horizontal" method="post">
<fieldset>
<div class="container">

<div class="col-md-12" style="width:70%;border-bottom:1px solid #333">
<h4><b>Staff's Personal Details </b></h4>
</div>
<br>
<br>
<div class="col-md-4">
<br>
<div class="form-group">
  <label class="col-xs-4 control-label" for="lrn">staff ID</label>  
  <div class="col-xs-6">
  <input id="lrn" name="lrn" type="text" placeholder="Enter staff ID " maxlength="12" class="form-control input-xs" required="">
  </div>
</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-xs-4 control-label" for="name">Name</label>
  <div class="col-xs-8">
    <div class="input-group">
      <input id="name" class="form-control input-xs"
      style="text-transform: capitalize;" name="lname" placeholder="First Name"  type="text" required="">
      <input id="name" class="form-control input-xs"
      style="text-transform: capitalize;" name="fname" placeholder="Middle name"  type="text" required="">
      <input id="name" class="form-control input-xs"
      style="text-transform: capitalize;" name="mname" placeholder="Last Name"  type="text" required="">

    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-xs-4 control-label" for="gender">Gender</label>
  <div class="col-xs-4">
    <select id="gender" name="gender" class="form-control input-xs">
      <option value="MALE">Male</option>
      <option value="FEMALE">Female</option>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-xs-4 control-label" for="address">Qualification</label>
  <div class="col-xs-8">
    <div class="input-group">
      <input id="address" class="form-control"
      style="text-transform: capitalize;" name="bp" placeholder="Qualification"  type="text" required="">    </div>
  </div>
</div>
</div>


<div class="col-md-4">
<br>
<br>
<br>

<div class="form-group">
  <label class="col-xs-5 control-label" for="dob">Date of Birth</label>  
  <div class="col-xs-7">
  <input id="dob" name="dob" type="date" placeholder="YYYY-MM-DD" class="form-control input-md" required="">
  </div>
</div>

<div class="form-group">
  <label class="col-xs-5 control-label" for="pob">ADDRESS</label>  
  <div class="col-xs-7">
  <input id="pob" name="pob" type="text" style="text-transform: capitalize;" placeholder="Enter Student Address" class="form-control input-xs" required="">
  </div>
</div>


<div class="form-group">
  <label class="col-xs-5 control-label" for="pg">Place of Birth</label>
  <div class="col-xs-7">
    <div class="input-group">
      <input id="pg" name="pg" class="form-control" style="text-transform: capitalize;" placeholder="Enter place of birth" type="text" required="">
    </div>
  </div>
  <label class="col-xs-5 control-label" for="pg">Contract Type</label>
  <div class="input-group">
  <input id="pg" name="pg_add" class="form-control" style="text-transform: capitalize;" placeholder="Enter Contract Type" type="text" required="">
  </div>
</div>
</div>
<div class="col-md-12" style="width:70%;border-bottom:1px solid #333">
<h4><b>Intermediate Details </b></h4>
</div>
<br>
<br>
<div class="col-md-12">
<br>
<div class="form-group">
  <label class="col-xs-2 control-label" for="icc">Salary</label> 
  <br>
  <div class="col-xs-6">
  <input id="icc" name="icc" type="text"
  style="text-transform: capitalize;"
   placeholder="Enter salary " class="form-control input-xs" required="">
  </div>
</div>


  <div class="form-group">
    <label class="col-xs-2 control-label" for="sy">Hire Date</label>
  
  <div class="col-xs-10">
    <input class="form-control" style="width:150px" id="sy" name="sy" type="date">

  </div>
  </div>
  

  <div class="form-group">
  <label class="col-xs-2 control-label" for="tn">Phone Number</label> 
  <br>
  <div class="col-xs-6">
  <input id="tn" name="tny" type="phone" style="width:100px;text-align:right"
   class="form-control input-xs" required="">
  </div>
</div>

<div class="form-group">
  <label class="col-xs-2 control-label" for="ave">Email</label> 
  <div class="col-xs-6">
  <input id="ave" name="ave" type="email" style="width:100px;text-align:right"
   class="form-control input-xs" required="">

  </div>
</div>
</div>


</div>
</fieldset>





        </div>
        <div class="modal-footer">
        <!--<input type="reset" class="btn btn-success " id="reset" name="reset" value="Reset Form">-->
      <input type="submit" class="btn btn-success " name="submitb" value="Submit Form">
      
        </form>
          <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      
    </div>
  </div>



       <div class="col-md-12">
          
       <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Students List</h3>

        </div> 
        <div class="panel-body"> 
  <table id="students" class="table table-bordered table-condensed">
    <thead>
      <tr id="heads">
        <th style="width:10%;text-align:center">Staff ID</th>
        <th style="width:30%;text-align:center">Name</th>
        <th style="width:20%;text-align:center">Gender</th>
        <th style="width:10%"></th>
      </tr>
    </thead>
    <tbody>
    <?php
    include 'db.php';
    $sql=  mysqli_query($conn, "SELECT * FROM staff_info order by FIRST_NAME");
    while($row = mysqli_fetch_assoc($sql)) {
      $sid = $row['STAFF_ID'];
    ?>
      <tr>
        <td><?php echo $row['STAFF_ID'] ?></td>        
        <td><?php echo $row['FIRST_NAME'] . ', ' . $row['MIDDLE_NAME']. ' ' . $row['LAST_NAME'] ?></td>
        
        <td style="text-align:center"><?php echo $row['GENDER'] ?></td>
        
     
      <td style="text-align:center"> 
     <a  class="btn btn-info" data-toggle="modal" data-target="#view-modal" data-id="<?php echo $sid ?>" id="getUser">View Profile</a>
     </td>
       </tr>

      <?php
    
    } mysqli_close($conn);
      ?>
    </tbody>
  </table>
</div>
</div> 
</div>

       <div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog"> 
               <div class="modal-content modal-lg">  
             
                  <div class="modal-header"> 
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                     <h4 class="modal-title">
                     <i class=""></i> PROFILE
                     </h4> 
                  </div> 
                       <div id="content">
                      
                     </div>
                  
                                 
              </div> 
            </div>
          </div>  



<script type="text/javascript">
        $(function() {
            $("#students").dataTable(
        { "aaSorting": [[ 2, "asc" ]] }
      );
        });
    </script>
