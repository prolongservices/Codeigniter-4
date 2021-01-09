<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('js/sb-admin-2.min.js') ?>"></script>

<!-- Page level plugins -->
<script src="<?= base_url('vendor/chart.js/Chart.min.js') ?>"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('js/demo/chart-area-demo.js') ?>"></script>
<script src="<?= base_url('js/demo/chart-pie-demo.js') ?>"></script>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.2.2/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
        https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.2.2/firebase-messaging.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
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

  // Get registration token. Initially this makes a network call, once retrieved
  // subsequent calls to getToken will return from cache.
  messaging.getToken({
    vapidKey: 'BDRZzzVm6iZaZctzyehpyRX0auU-WfVjn9tF6LSfOSLhPxDHptnewOEutxdINidFYCcXSHf-3kYK9MTOU2gdkio'
  }).then((currentToken) => {
    if (currentToken) {
      console.log('registration token available', currentToken)
    } else {
      // Show permission request.
      console.log('No registration token available. Request permission to generate one.');
    }
  }).catch((err) => {
    console.error('An error occurred while retrieving token. ', err);
  });

  messaging.onMessage((payload) => {
    console.log('Message received. ', payload);
  });
</script>

</body>

</html>