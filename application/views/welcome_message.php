<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Draggable + Sortable</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
	<div class="container">

		<h3>Drag And Drop Example of database </h3>
        
         <?php if(!empty($this->session->flashdata('message'))){ ?>
		<div class="alert alert-success" id="MSG">
  		<?php echo $this->session->flashdata('message'); ?>
		</div>
	<?php } ?>

    <a href="<?php echo base_url('Welcome/AllMenu');?>" target="_blank" class="btn btn-info">All Menu</a>
	<table class="table table-bordered table-hover" style="margin-top:20px;" id="myTable">
       	<thead>
       	   <tr>
            	
                <th>Name</th>
                <th>Description</th>
                <th>Menu Position</th>

            </tr>
            
           </thead>
            <tbody class="row_position">

              
            	<?php
            	 $sl = '1';
            	 foreach($getAllmenu as $row): ?>

            <tr id="<?php echo $row['id'];?>" style="">

                    <!-- <td><?php //echo $sl; ?></td> -->
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['description'];?></td>
                    <td><?php echo $row['position_order'];?></td>

            </tr>

              	<?php
              	   $sl++;
              	  endforeach; ?>
             </tbody>
        </table>
        

    </div> <!-- container / end -->


    <script type="text/javascript">

    $(document).ready( function () {
      $('#MSG').slideUp(3500);
    });

    $( ".row_position" ).sortable({
      stop: function() {
			var selectedData = new Array();

              

            $('.row_position>tr').each(function() {

                selectedData.push($(this).attr("id"));

            });

            updateOrder(selectedData);

        }

    });


    function updateOrder(data) {

        $.ajax({

            url:"<?php echo base_url('Welcome/updateMenu');?>",

            type:'post',

            data:{position:data},

            success:function(result){
            	window.location.reload();
             }

        })

    }

</script>


</body>


</html>