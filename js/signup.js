document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
  
    var form = this;
    var formData = new FormData(form);
  
    var xhr = new XMLHttpRequest();
    xhr.open('POST', './signup.php', true);
    xhr.onload = function() {
      if (xhr.status === 200) {
        alert(xhr.responseText);
        form.reset();
      } else {
        alert('Error: ' + xhr.status);
      }
    };
    xhr.send(formData);
  });
  