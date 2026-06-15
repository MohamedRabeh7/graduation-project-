
document.addEventListener('click', function(e){
    if (e.target.classList.contains("gallery-item")) {
      const src=e.target.getAttribute("src");
      document.querySelector(".modal-img").src=src;
      const mymodal = new bootstrap.Modal(document.getElementById('gallery-modal'));
      mymodal.show();
    }
    
    
    
    
    
  })
  
  document.getElementById("myButton").addEventListener("click", function(){
    alert("تم نشر تعليقك بنجاح!");
  });
