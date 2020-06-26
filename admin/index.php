<?php include 'header.php'; ?>
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2 mt-5">
			<table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
		    <thead>
		      <tr>
		        <th>Employee Id</th>
		        <th>Name</th>
		        <th>Designation</th>
		        <th>Action</th>
		      </tr>
		    </thead>
		    <tbody >
	    	<?php

                $query = "SELECT * FROM employees WHERE status = '1' ORDER BY id DESC";
                // echo $query;
                $statement = $db->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll();
                foreach($result as $row)
                {
                ?>
                  <tr>
			        <td><?php echo $row['id']; ?></td>
			        <td><?php echo $row['ename']; ?></td>
			        <td><?php echo $row['edesignation']; ?></td>
			        <td><a href="session_details.php?id=<?php echo $row['id']; ?>" class="text-info "><i class="fas fa-eye fa-fw"></i> View Details</a></td>
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