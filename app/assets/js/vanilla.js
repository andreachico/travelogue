console.log('vanilla JS is working. Woohoo!');

let image = document.querySelector(".blog-snippet-img");
let currentPos = 0;
let images = ["test1.jpeg", "test2.jpeg", "test3.jpeg", "test4.jpeg"];

function timedPhotos(){
    if (++currentPos >= images.length) {
        currentPos = 0;

        image.src = images[currentPos];
    }
}

setInterval(timedPhotos, 3000);
