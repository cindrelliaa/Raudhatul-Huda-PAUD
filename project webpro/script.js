const slides = document.querySelectorAll(".slides img");
let currentSlideIndex = 0;

document.querySelector(".prev").addEventListener("click", slidePrev);
document.querySelector(".next").addEventListener("click", slideNext);

// Fungsi untuk menggeser slide ke kiri
function slidePrev() {
  slides[currentSlideIndex].style.display = "none";
  currentSlideIndex = (currentSlideIndex - 1 + slides.length) % slides.length;
  slides[currentSlideIndex].style.display = "block";
}

// Fungsi untuk menggeser slide ke kanan
function slideNext() {
  slides[currentSlideIndex].style.display = "none";
  currentSlideIndex = (currentSlideIndex + 1) % slides.length;
  slides[currentSlideIndex].style.display = "block";
}

let currentForm = 0;
        const forms = [document.getElementById('form-anak'), document.getElementById('form-ortu')];
        
        function nextStep() {
            if (currentForm < forms.length - 1) {
                forms[currentForm].style.display = 'none';
                currentForm++;
                forms[currentForm].style.display = 'block';
            }
        }

        function prevStep() {
            if (currentForm > 0) {
                forms[currentForm].style.display = 'none';
                currentForm--;
                forms[currentForm].style.display = 'block';
            }
        }

document.querySelector('.daftar').addEventListener('click', function() {
  alert('Tombol diklik!'); // Menampilkan alert saat tombol diklik
});