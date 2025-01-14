document.addEventListener("DOMContentLoaded", () => {
    const homepageSection = document.getElementById("homepage");
    homepageSection.classList.add("visible");
  });


  document.addEventListener("DOMContentLoaded", () => {
    const homepageSection = document.getElementById("fade_in");
    homepageSection.classList.add("visible");
  });

  document.addEventListener("DOMContentLoaded", () => {
    const homepageSection = document.getElementById("fade_in_services");
    homepageSection.classList.add("visible");
  });
  
  document.addEventListener("DOMContentLoaded", function () {
    // Select the first <h1> element
    const headline = document.getElementsByTagName("h1")[0];
  
    // Add the additional HTML content inside the <h1>
    if (headline) {
      headline.innerHTML += `
        <p>
          <strong>Extend your roof's lifespan by 5-10 years.</strong> 
          <i>We clean and seal most roofs for $5,000 or less!</i>
        </p>
      `;
    }
  });
  