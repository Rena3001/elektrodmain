window.addEventListener("load", function () {
    const element = document.querySelector("[autoclick]");
    if (element) {
        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(element);
        toastBootstrap.show();
    }
});
