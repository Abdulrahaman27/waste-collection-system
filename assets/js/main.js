document.addEventListener('DOMContentLoaded', function(){
    // Login form submission
    const loginform = document.getElementById("loginForm");
    if(loginform){
        loginform.addEventListener('submit', function(e){
            e.preventDefault();

            const formData = new formData(loginform);
            const messageDiv = document.getElementById('loginform');
            fetch(loginform.action, {
                method : 'POST',
                body : formData
            })
            .then(response => response.json())
            .then(data => {
                if(data.success){
                    messageDiv.textContent = 'Login successful! Redirecting...';
                    messageDiv.className = 'Message Success';
                    setTimeout(()=>{
                        window.location.href = 'dashboard.php'
                    }, 1000);
                }else {
                    messageDiv.textContent = data.message || 'Login failed. Please try again.';
                    messageDiv.className = 'message error';
                }
            })
            .catch(error => {
                messageDiv.textContent = 'An error occured. Please try again.';
                messageDiv.className = 'Message error';
                console.error('Error', error);
            });
        });
    }


    // Dashboard functionality
    if(document.querySelector('.dashboard')){
        // initialize any dashboard-speicific JS
        initDashboard();
    }
});




// Functions Declaration

function initDashboard(){
    // Toggle mobile menu
    const menuToggle = document.querySelector('.menu-toggle');
    const sidebar = document.querySelector('.sidebar');

    if(menuToggle && sidebar){
        menuToggle.addEventListener('click', function(){
            sidebar.classList.toggle('active');
        });
    }


    // Date picker for schedule
    const dateInput = document.querySelectorAll('input[type="data]');
    dateInput.forEach(input => {
        if(!input.value){
            const today = new Date().toISOString().split('T')[0];
            input.value = today; 
        }
    });

    // Form validations
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e){
            let valid = true;
            const requiredFields = form.querySelectorAll('[required]');

            requiredFields.forEach(field => {
                if(!field.value.trim()){
                    valid = false;
                    field.classList.add('error');
                }else {
                    field.classList.remove('error');
                }
            });

            if(!valid){
                e.preventDefault();
                alert('Please fill in all required fields!');
            }
        })
    })
}