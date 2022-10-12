<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
<form  action="thanks.php"  method="post">
<div>
    <label  for="lastname">Lastname :</label>
      <input  type="text"  id="lastname"  name="lastname">
    </div>
    <div>
      <label  for="firstname">Firstname :</label>
      <input  type="text"  id="firstname"  name="firstname">
    </div>    
    <div>
      <label  for="mail">Email :</label>
        <input  type="email"  id="mail"  name="mail">
    </div>
    <div>
      <label  for="phone">Phone :</label>
      <input  type="text"  id="phone"  name="phone">
    </div> 
    <div>
            <label for="subject">Subject</label>
            <select name="subject" id="subject">
                <option value="choose-your-subject">Choose your subject</option>
                <option value="php">PHP</option>
                <option value="java">JAVA</option>
                <option value="python">Python</option>
            </select>
        </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Submit</button>
    </div>

  </form>
 
</body>
</html>