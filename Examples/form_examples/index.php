<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Examples</title>
</head>
<body>

<form method="post" action="">
 <!--form elements go here-->


 <!-- <p>Title <input type="text" size="5" name="somename"></p> -->

 <label>Title <input type="text" size="5" name="firstname"></label>

 <!-- <label for="someid">Title</label> <input type="text" size="5" name="somename"
    id="someid"> -->

    <label for="address" >Address:</label>
        <textarea id="address" name="address" cols="30" rows="4"></textarea>

    <p>Color:</p>
        <label><input type="radio" name="color" value="blue" > Blue</label>
        <label><input type="radio" name="color" value="red" checked > Red</label>
        <label><input type="radio" name="color" value="yellow" > Yellow</label>

    <p>Size:</p>
        <label><input type="radio" name="size" value="small" > Small</label>
        <label><input type="radio" name="size" value="medium" checked > Medium</label>
        <label><input type="radio" name="size" value="large" > Large</label>

    <p>Sizes:</p>
        <label><input type="checkbox" name="size" value="small" > Small</label>
        <label><input type="checkbox" name="size" value="medium" checked > Medium</label>
        <label><input type="checkbox" name="size" value="large" > Large</label>

    <label for="color">Color:</label><br />

    <select id="color" name="color" size="3" multiple>
        <option value="blue">Blue</option>
        <option value="red" selected >Red</option>
        <option value="yellow">Yellow</option>
        <option value="purple">Purple</option>
        <option value="green">Green</option>
        <option value="pink">Pink</option>
    </select>

    <input type="file" name="somefile" size="30" >
    
    <input type="hidden" name="destination" value="youremail@domain.com">

    <input type="submit" value="Place Order" >

    <button>Place Order</button>

    <input type="submit" name = "submit" label ="click" />


</form>


    
</body>
</html>