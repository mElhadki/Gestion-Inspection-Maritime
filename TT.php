<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<style>
 body{
       padding:25px;
   }
   
   input:focus{
        outline: none;
    }
    
    form{
        width: 35%;
        margin-left:auto;
        margin-right:auto;
        padding:50px;
        background:whitesmoke;
        border-radius:5px;
        position:relative;
        font-family: 'Libre Franklin', sans-serif;
    }

    form > div {
        float:left;margin-bottom:30px;
    }
    form > div > p{
        font-size: 12px;margin-bottom: 3px;
    }
    form > div > input{
        font-size:12px;letter-spacing:1px;padding:  5px;border: 0;background:  whitesmoke;border-bottom: 1px solid silver;width: 100%;color: gray;
    }

    form > p:last-of-type{
        text-align: center;padding-top: 50px;display:  table;width: 100%;color:white;
    }

    form > p:last-of-type > a{
        cursor:pointer;border:0;
        padding: 10px 25px;
        background:  silver;
        border-radius:  28px;
        font-size: 12px; 
    }

    .term{
        padding-top:40px;display: flex;width:  100%;align-items:  center;
    }

    .term > i{
        cursor:pointer;width:20px;
    }

    .term > span{
        font-size:12px;
    }

    /* delete */
    form > a:last-of-type{
        position:absolute;
        bottom: 10px;
        right: 15px;
        font-size:  10px;
        letter-spacing:  1px;
        font-style: italic;
    }

</style>
<div style="display:flex;width:100%;">
    <form>
        <div style="width:100%;">
            <p>FULL NAME</p>
            <input name="name" autofocus>
        </div>
        <div style="width:100%;">
            <p>IDENTIFICATION</p>
            <input name="id">
        </div>

        <div style="width:47%;">
            <p>EMAIL</p>
            <input name="email">
        </div>
        <div style="width:47%;margin-left:6%">
            <p>PHONE</p>
            <input name="phone">
        </div>

        <p class="term">
            <i class="fa fa-check-square-o" aria-hidden="true"></i><span>Acepto términos y condiciones. </span>
        </p>

        <p>
            <a>CONTINUE</a>
        </p>
        <a>by pablo_corezzola</a>
    </form> 
</div>