<?php 
require_once('Connection.php');
$query="select * from inspector";
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
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
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
    font-size: 10px;
    
}
    tr{
        text-align: center;
        font-size: 15px;
    }
    .get-in-touch .title {
  text-align: center;
  font-family: Raleway, sans-serif;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 36px;
  line-height: 48px;
  padding-bottom: 48px;
}
.th-la {
    text-align: center;
    font-size: 25px;
    margin-bottom: 50px;
}
</style>
<!------ Include the above in your HEAD tag ---------->
<h1 class="th-la">Inspector View</h1>
                    <table class="table table-hover table-responsive mb-0">
                        <!--Table head-->
                        <thead>
                            <tr>
                                <th class="th-lg">ID Inspector</th>
                             <th class="th-lg">FirstName</th>
                             <th class="th-lg">LastName</th>
                             <th class="th-lg">PhoneNumber</th>
                             <th class="th-lg">Email</th>
                             <th class="th-lg">Edit</th>
                             <th class="th-lg">Delete</th>
                        </tr>
        </thead>
        <?php
        
    while($row=mysqli_fetch_assoc($result)){

        $ID_I=$row['ID_I'];
        $FirstName=$row['FirstName'];
        $LastName=$row['LastName'];
        $PhoneNumber=$row['PhoneNumber'];
        $Email=$row['Email'];
        ?>
        <tr>
           <th class="th-lg"><?php echo $ID_I ?></th>
           <th class="th-lg"><?php echo $FirstName ?></th>
            <th class="th-lg"><?php echo $LastName ?></th>
            <th class="th-lg"><?php echo $PhoneNumber ?></th>
            <th class="th-lg"><?php echo $Email ?></th>
            <th class="th-lg"><a href="InspectorEdit.php?GetID_I=<?php echo $ID_I?>">Edit</a></th>
            <th class="th-lg"><a href="DeleteInspector.php?Del=<?php echo $ID_I ?>">Delete</a></th>
        
        </tr>
        
       <?php 
    }
  ?>
                              
        </table>

        
                