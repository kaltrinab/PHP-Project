
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <!--logo ne tab -->
    <link rel="icon" sizes="192x192" href="Foto/01.png">
    <title>IMPULSE</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="jquery-1.11.2.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#buton123").click(function () {
                $("#fading").fadeToggle(1000, "linear");
            });
        });


        $(document).ready(function () {
            $("#buton123").animate({
                height: "250px",
            }, 30000, function () {
                $("#ld").text("Click on ocean");
            });
        });
    </script>

    <style>
       

       

        * {
            font-family: 'Trebuchet ms'
        }

        nav ul li form input[type = text] {
            padding-left: 0;
            opacity: 0.8;
        }

            nav ul li form input[type = text]:focus {
                padding-left: 0;
                opacity: 1;
            }

        mark {
            background-color: lightblue;
            color: Black;
        }

        #div1, #div2 {
            transform: translate(-5%,-30%);
            float: left;
            background-color: rgb(67, 178, 223);
            width: 100px;
            height: 7.5em;
            margin: 10px;
            padding: 0px;
            border: 1px solid black;
            float: left;
            margin-top: 3%;
        }

        #myBtn {
            display: none;
            position: fixed;
            z-index: 99;
            height: 25px;
            width: 25px;
            cursor: pointer;
            background: URL('Foto/TopPage.png') no-repeat;
            background-size: 25px,25px;
            bottom: 5%;
            right: 2%;
            transform: scale(2,2);
        }

            #myBtn:hover {
                opacity: 0.8;
            }

        /*Div element per homeButton*/
        #homeButton {
            position: fixed;
            bottom: 3%;
            left: 1%;
            z-index: 2;
        }

            #homeButton:hover {
                opacity: 0.8;
            }

        mark {
            background-color: lightblue;
            color: Black;
        }

        #buton123 {
            width: 100%;
            background: url("Foto/giphy4.gif") 70% 40% no-repeat;
            border: none;
            background-size: 100%;
            border-radius: 2px;
            cursor: pointer;
            outline: none;
        }
/*style mas navigatorit nuk duhet te fshihen  */
/*fotoja se bashku me tekstin e pare */

.perp{

align-items: center;
/*margin-left: 20%;
min-width: 1000px;*/
width: 100%;
margin-left: 13.3%;
align-items:center;
margin-top:4%;
margin-bottom: 4%;
margin-right:4%;
font-family: 'Times New Roman', Times, serif;

 /*vetem fotoja */   
}
.fotoja img{
    width: 450px;
    height:300px;
    float: left;
    padding: 10px;
    clear:both;
    
}
/*vetem teksti*/
#teksti{
    height: 300px;
    font-family: 'Times New Roman', Times, serif;

}
#teksti h2{
padding-top: 5px;
font-family: 'Times New Roman', Times, serif;
}

#teksti p{
     
    min-width: 500px;
    max-width: 1000px;  
    word-wrap:break-word;
    font-size: 18px;
        font-family: 'Times New Roman', Times, serif;
  
}
#tabela {margin-left:1%;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 85%;
}

#tabela td, #tabela th {
    border: 1px solid rgb(67, 178, 223);
    text-align: left;
    padding: 8px;
}

</style>
</head>
<body>
  <?php require("DB/header.php") ?>
    

    <div class="perp">
        <div class="fotoja">
            <img src="images/mount_rigi.jpg"  alt="Mount Rigi" title="Mount Rigi" />
        </div>
        <div id="teksti">
        <h2 style="margin-bottom:01%">Mount Rigi</h2>
        <p> Lake Lucerne is surrounded by mountains, but few are more spectacular than <b><u>Mount Rigi</u></b>. The “queen of the mountains.” Is known as a massif because it was formed when the earth’s crust moved. Visitors give it high marks for its stunning beauty, but warn to only visit it on a clear day. Mount Rigi is unique because it sits on three lakes: Lucerne, Zug and Lauerz. A cogwheel train is a popular way to reach the top of this 1,797.5-meter high peak. Mount Rigi offers hiking in the summer and snow sports in the winter.
        </p>
        </div>
        </div>


        
        <div class="perp">
        <div class="fotoja">
            <img src="images/chapel_bridge1.jpg" alt="Chapel Brigde" title="Chapel Brigde" />
        </div>
        <div id="teksti">
        <h2 style="margin-bottom:01%">Chapel Brigde</h2>
        <p>The medieval <b>Chapel Bridge</b>, or rather its replacement, is probably the most photographed site in Lucerne. The landmark bridge was built in the 14th century and, until it burned in 1993, was considered the oldest wooden bridge in Europe. The bridge was promptly rebuilt and is as picturesque as ever. The restored bridge features more than 100 pictures of Lucerne life in the 17th century hanging from the rafters. These pictures also include patron saints.The covered bridge crosses the River Reuss diagonally. Named for nearby St.Peter’s Chapel, the bridge also is known as Kapellbrücke.
        </p>
        </div>
        </div>
        
        <div class="perp">
        <div class="fotoja">
            <img src="images/lion_of_lucerne.jpg" alt="Lion Of Lucerne" title="Lion of Lucerne" />
        </div>
        <br/><br/>
        <div id="teksti">
        <h2 style="margin-bottom:01%">The Lion of Lucerne</h2>
        <p><b>The Lion of Lucerne</b> is a sad, touching tribute to Swiss soldiers who tried to protect the royal family during the French Revolution. The memorial features a dying lion carved into sandstone at a pond at the east end of Lucerne. American author Mark Twain called the statue <i>“the most mournful and moving piece of stone in the world.”</i> It memorializes the more than 800 Swiss guards who died protecting King Louis XVI and his family at Tuileries Palace or who later died in a French prison. Only about 100 soldiers managed to escape the massacre.
        </p>
        </div>
        </div>


        <div class="perp">
        <div class="fotoja">
            <img src="images/Old-Town-Luzerne.jpg " alt="Old Lucerne’s Towm" title="Lucerne’s Old Town" />
        </div>
        <br/><br/>
        <div id="teksti">
        <h2 style="margin-bottom:01%">Lucerne’s Old Town</h2>
        <p><b>  Lucerne’s Old Town<abbr title="Old-Town/Historical city">(Aldstadt)</abbr></b>   is tiny, but that just makes it easier to walk around. It’s located of the right bank of the River Reuss that is crossed by the most famous tourist attraction in Lucerne; the 14th century Chapel Bridge. Surrounded by the city wall, Old Town is very well preserved with squares with fountains and cobblestone streets. As visitors stroll through Old Town, considered one of the prettiest in Switzerland, they’ll find murals painted on numerous buildings. The Italian Renaissance Town Hall was built in 1602.
        </p>
        </div>
        </div>
        

    <div style="margin-left:13%;
    margin-bottom: 4%;">
  <table cellpadding="23" id='tabela'>
    <tr style="background-color: rgb(67, 178, 223);border: 1px solid rgb(67, 178, 223); ">
      <th>Tour Time</th>
      <th>Location</th>
    </tr>
    <tr>
      <td>08:00-11:00</td>
      <td>Lucerne Lake</td>
    </tr>
    <tr>
      <td>11:30-14:00 </td>
      <td>Mount Rigi</td>
    </tr>
    <tr>
      <td>14:30-16:00</td>
      <td>Chapel Bridge</td>
    </tr>
    <tr>
      <td>16:30-18:00</td>
      <td>The Lion of Luzerne</td>
    </tr>
    <tr>
      <td>19:00-21:00</td>
      <td>Old Town Lucerne</td>
    </tr>
  </table>
</div>
<?php require("DB/footer.php") ?>

</body>
</html>