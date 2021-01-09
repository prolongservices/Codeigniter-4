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

console.log(self)

window.document.getElementById("dropdown-container").appendChild(
  `<a class="dropdown-item d-flex align-items-center" href="#">
      <div class="mr-3">
          <div class="icon-circle bg-primary">
              <i class="fas fa-file-alt text-white"></i>
          </div>
      </div>
      <div>
          <div class="small text-gray-500">22311</div>
          <span class="font-weight-bold">test</span>
      </div>
  </a>`
)

fcm.onBackgroundMessage((data) => {
  console.log('onBackgroundMessage: ', data)
  let title = data['data']['title']
  let body = data['data']['body']
  /* let count = self.localStorage.getItem("notification-count");
  if (count) {
    self.localStorage.setItem("notification-count", parseInt(count) + 1);
  } else {
    self.localStorage.setItem("notification-count", 1);
  }

  $('.badge-counter').text(localStorage.getItem("notification-count")) */
  self.document.getElementById("dropdown-container").appendChild(
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
  //self.registration.showNotification();
})