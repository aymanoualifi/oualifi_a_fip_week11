
//  const dataDisplay = document.getElementById("cards-wrapper");
//  debugger;
 const button = document.getElementById('lightboxButton');

button.addEventListener('click', () => {
  fetch('data.json')
  .then(response => response.json())
  .then(data => {
    

    // Display data on the web page
    // dataDisplay.innerHTML = JSON.stringify(data);
    (lightbox.innerHTML = `
    <div>
    <h2 class="lightBox1">${data.name} </h2>
    <h3> ${data.title}</h3>
    <p>${data.story}</p>
    </div>
    ` );
    
    
    })

    
    .catch(error => {
      console.error('Error fetching data:', error);
    });

    
    
});



window.onload = () => {
  setTimeout(() => {
    document.querySelector("body").classList.add("display");
  }, 500);
};