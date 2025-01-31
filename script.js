document.getElementById('loadContent').addEventListener('click', function() {
    fetch('https://jsonplaceholder.typicode.com/posts/1')
        .then(response => response.json())
        .then(data => {
            const contentDiv = document.getElementById('content');
            contentDiv.innerHTML = `
                <h2>${data.title}</h2>
                <p>${data.body}</p>
            `;
        })
        .catch(error => console.error('Błąd:', error));
});