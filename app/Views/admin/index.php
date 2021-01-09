<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Hello</h2>

  <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.2.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.2/firebase-messaging.js"></script>


<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyCITZQ354SOOSmElp5WEYOkvnuT9B7Tp-s",
    authDomain: "ci4-firebase-7eb2d.firebaseapp.com",
    projectId: "ci4-firebase-7eb2d",
    storageBucket: "ci4-firebase-7eb2d.appspot.com",
    messagingSenderId: "551568081824",
    appId: "1:551568081824:web:7d5b2baddb344657081ac5",
    measurementId: "G-G7FB02J0DX"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  const fcm = firebase.messaging()
  fcm.getToken({
    vapidKey: 'BNq7dY7XYEZBETPjHGVyFQ_TlNfjQhyeFl5cghu8ru4SB_Xj2k-W1kwo_tO3UkTOeCRns8qhnTtzoMagkv5LqgE'
  }).then((token) => {
    console.log('getToken: ', token)
  });

  

  fcm.onMessage((data) => {
    console.log('onMessage: ', data)

    Notification.requestPermission((status) => {
      console.log('requestPermission', status)
      if (status === 'granted') {
        let title = data['data']['title']
        let body = data['data']['body']
        new Notification(title, {
          body: body
        })
      }
    })
  })

  


</script>
</body>
</html>