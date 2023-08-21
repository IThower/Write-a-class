@extends('layouts.app')

@section('content')

<body>

    <section class="py-2">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="fw-bold">Game Changer na Educação</h2>
                    <p class="text-muted">A plataforma "Write a Class" é uma plataforma de aprendizado online que permite aos usuários postarem conteúdos educativos de diversas áreas do ensino, proporcionando um espaço para compartilhar informações valiosas e reunir conhecimento em um único lugar.</p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width:900px;">
                <div class="col mb-4">
                    <div><a href="#"><img class="rounded img-fluid shadow w-100 fit-cover" src="images/education.jpg" style="height:250px;"></a>
                        <div class="py-4"><span class="badge bg-warning mb-2" style="color:#090716;">Write a Class</span>
                            <h4 class="fw-bold">Objetivo</h4>
                            <p class="text-muted">A plataforma busca reunir conhecimentos valiosos em um único lugar, promovendo a democratização do conhecimento e facilitando o acesso a informações relevantes. Por tanto, o principal objetivo é estimular a aprendizagem colaborativa, incentivando a interação entre os usuários e a troca de ideias, enriquecendo assim a qualidade do conteúdo disponível, criando assim uma comunidade de aprendizado, onde pessoas com interesses comuns possam se envolver em um ambiente de colaboração e crescimento intelectual.</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div><a href="#"><img class="rounded img-fluid shadow w-100 fit-cover" src="images/fatec.jpg" style="height:250px;"></a>
                        <div class="py-4"><span class="badge bg-warning mb-2" style="color:#090716;">Projeto</span>
                            <h4 class="fw-bold">Surgimento</h4>
                            <p class="text-muted">O projeto surgiu a partir de 3 alunos que se uniram e buscaram sanar problemas educacionais presentes em diversas áreas e setores do Brasil sem custos para os alunos. Essa ideia foi crescendo e ganhando mais forma a partir de Brainstormings e reuniões ágeis que garantiram mais qualidade ao projeto, enriquecendo cada vez mais seu propósito e seu funcionamento. Posteriormente, foi decidido transformar a ideia em projeto para apresentar como Trabalho de Conclusão de Curso da faculdade FATEC Rubens Lara de Santos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container py-2" style="border-radius: 25px;margin-bottom: 50px;background-color: #090716;">
            <section id="team" class="bg-light-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="row py-5">
                                <div class="col-md-8 col-xl-6 text-center mx-auto">
                                    <p class="fw-bold text-warning mb-2" style="border-color: var(--bs-yellow);color: var(--bs-yellow);">Conheça os responsáveis pelo projeto</p>
                                    <h3 class="fw-bold">Nossa Equipe</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="team-member"><img class="rounded-circle img-fluid" src="images/profile2.png">
                                <h4>Gabriel Kalleu</h4>
                                <p class="text-muted">Front-End &amp; Back-End Developer.</p>
                                <ul class="list-inline social-buttons">
                                    <li class="list-inline-item">
                                        <div class="card-team-icons"><a href="#"><i class="fa-brands fa-twitter"></i></a></div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="card-team-icons"><a href="#"><i class="fa-brands fa-facebook"></i></a></div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="card-team-icons"><a href="#"><i class="fa-brands fa-linkedin"></i></a></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="team-member"><img class="rounded-circle img-fluid" src="images/profile.jpg">
                                <h4>Fabio Almeida</h4>
                                <p class="text-muted">UX Designer &amp; Web Designer</p>
                                <ul class="list-inline social-buttons">
                                    <li class="list-inline-item">
                                        <div class="card-team-icons"><a href="#"><i class="fa-brands fa-twitter"></i></a></div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="card-team-icons"><a href="#"><i class="fa-brands fa-facebook"></i></a></div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="card-team-icons"><a href="#"><i class="fa-brands fa-linkedin"></i></a></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 text-center">
                            <p class="text-muted large">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</body>
</html>
@endsection