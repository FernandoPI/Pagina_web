<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horoscopo</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
<div>
    <header>
        <h1>Horoscopo</h1>
    </header>
</div>
<?php 
   $sodiaco = $_GET['zodiaco'];

   switch($sodiaco){
    case 'aries':{
           echo "<img src='../IMG/sans-tire.png'/>";
           
           echo "<table cellspacing='0' 
           <tr>
               <th>Personalidad de Aries</th>
               <td>Dinamico, determinado </td>
           </tr>
           <tr>
               
               <th>Personalidad negativa de aries</th>
               <td>egoista</td>

           </tr>
           <tr>
               
               <th>Compatibilidad de Aries</th>
               <td>Aries es compatible con Sagitario</td>
               
           </tr>
           <tr>
               
               <th>¿Como seducir a aries?</th>
               <td>Sé audaz y toma riesgos</td>
               
           </tr>
           <tr>
               
               <th>El planeta de aries</th>
               <td>Marte</td>
               
           </tr>
           </table>";
           echo "<h2 id='texto'>10 cosas que hay que saber sobre los aries</h2>";
           echo "<ul>
           <li><b>Fechas:</b> entre 21 de marzo y 19 de abril</li>
           <li><b>Puntos Fuertes:</b> rapidez y fuerza</li>
           <li><b>Cualidades:</b> coraje y sinceridad</li>
           <li><b>Derechos:</b> impulsividad y cólera</li>
           <li><b>Piedras:</b> rubís, amatistas</li>
           <li><b>Planeta regente:</b> Marte</li>
           <li><b>Elemento:</b> Signos de fuego</li>
           <li><b>Colores:</b>rojos</li>
           <li><b>Metales:</b> hierro , acero</li>
           <li><b>Parte del cuerpo:</b> la cabeza, la sangre</li>
           </ul>";
           echo "<a href='../Zodiaco.php'>Regresar</a>";
           break;
       }

    case 'tauro':{
        echo "<img src='../IMG/tauro.png'/>";
           
           echo "<table cellspacing='0'>
           <tr>
               <th>Personalidad de Tauro</th>
               <td>Resistente, práctico y fiable</td>
           </tr>
           <tr>
               
               <th>Personalidad negativa de Tauro</th>
               <td>Testarudo, perezoso y austero</td>

           </tr>
           <tr>
               
               <th>Compatibilidad de Tauro</th>
               <td>Tauro es compatible con Virgo</td>
               
           </tr>
           <tr>
               
               <th>¿Como seducir a Tauro?</th>
               <td>Abre tu corazón</td>
               
           </tr>
           <tr>
               
               <th>El planeta de Tauro</th>
               <td>Venus</td>
               
           </tr>
           </table>";
           echo "<h2 id='texto'>10 cosas que hay que saber sobre los Tauro</h2>";
           echo "<ul>
           <li><b>Fechas:</b>entre el 20 abril al 20 de mayo</li>
           <li><b>Puntos Fuertes:</b> resistencia, prudencia y solidez</li>
           <li><b>Cualidades:</b> sabiduría y fidelidad</li>
           <li><b>Derechos:</b> pereza y testarudez</li>
           <li><b>Piedras:</b> Esmeralda y Aguamarina</li>
           <li><b>Planeta regente:</b> Venus</li>
           <li><b>Elemento:</b>  Signos de tierra</li>
           <li><b>Colores:</b> verdes</li>
           <li><b>Metales:</b> cobre</li>
           <li><b>Parte del cuerpo:</b> cuello, nuca, cuerdas vocales</li>
           </ul>";
           echo "<a href='../Zodiaco.php'>Regresar</a>";
           break; 
       }
    
    case 'geminis':{
        echo "<img src='../IMG/geminis.png'/>";
        echo "<table cellspacing='0' 
        <tr>
            <th>Personalidad de Geminis</th>
            <td>Divertido, curioso y amable</td>
        </tr>
        <tr>
            
            <th>Personalidad negativa de geminis</th>
            <td>Ansioso e indeciso</td>

        </tr>
        <tr>
            
            <th>Compatibilidad de geminis</th>
            <td>Géminis  es compatible con Acuario y Libra</td>
            
        </tr>
        <tr>
            
            <th>¿Como seducir a geminis?</th>
            <td>Diviértete y coquetea</td>
            
        </tr>
        <tr>
            
            <th>El planeta de geminis</th>
            <td>Mercurio</td>
            
        </tr>
        </table>";
        echo "<h2 id='texto'>10 cosas que hay que saber sobre los geminis</h2>";
        echo "<ul>
        <li><b>Fechas:</b> entre el 21 de mayo al 20 de junio</li>
        <li><b>Puntos Fuertes:</b>  agilidad, flexibilidad, adaptación</li>
        <li><b>Cualidades:</b>  rapidez curiosidad</li>
        <li><b>Defectos:</b> dispersión ligereza</li>
        <li><b>Piedras:</b>Jade, Turquesa</li>
        <li><b>Planeta regente:</b>  Mercurio</li>
        <li><b>Elemento:</b> Signos de aire</li>
        <li><b>Colores:</b> multicolor</li>
        <li><b>Metales:</b> mercurio</li>
        <li><b>Parte del cuerpo:</b> los pulmones los brazos las manos</li>
        </ul>";
        echo "<a href='../Zodiaco.php'>Regresar</a>";
        break; 
      }

    case 'cancer':{
        echo "<img src='../IMG/cancer.png'/>";
         
        echo "<table cellspacing='0' 
        <tr>
            <th>Personalidad de cancer</th>
            <td>Compasivo y comprensivo</td>
        </tr>
        <tr>
            
            <th>Personalidad negativa de cancer</th>
            <td>Sensible y egoísta</td>

        </tr>
        <tr>
            
            <th>Compatibilidad de cancer</th>
            <td>Cáncer es compatible con Escorpio</td>
            
        </tr>
        <tr>
            
            <th>¿Como seducir a cancer?</th>
            <td>2Sé honesto y sincero</td>
            
        </tr>
        <tr>
            
            <th>El planeta de cancer</th>
            <td>La luna</td>
            
        </tr>
        </table>";
        echo "<h2 id='texto'>10 cosas que hay que saber sobre los cancer</h2>";
        echo "<ul>
        <li><b>Fechas:</b> entre el 21 de junio al 22 de julio</li>
        <li><b>Puntos Fuertes:</b> perseverancia imaginación creatividad</li>
        <li><b>Cualidades:</b> generosidad sensibilidad</li>
        <li><b>Derechos:</b> caprichos e inmadurez</li>
        <li><b>Piedras:</b>  ópalo, piedra fina</li>
        <li><b>Planeta regente:</b> la Luna</li>
        <li><b>Elemento:</b>  Signos de agua</li>
        <li><b>Colores:</b>  blanco, gris perla</li>
        <li><b>Metales:</b>  Plata</li>
        <li><b>Parte del cuerpo:</b> el estómago, los senos</li>
        </ul>";
        echo "<a href='../Zodiaco.php'>Regresar</a>";
        break; 
      }

    case 'leo':{
        echo "<img src='../IMG/leo.png'/>";
    
        echo "<table cellspacing='0' 
        <tr>
            <th>Personalidad de Leo</th>
            <td>Dramático, seguro de sí mismo y fogoso</td>
        </tr>
        <tr>
            
            <th>Personalidad negativa de Leo</th>
            <td>Celoso y demasiado orgulloso</td>

        </tr>
        <tr>
            
            <th>Compatibilidad de Leo</th>
            <td>Leo es compatible con Sagitario</td>
            
        </tr>
        <tr>
            
            <th>¿Como seducir a Leo?</th>
            <td>Diviértete y coquetea</td>
            
        </tr>
        <tr>
            
            <th>El planeta de Leo</th>
            <td>El sol</td>
            
        </tr>
        </table>";
        echo "<h2 id='texto'>10 cosas que hay que saber sobre los Leo</h2>";
        echo "<ul>
        <li><b>Fechas:</b> entre el 23 de julio al 23 de agosto</li>
        <li><b>Puntos Fuertes:</b> bondad y organización</li>
        <li><b>Cualidades:</b>  generosidad y voluntad</li>
        <li><b>Derechos:</b> orgullo y autoritarismo</li>
        <li><b>Piedras:</b> topacio diamante</li>
        <li><b>Planeta regente:</b>  el Sol</li>
        <li><b>Elemento:</b> Signos de fuego</li>
        <li><b>Colores:</b> amarillo, naranja</li>
        <li><b>Metales:</b>  oro</li>
        <li><b>Parte del cuerpo:</b> corazón, ojos y arterias</li>
        </ul>";
        echo "<a href='../Zodiaco.php'>Regresar</a>";
        break; 
    }

    case 'virgo':{
        echo "<img src='../IMG/virgo.png'/>";
         
        echo "<table cellspacing='0' 
        <tr>
            <th>Personalidad de virgo</th>
            <td>Leal y gentil</td>
        </tr>
        <tr>
            
            <th>Personalidad negativa de virgo</th>
            <td>Demasiado analítico y rígido</td>

        </tr>
        <tr>
            
            <th>Compatibilidad de virgo</th>
            <td>Virgo es compatible con Tauro</td>
            
        </tr>
        <tr>
            
            <th>¿Como seducir a virgo?</th>
            <td>Muestra tus sentimientos genuinos</td>
            
        </tr>
        <tr>
            
            <th>El planeta de virgo</th>
            <td>Mercurio</td>
            
        </tr>
        </table>";
        echo "<h2 id='texto'>10 cosas que hay que saber sobre los virgo</h2>";
        echo "<ul>
        <li><b>Fechas:</b> entre el 24 de agosto al 22 de septiembre</li>
        <li><b>Puntos Fuertes:</b>  precisión y lógica</li>
        <li><b>Cualidades:</b> gentileza y delicadeza</li>
        <li><b>Derechos:</b> puntilloso y rígido</li>
        <li><b>Piedras:</b>  ágata, jaspe</li>
        <li><b>Planeta regente:</b> Mercurio </li>
        <li><b>Elemento:</b> Signos de tierra</li>
        <li><b>Colores:</b>  beige y gris</li>
        <li><b>Metales:</b> aluminio bronce</li>
        <li><b>Parte del cuerpo:</b> el sistema digestivo, los intestinos</li>
        </ul>";
        echo "<a href='../Zodiaco.php'>Regresar</a>";
        break; 
    }

    case 'libra':{
        echo "<img src='../IMG/libra.png'/>";
           
        echo "<table cellspacing='0' 
        <tr>
            <th>Personalidad de libra</th>
            <td>Amable, equilibrado y gentil</td>
        </tr>
        <tr>
            
            <th>Personalidad negativa de libra</th>
            <td>Ingenuo e indeciso</td>

        </tr>
        <tr>
            
            <th>Compatibilidad de libra</th>
            <td> Libra es compatible con Géminis</td>
            
        </tr>
        <tr>
            
            <th>¿Como seducir a libra?</th>
            <td>Sé encantador</td>
            
        </tr>
        <tr>
            
            <th>El planeta de libra</th>
            <td>Venus</td>
            
        </tr>
        </table>";
        echo "<h2 id='texto'>10 cosas que hay que saber sobre los libra</h2>";
        echo "<ul>
        <li><b>Fechas:</b>  entre el 23 de septiembre y el 22 de octubre</li>
        <li><b>Puntos Fuertes:</b> equilibrio justicia paz</li>
        <li><b>Cualidades:</b> cortesía sociabilidad</li>
        <li><b>Derechos:</b>  indecisión superficialidad</li>
        <li><b>Piedras:</b> zafiro coral</li>
        <li><b>Planeta regente:</b> Venus</li>
        <li><b>Elemento:</b> Signos de aire</li>
        <li><b>Colores:</b> pasteles</li>
        <li><b>Metales:</b> cobre platino</li>
        <li><b>Parte del cuerpo:</b> riñones vejiga próstata</li>
        </ul>";
        echo "<a href='../Zodiaco.php'>Regresar</a>";
        break; 
    }

    case 'escorpio':{

            echo "<img src='../IMG/escorpio.png'/>";
            
            echo "<table cellspacing='0' 
            <tr>
                <th>Personalidad de escorpio</th>
                <td>Decidido, inteligente y enfocado</td>
            </tr>
            <tr>
                
                <th>Personalidad negativa de escorpio</th>
                <td>Obsesivo y sospechoso</td>
    
            </tr>
            <tr>
                
                <th>Compatibilidad de escorpio</th>
                <td>Escorpio es compatible con Cáncer</td>
                
            </tr>
            <tr>
                
                <th>¿Como seducir a escorpio?</th>
                <td>Sé emocionante y misterioso</td>
                
            </tr>
            <tr>
                
                <th>El planeta de escorpio</th>
                <td>Marte y plutón.</td>
                
            </tr>
            </table>";
            echo "<h2 id='texto'>10 cosas que hay que saber sobre los escorpio</h2>";
            echo "<ul>
            <li><b>Fechas:</b> entre el 23 de octubre y el 21 de noviembre</li>
            <li><b>Puntos Fuertes:</b> tenacidad y tacto</li>
            <li><b>Cualidades:</b> lucidez y perseverancia</li>
            <li><b>Derechos:</b>  agresividad</li>
            <li><b>Piedras:</b> granate y rubí</li>
            <li><b>Planeta regente:</b> Plutón</li>
            <li><b>Elemento:</b> Signos de agua</li>
            <li><b>Colores:</b>rojo y gris</li>
            <li><b>Metales:</b> hierro</li>
            <li><b>Parte del cuerpo:</b> los órganos genitales</li>
            </ul>";
            echo "<a href='../Zodiaco.php'>Regresar</a>";
            break; 
    }

    case 'sagitario':{
            echo "<img src='../IMG/sagitario.png'/>";
            
            echo "<table cellspacing='0' 
            <tr>
                <th>Personalidad de sagitario</th>
                <td>Funny, outgoing and positive.</td>
            </tr>
            <tr>
                
                <th>Personalidad negativa de sagitario</th>
                <td>Impaciente y superficial</td>
    
            </tr>
            <tr>
                
                <th>Compatibilidad de sagitario</th>
                <td>Sagitarios es compatible con Aries.</td>
                
            </tr>
            <tr>
                
                <th>¿Como seducir a sagitario?</th>
                <td>Diviértete y coquetea</td>
                
            </tr>
            <tr>
                
                <th>El planeta de sagitario</th>
                <tdJupiter.</td>
                
            </tr>
            </table>";
            echo "<h2 id='texto'>10 cosas que hay que saber sobre los sagitario</h2>";
            echo "<ul>
            <li><b>Fechas:</b> entre el 22 de noviembre al 21 de diciembre </li>
            <li><b>Puntos Fuertes:</b> optimismo</li>
            <li><b>Cualidades:</b> generosidad</li>
            <li><b>Derechos:</b> vanidad pretensión</li>
            <li><b>Piedras:</b> granate zafiro</li>
            <li><b>Planeta regente:</b> Júpiter</li>
            <li><b>Elemento:</b Signos de fuego ></li>
            <li><b>Colores:</b> azul noche, rojo</li>
            <li><b>Metales:</b> estaño </li>
            <li><b>Parte del cuerpo:</b> los muslos, el hígado</li>
            </ul>";
            echo "<a href='../Zodiaco.php'>Regresar</a>";
            break; 
    }

    case 'capricornio':{
        echo "<img src='../IMG/capricornio.png'/>";
         
        echo "<table cellspacing='0' 
        <tr>
            <th>Personalidad de capricornio</th>
            <td>Sabio y ambicioso</td>
        </tr>
        <tr>
            
            <th>Personalidad negativa de capricornio</th>
            <td>Tímido y terco</td>

        </tr>
        <tr>
            
            <th>Compatibilidad de capricornio</th>
            <td>Capricornio es compatible con Tauro.</td>
            
        </tr>
        <tr>
            
            <th>¿Como seducir a capricornio?</th>
            <td>Muestra tu inteligencia</td>
            
        </tr>
        <tr>
            
            <th>El planeta de capricornio</th>
            <td>Saturno.</td>
            
        </tr>
        </table>";
        echo "<h2 id='texto'>10 cosas que hay que saber sobre los capricornio</h2>";
        echo "<ul>
        <li><b>Fechas:</b>  entre el 22 de diciembre al 19 de enero</li>
        <li><b>Puntos Fuertes:</b> resistencia</li>
        <li><b>Cualidades:</b> paciencia</li>
        <li><b>Derechos:</b> rigidez</li>
        <li><b>Piedras:</b> ónix azabache</li>
        <li><b>Planeta regente:</b Saturno</li>
        <li><b>Elemento:</b>  Signos de tierra</li>
        <li><b>Colores:</b>negro y rojo</li>
        <li><b>Metales:</b> plomo</li>
        <li><b>Parte del cuerpo:</b> las articulaciones, las rodillas, la piel</li>
        </ul>";
        echo "<a href='../Zodiaco.php'>Regresar</a>";
        break; 
    }

    case 'acuario':{
        echo "<img src='../IMG/acuario.png'/>";
       
        echo "<table cellspacing='0' 
        <tr>
            <th>Personalidad de acuario</th>
            <td>Dinamico, determinado y egoista</td>
        </tr>
        <tr>
            
            <th>Personalidad negativa de acuario</th>
            <td>Menor de 20</td>

        </tr>
        <tr>
            
            <th>Compatibilidad de acuario</th>
            <td>20-23.9</td>
            
        </tr>
        <tr>
            
            <th>¿Como seducir a acuario?</th>
            <td>24-28.9</td>
            
        </tr>
        <tr>
            
            <th>El planeta de acuario</th>
            <td>29-37</td>
            
        </tr>
        </table>";
        echo "<h2 id='texto'>10 cosas que hay que saber sobre los acuario</h2>";
        echo "<ul>
        <li><b>Fechas:</b>entre el 20 de enero y el 19 de febrero</li>
        <li><b>Puntos Fuertes:</b> innovador vanguardista</li>
        <li><b>Cualidades:</b>altruismo</li>
        <li><b>Derechos:</b>individualismo</li>
        <li><b>Piedras:</b> Crista amatista</li>
        <li><b>Planeta regente:</b> Urano</li>
        <li><b>Elemento:</b>Signos de aire</li>
        <li><b>Colores:</b> violeta azul cobalto</li>
        <li><b>Metales:</b> cromo</li>
        <li><b>Parte del cuerpo:</b> las piernas y las venas</li>
        </ul>";
        echo "<a href='../Zodiaco.php'>Regresar</a>";
        break; 
    }

    case 'pisis':{
        echo "<img src='../IMG/piscis.png'/>";
           
        echo "<table cellspacing='0' 
        <tr>
            <th>Personalidad de piscis</th>
            <td>Amable y compasivo</td>
        </tr>
        <tr>
            
            <th>Personalidad negativa de piscis</th>
            <td>Perezoso y demasiado sensible</td>

        </tr>
        <tr>
            
            <th>Compatibilidad de piscis</th>
            <td>Piscis es compatible con Escorpio.</td>
            
        </tr>
        <tr>
            
            <th>¿Como seducir a piscis?</th>
            <td>Sé amable</td>
            
        </tr>
        <tr>
            
            <th>El planeta de piscis</th>
            <td>Neptuno</td>
            
        </tr>
        </table>";
        echo "<h2 id='texto'>10 cosas que hay que saber sobre los piscis</h2>";
        echo "<ul>
        <li><b>Fechas:</b> entre el 20 de febrero al 20 de marzo</li>
        <li><b>Puntos Fuertes:</b>  tacto y tenacidad</li>
        <li><b>Cualidades:</b> lucidez y perseverancia</li>
        <li><b>Derechos:</b> agresividad</li>
        <li><b>Piedras:</b> agua marina</li>
        <li><b>Planeta regente:</b> Neptuno</li>
        <li><b>Elemento:</b>  Signos de agua</li>
        <li><b>Colores:</b> azul</li>
        <li><b>Metales:</b> zinc
        </li>
        <li><b>Parte del cuerpo:</b> los pies</li>
        </ul>";
        echo "<a href='../Zodiaco.php'>Regresar</a>";
        break; 
    }
   }
?>
</body>
</html>