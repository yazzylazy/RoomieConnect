//submit form 
document.getElementById('reviewForm').addEventListener('submit', function (event) {
    event.preventDefault(); 
  
    //user's input
    const subject = document.getElementById('subject').value;
    const review = document.getElementById('review').value;

    showPopup(subject, review);
  });
  
  //alert
  function showPopup(subject, review) {
    const popupContent = `
      <h2>Thank you for your feedback!</h2>
      <button onclick="closePopup()">Close</button>
    `;
  
    const popup = document.createElement('div');
    popup.className = 'popup';
    popup.innerHTML = popupContent;
  
    document.body.appendChild(popup);
  }
  
  function closePopup() {
    const popup = document.querySelector('.popup');
    if (popup) {
      popup.remove();
    }
  }
  