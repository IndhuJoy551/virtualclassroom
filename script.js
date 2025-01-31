document.querySelector("select[name='lang']").addEventListener("change", function() {
    fetch("set_language.php", {
        method: "POST",
        body: new URLSearchParams({ lang: this.value })
    }).then(() => location.reload());
});
