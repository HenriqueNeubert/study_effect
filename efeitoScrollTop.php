<!DOCTYPE html>
<html lang="en"> 
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body  class="bg-dark">
      <main class="py-5">
            <section>
                  <div class="container">
                        <h2 class="text-center text-white fw-bold">
                              EFEITO SCROLL TOP
                        </h2>
                        <div class="d-flex flex-column justify-content-center mt-5">
                              <?php for($i = 0; $i < 10; $i++ ){ ?>
                                    <div class="text-white w-50 mx-auto mb-1" style="text-align: justify;">
                                          <p>
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum quasi de
                                                bitis error animi provident ipsum totam architecto sit voluptates nemo ab
                                                excepturi consequatur, aliquam nihil pariatur dolore cum, reprehenderit s
                                                uscipit.
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum quasi de
                                                bitis error animi provident ipsum totam architecto sit voluptates nemo ab
                                                excepturi consequatur, aliquam nihil pariatur dolore cum, reprehenderit s
                                                uscipit.
                                          </p>
                                    </div>
                              <?php } ?>
                              <button class="btn btn-primary align-self-center" id="clickTop">
                                    Voltar ao Topo
                              </button>
                        </div>
                  </div>
            </section>
      </main>
</body>
<script>

      var btn = document.querySelector('#clickTop');
      btn.addEventListener("click", function(){
            window.scrollTo({
                  top: 0,
                  behavior: 'smooth'
            });
      })

</script>
<link src="./assets/efeitoScrollTop.js">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>