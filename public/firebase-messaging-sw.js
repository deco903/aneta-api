importScripts('https://www.gstatic.com/firebasejs/8.3.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.0/firebase-messaging.js');
   
    firebase.initializeApp({
        apiKey: "AIzaSyDrS3wsr3u6nPEH9bWhpiwoOtQDQ6TUpIM",
        authDomain: "http://localhost:8000/login",
        databaseURL: "http://localhost:8000/",
        projectId: "aneta-9eeab",
        storageBucket: "AIzaSyDrS3wsr3u6nPEH9bWhpiwoOtQDQ6TUpIM",
        messagingSenderId: "392724653317",        
        appId: "1:392724653317:web:1835775102c96723d9036c"
    });
    const messaging = firebase.messaging();
    messaging.setBackgroundMessageHandler(function(payload) {
    console.log(
        "[firebase-messaging-sw.js] Received background message ",
        payload,
    );
        
    const notificationTitle = "Background Message Title";
    const notificationOptions = {
        body: "Background Message body.",
        icon: "/itwonders-web-logo.png",
    };
  
    return self.registration.showNotification(
        notificationTitle,
        notificationOptions,
    );
});