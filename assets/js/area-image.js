// area-image.js

// Function to remove image and container
function removeImage(element) {
  // Remove the entire container
  element.parentElement.remove();

  // Update the hidden input value
  const hiddenInput = element.parentElement.querySelector('input[type=hidden]');
  hiddenInput.value = '';


}


// Function to show the preview and hide add button
function showFile(file, dropArea, previewImage) {
  const fileType = file.type;
  const validExtensions = ['image/jpeg', 'image/jpg', 'image/png','image/webp'];
  const dragText = dropArea.querySelector('header');

  if (validExtensions.includes(fileType)) {
    const fileReader = new FileReader();
    fileReader.onload = () => {
      const fileUrl = fileReader.result;
      const imgContainer = document.createElement('div');
      imgContainer.className = 'image-container';

      // Kiểm tra số lượng ảnh để thêm lớp CSS cho container
      if (dropArea.children.length % 5 === 0) {
        dropArea.classList.add('new-row');
      }

      imgContainer.innerHTML = `<img src="${fileUrl}" class="uploaded-image img-thumbnail img-fluid img-responsive">`;

      const removeButton = document.createElement('div');
      removeButton.className = 'remove-image';
      removeButton.textContent = '-';
      removeButton.addEventListener('click', () => removeImage(removeButton));

      imgContainer.appendChild(removeButton);
      dropArea.appendChild(imgContainer);

    };
    fileReader.readAsDataURL(file);
  } else {
    alert("Đây không phải là file ảnh");
    dragText.textContent = "Kéo và Thả để Tải Ảnh lên";
  }
}

// Event listeners for images 1 area
const dropArea_1 = document.querySelector('.drag-area-1');
const button_1 = dropArea_1.querySelector('.drag-area-1 .but-add-image');
const input_1 = dropArea_1.querySelector('.drag-area-1 input');
const previewImage_1 = dropArea_1.querySelector('#anh_dai_dien_preview_img');

button_1.addEventListener('click', () => {
  input_1.click();
});

input_1.addEventListener('change', function () {
  const file = this.files[0];
  showFile(file, dropArea_1, previewImage_1);
});

dropArea_1.addEventListener('dragover', (event) => {
  event.preventDefault();
  dropArea_1.querySelector('.drag-area-1 header').textContent = "Thả để Tải Ảnh lên";
});

dropArea_1.addEventListener('dragleave', (event) => {
  event.preventDefault();
  dropArea_1.querySelector('.drag-area-1 header').textContent = "Kéo và Thả để Tải Ảnh lên";
});

dropArea_1.addEventListener('drop', (event) => {
  event.preventDefault();
  const file = event.dataTransfer.files[0];
  showFile(file, dropArea_1, previewImage_1);
});

// Event listeners for images 2 area
const dropArea_2 = document.querySelector('.drag-area-2');
const button_2 = dropArea_2.querySelector('.drag-area-2 .but-add-image');
const input_2 = dropArea_2.querySelector('.drag-area-2 input');

button_2.addEventListener('click', () => {
  input_2.click();
});

input_2.addEventListener('change', function () {
  const file = this.files[0];
  showFile(file, dropArea_2);
});

dropArea_2.addEventListener('dragover', (event) => {
  event.preventDefault();
  dropArea_2.querySelector('.drag-area-2 header').textContent = "Thả để Tải Ảnh lên";
});

dropArea_2.addEventListener('dragleave', (event) => {
  event.preventDefault();
  dropArea_2.querySelector('.drag-area-2 header').textContent = "Kéo và Thả để Tải Ảnh lên";
});

dropArea_2.addEventListener('drop', (event) => {
  event.preventDefault();
  const file = event.dataTransfer.files[0];
  showFile(file, dropArea_2);
});
