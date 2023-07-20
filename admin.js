//profile data
const profilesData = [
    { name: "User 1", email: "1@gmail.com", potentialMatches: 5 },
    { name: "User 2", email: "2@gmail.com", potentialMatches: 3 },
  
];

//review data
const reviewsData = [
    { subject: "Title 1", review: "Slay!"},
    { subject: "Title 2", review: "Not slay."},
];

//populate profiles table
function populateProfilesTable() {
    const table = document.querySelector("#profiles table");
    profilesData.forEach((profile) => {
        const row = table.insertRow(); 

        const nameCell = row.insertCell();
        const emailCell = row.insertCell();
        const potentialMatchesCell = row.insertCell();

        nameCell.textContent = profile.name;
        emailCell.textContent = profile.email;
        potentialMatchesCell.textContent = profile.potentialMatches;
    });
}


//populate reviews table
function populateReviewsTable() {
    const table = document.querySelector("#reviews table");
    reviewsData.forEach((review) => {
        const row = table.insertRow(); 

        const subjectCell = row.insertCell(); 
        const reviewCell = row.insertCell(); 

        subjectCell.textContent = review.subject;
        reviewCell.textContent = review.review;
    });
}

document.addEventListener("DOMContentLoaded", () => {
    populateProfilesTable();
    populateReviewsTable();
});
