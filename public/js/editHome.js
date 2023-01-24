const uploadFile = document.querySelector('#uploadFile');
const fileInput = document.querySelector('#fileInput');
const fileValue = document.querySelector('#fileValue');
const previewImg = document.querySelector('#previewImg');


uploadFile.addEventListener('click',function(e){
   e.preventDefault();
   fileInput.click();
   fileInput.addEventListener('input',function(){
       var file = fileInput.files[0];
       fileValue.innerHTML = file.name;

       previewImg.src = URL.createObjectURL(file)
   })
})



const aTag = document.querySelectorAll('a');
aTag.forEach((a) =>{
   a.addEventListener('click',function(){

       document.body.style.opacity = "0.8";
   })
   setTimeout(() => {
       document.body.style.transition = 'background-color 0.5s ease-in-out';

     }, 300);
})
