<?php
  header('content-type: text/css; charset:UTF-8');
  $primary_color = '#1a2c46';
?>


body {
  margin-top: 96px;
  margin-left: -5;
  margin-right: 0px;
  margin-top: 0px;
  box-sizing: border-box;
  color: #ffffff;
  text-align: center;
  background-color: <?=$primary_color?>;

}

a {
  text-decoration: none;
  color: #ffffff;
}

/*============= HEADER ================*/
header{
  width: 100%;
  position: fixed;
  top: 0;
  left: 0;
  text-align: center;
  padding-top: 30px;
  color: #ffffff;
  background-color: <?=$primary_color?>;
  font-family: 'Montserrat', sans-serif;
}

header > div {
  width: 33.3%;
  margin: auto;
  float: left;
  text-align: center;
  box-sizing: border-box;
}

.order-now{
  opacity: 0;
}

.logo {
  margin-left: 10px;
  text-align: center;
 }

.emblem{
  width: 30px;
  height: auto;
}

.title {
  font-size: 0.8em;
  letter-spacing: 15px;
  color: #ffffff;
  margin-top: 3px;
  text-transform: uppercase;
  transition: 2s;
}

.ham-menu{
  width:20%;
  float: left;
}

.hamburger{
  width: 40px;
  height: auto;
  position: absolute;
  right: 2em;
  transition: 2s;
  }
 /*========== END OF HEADER ==============*/

/*============= MAIN =======================*/

/*======== Lines ==========================*/

#line-glow{
  background-color: #ffffff;
  border-bottom: 1px white solid;
  height: 1px;
  width:55px;
  box-shadow: 0px 0px 10px rgba(242, 239, 222, 1);
}

.line1{
  position: absolute;
  top: 18%;
  left: 91%;
}

.line2{
  position: absolute;
  top: 23%;
  left: 55%;
}

.line3{
  position: absolute;
  top: 30%;
  left: 0;
}

.line4{
  position: absolute;
  top: 52%;
  left: 14%;
  transition: 2s;
}

.line5 {
  display: none;
}

.line6 {
  display: none;
}

/*=============== End of Lines ==========*/

/*================== Article ===============*/

article {
  clear: both;
  text-align: center;
  display: block;
  box-sizing: border-box;
  position: relative;
  top: 190px;
  margin: auto;
  transition: 2s;
}

article > h5 {
  font-size: 0.7em;
  letter-spacing: 2.5px;
  line-height: 1.1;
  margin: 0 0 1.7em 0;
}

article > p {
  letter-spacing: 1.6px;
  font-size: 0.6em;
  line-height: 1.1;
  font-family: 'Montserrat', sans-serif;

}

.the-brightest{
  max-width: 75%;
  transition: 2s;
  -webkit-filter: drop-shadow(rgba(255, 255, 255, 0.886) 0px 0px 6px)
    drop-shadow(rgba(255, 255, 255, 0.886) 0px 0px 6px);
  filter: drop-shadow(rgba(255, 255, 255, 0.886) 0px 0px 6px)
    drop-shadow(rgba(255, 255, 255, 0.886) 0px 0px 6px);
}

.the-brightest:hover {
  -webkit-filter: drop-shadow(rgba(255, 255, 255, 0.886) 0px 0px 6px)
    drop-shadow(rgba(255, 255, 255, 0.886) 0px 0px 6px)
    drop-shadow(rgba(255, 255, 255, 0.886) 0px 0px 6px);
  filter: drop-shadow(rgba(255, 255, 255, 0.886) 0px 0px 6px)
    drop-shadow(rgba(255, 255, 255, 0.886) 0px 0px 6px)
    drop-shadow(rgba(255, 255, 255, 0.886) 0px 0px 6px);
}

.led-light {
  width: 73%;
  position: absolute;
  top: 95%;
  right: 15px;
  transition: 2s;
  z-index: -1;
}

/*========== End of Article ===============*/

/*======= EMD OF MAIN ===============*/

@media only screen and (min-width: 500px) {

/*============= HEADER ================*/

.order-now{
  font-size: 0.7em;
  letter-spacing: 2px;
  opacity: 1;
}

.title {
  font-size: 1.3em;
  letter-spacing: 19px;
  margin-left: 20px;
  text-align: center;
  transition: 2s;
}

.hamburger {
  position: absolute;
  right: 6em;
  transform: translateY(15%);
  transition: 2s;
}

/*======= EMD OF HEADER ===============*/

/*============= MAIN ================*/


/*======== Lines ==========================*/


.line1{
  position: absolute;
  top:20%;
  left: 97%;
  transition: 2s;
}

.line2{
  position: absolute;
  top: 25%;
  left: 57%;
}

.line3{
  position: absolute;
  top: 42%;
  left: 0;
}

.line4{
  position: absolute;
  top: 79%;
  left: 17%;
  transition: 2s;
}

.line5 {
  display: block;
  position: absolute;
  top: 94%;
  left: 40%;
  transition: 2s;
}

.line6 {
  display: block;
  position: absolute;
  top: 79%;
  left: 98%;
  transition: 2s;
}
/*=============== End of Lines ==========*/

/*================== Article ===============*/

article {
  clear: both;
  text-align: center;
  display: block;
  box-sizing: border-box;
  position: relative;
  top: 300px;
  margin: auto;
  transition: 2s;
}

article > h5 {
  font-size: 0.85em;
  letter-spacing: 3px;
  line-height: 2.1;
  margin: 0 0 2.6em 0;
  transition: 2s;
}

article > p {
  letter-spacing: 1.8px;
  font-size: 1.1em;
  line-height: 1.1;
  margin: 2.1em 0 0 0;
  font-family: 'Montserrat', sans-serif;
  transition: 2s;
}

.the-brightest{
  max-width: 60%;
  transition: 2s;
  -webkit-filter: drop-shadow(rgba(255, 255, 255, 0.886) 0px 0px 6px);
  filter: drop-shadow(rgba(255, 255, 255, 0.886) 0px 0px 6px) drop-shadow(rgba(255, 255, 255, 0.886) 0px 0px 6px);
}

.the-brightest:hover {
  filter: drop-shadow(rgba(255, 255, 255, 0.886) 0px 0px 6px)
  drop-shadow(rgba(255, 255, 255, 0.886) 0px 0px 6px)
  drop-shadow(rgba(255, 255, 255, 0.886) 0px 0px 6px);
}

.led-light {
  width: 42%;
  position: absolute;
  top: 75%;
  right: 100px;
  z-index:-1;
  transition: 2s;
}

/*========== End of Article ===============*/

/*======= EMD OF MAIN ===============*/

}



