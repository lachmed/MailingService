<div style="padding:5px">

<h1 style="text-align: center; font-family: sans-serif">Hello {{$name}},</h1>

<p style="text-align: center; font-family: sans-serif" >
    To confirm your email, please click on the button bellow:

    <div style="text-align: center; font-family: sans-serif">
    <a href='{{$confirmLink.$confirmId}}' style=" border:4px"> Confirm </a>
    </div>
    
    <h5 style="text-align: center; font-family: sans-serif"> or just copy and past the following link in your navigator: <h5>
    <br/>
    <h6 style="text-align: center; font-family: sans-serif">{{$confirmLink.$confirmId}}</h6>
</p>
    
<h2 style="text-align: center; font-family: sans-serif"> M2SI team</h2>
</div>