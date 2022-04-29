<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script defer src="/your-path-to-fontawesome/js/all.js"></script>
      <link rel="stylesheet" type="text/css" href="assets/efeitoHamburg.css">
</head>
<body  class="bg-dark">
      <main class="py-5">
            <section>
                  <div class="container">
                        <h2 class="text-center text-white fw-bold">
                              EFEITO HAMBURGUER
                        </h2>
                        <div class="d-flex -flex-column justify-content-center mt-5 gap-5">
                              <div class="menu">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                              </div>
                        </div>
                  </div>
            </section>
      </main>

<script>
      let burguer = document.querySelector(".menu);
      burguer.addEventListener("click", () =>
      burguer.classList.toggle("active"));
</script>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>