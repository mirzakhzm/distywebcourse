function changePassword() {
    const newPassword = document.getElementById('newPassword').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
  
    if (newPassword === confirmPassword) {
      alert('Password successfully changed!');
      // Tambahkan kode untuk mengirim data ke server di sini
    } else {
      alert('Passwords do not match!');
    }
  }
  
  function populateUserData(username, email) {
    document.getElementById('username').value = username;
    document.getElementById('email').value = email;
  }
  