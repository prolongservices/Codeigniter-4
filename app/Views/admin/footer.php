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
        let title = data['data']['title']
        let body = data['data']['body']
        //.badge-counter
        let count = localStorage.getItem("notification-count");
        if (count) {
            localStorage.setItem("notification-count", parseInt(count) + 1);
        } else {
            localStorage.setItem("notification-count", 1);
        }

        $('.badge-counter').text(localStorage.getItem("notification-count"))

        $('#dropdown-container').append(
            `<a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                    <div class="icon-circle bg-primary">
                        <i class="fas fa-file-alt text-white"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500">${new Date().toLocaleString('en-US', { hour: 'numeric', minute: 'numeric', hour12: true })}</div>
                    <span class="font-weight-bold">${title}</span>
                </div>
            </a>`
        )

        //const pattern = /^\(\d+\)/

        Notification.requestPermission((status) => {
            console.log('requestPermission', status)
            if (status === 'granted') {
                
                new Notification(title, {
                    body: body
                })
            }
        })
    })
</script>
</body>

</html>