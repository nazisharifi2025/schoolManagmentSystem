const image = document.getElementById("image");
const images = ["images/sharifi1.jpg", "images/sharifi2.jpg",];
let currentIndex = 0;
setInterval(()=>{
    currentIndex = (currentIndex + 1) % images.length;
    image.src = images[currentIndex];
}, 3000);