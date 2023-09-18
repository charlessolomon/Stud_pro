 <label for="Choice of Course">Choice of Course:</label>    
 <input type=text id="course" name="course" list="bck" placeholder='Course Name' class='form-control'><datalist id="bck">
 <?php $result=mysqli_query($conn,"SELECT * FROM coursereg");
                
while($row = mysqli_fetch_array($result))
{?>
 <option> <?php echo $row['course'];?>
 <?php }?>
</option></datalist>