<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gestion Cahier de texte</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
     /* *,
*::before,
*::after{
  magin: 0;
  padding: 0;
  box-sizing: border-box;
} */

body{
  height: 100%;
  overflow-x: hidden;
}
.admin{
  --spacing: 1rem;
  display: grid;
  flex-wrap: wrap;
  height: 100vh;
  grid-template-rows: 70px 1fr 70px;
  grid-template-columns: 250px 1fr;
  grid-template-areas: "header header"
                                 "nav main"
                                 "footer footer";
}
.admin__header{
  display: flex;
  flex-basis:100%;
   grid-area: header;
  height: 70px;
  background-color: #fff;
  box-shadow: 0 3px 6px rgba(0,0,0,0.16);
  position:relative;
}
.admin__nav{
  flex: 0 0 250px;
  grid-area: nav;
  background-color: #313541;
  
}
.admin__main{
  flex: 1;
  /* grid-are: main; */
  padding: var(--spacing);
  overflow-y: auto;
  overflow-x:hiden;
  -webkit-overflow-scrolling: touch;
  background-color: #f4f7fa;
}
.admin__footer{
  display: flex;
  grid-area: footer;
  flex-basis: 100%;
  justify-content: space-between;
  align-items: center;
  height:70px;
  padding: 0 var(--spacing);
  color: #4e5561;
  background-color: #1d2127;
}
@media screen and(min-width: 48rem){
  .admin{
    --spacing: 2rem;
  }
}
.dashboard{
  --column-count: 2;
  display: flex;
  flex-wrap: wrap;
  /* magin: 0 calc(var(--spacing)*0.5); */
  display: grid;
  grid-template-columns:repeat(var(--column-count),1fr);
  grid-gap: var(--spacing);
}
.dashboard_item{
  flex:1 1 50%;
  grid-column-end: span 2;
  padding: calc(var(--spacing)/2);
}
.dashboard__item--full{
  flex-basis: 100%;
  grid-column:1/-1;
}
.dashboard__item--col{
  flex-basis: calc(100%/var(--column-count));
  grid-column-end: span 1;
}
@media screen and (min-width:48rem){
  .dashborad{
      --column-count: 4;
  }
}

@supports(display: grid){
  .dashboard{
    margin: 0 ;
    
  }
  .dashbord__item{
    padding:0;
  }
}
a{
    color: #dc5a60;
  }
img{
  max-width: 100%;
  height: auto;
}
.logo{
  display:flex;
  flex:0 0 250px;
  height:70px;
  justify-content: center;
  align-items: center;
  position:relative;
  margin:0;
  color:#fff;
  background-color: #dc5a60;
  font-size: 1rem;
  /* h1{
    margin: 0;
  } */
}
.toolbar{
  display:flex;
  flex:1;
  justify-content:space-between;
  align-content:center;
  padding: 0 var(--spacing);
}
.menu{
  list-style:non;
  padding: 0;
}
.menu__item{
  border-bottom: 1px solid rgba(255,255,255,0.07);
}
.menu__link{
  display:block;
  padding: 1rem 2rem;
  color: #76808f;
  text-decoration: none;
}
.menu__link:hover,memu__link:focus{
  color: #fff;
  background-color: #1f222d;
}
.card{
  height:100%;
  padding:1rem;
  font-size: 2rem;
  font-weight: 300;
  background-color: #fff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12),0 1px 2px rgba(0,0,0,0.24);
}
</style>
</head>
<body>
    <div class="admin">
      <header class="admin__header">
        <a href="/absence" class="logo">
            <h3 style="font-size: 30px;">Accueil</h3>
        </a>
        <div class="toolbar">
          <div class="container">
                  <div class="row">
                      <div class="col-sm-10">
                      <span style="color:black;font-size:50px">Gestion de cahier de texte</span>
                      </div>
                      <div class="col-sm-2">
                        <a href="/" class="logout">Se déconnecter</a><br>
                        <p>Alassane BAH <i class='fas fa-user-circle' style='font-size:24px'></i></p>
                      </div>                
                  </div>    
              </div>
        </div>
      </header>
      <nav class="admin__nav">
        <ul class="menu">
          <li class="menu__item" style="font-size: 30px">
            <a href="/enseignement" class="menu__link">Consulter Enseignement</a>
          </li>
          <li class="menu__item" style="font-size: 30px">
            <a href="/profil" class="menu__link">Voir profil</a>
          </li>
        </ul>
      </nav>
      
      <main class="admin__main">
      <div class="container">
          <div class="row">
            <div class="col-md-12">
            <!-- <a  class="deconexxion" class="small" href="{{url('Login')}}"><u><h3 class="deconexion">Deconnexion</h3></u></a> -->
            
              <!-- <h3 class="login-heading mb-4" style="text-align: center">Renseigner Cahier de Texte</h3> -->
                <div class="card">
                  <!-- <div class="card-body">
                    Welcome 
                  </div> -->
                  <div class="card-body">

                    <form method='POST' action=''>
              
                     
                     <fieldset>
                                <legend style="text-align: center;font-weight:bold">Volume Horaire : <span style="color:RoyalBlue">Génie Logiciel</span></legend>
                      <div class="container">
                           <div class="row">
                              <div class="col-sm-3">
                                     
                              </div>
                              <div class="col-sm-3">
                                   <p style="font-weight:bold">Total</p>
                              </div>
                              <div class="col-sm-3">
                              <p style="font-weight:bold">Ecoulé</p>
                              </div>
                              <div class="col-sm-3">
                                     <p style="font-weight:bold">Restant</p>
                              </div>
                              
                         </div>
                         <div class="row">
                              <div class="col-sm-3">
                                   <p style="font-weight:bold">DIC1 Info</p>
                              </div>
                              <div class="col-sm-3">
                                   <p>60 heures</p>
                              </div>
                              <div class="col-sm-3">
                              <p>20 heures</p>
                              </div>
                              <div class="col-sm-3">
                                     <p>40 heures</p>
                              </div>
                              
                         </div>
                         <div class="row">
                              <div class="col-sm-3">
                                   <p style="font-weight:bold">DIC2 TR</p>
                              </div>
                              <div class="col-sm-3">
                                   <p>40 heures</p>
                              </div>
                              <div class="col-sm-3">
                              <p>10 heures</p>
                              </div>
                              <div class="col-sm-3">
                                     <p>30 heures</p>
                              </div>
                              
                         </div>
                         <div class="row">
                              <div class="col-sm-3">
                                   <p style="font-weight:bold">DIC3 Info</p>
                              </div>
                              <div class="col-sm-3">
                                   <p>30 heures</p>
                              </div>
                              <div class="col-sm-3">
                              <p>12 heures</p>
                              </div>
                              <div class="col-sm-3">
                                     <p>18 heures</p>
                              </div>
                              
                         </div>
                           </div>

                      </div>
                     </fieldset>
                    </form>
                  </div>
                </div>
            </div>
          </div>
      </div>
      </main>
   

                                
      </main>
      <footer class="admin__footer">
        <!-- <ul class="ticker">
          <li class="ticker__item">BTC:+3.12%</li>
          <li class="ticker__item">ETH:+1.29%</li>
          <li class="ticker__item">XRP:-0.32%</li>
          <li class="ticker__item">BCH:-2.82%</li>
          <li class="ticker__item">EOS:+1.44%</li>
          <li class="ticker__item">CSS:+13.37%</li>
        </ul> -->
        <span>
          <!-- &copy;  -->
         Département Génie Informatique
        </span>
      </footer>
  </div>
 
</body>
</html>