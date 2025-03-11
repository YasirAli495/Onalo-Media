// document.addEventListener("DOMContentLoaded", () => {
//     // Mapping service options to form details
//     const serviceDetails = {
//         digitalMedia: {
//             title: "Get In Touch for Digital Media",
//             description: "Let us help you with our exceptional Digital Media services. Fill out the form below to get started.",
//         },
//         printMedia: {
//             title: "Get In Touch for Print Media",
//             description: "Need assistance with Print Media services? We're here to help! Fill out the form below.",
//         }
//     };

//     // Elements
//     const formTitle = document.getElementById("formTitle");
//     const formDescription = document.getElementById("formDescription");

//     // Generic function to handle service clicks
//     const handleServiceClick = (serviceKey) => {
//         const { title, description } = serviceDetails[serviceKey];
//         console.log(serviceDetails[serviceKey]);
//         console.log(title, description);
//         formTitle.textContent = title;
//         formDescription.textContent = description;
        
//     };

//     // Add event listeners dynamically
//     ["digitalMedia", "printMedia"].forEach((serviceKey) => {
//         const element = document.getElementById(serviceKey);
//         if (element) {
//             element.addEventListener("click", (event) => {
//                 event.preventDefault();
//                 handleServiceClick(serviceKey);
                
//             });
//         }
//     });
// });

document.addEventListener("DOMContentLoaded", () => {
    // Mapping service options to form details
    const serviceDetails = {
        digitalMedia: {
            title: "Get In Touch for Digital Media",
            description: "Let us help you with our exceptional Digital Media services. Fill out the form below to get started.",
        },
        printMedia: {
            title: "Get In Touch for Print Media",
            description: "Need assistance with Print Media services? We're here to help! Fill out the form below.",
        },
    };

    // Elements
    const contactForm = document.getElementById("contact-form-section");
    const formTitle = document.getElementById("formTitle");
    const formDescription = document.getElementById("formDescription");

    // Function to handle service clicks with animation
    const handleServiceClick = (serviceKey) => {
        const { title, description } = serviceDetails[serviceKey];

        // Delay to ensure the class is reapplied (triggering the animation)
        setTimeout(() => {
            // Update content
            formTitle.textContent = title;
            formDescription.textContent = description;
            
            contactForm.classList.add("animate-card");
        }, 50); 

        // Reset animation class
        contactForm.classList.remove("animate-card");
    };

    // Add event listeners dynamically
    ["digitalMedia", "printMedia"].forEach((serviceKey) => {
        const element = document.getElementById(serviceKey);
        if (element) {
            element.addEventListener("click", (event) => {
                event.preventDefault();
                handleServiceClick(serviceKey);
            });
        }
    });
});
