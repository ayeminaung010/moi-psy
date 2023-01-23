
 const overLay = document.querySelector('#overLay');
 const addBtn = document.querySelector('#addBtn');
 const closeBtn = document.querySelector('#closeBtn');
 const container = document.querySelector('#container');


 addBtn.addEventListener('click',function(){
    overLayShow();
 })

 closeBtn.addEventListener("click",function(){
    container.classList.remove('opacity-50')
    overLay.classList.add('hidden');
 })


 const editBtn = document.querySelector("#editBtn");
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

const aTag = document.querySelectorAll('a');
aTag.forEach((a) =>{
    a.addEventListener('click',function(){
        document.body.style.opacity = "0.8";
    })
    setTimeout(() => {
        document.body.style.transition = 'background-color 0.5s ease-in-out';

      }, 300);
})
