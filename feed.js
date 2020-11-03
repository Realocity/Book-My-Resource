
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

  const post = document.querySelector('#submitfdbk');

     
 let ufeed_1 = document.querySelector('#feedback_1');
 let ucmmnt = document.querySelector('#comment');
 let namefd = document.querySelector('#namefdbk');
 let emailfd = document.querySelector('#emailfdbk');

 const dbnew = firestore.collection("feedback");
 post.addEventListener('click', function(){
    let ufeed_1input = ufeed_1.value;
    let ucomminput = ucmmnt.value;
    let namefk = namefd.value;
    let emailfk = emailfd.value;
  
     dbnew.doc().set({
      Feedback: ufeed_1input, 
      Comment: ucomminput,
      Name: namefk,
      Email: emailfk
  
     }).then(function(){
        alert("Your request has been sent!");
        window.location.href = "booking.php";
       // console.log("Data Saved");
     })
     .catch(function(error){
       console.log(error);
     });
   });