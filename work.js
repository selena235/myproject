const houses = [
{
    name:La Cantilena,
    size:250,
    rooms:3 bedrooms and 2 bathrooms, 90 m<sup>2</sup> of kitchen,
    location:in the city center,
    price:300,000,
    bonus:a 90 square meters garden,
    image:https://i.ibb.co/nnpLPp9/IMG-20200722-154253.png,
    kitchen:https://i.ibb.co/0Cv3zDB/IMG-20200724-143327.png,
    bathroom:https://i.ibb.co/CVzXBBq/IMG-20200724-181540.png
},
{
    name:Fletcher 3211,
    size:230,
    rooms:3 bedrooms and 3 bathrooms, 45 mq of kitchen,
    location:2 minutes from school,
    price:350,000,
    bonus:1 car box,
    image:https://i.ibb.co/6gkTpnd/IMG-20200722-153216.png,
    kitchen:https://i.ibb.co/dJ0vXyJ/IMG-20200724-143249.png,
    bathroom:https://i.ibb.co/gjCk8Yp/IMG-20200724-181631.png
},
{
    name:SoloHouse 677,
    size:310,
    rooms:4 bedrooms and 3 bathrooms, 60 mq of kitchen,
    location:in the countryside, 12 min from city center,
    price:365,000,
    bonus:a swimming pool,
    image:https://i.ibb.co/rt9yxmz/IMG-20200722-162530.png,
    kitchen:https://i.ibb.co/mvhmyL5/IMG-20200724-143209.png,
    bathroom:https://i.ibb.co/TcGYkkw/IMG-20200724-181433.png
},
{
    name:Python Mansion,
    size:270,
    rooms:3 bedrooms and 3 bathrooms, 60 mq of kitchen,
    location:3 km from university,
    price:400,000,
    bonus:a small extra cottage of 70 m<sup>2</sup> for rental,
    image:https://i.ibb.co/BTqrM6C/IMG-20200722-153009.png,
    kitchen:https://i.ibb.co/dgDrkzt/IMG-20200724-173120.png,
    bathroom:https://i.ibb.co/GQzc7WW/IMG-20200724-182149.png
},
{
    name:Virginia Rench,
    size:450,
    rooms:4 bedrooms and 4 bathrooms, 90 mq of kitchen,
    location:in the countryside, 20 km from city center,
    price:430,000,
    bonus:2 hectares of land,
    image:https://i.ibb.co/CbMPXF7/IMG-20200722-145818.png,
    kitchen:https://i.ibb.co/Zmj60yX/IMG-20200724-143053.png,
    bathroom:https://i.ibb.co/KNy2KXn/IMG-20200724-182037.png
},
{
    name:Kamala4ever 777,
    size:290,
    rooms:3 bathrooms and 2 bathrooms, 50 m<sup>2</sup> of kitchen,
    location:is set close to the supermarket,
    price:285,000,
    bonus:modern kitchen,
    image:https://i.ibb.co/bJx2w39/IMG-20200722-154350.png,
    kitchen:https://i.ibb.co/yf0R6Rd/IMG-20200724-142538.png,
    bathroom:https://i.ibb.co/HPH9Fny/IMG-20200724-181959.png
}
]

const map = new Map ([]);
//Display all of the houses
window.onload = () => {

    const website = document.getElementById("website");
    
    //creating the initial part
    website.innerHTML += 
    <div id='inizio'>
    Real Estate Website
    </div>
    <br />
    <br />
    <br />
    <div id='searchbar'>
    <input type='search' id='input' placeholder='Type a keyword'><button onclick='search()'>🔍</button>
    </div>
    <br />
    <div id='top'></div>;
    
    const searchbar = document.getElementById("searchbar");
    
//Core part, when opening a single page
    website.innerHTML+= 
    <div id='website1'>
    </div>;
    
    const website1 = document.getElementById("website1");
   
   //Displaying first pages 
    for (let i=0;i<houses.length;i++) {
        website1.innerHTML += 
        <div class='page' id='\offer+i+\'>
        <img src=+houses[i].image+>
        <br />
        +houses[i].name+
        <br />
        <span class='short'>+houses[i].rooms+</span>
        <br />
        <hr>
        <button onclick='\plus(+i+)\'>Add to favorites</button>
        <button onclick='\show(+i+)\'>More</button>
        <br />
        </div> ;
    }
    
    //List of favorite houses
    website.innerHTML += 
    <div id='list'>
    <h3>List of favorite houses</h3>
    <button onclick='back()'>Back</button></div>
const list = document.getElementById("list");
    
    //Adding part2
    website.innerHTML += 
    <div id='website2'></div>;
    
    const website2 = document.getElementById("website2");
    
    //Adding part3
    website.innerHTML += 
    <div id='website3'></div>;
    
    const website3 = document.getElementById("website3");
    
    //Adding the bottom part of the website
    website.innerHTML += 
    <div id='fine'>
    Follow us on 
            <a href='http://www.linkedin.com/in/gabriele-gatti-87b321190/'> <i class='social-icon fab fa-linkedin'></i></a> 
        <a href='http://www.instagram.com/gabri_gatti01/'><i class='social-icon fab fa-instagram'></i></a>
        <br />
        <br />
         &copy; Gabriele Gatti 2021;
         <br />
         <br />
         </div>;
         
}

//Showing houses details
const show = (i) => {
    searchbar.style.display = "none";
    website1.style.display = "none";
    website2.style.display = "block";
    window.location.href = "#top";
    
    website2.innerHTML =
    <div class='page'>
    <h2>Description</h2>
    <br />
    +houses[i].name+ is set across +houses[i].size+ m<sup>2</sup> of space.
    <br />
    <br />
    <img src=+houses[i].bathroom+>
    <br />
    <hr>
     The house is composed by  +houses[i].rooms+.
    <br />
    <br />
    <img src=+houses[i].kitchen+>
    <hr>
    The asking price is about +houses[i].price+$.
    <br />
    <br />
    Included in the price you will have also +houses[i].bonus+.
    <hr>
    <h3>To sum up</h3>
    <table border='1'>
    <tr>
    <td>Size</td>
    <td>+houses[i].size+ m<sup>2</sup></td>
    </tr>
    <tr>
    <td>Location</td>
    <td>+houses[i].location+</td>
    </tr>
    <tr>
    <td>Bonus</td>
    <td>+houses[i].bonus+</td>
    </tr>
    <td>Price</td>
    <td>+houses[i].price+$</td>
    </tr>
    </table>
    <hr>
    <button onclick='\contact(+i+)\'>Contact us</button>
    <button onclick='back()'>Back</button>
    <br />
    </div>;
}

//Back to menu function
const back = () => {
    searchbar.style.display = "block";
    website1.style.display = "block";
    website2.style.display = "none";
    website3.style.display = "none";
    window.location.href = "#searchbar";
    list.style.display = "none";
}

//Contact function
const contact = (i) => {
    website2.style.display = "none";
    website3.style.display = "block";
    window.location.href = "#top";
    
    website3.innerHTML = 
    <div class='page'>
    <h3>Getting in touch</h3>
    Book your reservation with one of our experts with 4 simple steps:
    <br />
    <br />
    <label>Enter your name:</label>
    <br />
    <input type='search' id='naming'>
    <br />
    <br />
    <label>Enter your email:</label>
    <br />
    <input type='search' id='email'>
    <br />
    <br />
    <label>Choose the date:</label>
    <br />
    <input type='date' id='date'>
    <br />
    <br />
    <label>Choose the time:</label>
    <br />
    <input type='time' id='time'>
    <br />
    <br />
    <hr>
    <button onclick='back()'>Back</button>
    <button onclick='\approve(+i+)\'>Confirm</button>
    <br />
    </div>;
    
    const time = document.getElementById("time");
    const date = document.getElementById("date");
    const email = document.getElementById("email");
    const naming = document.getElementById("naming");
}

//Confirm function
const approve = (i) => {

      
const conf = confirm(Do you want to confirm your reservation with an expert for the house '+houses[i].name+' at +time.value+ of the date +date.value+ ?);

   if (conf==true) {
       alert(Dear +naming.value+, your reservation has been successful confirmed!!
A message will be sent to your email address:\n +email.value+.);
   }
    
}
//Add to the list function
const plus = (i) => {
     
     website1.style.display = "none";
     list.style.display = "block";
     searchbar.style.display = "none";
alert(The house '+houses[i].name+' has been added to the Favorites list.);
    
    const fav = 
    Name: +houses[i].name+<br />
    Size: +houses[i].size+ m<sup>2</sup><br />
    Price: +houses[i].price+$;
    
    map.set(fav);
    
    list.innerHTML += 
    <div class='page' id='\list+i+\'>
    +fav+<button onclick='\killing(+i+)\'>X</button>
    </div>;
    
}

//Removing from list function
const killing = (i) => {

document.getElementById("list"+i).remove();
    map.delete();
}

//Search function
const search = () => {

let input2 = document.getElementById('input').value; 

let input = (input2.toLowerCase()).trim();

let page = document.getElementsByClassName("page"); 
    
      [...page].forEach(house=>{
       
         if(house.innerHTML.toLowerCase().includes(input)) house.style.display = "block"; 
         else house.style.display = "none"; 
      }); 
  };
/*Created by me, Gabriele Gatti, hope you like it*/