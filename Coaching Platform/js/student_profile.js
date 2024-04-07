document.addEventListener('DOMContentLoaded', function() {
    const fileInput = document.getElementById('imageUpload');
    const imagePreview = document.getElementById('imagePreview');

    fileInput.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const image = new Image();
                image.src = e.target.result;
                imagePreview.innerHTML = '';
                imagePreview.appendChild(image);
            }
            reader.readAsDataURL(file);
        }
    });
});
