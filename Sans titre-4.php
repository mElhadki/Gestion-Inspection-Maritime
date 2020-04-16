    <?php 

require_once('Connection.php');
$query="select * from ins";
$result=mysqli_query($con,$query);
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css);
@import url(https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.3/css/mdb.min.css);
    html{
        margin-top: 5%;
    }
.hm-gradient {
    background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);
}
.darken-grey-text {
    color: #2E2E2E;
}
.input-group.md-form.form-sm.form-2 input {
    border: 1px solid #bdbdbd;
    border-top-left-radius: 1px;
    border-bottom-left-radius: 1px;
}
.input-group.md-form.form-sm.form-2 input.purple-border {
    border: 1px solid #9e9e9e;
}
.input-group.md-form.form-sm.form-2 input[type=text]:focus:not([readonly]).purple-border {
    border: 1px solid #ba68c8;
    box-shadow: none;
}
.form-2 .input-group-addon {
    border: 1px solid #ba68c8;
}
.danger-text {
    color: #ff3547; 
}  
.success-text {
    color: #00C851; 
}
.table-bordered.red-border, .table-bordered.red-border, .table-bordered.red-border td {
    border: 1px solid #ff3547!important;
   
}        
 .th-lg {
    text-align: center;
    font-size: 8px;
     
}
  .th-la {
    text-align: center;
    font-size: 25px;
    margin-bottom: 30px;
}
    .get-in-touch .title {
  text-align: center;
  font-family: Raleway, sans-serif;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-size: 25px;
  line-height: 10px;
  padding-bottom: 10px;
}
    .th-l{
        text-align: center;
        font-size: 8px;
    }
</style>
<!------ Include the above in your HEAD tag ---------->
<h1 class="th-la">Inspection View</h1>
                    <table class="table table-hover table-responsive mb-0">
                        <!--Table head-->
                        <thead>
                            <tr>
                                <th class="th-l">ID Inspection</th>
                                <th class="th-l">Reference</th>
                                <th class="th-l">Country</th>
                                <th class="th-l">Importer</th>
                                <th class="th-l">Exporter</th>
                                <th class="th-l">Yard</th>
                                <th class="th-l">Location</th>
                                <th class="th-l">Container No</th>
                                <th class="th-l">Shippinig line</th>
                                <th class="th-l">Bill of Lading No</th>
                                <th class="th-l">Scrap Description</th>
                                <th class="th-l">DateStarted</th>
                                <th class="th-l">DateCompletion</th> 
                                <th class="th-l">TimeStarted</th>
                                <th class="th-l">TimeCompletion</th>
                                <th class="th-l">Duration</th>
                                <th class="th-l">SealInitial</th>
                                <th class="th-l">SealFinal</th>
                                <th class="th-l">Quantity</th>
                                <th class="th-l">BackRadiationLevel</th>
                                <th class="th-l">ContainerRadiationLevel</th>
                                <th class="th-l">PortOfDestination</th>
                                <th class="th-l">FinalDestination</th>
                                <th class="th-l">Status</th>
                                <th class="th-l">Edit</th>
                                <th class="th-l">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
        
    while($row=mysqli_fetch_assoc($result)){
        $ID=$row['ID'];
        $Ref=$row['Ref'];
        $Country=$row['Country'];
        $Importer=$row['Importer'];
        $Exporter=$row['Exporter'];
        $Yard=$row['Yard'];   
        $Location=$row['Location'];
        $ContainerN=$row['ContainerN']; 
        $ShippingLine=$row['ShippingLine'];
        $BillOfLadingNo=$row['BillOfLadingNo'];
        $ScrapDescription=$row['ScrapDescription'];
        $DateS=$row['DateS'];
        $DateC=$row['DateC'];
        $TimeS=$row['TimeS'];
        $TimeC=$row['TimeC'];
        $Duration=$row['Duration'];
        $SealI=$row['SealI'];
        $SealF=$row['SealF'];
        $Quantity=$row['Quantity'];
        $BRLevel=$row['BRLevel'];
        $ContainerRLevel=$row['ContainerRLevel'];
        $PortOfDestination=$row['PortOfDestination'];
        $FinalDestination=$row['FinalDestination'];
        $Status=$row['Status'];
        ?>
        <tr>
        <th class="th-l"><?php echo $ID ?></th>
        <th class="th-l"><?php echo $Ref ?></th>
        <th class="th-l"><?php echo $Country ?></th>
        <th class="th-l"><?php echo $Importer ?></th>
        <th class="th-l"><?php echo $Exporter ?></th>
        <th class="th-l"><?php echo $Yard ?></th>
        <th class="th-l"><?php echo $Location ?></th>
        <th class="th-l"><?php echo $ContainerN ?></th>
        <th class="th-l"><?php echo $ShippingLine ?></th>
        <th class="th-l"><?php echo $BillOfLadingNo ?></th>
        <th class="th-l"><?php echo $ScrapDescription ?></th>
        <th class="th-l"><?php echo $DateS ?></th>
        <th class="th-l"><?php echo $DateC ?></th>
        <th class="th-l"><?php echo $TimeS ?></th>
        <th class="th-l"><?php echo $TimeC ?></th>
        <th class="th-l"><?php echo $Duration ?></th>
        <th class="th-l"><?php echo $SealI ?></th>
        <th class="th-l"><?php echo $SealF ?></th>
        <th class="th-l"><?php echo $Quantity ?></th>
        <th class="th-l"><?php echo $BRLevel ?></th>
        <th class="th-l"><?php echo $ContainerRLevel ?></th>
        <th class="th-l"><?php echo $PortOfDestination ?></th>
        <th class="th-l"><?php echo $FinalDestination ?></th>
        <th class="th-l"><?php echo $Status  ?></th>
        <th class="th-l"><a href="InspectionEdit.php?GetID=<?php echo $ID?>">Edit</a></th>
        <th class="th-l"><a href="DeleteInspection.php?Del=<?php echo $ID ?>">Delete</a></th>

        </tr>
       <?php 
    }
  ?>
                            <script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");
    
       swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel plx!",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm) {
        if (isConfirm) {
          $.ajax({
             url: '/item-list/'+id,
             type: 'DELETE',
             error: function() {
                alert('Something is wrong');
             },
             success: function(data) {
                  $("#"+id).remove();
                  swal("Deleted!", "Your imaginary file has been deleted.", "success");
             }
          });
        } else {
          swal("Cancelled", "Your imaginary file is safe :)", "error");
        }
      });
     
    });
                        </tbody>
                        <!--Table body-->
                    </table>