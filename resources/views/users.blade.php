<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         
    </style>
</head>
<body>
<h1>Create New Devices</h1>
 
 <div class="container">
  
     <form method="POST" action="/users">
  
                {{ csrf_field() }}
        
                <div>
                <label >Nom :</label>
                <input type="text" name="nom" placeholder="Device Name">
        
            </div>
            <div>
                    <label >Username :</label>
                    <textarea name="username" placeholder="Device Description"></textarea>
        
            </div>
            <div>
                    <label >Password :</label>
                    <textarea name="password" placeholder="Device Description"></textarea>
        
            </div>
            <div>
        
                    <input type="submit" value="Ajouter">
        
            </div>
  
     </form>  
  
  </div>  
</body>
</html>