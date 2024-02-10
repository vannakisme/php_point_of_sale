<style>
    .pointer {
        cursor: pointer;
    }

    .addimage {
        width: 190px;
        height: 210px;

    }

    .addimage>img {
        width: 100%;
        height: 100%;
        object-fit: cover;

    }

    .listimage {
        width: 40px;
        height: 45px;
    }

    .listimage>img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .proimage {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        overflow: hidden;
    }

    .proimage>img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .iconhover:hover {
        background-color: azure;
    }

    .w-120 {
        width: 90px;
        padding: 3px;
        border-radius: 40px;
    }

    .fonticon {
        background-color: var(--silver-c);
        padding: 5px;
        border-radius: 50%;
        cursor: pointer;
    }

    .conimage {
        width: 190px;
        height: 195px;
        overflow: hidden;
    }

    .conimage>img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    var myprint = document.querySelector(".myprint");
    myprint.addEventListener("click", function() {
        window.addEventListener("load", window.print());
    })
</script>