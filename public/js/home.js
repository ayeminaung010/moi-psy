

 const overLay = document.querySelector('#overLay');
 const addBtn = document.querySelector('#addBtn');
 const closeBtn = document.querySelector('#closeBtn');
 const container = document.querySelector('#container');

 const uploadFile = document.querySelector('#uploadFile');
 const fileInput = document.querySelector('#fileInput');
 const fileValue = document.querySelector('#fileValue');
 const previewImg = document.querySelector('#previewImg');

 addBtn.addEventListener('click',function(){
    overLayShow();
 })

 closeBtn.addEventListener("click",function(){
    container.classList.remove('opacity-50')
    overLay.classList.add('hidden');

 })


 const editBtn = document.querySelector("#editBtn");

 uploadFile.addEventListener('click',function(e){
    e.preventDefault();
    fileInput.click();
    fileInput.addEventListener('input',function(){
        var file = fileInput.files[0];
        fileValue.innerHTML = file.name;

        previewImg.src = URL.createObjectURL(file)
    })
 })

 editBtn.addEventListener('click',function(){
    overLayShow();
 })

 function overLayShow(){
    container.classList.add('opacity-50')
    overLay.classList.remove('hidden');
 }

 const deleteBtn = document.querySelector('#deleteBtn');

 deleteBtn.addEventListener('click',function(){
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          swal("Poof! Your imaginary file has been deleted!", {
            icon: "success",
          });
        } else {
          swal("Your imaginary file is safe!");
        }
      });
 })

