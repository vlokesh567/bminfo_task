<?php include 'header.php'; ?>
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2 mt-5">
			<table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
		    <thead>
		      <tr>
		        <th>Date</th>
		        <th>Login Time</th>
		        <th>Logout Time</th>
		        
		      </tr>
		    </thead>
		    <tbody >
	    	<?php

                $query = "SELECT * FROM emp_sessions WHERE emp_id = '".$_GET['id']."' ORDER BY id DESC";
                // echo $query;
                $statement = $db->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll();
                foreach($result as $row)
                {
                ?>
                  <tr>
			        <td><?php echo $row['date']; ?></td>
			        <td><?php echo $row['login_time']; ?></td>
			        <td><?php echo $row['logout_time']; ?></td>
			        
			      </tr>
               
                <?php
                }

                ?>
		      
		  </tbody>
		</table>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>