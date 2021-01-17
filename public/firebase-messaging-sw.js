importScripts('https://www.gstatic.com/firebasejs/8.2.2/firebase-app.js')
importScripts('https://www.gstatic.com/firebasejs/8.2.2/firebase-messaging.js')

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

fcm.onBackgroundMessage((data) => {
  console.log('onBackgroundMessage: ', data)
  let title = data['data']['title']
  let body = data['data']['body']

  self.registration.showNotification(title, {
    body: body
  });
})