$(document).ready(function() {
    // Select the elements to be observed
    const sections = document.querySelectorAll('h2');
    console.log(sections);
  
    // Create the observer instance
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        // Check if the element is intersecting the viewport
        if (entry.isIntersecting) {
          // Get the ID of the section
          const sectionId = entry.target.id;
          console.log(sectionId);
  
          // Update the active state of the menu item
          $(`#menu-${sectionId}`).addClass('active')
        }
        else if(!entry.isIntersecting){
            const sectionId = entry.target.id;
            $(`#menu-${sectionId}`).removeClass('active')
        }
      });
    }, { threshold: 0.5 });
  
    // Observe each section
    sections.forEach((section) => {
      observer.observe(section);
    });
  });