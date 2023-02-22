// Get the form and the modal
const form = document.getElementById('registration-form');
const modal = document.getElementById('success-message');

// When the user submits the form
form.addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent form submission
  saveContact(); // Call function to save contact
});

// Function to save contact
function saveContact() {
  // Get form values
  const firstName = document.getElementById('first-name').value;
  const middleName = document.getElementById('middle-name').value;
  const lastName = document.getElementById('last-name').value;
  const email = document.getElementById('email').value;
  const phoneNumber = document.getElementById('phone-number').value;

  // Create contact object
  const contact = {
    firstName: firstName,
    middleName: middleName,
    lastName: lastName,
    email: email,
    phoneNumber: phoneNumber
  };

  // Save contact to local storage
  let contacts = JSON.parse(localStorage.getItem('contacts')) || [];
  contacts.push(contact);
  localStorage.setItem('contacts', JSON.stringify(contacts));

  // Show success message
  modal.style.display = 'block';

  // When the user clicks the close button
  const closeButton = document.getElementsByClassName('close-button')[0];
  closeButton.onclick = function() {
    modal.style.display = 'none'; // Hide the modal
    form.reset(); // Reset the form
  };

  // When the user clicks outside the modal
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = 'none'; // Hide the modal
      form.reset(); // Reset the form
    }
  };
}