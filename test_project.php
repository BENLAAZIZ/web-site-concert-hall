<?php
    
    if(isset($_POST['Valider'])){
        // define local variables
        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];
        $cin=$_POST["cne"];
        $mail=$_POST["mail"];
        $tele=$_POST["telephone"];
        $genre=$_POST["choix1"];
        $nbr_table=$_POST["nbr"];
        $treteur=$_POST["traiteur"];
        $date=$_POST["date"];
        $coifure=$_POST["coifur"];
        $music=$_POST["music"];
        $voitur=$_POST["voitur"];
        $autre=$_POST["autre_desirs"];

             $desplay_cin = NULL;
             $display_prenom = NULL;
             $dis_nom = NULL;
             $remli=NULL;
             $prenom_inac=NULL; 
             $nom_inac=NULL;
             $cin_inac=NULL; 
             $email_inac=NULL; 
             $tele_inac=NULL;

if( isset($prenom) && isset($nom)   && isset ($cin) && isset($mail) && isset($tele) && isset($genre)
  && isset($nbr_table) && isset($treteur) && isset($coifure) && isset($date)){
//verification si les champs sont rempli
    if( !empty($prenom) && !empty($nom) &&  !empty ($cin) && !empty($mail) && !empty($tele)
        && !empty($nbr_table) && !empty($treteur) && !empty($coifure) && !empty($date)){
    
    //les conditions sur la forme de nom et prenom et cin
                if(!preg_match("/[[:alpha:]]{4,20}/",$prenom ))
                         {$prenom_inac="prenom inacceptable";}
                else{$display_prenom=$prenom;}

                if(!preg_match("/[[:alpha:]]{4,20}/",$nom ))
                {$nom_inac="nom inacceptable";}
                else{$display_nom = $nom; }
               
                if(!preg_match("/^[A-Za-z][0-9]{6,7}$/",$cin ))
                {$cin_inac="cin inacceptable";}
                else{$dis_cin=$cin;}
//condition sur la tail de email pour l'existance de @ il est deja pointer dans la page formule a l'aide de latribue requery
                if( empty($mail) || strlen($mail)<3 || strlen($mail)>25)
                    {$email_inac="email invalide ou langure invalide";}
            //le nbr tele doit commancer par 05 ou 06 et ne depace pas 10 chefres
                    if(!preg_match("/^(06|05)[0-9]{8}$/",$tele ))
                    {$tele_inac="numero telephone inacceptable";}

                   $dis_genre="votre fete est:"."$genre";
                   $dis_date="date reservation:"."$date";
                  $dis_table="nombre de tables reserves :"."$nbr_table";
                    $dis_treteur="avec treteur :"."$treteur";
                    $dis_coifure="avec coiffure :"."$coifure";
            }
/*si l'un des champs n'est pas ajouter le traitement vas stope et l'afiche message ce dessous
dans la parter html on utilise die($remlir)*/ 
            else{$remli="remlire tout les champs";}
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    *{ margin:0;}
 body{
      background: rgba(97, 105, 124, 0.753);
     }
  main{
        width:400px;
        min-height:200px;
        text-align:center;
        background:  rgba(250, 235, 215, 0.5);
        border: 3px solid green;
        transform:translateX(450px);
        float:left;
      }
  
 header{
       width: 100%;
       height: 200px;
       background-color: rgb(177, 219, 219);
       float: left;
      }
   img{
       width: 200px;
       height: 200px; 
       background-color: rgba(62, 74, 77, 0.534);
       border-radius: 100px;
       float: left;
       }
  #sal{
      font-size: 50px;
      text-decoration:  underline dotted ;
       font-family: fantasy;
      color: sandybrown;
      letter-spacing: 2px;
      margin-left: 250px;
      transform: translateY(40px);
      }
    
    
  #email{
    font-size: 20px;
    font-family: cursive;
    margin-left: 230px;
    transform: translateY(40px);
       }
  #tele{
    font-size: 17px;
    font-family: cursive;
    margin-left: 270px; 
    transform: translateY(40px);
      }
#baner_accuil{
       width: 200px;
      text-align: center;
      font-size: 30px; 
      font-family: cursive;
      color: rgb(246, 4, 246);
      transform: translateY(-60px);
      margin-right: 70px;
      border-top-left-radius: 50px;
      border-bottom-right-radius:50px ;
      float: right;
      background: rgb(47, 49, 54);  
     }
   #baner_accuil:hover{
               background: rgba(62, 74, 77, 0.534);
               cursor: pointer;
               }
    a{text-decoration: none;
       color: rgb(248, 246, 248);}
   p{
      text-align: center;
      font-size: 40px;
      font-family: fantasy;
      letter-spacing: 5px;
      color: black;
      transform: translate(-40px,-30px);
    }
   h1{
     font-size:25px;
     font-family:normal;
     color: rgb(255, 94, 0);
     }
   h2,h3{
    font-size:24px;
    font-family:normal;
    color: rgb(36, 49, 54);
       }
   h2{
      letter-spacing:1px;
      }
    h4{
     font-size:20px;
     font-family:cursive;
     color: gray;
       }
     h5{
          font-size:18px;
          font-family:normal;
           color:red; 
       }
     h6{
          font-size:16px;
           font-family:normal;
           color:green; 
        }
        aside{
             width:300px;
             min-height:30px;
             float: right;
              background:  gray;
              transform:translateY(150px);
              margin-right:70px;
              }
    </style>
</head>
<body class="body">
<header>
<img src="foto_vidio/logo.png" alt="logo">
<div id="sal">salle taj</div>
<div id="email">taj.servesse@gmail.com</div>
<div id="tele">06.24.86.02.90</div>
<p>VOTRE RESERVATION</p>
<div id="baner_accuil"><a href="page_principale.html">accueil</a></div>
</header>
   <main>
   <h1> -- bienvenu cher client-- </h1>
   <!--si l'un des champs ne rempli pas le traitement va stoper -->
   <h2><?php if($remli!=null) die($remli);?></h2>
   <!--si l'un des champs remplir sans garder les condistion qui vont traiter  -->
   <h2><?php if($prenom_inac!=null) die($prenom_inac);?></h2>
   <h2><?php  if($nom_inac!=null) die($nom_inac);?></h2>
   <h2><?php if($cin_inac!=null) die($cin_inac);?></h2>
   <h2><?php if($email_inac!=null) die($email_inac);?></h2>
   <h2><?php if($tele_inac!=null) die($tele_inac);?></h2>
   <!-- si tout  bien ecrire apres le traitement va afficher les informations suivantes-->
    <h2><?php if($display_nom != NULL) 
                {echo"$display_nom";} ?></h2>
<h2><?php if($display_prenom != NULL) 
               { echo"$display_prenom";} ?></h2>

<h2><?php if($dis_cin != NULL) 
               { echo"$dis_cin";} ?></h2>
<h4><?php if($display_nom != NULL && $display_prenom != NULL && $dis_cin != NULL)
{echo"$dis_genre";} ?>
</h4>

<h4><?php if($display_nom != NULL && $display_prenom != NULL && $dis_cin != NULL)
{echo"$dis_date";} ?>
</h4>

<h4><?php if($display_nom != NULL && $display_prenom != NULL && $dis_cin != NULL)
{echo"$dis_table";} ?>
</h4>
<h4><?php if($display_nom != NULL && $display_prenom != NULL && $dis_cin != NULL)
{echo"$dis_treteur";} ?>
</h4>
<h4><?php if($display_nom != NULL && $display_prenom != NULL && $dis_cin != NULL)
{echo"$dis_coifure";} ?>
</h4>
<h4><?php echo"la music de choix  :"."$music";?></h4>
<h4><?php echo"la Voiture de choix  :"."$voitur"; ?></h4>
<h4><?php echo"autre desirs  :"."$autre";?></h4>
<hr>
<!--aficher au client un petit missage pour il va connaire que sa reservation reucite par nous-->
<h5>votre demande est en cours de traitement , nous vous appellerons ou</h5>
<h5>nous vous laissrons un SMS via votre e-mail</h5>

   </main>
   <aside>
       
<?php
/*  ovrire  la coniction et definir notre base de donnee */
                $link = mysqli_connect("localhost", "root", "", "project_site_web");
        
                //verifier la coniction au serveur
                if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }
        
                //  ajouter ler information de client apartire des variable de notre formulaire
                $sql = "INSERT INTO formmulaire_client 
                VALUES('".$cin."',
                '".$nom."',
                '".$prenom."',
                '".$tele."',
                '".$mail."')";
              
                if(mysqli_query($link, $sql)){
                    echo"les info de client enregestres dans la base"."<br/>";
                } else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }
               
          //ajouter les informations du reservation 
          $requete="INSERT INTO reservation VALUES            
          ('".$cin."','".$genre."','".$treteur."','".$coifure."','".$music."','".$voitur."','".$date."','".$nbr_table."','".$autre."')";
                 if(mysqli_query($link, $requete)){
                    echo"les info de reservation enregestres dans la base";
                } else{
                    echo "ERROR: Could not able to execute  $requete. " . mysqli_error($link);
                }
                
                // fermer la connection apres finire le traitement
                mysqli_close($link);
                ?>
   </aside>
</body>
</html>