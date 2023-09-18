<html>
<body>
<form method="POST" action="begin.php">
<label>Admin number</label>
<input type="text" id="adno" name="adno" placeholder="Admin no">
<label>Fullname</label>
<input type="text" id="fullname" name="fullname" placeholder="Name">
<label>Date of birth</label>
<input type="date" id="dobb" name="dobb" placeholder="Dob">
<label>Gender</label>
<select id="gender" name="gender">
<option>Male</option>
<option>Female</option>
</select>
<label>Contact address</label>
<input type="text" id="contaddress" name="contaddress" placeholder="Address">
<label>Admission date</label>
<input type="date" id="addate" name="addate" placeholder="Date">
<label>Class</label>
<input type="text" id="klass" name="klass" placeholder="Class">
 <label for="Choice of Course">Choice of Course:</label>    
 <input type="text" id="course" name="course" list="bck" placeholder='Course Name' ><datalist id="bck">
 <?php $result=mysqli_query($conn,"SELECT * FROM course_reg");
                
while($row = mysqli_fetch_array($result))
{?>
<option>
 <?php echo $row['course'];?>
 <?php }?>
</option></datalist>

<button type="submit">Submit</button>
<button class="btn btn-light">Cancel</button>
</form>
</body>
</html>              