<div class="modal-body"> 

    <?php
    include 'db.php';
    $id = $_POST['id'];

  if($_POST['id']){
    $sql = mysqli_query($conn, "SELECT * From staff_info ");
    while($row = mysqli_fetch_assoc($sql)){
     ?>
         <input type="hidden" name="id" value="<?php echo $id ?>"
         <div class="row">
         <div class="col-md-5 text-right">
         <label>Staff ID:</label>
         </div>
         <div class="col-md-2 text-left">
          <?php echo $row['STAFF_ID'] ?>            
          </div>
         </div>
         <br>
         <div class="row">
         <div class="col-md-5 text-right">
         <label>Name:</label>
         </div>
         <div class="col-md-4 text-left">
         <?php echo $row['FIRST_NAME'].", ".$row['MIDDLE_NAME']." ".$row['LAST_NAME']; ?>
    
          </div>
        </div>
         <div class="row">
         <div class="col-md-5 text-right">
         <label>Gender:</label>
         </div>
         <div class="col-md-2 text-left">
         <?php echo $row['GENDER'] ?>
          <label></label>
            
          </div>

         </div>

        <div class="row">
         <div class="col-md-5 text-right">
         <label>Date of Birth:</label>
         </div>
         <div class="col-md-2 text-left">
         <?php echo $row['BIRTH_DATE'] ?>
          <label></label>
            
          </div>

         </div>
         <div class="row">
         <div class="col-md-5 text-right">
         <label>Place of Birth:</label>
         </div>
         <div class="col-md-2 text-left">
        <?php echo $row['BIRTH_PLACE'] ?>
            
          </div>

        </div>
         <div class="row">
         <div class="col-md-5 text-right">
         <label>Address:</label>
         </div>
         <div class="col-md-4 text-left">
          <?php echo $row['ADDRESS'] ?>
          <label></label>
            
          </div>

         </div>


        <div class="row">
         <div class="col-md-5 text-right">
         <label>Countrat Type:</label>
         </div>
         <div class="col-md-2 text-left">
          <?php echo $row['CONTRAT_TYPE'] ?>
          <label></label>
            
          </div>

         </div>

         <div class="row">
         <div class="col-md-5 text-right">
         <label>Salary:</label>
         </div>
         <div class="col-md-2 text-left">
          <?php echo $row['SALARY'] ?>
          <label></label>
            
          </div>

         </div>
         <div class="row">
         <div class="col-md-5 text-right">
         <label>Hire Date:</label>
         </div>
         <div class="col-md-2 text-left">
         <?php echo $row['HIRED_DATE'] ?>
          <label></label>
            
          </div>

         </div>

         
         <div class="row">
         <div class="col-md-8 text-right">
         <!-- <button type="submit" class="btn btn-info"><i class="fa fa-pencil-square" aria-hidden="true"></i> Update</button> -->
          
          </div>

         </div>
         </div>
         </div>
         <div class="modal-footer">
           <a  class="btn btn-default" href="rms.php?page=staff_p&id=<?php echo $id ?>">Update</a>
                  
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
         </div>
        
       

        

    <?php
    }
    } mysqli_close($conn);
     ?>



 