<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  
    <title>@yield('title')</title>
    <style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    list-style: none;
}

li a {
    color: #000;
    transition: all 400ms;
    padding: 0.8rem;
    border-radius: 0.8rem;
}

li a:hover {
    color: #0008;
    background: #f2f2f288;
}

.icon {
    width: 2.8rem;
    height: 2.8rem;
    border-radius: 100%;
    background: #a9d0f4;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}

svg {
    width: 1.2rem;
    transition: all 400ms;
}

svg:hover {
    fill: #0008;
}

.header {
    width: 100%;
    height: 5rem;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    align-items: center;
    background: #fff8;
}

.logo {
    width: 8rem;
    height: 80%;
    border-radius: 0.8rem;
    background: #f2f2f2;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.buscador {
    width: 40%;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}

.buscador #tbus {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}

.search {
    width: 98%;
    height: 2rem;
    background: #f2f2f288;
    border-radius: 0.8rem;
    border: none;
    padding: 0 0.8rem;
}

menu {
    width: 40%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    align-items: center;
}

button:hover {
    box-shadow: 0px 0px 5px 0px #0008;
}
.section-productos{
    width:100%;
    display:flex;
    flex-wrap:wrap;
    justify-content:space-around;
}
.container_productos{
    width: 100%;
    padding:  2rem;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
    gap: 2rem;
}
.card_producto{
    height:22rem;
    display:flex;
    flex-wrap:wrap;
    justify-content:space-around;
    background:skyblue;
    border-radius:0.5rem;
    padding:0.5rem;
}
.producto .img{
    width: 100%;
    height: 60%;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    
}
.producto .img img{
    object-fit: contain;
    object-position: center center;
    width: 100%;
    height: 100%;
    
}
.producto a{
    color:red;
}
    </style>
</head>
<body>

    <script src="https://kit.fontawesome.com/11ba4104c1.js" crossorigin="anonymous"></script>
  <div id="header" class="header">
        <div class="logo">
            <h2>Shopping</h2>
        </div>
        <div class="buscador">
            <form action="home/search" id="tbus" name="tbus" method="get">
            <input type="search" name="search" id="search" class="search">
        </form>
        </div>
        <menu>
        <ul>
            <li><a href="">Home</a></li>
        </ul>
        <ul>
            <li><a href="store">Tienda</a></li>
        </ul>
        <ul>
  <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224 256c-70.7 0-128-57.3-128-128S153.3 0 224 0s128 57.3 128 128s-57.3 128-128 128zm-45.7 48h91.4c11.8 0 23.4 1.2 34.5 3.3c-2.1 18.5 7.4 35.6 21.8 44.8c-16.6 10.6-26.7 31.6-20 53.3c4 12.9 9.4 25.5 16.4 37.6s15.2 23.1 24.4 33c15.7 16.9 39.6 18.4 57.2 8.7v.9c0 9.2 2.7 18.5 7.9 26.3H29.7C13.3 512 0 498.7 0 482.3C0 383.8 79.8 304 178.3 304zM436 218.2c0-7 4.5-13.3 11.3-14.8c10.5-2.4 21.5-3.7 32.7-3.7s22.2 1.3 32.7 3.7c6.8 1.5 11.3 7.8 11.3 14.8v30.6c7.9 3.4 15.4 7.7 22.3 12.8l24.9-14.3c6.1-3.5 13.7-2.7 18.5 2.4c7.6 8.1 14.3 17.2 20.1 27.2s10.3 20.4 13.5 31c2.1 6.7-1.1 13.7-7.2 17.2l-25 14.4c.4 4 .7 8.1 .7 12.3s-.2 8.2-.7 12.3l25 14.4c6.1 3.5 9.2 10.5 7.2 17.2c-3.3 10.6-7.8 21-13.5 31s-12.5 19.1-20.1 27.2c-4.8 5.1-12.5 5.9-18.5 2.4l-24.9-14.3c-6.9 5.1-14.3 9.4-22.3 12.8l0 30.6c0 7-4.5 13.3-11.3 14.8c-10.5 2.4-21.5 3.7-32.7 3.7s-22.2-1.3-32.7-3.7c-6.8-1.5-11.3-7.8-11.3-14.8V454.8c-8-3.4-15.6-7.7-22.5-12.9l-24.7 14.3c-6.1 3.5-13.7 2.7-18.5-2.4c-7.6-8.1-14.3-17.2-20.1-27.2s-10.3-20.4-13.5-31c-2.1-6.7 1.1-13.7 7.2-17.2l24.8-14.3c-.4-4.1-.7-8.2-.7-12.4s.2-8.3 .7-12.4L343.8 325c-6.1-3.5-9.2-10.5-7.2-17.2c3.3-10.6 7.7-21 13.5-31s12.5-19.1 20.1-27.2c4.8-5.1 12.4-5.9 18.5-2.4l24.8 14.3c6.9-5.1 14.5-9.4 22.5-12.9V218.2zm92.1 133.5c0-26.5-21.5-48-48.1-48s-48.1 21.5-48.1 48s21.5 48 48.1 48s48.1-21.5 48.1-48z"/></svg>
            </div>
           
        </ul>
        <ul>
     
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M352 128c0 70.7-57.3 128-128 128s-128-57.3-128-128S153.3 0 224 0s128 57.3 128 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>
                </div>
     
           
         </ul>
         <ul>
            
                <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96C43 32 0 75 0 128V384c0 53 43 96 96 96h64c17.7 0 32-14.3 32-32s-14.3-32-32-32H96c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32h64zM504.5 273.4c4.8-4.5 7.5-10.8 7.5-17.4s-2.7-12.9-7.5-17.4l-144-136c-7-6.6-17.2-8.4-26-4.6s-14.5 12.5-14.5 22v72H192c-17.7 0-32 14.3-32 32l0 64c0 17.7 14.3 32 32 32H320v72c0 9.6 5.7 18.2 14.5 22s19 2 26-4.6l144-136z"/></svg>
                </div>
 
           
         </ul>
        <ul>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 24C0 10.7 10.7 0 24 0H96c11.5 0 21.4 8.2 23.6 19.5L122 32H312V134.1l-23-23c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0l64-64c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-23 23V32H541.8c21.2 0 36.5 20.3 30.8 40.7l-54 192c-3.9 13.8-16.5 23.3-30.8 23.3h-317l9.1 48H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H160c-11.5 0-21.4-8.2-23.6-19.5L76.1 48H24C10.7 48 0 37.3 0 24zM224 464c0 26.5-21.5 48-48 48s-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48zm240 48c-26.5 0-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48s-21.5 48-48 48z"/>
            </svg>
           
        </ul>
    </menu>
    </div>
@yield('container_gral')
<footer>

</footer>
</body>
<link rel="stylesheet" href="shopcart.css">
</html>