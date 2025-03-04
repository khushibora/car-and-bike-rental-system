const vehicles = [
    // 🚗 Cars
    { 
        name: "Hyundai i20", 
        type: "car", 
        img: "https://imgd.aeplcdn.com/664x374/n/cw/ec/137051/i20-exterior-right-front-three-quarter-5.jpeg?q=75",
        rating: 4.5, 
        reviews: []
    },
    { 
        name: "Swift Dzire", 
        type: "car", 
        img: "https://imgd.aeplcdn.com/664x374/n/cw/ec/103799/dzire-exterior-right-front-three-quarter-2.jpeg?q=75",
        rating: 4.2, 
        reviews: []
    },
    { 
        name: "Honda City", 
        type: "car", 
        img: "https://imgd.aeplcdn.com/664x374/n/cw/ec/113051/city-exterior-right-front-three-quarter-5.jpeg?q=75",
        rating: 4.8, 
        reviews: []
    },
    { 
        name: "Tata Nexon", 
        type: "car", 
        img: "https://imgd.aeplcdn.com/664x374/n/cw/ec/119051/nexon-exterior-right-front-three-quarter-5.jpeg?q=75",
        rating: 4.7, 
        reviews: []
    },
    { 
        name: "Mahindra Thar", 
        type: "car", 
        img: "https://imgd.aeplcdn.com/664x374/n/cw/ec/107951/thar-exterior-right-front-three-quarter-3.jpeg?q=75",
        rating: 4.9, 
        reviews: []
    },

    // 🏍️ Bikes
    { 
        name: "Royal Enfield Classic 350", 
        type: "bike", 
        img: "https://imgd.aeplcdn.com/664x374/n/cw/ec/131931/classic-350-right-front-three-quarter-2.jpeg?q=75",
        rating: 4.6, 
        reviews: []
    },
    { 
        name: "Royal Enfield Hunter 350", 
        type: "bike", 
        img: "https://imgd.aeplcdn.com/664x374/n/cw/ec/114061/hunter-350-right-front-three-quarter.jpeg?q=75",
        rating: 4.5, 
        reviews: []
    },
    { 
        name: "Royal Enfield Himalayan 450", 
        type: "bike", 
        img: "https://ibb.co/rfy5Ps7x",
        rating: 4.8, 
        reviews: []
    },

    // 🛵 Scooties
    { 
        name: "Honda Activa 6G", 
        type: "scooty", 
        img: "https://imgd.aeplcdn.com/664x374/n/cw/ec/125649/activa-6g-right-front-three-quarter.jpeg?q=75",
        rating: 4.3, 
        reviews: []
    },
    { 
        name: "TVS Jupiter", 
        type: "scooty", 
        img: "https://imgd.aeplcdn.com/664x374/n/cw/ec/125031/jupiter-right-front-three-quarter.jpeg?q=75",
        rating: 4.4, 
        reviews: []
    },
    { 
        name: "Ather 450X", 
        type: "scooty", 
        img: "https://imgd.aeplcdn.com/664x374/n/cw/ec/126499/450x-right-front-three-quarter.jpeg?q=75",
        rating: 4.7, 
        reviews: []
    }
];

// Function to display vehicles with reviews & ratings
function displayVehicles(filteredVehicles) {
    const vehicleList = document.getElementById("vehicleList");
    vehicleList.innerHTML = "";

    filteredVehicles.forEach((vehicle, index) => {
        const vehicleCard = `
            <div class="col-md-4">
                <div class="card vehicle-card">
                    <img src="${vehicle.img}" class="card-img-top" alt="${vehicle.name}">
                    <div class="card-body">
                        <h5 class="card-title">${vehicle.name}</h5>
                        <p class="card-text"><strong>Type:</strong> ${vehicle.type.charAt(0).toUpperCase() + vehicle.type.slice(1)}</p>
                        <p class="card-text"><strong>Rating:</strong> ⭐${vehicle.rating.toFixed(1)} / 5</p>

                        <!-- Review Input Section -->
                        <div class="review-section">
                            <h6>Leave a Review:</h6>
                            <input type="number" id="rating-${index}" min="1" max="5" placeholder="Rate 1-5" class="form-control">
                            <textarea id="review-${index}" class="form-control" placeholder="Write a review..."></textarea>
                            <button class="btn btn-success mt-2" onclick="submitReview(${index})">Submit</button>
                        </div>

                        <!-- Display Reviews -->
                        <div class="reviews-list mt-3">
                            <h6>Reviews:</h6>
                            <ul id="reviews-${index}" class="list-group">
                                ${vehicle.reviews.length > 0 ? vehicle.reviews.map(review => `<li class="list-group-item">⭐${review.rating} - ${review.text}</li>`).join("") : "<li class='list-group-item'>No reviews yet.</li>"}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        `;
        vehicleList.innerHTML += vehicleCard;
    });
}

// Function to filter vehicles
function filterVehicles() {
    const selectedType = document.getElementById("vehicleTypeSelect").value;
    const filtered = selectedType === "all" ? vehicles : vehicles.filter(v => v.type === selectedType);
    displayVehicles(filtered);
}

// Function to handle review submission
function submitReview(index) {
    const ratingInput = document.getElementById(`rating-${index}`);
    const reviewInput = document.getElementById(`review-${index}`);

    const rating = parseFloat(ratingInput.value);
    const reviewText = reviewInput.value.trim();

    if (!rating || rating < 1 || rating > 5 || reviewText === "") {
        alert("Please provide a valid rating (1-5) and review text.");
        return;
    }

    // Add the new review to the vehicle
    vehicles[index].reviews.push({ rating, text: reviewText });

    // Update the rating average
    const totalRatings = vehicles[index].reviews.reduce((sum, review) => sum + review.rating, 0);
    vehicles[index].rating = totalRatings / vehicles[index].reviews.length;

    // Clear input fields
    ratingInput.value = "";
    reviewInput.value = "";

    // Refresh UI
    displayVehicles(vehicles);
}

// Load all vehicles initially
window.onload = () => displayVehicles(vehicles);
