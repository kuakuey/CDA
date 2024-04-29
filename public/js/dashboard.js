document.getElementById("cerrar").addEventListener("click",
    function() {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Cerrar Sesion"
        }).then((result) => {
            if (result.isConfirmed) {
                document.cookie = "sesion=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                // Redireccionar a la página de inicio de sesión u otra página
                window.location.href = "login";
            }
        });
})

document.getElementById("eventos").addEventListener("click",
    function() {
        Swal.fire({
            title: "Good job!",
            text: "You clicked the button!",
            icon: "success"
          });     
})
document.getElementById("escuelas").addEventListener("click",
    function() {
        Swal.fire({
            title: "Good!",
            text: "You clicked the button!",
            icon: "success"
          });     
})