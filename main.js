
 var firebaseConfig = {
    apiKey: "AIzaSyCoJo6hOAn4V0pF83Z_kOlQDyIkbSsumQU",
    authDomain: "bmre-526cd.firebaseapp.com",
    databaseURL: "https://bmre-526cd.firebaseio.com",
    projectId: "bmre-526cd",
    storageBucket: "bmre-526cd.appspot.com",
    messagingSenderId: "654564183582",
    appId: "1:654564183582:web:b135406fad38e480a6a80f"
  };

  firebase.initializeApp(firebaseConfig);

  var firestore = firebase.firestore();

  const submitbtn = document.querySelector('#submit');

let uname = document.querySelector('#name');
let uadd = document.querySelector('#add');
let uemail = document.querySelector('#email');
let ucon = document.querySelector('#contact');
let userv = document.querySelector('#serv');
let uvenue = document.querySelector('#venue');
let upurpose = document.querySelector('#msg');
let udate = document.querySelector('#date');
let utime = document.querySelector('#time');


const db = firestore.collection("Booking_info");

submitbtn.addEventListener('click', function(){

   let uNameinput = uname.value;
   let uAddressinput = uadd.value;
   let uEmailinput = uemail.value;
   let uContactinput = ucon.value;
   let uServiceinput = userv.value;
   let uVenueinput = uvenue.value;
   let uPurposeinput = upurpose.value;
   let uDateinput = udate.value;
   let uTimeinput = utime.value;

   db.doc().set({

     Name: uNameinput,
     Address: uAddressinput,
     Email: uEmailinput,
     Contact: uContactinput,
     Services: uServiceinput,
     Venue: uVenueinput,
     Purpose: uPurposeinput,
     Date: uDateinput,
     Time: uTimeinput
   })
       .then(function(){
        alert("Your request has been sent.");
        window.location.href = "booking.php";       // console.log("Data Saved");
   })
   .catch(function(error){
     console.log(error);
   });
 });


























//  var firebaseConfig = {
//     apiKey: "AIzaSyDMSqL0mh6qch5vL4w7t-ve0Vom_0RlrZk",
//     authDomain: "bmre-d9c22.firebaseapp.com",
//     databaseURL: "https://bmre-d9c22.firebaseio.com",
//     projectId: "bmre-d9c22",
//     storageBucket: "bmre-d9c22.appspot.com",
//     messagingSenderId: "527936946074",
//     appId: "1:527936946074:web:e4306336430b355a904423"
//   };
//   // Initialize Firebase
//   firebase.initializeApp(firebaseConfig);
//   var firestore = firebase.firestore();

// const submitbtn = document.querySelector('#submit');


// let uname = document.querySelector('#name');
// let uadd = document.querySelector('#add');
// let uemail = document.querySelector('#email');
// let ucon = document.querySelector('#contact');
// let userv = document.querySelector('#serv');
// let uvenue = document.querySelector('#venue');
// let upurpose = document.querySelector('#msg');
// let udate = document.querySelector('#date');
// let utime = document.querySelector('#time');


// const db = firestore.collection("Booking_info");
//  submitbtn.addEventListener('click', function(){

   // let uNameinput = uname.value;
   // let uAddressinput = uadd.value;
   // let uEmailinput = uemail.value;
   // let uContactinput = ucon.value;
   // let uServiceinput = userv.value;
   // let uVenueinput = uvenue.value;
   // let uPurposeinput = upurpose.value;
   // let uDateinput = udate.value;
   // let uTimeinput = utime.value;


// db.doc().set({
     // Name: uNameinput,
     // Address: uAddressinput,
     // Email: uEmailinput,
     // Contact: uContactinput,
     // Services: uServiceinput,
     // Venue: uVenueinput,
     // Purpose: uPurposeinput,
     // Date: uDateinput,
     // Time: uTimeinput

 //   })
 //       .then(function(){
 //     console.log("Data Saved");
 //   })
 //   .catch(function(error){
 //     console.log(error);
 //   });
 // });






















