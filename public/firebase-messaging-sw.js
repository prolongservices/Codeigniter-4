importScripts('https://www.gstatic.com/firebasejs/8.2.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.2.2/firebase-messaging.js');

var firebaseConfig = {
  apiKey: "AIzaSyDwryXt3F82bEwZW00MtJlfUcSSxMWDv0M",
  authDomain: "admin-dashboard-b0cbd.firebaseapp.com",
  projectId: "admin-dashboard-b0cbd",
  storageBucket: "admin-dashboard-b0cbd.appspot.com",
  messagingSenderId: "779440569317",
  appId: "1:779440569317:web:ff6fed27c72157fd850d0c",
  measurementId: "G-TRPWWWNMNF"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);


// Retrieve Firebase Messaging object.
const messaging = firebase.messaging();

messaging.onBackgroundMessage(function(payload) {
  console.log('[firebase-messaging-sw.js] Received background message ', payload);
  // Customize notification here
});