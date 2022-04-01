const blogs = document.getElementById('blogs');

if (blogs) {
    blogs.addEventListener('click', e => {
        if (e.target.className === 'btn btn-secondary btn-text') {
            alert(2);
        }
    });
}
