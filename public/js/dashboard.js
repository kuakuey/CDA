document.getElementById("eventos").addEventListener("click",
    function() {
        window.location.href = 'dashboard/eventos';
})
document.getElementById("escuelas").addEventListener("click",
    function() {
        Swal.fire({
            title: "Good!",
            text: "You clicked the button!",
            icon: "success"
          });     
})